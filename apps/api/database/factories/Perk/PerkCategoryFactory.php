<?php

namespace Database\Factories\Perk;

use App\Models\Perk\PerkCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<PerkCategory>
 */
class PerkCategoryFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->words(rand(1, 3), true),
            'parent_id' => fake()
                ->boolean(30)
                    ? PerkCategory::factory()->create()->id
                    : null,
        ];
    }
}
