<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gover extends Model
{
    use HasFactory;
    protected $fillable = ['Gname'];

   /*  public function govers()
    {
        return $this->hasMany(User::class,'id');
    }
} */
}