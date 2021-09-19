<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'school_id'
    ];

    public function school()
    {
        return $this->belongsTo('App\Models\School');
    }

    public function classses()
    {
        return $this->hasMany('App\Models\Classs');
    }
}
