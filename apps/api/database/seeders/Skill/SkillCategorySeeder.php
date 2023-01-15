<?php

namespace Database\Seeders\Skill;

use App\Models\Skill\SkillCategory;
use Illuminate\Database\Seeder;

class SkillCategorySeeder extends Seeder
{
    public function run()
    {
        SkillCategory::factory(rand(10, 15))->create();
    }
}
