<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\Models\Jadwal;
use App\Models\Car;
use App\Models\Counter;
use App\Models\Price;

class ScheduleController extends Controller
{
    public function index()
    {
    	$jadwals = Jadwal::all();
    	$cars = Car::all();
    	$counters = Counter::all();
        $prices = Price::all();
    	return view('master/masterjadwal', ['jadwal' => $jadwals, 'car' => $cars, 'counter' => $counters, 'price' => $prices]);
    }
    public function store(Request $request)
    {
        // dd($request);
		// $jadwal= Jadwal::create($request->all());
		// return response()->json($jadwal);
        $data = new Jadwal;
        // dd($request->car);
        $data->id_car = $request->car;
        $data->id_origin = $request->asal;
        $data->id_destination = $request->tujuan;
        $data->schedule_type = $request->tipe_jadwal;
        $data->id_price = $request->price;
        $data-> save();
        return back()->with('Jadwal Telah Berhasil Ditambahkan.');
    }
}
