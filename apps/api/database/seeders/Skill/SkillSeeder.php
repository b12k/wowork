<?php

namespace Database\Seeders\Skill;

use App\Models\Skill\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    public function run()
    {
        Skill::factory(40)->create();
    }
}
