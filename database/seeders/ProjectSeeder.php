<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::factory()
            ->count(2)
            ->forFarm(5)
            ->hasSettings(10)
            ->hasStages(4)
            ->hasStatuses(6)
            ->hasEvents(3)
            ->hasCages(30)
            ->hasAnimals(10)
            ->create();
    }
}
