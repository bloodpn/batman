<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatapenumpangController extends Controller
{
    public function index()
    {
    	return view('customer/datapenumpang');
    }
}
