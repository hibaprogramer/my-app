<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;
    
    protected $fillable = ['fin_id','cont_date','cont_num','full_amnt_cont','cont_end_date',
        'excut_comp'];

    public function finance(){
        return $this->belongsTo(Finance::class,'fin_id','id');
    }
    
    public function company(){
        return $this->belongsTo(Company::class,'excut_comp','comp_id');
    }
}