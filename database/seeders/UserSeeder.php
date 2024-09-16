<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Create an admin user
        User::create([
            'username' => 'admin',
            'email' => 'admin07@example.com',
            'password' => Hash::make('123456'),
            'role' => 'admin',
        ]);
}
}
