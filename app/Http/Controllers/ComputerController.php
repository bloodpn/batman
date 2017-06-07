<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\Models\Computer;
use App\Models\Counter;

class ComputerController extends Controller
{
    public function index()
    {
    	$computers = Computer::all();
    	$counters = Counter::all();
    	return view('master/masterkomputer', ['computer' => $computers], ['counter' => $counters]);
    }
    public function store(Request $request)
    {

    	$computers = new Computer;
    	$computers->name = $request->name;
    	$computers->mac_address = $request->mac_address;
    	$computers->id_counter = $request->counter;
    	$computers->stat = 'aktif';
    	$computers->save();

    	$computers = Computer::all();
    	$counters = Counter::all();
    	return view('master/masterkomputer', ['computer' => $computers], ['counter' => $counters]);

    }
}
