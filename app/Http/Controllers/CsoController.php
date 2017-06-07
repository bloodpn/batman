<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use App\Models\Car;
use App\Models\Counter;
use App\Models\ROute;

class CsoController extends Controller
{
    public function index()
    {
    	$schedules = Schedule::all();
    	$counters = Counter::all();
    	return view('pages/cso_reservasi', ['jadwal' => $schedules, 'counter' => $counters]);
    }
    public function search(Request $request)
    {
        
    	$data = Route::select('id_destination','counters.name')
        ->join('counters', 'routes.id_destination', '=', 'counters.id')
        ->where('id_origin','=',$request->id)
        ->where('routes.stat','aktif')
        ->get();

    	return response()->json($data);
    }
}
