<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $guarded = [];

    public function origin()
    {	
    	return $this->belongsTo('App\Models\Counter' , 'id_destination');
    }

    public function destination()
    {	
    	return $this->belongsTo('App\Models\Counter' , 'id_destination');
    }
}
