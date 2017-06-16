<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
	protected $table = 'counters';
    public $timestamps = false;

    public function computer()
	{
		return $this->hasMany('App\Models\Counter', 'id');
	}
    
    public function routes()
    {
        return $this->hasMany('App\Models\Route');

    }
}
