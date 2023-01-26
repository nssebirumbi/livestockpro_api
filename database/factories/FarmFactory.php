<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Farm>
 */
class FarmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'city' => $this->faker->city(),
            'address' => $this->faker->address(),
            'email' => $this->faker->companyEmail(),
            'contact' => $this->faker->phoneNumber(),
            'website' => $this->faker->domainName(),
            'zip' => $this->faker->postcode(),
            'country' => $this->faker->country(),
            'logo' => $this->faker->filePath(),
            'client_id' => Client::factory()
        ];
    }
}
