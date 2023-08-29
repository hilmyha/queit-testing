<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'admin',
            'name' => 'Administrator',
            'email' => 'admin@queit.com',
            'password' => bcrypt('admin123'),
        ])->assignRole('admin', 'agent', 'user');
        
        User::create([
            'username' => 'haidar',
            'name' => 'Hilmy Ahmad Haidar',
            'email' => 'haidar@queit.com',
            'password' => bcrypt('admin123'),
        ])->assignRole('user');
    }
}
