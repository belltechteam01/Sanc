<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classs extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'grade_id'
    ];

    public function grade()
    {
        return $this->belongsTo('App\Models\Grade');
    }

    public function students()
    {
        return $this->hasMany('App\Models\Student');
    }
}
