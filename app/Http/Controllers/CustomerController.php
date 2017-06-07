<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
    	$customers = Customer::all();
    	return view('master/mastercustomer', ['customer' => $customers]);
    }
    public function store(Request $request)
    {
    	$customers = new Customer;
    	$customers->name = $request->name;
    	$customers->address = $request->address;
    	$customers->phone = $request->phone;
    	$customers->customer_type = $request->customer_type;
    	$customers->join_date = $request->join_date;
    	$customers->expired = $request->expired;
    	$customers->save();

    	$customers = Customer::all();
    	return view('master/mastercustomer', ['customer' => $customers]);
    }
    public function edit($id)
    {
    	$customers = Customer::find($id);
    	return view('master/editmastercustomer', ['customer' => $customers]);
    }
}
