<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    
    public function classs()
    {
        return $this->belongsTo('App\Models\Classs');
    }

    public function performs()
    {
        return $this->hasMany('App\Models\Perform');
    }
}
