<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\Models\Area;

class MasterareaController extends Controller
{
    public function index()
    {
    	$area = Area::all();
    	return view('master/masterarea', ['area' => $area]);
    }
    public function store(Request $request)
    {
    	$area = new Area;
    	$area->kode = $request->kode;
    	$area->name = $request->name;
    	$area->save();

    	$area = Area::all();
    	return view('master/masterarea', ['area' => $area]);
    }
    public function edit($id)
    {
    	$area = Area::find($id);
    	return view('master/editmasterarea', ['area' => $area]);
    }
    public function update(Request $request,$id)
    {
    	$area = Area::find($id);
    	$area->kode = $request->kode;
    	$area->name = $request->name;
    	$area->save();

    	$area = Area::all();
    	return view('master/masterarea', ['area' => $area]);
    }
}
