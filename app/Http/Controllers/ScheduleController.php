<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\Models\Jadwal;
use App\Models\Car;
use App\Models\Counter;

class ScheduleController extends Controller
{
    public function index()
    {
    	$jadwals = Jadwal::all();
    	$cars = Car::all();
    	$counters = Counter::all();
    	return view('master/masterjadwal', ['jadwal' => $jadwals, 'car' => $cars, 'counter' => $counters]);
    }
    public function insert()
    {
    	
    }
}
