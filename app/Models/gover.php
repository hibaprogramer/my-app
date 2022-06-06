<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gover extends Model
{
    use HasFactory;
    
    protected $fillable = [
    'gove_id','gov_name'    ];



   /*  public function govers()
    {
        return $this->hasMany(User::class,'id');
    }
} */
}