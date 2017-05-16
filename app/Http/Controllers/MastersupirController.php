<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MastersupirController extends Controller
{
    public function index()
    {
    	return view('master/mastersupir');
    }
}
