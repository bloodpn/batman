<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\Models\Driver;

class MastersupirController extends Controller
{
    public function index()
    {
    	$drivers = Driver::all();
    	return view('master/mastersupir', ['driver' => $drivers ]);
    }
}
