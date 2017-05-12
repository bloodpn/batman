<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MasterjadwalController extends Controller
{
    public function index()
    {
    	return view('customer/masterjadwal');
    }
}
