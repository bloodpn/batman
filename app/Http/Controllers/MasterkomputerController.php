<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MasterkomputerController extends Controller
{
    public function index()
    {
    	return view('master/masterkomputer');
    }
}