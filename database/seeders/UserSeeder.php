<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder {
    public function run() {
        $users = [
            [
                'name' => 'Admin',
                'username' => 'admininventasris',
                'password' => Hash::make('password123'),
                'is_admin' => true,
            ],
            [
                'name' => 'User',
                'username' => 'user',
                'password' => Hash::make('password123'),
                'is_admin' => false,
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
