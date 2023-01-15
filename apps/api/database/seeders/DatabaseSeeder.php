<?php

namespace Database\Seeders;

use Database\Seeders\Perk\PerkCategorySeeder;
use Database\Seeders\Perk\PerkSeeder;
use Database\Seeders\Skill\SkillCategorySeeder;
use Database\Seeders\Skill\SkillSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(CompanySeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(PerkCategorySeeder::class);
        $this->call(PerkSeeder::class);
        $this->call(SkillCategorySeeder::class);
        $this->call(SkillSeeder::class);
    }
}
