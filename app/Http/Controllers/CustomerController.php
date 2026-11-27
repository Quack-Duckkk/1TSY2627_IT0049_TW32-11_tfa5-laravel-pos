<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    // Customer Accounts page (/customers)
    public function index()
    {
        // Static array = temporary data source (we'll swap in a database later)
        $customers = [
            ['id' => 1, 'name' => 'Maria Santos',   'email' => 'maria.santos@example.com',   'phone' => '0917-111-2233', 'city' => 'Quezon City'],
            ['id' => 2, 'name' => 'Juan Dela Cruz', 'email' => 'juan.delacruz@example.com',  'phone' => '0918-222-3344', 'city' => 'Manila'],
            ['id' => 3, 'name' => 'Ana Reyes',      'email' => 'ana.reyes@example.com',      'phone' => '0919-333-4455', 'city' => 'Makati'],
            ['id' => 4, 'name' => 'Pedro Garcia',   'email' => 'pedro.garcia@example.com',   'phone' => '0920-444-5566', 'city' => 'Pasig'],
            ['id' => 5, 'name' => 'Liza Mendoza',   'email' => 'liza.mendoza@example.com',   'phone' => '0921-555-6677', 'city' => 'Taguig'],
        ];

        return view('customers', ['customers' => $customers]);
    }
}