<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "company"=> fake()->company(),
            "title"=> fake()->sentence(),
            "location" => fake()->address(),
            "email" => fake()->email(),
            "tags"=> "php, laravel, react",
            "description"=>fake()->paragraph(5),
        


        ];
    }
}
