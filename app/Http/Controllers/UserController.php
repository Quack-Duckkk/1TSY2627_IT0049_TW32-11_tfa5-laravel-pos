<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    // User Accounts page (/users)
    public function index()
    {
        // Static array = temporary data source (we'll swap in a database later)
        $users = [
            ['id' => 1, 'name' => 'Glenber Admin',  'email' => 'admin@example.com',   'role' => 'Administrator', 'status' => 'Active'],
            ['id' => 2, 'name' => 'Carla Bautista', 'email' => 'carla@example.com',   'role' => 'Cashier',       'status' => 'Active'],
            ['id' => 3, 'name' => 'Miguel Torres',  'email' => 'miguel@example.com',  'role' => 'Cashier',       'status' => 'Active'],
            ['id' => 4, 'name' => 'Sofia Ramos',    'email' => 'sofia@example.com',   'role' => 'Manager',       'status' => 'Active'],
            ['id' => 5, 'name' => 'Paolo Villanueva', 'email' => 'paolo@example.com', 'role' => 'Cashier',       'status' => 'Inactive'],
        ];

        return view('users', ['users' => $users]);
    }
}