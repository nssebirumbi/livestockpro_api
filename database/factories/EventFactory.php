<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'description'=>$this->faker->text(),
            'start_date' => $this->faker->dateTimeThisDecade(),
            'end_date'=>$this->faker->dateTimeThisDecade(),
            'doer'=>$this->faker->name(),
            'project_id'=>Project::factory()
        ];
    }
}
