<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Animal;
use App\Models\Client;
use App\Models\Farm;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        

        $this->call([
            RoleSeeder::class
        ]);
        

        User::create([
            'name' => 'nicholaws',
            'email' => 'nicholaws2@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ])->assignRole('owner', 'worker');

        Client::factory(3)->has(
            Farm::factory()->has(
                Project::factory()->has(
                    Animal::factory()->count(4)
                )->count(2)
            )->count(1)
        )->create();
    }
}
