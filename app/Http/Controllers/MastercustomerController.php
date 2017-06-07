<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MastercustomerController extends Controller
{
   public function index()
    {
    	return view('master/mastercustomer');
    }
}