<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CsoController extends Controller
{
    public function index()
    {
    	return view('pages/cso_reservasi');
    }
}
