<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use App\Models\Car;
use App\Models\Counter;
use App\Models\Route;
use App\Models\Departure;

class PaketController extends Controller
{
    public function index()
    {
    	$schedules = Schedule::all();
    	$counters = Counter::all();
    	return view('package/paket2', ['jadwal' => $schedules, 'counter' => $counters]);
    }
    public function search_destination_package(Request $request)
    {
        $datas = Counter::select()
        ->join('routes', 'counters.id', '=', 'routes.id_destination')
        ->where('routes.id_origin','=',$request->id)
        ->get();

        return response()->json($datas);
    }	
}
