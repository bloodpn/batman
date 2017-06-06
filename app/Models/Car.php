<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
	protected $table = 'cars';

    public function Jadwal()
    {
        return $this->hasMany('App/Models/Jadwal', 'id_schedule');
    }
    public function driver()
    {
    	return $this->belongsTo('App\Models\Driver', 'id');
    }
    public function seat()
    {
    	return $this->belongsTo('App\Models\Seat', 'id');
    }
}
