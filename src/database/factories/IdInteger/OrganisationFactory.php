<?php

namespace Database\Factories\IdInteger;

use App\Models\IdInteger\Organisation;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrganisationFactory extends Factory
{
    protected $model = Organisation::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company(),
        ];
    }
}
