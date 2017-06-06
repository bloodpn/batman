<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Driver;
use App\Models\Seat;

class MasterkendaraanController extends Controller
{
   public function index()
    {
    	$cars = Car::all();
        $seat = Seat::all();
    	$drivers = Driver::all();
        // dd($cars,$seat,$drivers);
    	return view('master/masterkendaraan', ['cars' => $cars, 'drivers' => $drivers, 'seat' => $seat]);
    }
    public function store(Request $request)
    {
    	// dd($request);
    	$cars = new Car;
    	$cars->no_body = $request->no_body;
    	$cars->id_driver = $request->pengemudi;
        $cars->id_seat = $request->seat;
    	$cars->plat_number = $request->plat_number;
    	$cars->warna = $request->warna;
    	$cars->merk = $request->merk;
    	$cars->tahun = $request->tahun;
    	$cars->save();

    	$cars = Car::all();
        $seat = Seat::all();
    	$drivers = Driver::all();
    	return view('master/masterkendaraan', ['cars' => $cars, 'drivers' =>$drivers, 'seat' =>$seat]);
    }
    public function edit($id)
    {
        $cars = Car::find($id);
        $seat = Seat::all();
        $drivers = Driver::all();
        return view('master/editmasterkendaraan', ['cars' =>$cars, 'seat' =>$seat, 'drivers' =>$drivers]);
    }
    public function update(Request $request,$id)
    {
        $cars = Car::find($id);
        $cars->no_body = $request->no_body;
        $cars->id_driver = $request->pengemudi;
        $cars->id_seat = $request->seat;
        $cars->plat_number = $request->plat_number;
        $cars->warna = $request->warna;
        $cars->merk = $request->merk;
        $cars->tahun = $request->tahun;
        $cars->save();

        $cars = Car::all();
        $seat = Seat::all();
        $drivers = Driver::all();
        return view('master/masterkendaraan', ['cars' => $cars, 'drivers' =>$drivers, 'seat' =>$seat]);
    }

}
