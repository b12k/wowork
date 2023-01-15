<?php

namespace Database\Factories\Perk;

use App\Models\Perk\PerkCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class PerkFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->words(rand(1, 2), true),
            'category_id' => fake()->boolean(75)
                ? PerkCategory::inRandomOrder()->first()->id
                : null,
        ];
    }
}
