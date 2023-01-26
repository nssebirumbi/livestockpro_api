<?php

namespace Database\Factories;

use App\Models\Farm;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $type = $this->faker->randomElement(['R', 'P', 'C', 'G']);
        return [
            'name'=>$this->faker->company(),
            'type'=>$type,
            'farm_id'=>Farm::factory()
        ];
    }
}
