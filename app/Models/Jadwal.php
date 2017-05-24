<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'schedule';

    public function car()
    {
        return $this->belongsTo('App\Models\Car', 'id_car');
    }
    public function origin()
    {	
    	return $this->belongsTo('App\Models\Counter' , 'id', 'id_origin');
    }
    public function destination()
    {	
    	return $this->belongsTo('App\Models\Counter' , 'id', 'id_destination');
    }
    public function price()
    {	
    	return $this->belongsTo('App\Models\Price' ,'id', 'id_price');
    }
}
