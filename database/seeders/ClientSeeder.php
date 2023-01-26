<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::factory()
            ->count(20)
            ->hasFarms(1)
            // ->hasProjects(10)
            // ->hasSettings(10)
            // ->hasStages(4)
            // ->hasStatuses(6)
            // ->hasEvents(3)
            // ->hasCages(30)
            // ->hasAnimals(10)
            ->create();
            // // ->hasProjects(2)
                
            //         ->hasSettings(20)
            //         ->hasStages(7)
            //         ->hasStatuses(10)
            //         ->hasCages(20)
            //             ->hasAnimals(20)
            // ->create();
    }
}
