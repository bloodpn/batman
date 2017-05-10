<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SatuController extends Controller
{
   public function index()
   {
   	return view('/contoh');
   }
   
   public function show($id)
   {
   	return $id;
   }
}
