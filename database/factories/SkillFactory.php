<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Skill>
 */
class SkillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = Category::inRandomOrder()->first(); // Obtiene una categoría aleatoria

        return [
            'name' => $this->faker->word, // Genera un nombre de habilidad aleatorio y único
            'category_id' => $category->id, // Asigna la category_id correspondiente
        ];
    }
}