<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'district_id'
    ];

    public function district()
    {
        return $this->belongsTo('App\Models\District');
    }

    public function grades()
    {
        return $this->hasMany('App\Models\Grade');
    }
}
