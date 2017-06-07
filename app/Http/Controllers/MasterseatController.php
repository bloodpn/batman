<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\Models\Seat;

class MasterseatController extends Controller
{
    public function index()
    {
    	$seat = Seat::all();
    	return view('master/masterseat',['seat' => $seat] );
    }

    public function store(Request $request)
    {
    	$seat = new Seat;
    	$seat->name = $request->name;
    	$seat->jumlah = $request->jumlah;
    	$seat->save();

    	$seat = Seat::all();
    	return view('master/masterseat',['seat' => $seat]);
    }

    public function edit($id)
    {

    	$seat = Seat::find($id);
    	return view('master/editmasterseat', ['seat' => $seat]);
    }

    public function update(Request $request,$id)
    {
    	$seat = Seat::find($id);
    	$seat->name = $request->name;
    	$seat->jumlah = $request->jumlah;
    	$seat->save();

    	$seat = Seat::all();
    	return view('master/masterseat',['seat' => $seat]);
    }
}
