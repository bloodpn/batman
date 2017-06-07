<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    public $timestamp = false;
    protected $guarded = [];

    public function counters()
    {
        return $this->belongsTo('App\Models\Counter');
    }

    public function origin()
    {
    	return $this->belongsTo('App\Models\Counter' , 'id_destination');
    }

    public function destination()
    {
    	return $this->belongsTo('App\Models\Counter' , 'id_destination');
    }
}
