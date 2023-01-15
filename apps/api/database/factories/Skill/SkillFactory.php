<?php

namespace Database\Factories\Skill;

use App\Models\Skill\Skill;
use App\Models\Skill\SkillCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Skill>
 */
class SkillFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->words(rand(1, 2), true),
            'category_id' => fake()->boolean(75)
                ? SkillCategory::inRandomOrder()->first()->id
                : null,
        ];
    }
}
