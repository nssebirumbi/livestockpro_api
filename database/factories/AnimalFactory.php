<?php

namespace Database\Factories;

use App\Models\Cage;
use App\Models\Project;
use App\Models\Stage;
use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Animal>
 */
class AnimalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->firstName(),
            'tattoo'=>$this->faker->randomNumber(),
            'dob'=>$this->faker->dateTimeThisDecade(),
            'color'=>$this->faker->colorName(),
            'source_name'=>$this->faker->company(),
            'source_contact'=>$this->faker->phoneNumber(),
            'sire'=>$this->faker->randomNumber(),
            'dam'=>$this->faker->randomNumber(),
            'breed'=>$this->faker->colorName(),
            'legs'=>$this->faker->randomNumber(),
            'sex'=>$this->faker->randomElement(['M','F']),
            'entry_date'=>$this->faker->dateTimeThisDecade(),
            'project_id'=>Project::factory(),
            'stage_id'=>Stage::factory(),
            'status_id'=>Status::factory(),
            'cage_id'=>Cage::factory()
        ];
    }
}
