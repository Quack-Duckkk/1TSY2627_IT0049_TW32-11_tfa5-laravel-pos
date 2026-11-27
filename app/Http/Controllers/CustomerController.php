<?php

namespace App\Http\Controllers;

use App\Models\Customer;

class CustomerController extends Controller
{
    // Customer Accounts page (/customers)
    public function index()
    {
        $customers = Customer::orderBy('id')->get();

        return view('customers', ['customers' => $customers]);
    }
}