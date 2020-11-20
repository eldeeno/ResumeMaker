<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = ['school_name', 'school_location', 'field', 'qualification', 'started_at', 'graduated_at'];
}
