<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Animal;
use App\Models\Client;
use App\Models\Farm;
use App\Models\Project;
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

        // $this->call([
        //     // ClientSeeder::class,
        //     // ProjectSeeder::class,
        //     FarmSeeder::class,
        //     // ProjectSeeder::class
        // ]);

        Client::factory(3)->has(
            Farm::factory()->has(
                Project::factory()->has(
                    Animal::factory()->count(5)
                )->count(2)
            )->count(1)
        )->create();
    }
}
