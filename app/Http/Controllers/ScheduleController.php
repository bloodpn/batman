<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use App\Models\Car;
use App\Models\Counter;
use App\Models\Price;
use App\Models\Route;
use App\Models\Seat;

class ScheduleController extends Controller
{
    public function index()
    {
    	// $Schedules = Schedule::all();
        $cars       = Car::all();
        $counters   = Counter::all();
        $routes     = Route::all();
        $seats      = Seat::all();

    	$datas  = Schedule::select('schedules.id','code_schedule','kd_route','time', 'seat.name','schedules.stats','via')
                ->join('routes', 'schedule.id_route', '=', 'routes.id')
                ->join('counters', 'routes.id_origin', '=', 'counters.id')
                ->join('seat', 'schedule.id_seat', '=', 'seat.id')
                ->get();
        
        return view('master/masterjadwal', ['data_' => $datas, 'car' => $cars, 'counter' => $counters, 'route' => $routes, 'seat' => $seats]);
    }

    public function edit(Request $request)
    {
        $data_jadwal = schedule::select()
                    ->where('schedule.id','=',$request->id)
                    ->get();
        return response()->json($data_jadwal);
    }

    public function update(Request $request)
    {
        //
    }

    public function store(Request $request)
    {
        // dd($request);
		// $jadwal= Jadwal::create($request->all());
		// return response()->json($jadwal);
        $data = new Schedule;
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
