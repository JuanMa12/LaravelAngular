<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

	protected $fillable = array('id', 'name', 'email','password');

}