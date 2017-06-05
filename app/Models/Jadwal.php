<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'schedule';
    protected $guarded = [];

    public function car()
    {
        return $this->belongsTo('App\Models\Car', 'id_car');
    }
    public function route()
    {	
    	return $this->hasMany('App\Models\Counter' ,'id_origin' ,'id');
    }
    
    // public function price()
    // {	
    // 	return $this->belongsTo('App\Models\Price' ,'id_price');
    // }
}
