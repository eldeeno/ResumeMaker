<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $fillable = ['firstname', 'lastname', 'email', 'phone', 'address', 'summary'];
}
