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

    public function edit($id)
    {
        $drivers = Driver::find($id);
        return view('master/editmastersupir', [ 'driver' => $drivers ]);
    }

    public function update(Request $request,$id)
    {
        $drivers = Driver::find($id);
        $drivers->name = $request->nama_supir;
        $drivers->phone = $request->tlp_supir;
        $drivers->address = $request->alamat;
        $drivers->kode = $request->kd_supir;
        $drivers->license = $request->no_sim;
        $drivers->save();

        $drivers = Driver::all();
        return view('master/mastersupir', [ 'driver' => $drivers ]);
    }

    public function store(Request $request)
    {
    	$drivers = new Driver;

    	$drivers->name = $request->nama_supir;
    	$drivers->phone = $request->tlp_supir;
    	$drivers->address = $request->alamat;
    	$drivers->kode = $request->kd_supir;
    	$drivers->license = $request->no_sim;
    	$drivers->stat = 'aktif';
    	$drivers->save();
    	
    	$drivers = Driver::all();
    	return view('master/mastersupir', ['driver' => $drivers]);

    }
}
