<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable = ['name_user', 'lastname_user', 'email_user', 'password_user'];
}
