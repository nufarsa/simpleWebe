<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //starts here	
	protected $fillable = ['emp_name', 'emp_age'];
}
