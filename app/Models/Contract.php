<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;
    
    protected $fillable = ['fin_id','benifit_comp','cont_date','cont_num','full_amnt_cont','cont_subj','cont_end_date','finn_type',
        'excut_comp','excut_comp_rel','pay_condition','percentage','dscr'];

    public function finance(){
        return $this->belongsTo(Finance::class,'fin_id','id');
    }
}