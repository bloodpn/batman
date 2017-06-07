<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    public $timestamp = false;

    public function counters()
    {
        return $this->belongsTo('App\Models\Counter');
    }
}
