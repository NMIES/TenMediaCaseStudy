<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Schema\ForeignKeyDefinition;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'company_id' => Company::all()->random()->id,
            'description' => fake()->sentence(30),
            'startDate' => fake()->date(),
            'postDate' => fake()->date($format = 'Y-m-d', $max = 'now'),
        ];
    }
}
