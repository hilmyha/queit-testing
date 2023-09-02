<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Departement;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            RoleSeeder::class,
            AdminSeeder::class,
        ]);

        Departement::create([
            'name' => 'Design',
            'description' => 'Design departement',
            'status' => false,
        ]);
        Departement::create([
            'name' => 'Printing',
            'description' => 'Printing departement',
            'status' => true,
        ]);
    }
}
