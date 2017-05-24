<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MasterareaController extends Controller
{
    public function index()
    {
    	return view('master/masterarea');
    }
}
