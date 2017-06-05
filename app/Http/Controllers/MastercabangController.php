<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\Models\Counter;

class MastercabangController extends Controller
{
    public function index()
    {
    	$counters = Counter::all();
    	return view('master/mastercabang', ['counter' => $counters]);
    }


    public function store(Request $request)
    {
    	// dd($request);
    	$counters = new Counter;

    	$counters->kd_counters = $request->kd_cabang;
    	$counters->name = $request->nama_cabang;
    	$counters->address = $request->alamat;
    	$counters->city = $request->kota;
    	$counters->phone = $request->telp_cabang;
    	$counters->type = $request->tipe_cabang;
    	$counters->save();

    	$counters = Counter::all();
    	return view('master/mastercabang', ['counter' => $counters]);
    }
}
