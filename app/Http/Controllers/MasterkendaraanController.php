<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Driver;

class MasterkendaraanController extends Controller
{
   public function index()
    {
    	$cars = Car::all();
    	$drivers = Driver::all();
    	return view('master/masterkendaraan', ['cars' => $cars, 'drivers' => $drivers]);
    }
    public function store(Request $request)
    {
    	// dd($request);
    	$cars = new Car;
    	$cars->no_body = $request->no_body;
    	$cars->id_driver = $request->pengemudi;
    	$cars->plat_number = $request->plat_number;
    	$cars->warna = $request->warna;
    	$cars->merk = $request->merk;
    	$cars->tahun_kendaraan = $request->tahun;
    	$cars->save();

    	$cars = Car::all();
    	$drivers = Driver::all();
    	return view('master/masterkendaraan', ['cars' => $cars, 'drivers' =>$drivers]);
    }


    // public function store(Request $request)
    // {

    // }
}
