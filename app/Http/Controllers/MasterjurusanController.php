<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Jadwal;

class MasterjurusanController extends Controller
{
    public function index()
    {
    	$jadwals = Jadwal::all();
    	return view('master/masterjurusan');
    }
}
