<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PosSeeder extends Seeder
{
    public function run(): void
    {
        $customers = [
            [
                'full_name' => 'Maria Santos',
                'email' => 'maria.santos@example.com',
                'phone' => '0917-111-2233',
            ],
            [
                'full_name' => 'Juan Dela Cruz',
                'email' => 'juan.delacruz@example.com',
                'phone' => '0918-222-3344',
            ],
            [
                'full_name' => 'Ana Reyes',
                'email' => 'ana.reyes@example.com',
                'phone' => '0919-333-4455',
            ],
            [
                'full_name' => 'Pedro Garcia',
                'email' => 'pedro.garcia@example.com',
                'phone' => '0920-444-5566',
            ],
            [
                'full_name' => 'Liza Mendoza',
                'email' => 'liza.mendoza@example.com',
                'phone' => '0921-555-6677',
            ],
        ];

        foreach ($customers as $customer) {
            Customer::firstOrCreate(
                ['email' => $customer['email']],
                $customer
            );
        }

        $users = [
            [
                'username' => 'glenber.admin',
                'full_name' => 'Glenber Admin',
                'email' => 'admin@example.com',
            ],
            [
                'username' => 'carla.bautista',
                'full_name' => 'Carla Bautista',
                'email' => 'carla@example.com',
            ],
            [
                'username' => 'miguel.torres',
                'full_name' => 'Miguel Torres',
                'email' => 'miguel@example.com',
            ],
            [
                'username' => 'sofia.ramos',
                'full_name' => 'Sofia Ramos',
                'email' => 'sofia@example.com',
            ],
            [
                'username' => 'paolo.villanueva',
                'full_name' => 'Paolo Villanueva',
                'email' => 'paolo@example.com',
            ],
        ];

        foreach ($users as $user) {
            $user['password'] = Hash::make('PosDemo2026!');

            User::firstOrCreate(
                ['email' => $user['email']],
                $user
            );
        }
    }
}