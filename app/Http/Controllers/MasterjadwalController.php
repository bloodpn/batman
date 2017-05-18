<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\Models\Jadwal;

class MasterjadwalController extends Controller
{
    public function index()
    {
    	$jadwals = Jadwal::all();
    	dd($jadwals);

    	return view('master/masterjadwal');
    }
}
