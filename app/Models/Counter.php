<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
	protected $table = 'counters';
    public $timestamp = false;
    public function Jadwal()
    {
        return $this->hasMany('App/Models/Jadwal');

    }
}
