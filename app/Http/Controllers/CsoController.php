<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\Models\Jadwal;
use App\Models\Car;
use App\Models\Counter;

class CsoController extends Controller
{
    public function index()
    {
    	$jadwals = Jadwal::all();
    	$counters = Counter::all();
    	return view('pages/cso_reservasi', ['jadwal' => $jadwals, 'counter' => $counters]);
    }
    public function search(Request $request)
    {
        
    	$data = Jadwal::select()
        ->join('counters', 'schedule.id_destination', '=', 'counters.id')
        ->where('id_origin','=',$request->id)
        ->get();

    	return response()->json($data);
    }
}
