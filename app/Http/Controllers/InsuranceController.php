<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\Models\Insurance;

class InsuranceController extends Controller
{
    public function index()
    {
    	$insurance = Insurance::all();
    	return view('master/masterasuransi', ['insurance' => $insurance]);
    }
    public function store(Request $request)
    {
    	$insurance = new Insurance;
    	$insurance->name = $request->name;
    	$insurance->premi = $request->premi;
    	$insurance->description = $request->description;
    	$insurance->save();

    	$insurance = Insurance::all();
    	return view('master/masterasuransi', ['insurance' => $insurance]);
    }
    public function edit($id)
    {
    	$insurance = Insurance::find($id);
    	return view('master/editmasterasuransi', ['insurance' => $insurance]);
    }
    public function update(Request $request,$id)
    {
    	$insurance = Insurance::find($id);
    	$insurance->name = $request->name;
    	$insurance->premi = $request->premi;
    	$insurance->description = $request->description;
    	$insurance->save();

    	$insurance = Insurance::all();
    	return view('master/masterasuransi', ['insurance' => $insurance]);
    }
}
