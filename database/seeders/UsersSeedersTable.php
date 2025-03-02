<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeedersTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'App Admin',
            'email' => 'app_admin@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'Event Admin',
            'email' => 'event_admin@example.com',
            'password' => Hash::make('password'),
            'role' => 'event_admin',
        ]);
        User::create([
            'name' => 'S M Helal',
            'email' => 'smhelal@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'user',
        ]);
        User::create([
            'name' => 'User 02',
            'email' => 'user02@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'user',
        ]);
        User::create([
            'name' => 'S M Akash',
            'email' => 'smakash@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'user',
        ]);
        User::create([
            'name' => 'User 03',
            'email' => 'user03@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'user',
        ]);
        User::create([
            'name' => 'S M Akash2',
            'email' => 'smakash2@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'user',
        ]);
    }
}
