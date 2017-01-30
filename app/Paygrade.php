<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paygrade extends Model
{
    
	public function salarys()
    {
        return $this->hasMany('App\Salary');
    }

    public $timestamps = false;
}
