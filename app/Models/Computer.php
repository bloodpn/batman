<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
	protected $table = 'computers';

	public function counter()
	{
		return $this->hasMany('App\Models\Counter', 'id');
	}
    
}
