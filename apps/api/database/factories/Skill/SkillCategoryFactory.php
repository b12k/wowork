<?php

namespace Database\Factories\Skill;

use App\Models\Skill\SkillCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<SkillCategory>
 */
class SkillCategoryFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->words(rand(1, 3), true),
            'parent_id' => fake()
                ->boolean(50)
                ? SkillCategory::factory()->create()->id
                : null,
        ];
    }
}
