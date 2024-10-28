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
        // Update the user if it exists, or create it if it doesn't
        User::updateOrCreate(
            ['username' => 'admin'], // Find the user with this username
            [
                'email' => 'admin07@gmail.com', // Change the email
                'password' => Hash::make('123456'),
                'role' => 'admin',
            ]
        );
    }
}
