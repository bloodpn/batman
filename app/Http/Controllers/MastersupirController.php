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
    public function store(Request $request)
    {
    	$drivers = new Driver;

    	$drivers->name = $request->nama_supir;
    	$drivers->phone = $request->tlp_supir;
    	$drivers->address = $request->alamat;
    	$drivers->kd_driver = $request->kd_supir;
    	$drivers->card_number = $request->no_sim;
    	$drivers->status = 'Aktif';
    	$drivers->save();
    	
    	$drivers = Driver::all();
    	return view('master/mastersupir', ['driver' => $drivers]);

    }
}
