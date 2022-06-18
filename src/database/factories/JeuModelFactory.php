<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Categorie;

class JeuModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->words(2, true),
            'categorie_id' => Categorie::all()->random()->id,
            'editeur' => $this->faker->randomElement(['Hasbro', 'Lucky Ducky Games', 'CMON', 'Day of wonders', 'Lumberjack', 'Rose noire']),
            'annee' => $this->faker->year()
        ];
    }
}
