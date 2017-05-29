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
}
