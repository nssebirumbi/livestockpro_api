<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Farm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FarmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Farm::factory()
        ->count(3)
        ->hasClients(3, [
            'is_admin' => true,
        ])
        ->hasProjects(1)
        // ->forClient(10)
        // ->hasProjects(3)
        // ->hasSettings(5)
        // ->hasStages(4)
        // ->hasStatuses(4)
        // ->hasEvents(3)
        // ->hasCages(10)
        // ->hasAnimals(10)
        ->create();

        Farm::factory()
        ->count(3)
        ->hasClients(1, [
            'is_admin' => true,
            'is_admin' => false
        ])
        ->hasProjects(2)
        ->create();
    }
}
