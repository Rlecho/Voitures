<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicule>
 */
class VehiculeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [       
            'nom' => fake()->name(),
            'categorie' => fake()->word(),
            'capacite' => fake()->word(),
            'type' => fake()->word(),
            'prix' => fake()->numberBetween(50,100),
            'note' => fake()->numberBetween(50,100),
            'caburant' => fake()->numberBetween(50,100),
            'quantite' => fake()->randomDigit(),
            'photo' =>'photo',
        ];
    }
}
