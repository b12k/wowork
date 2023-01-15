<?php

namespace Database\Seeders\Perk;

use App\Models\Perk\PerkCategory;
use Illuminate\Database\Seeder;

class PerkCategorySeeder extends Seeder
{
    public function run()
    {
        PerkCategory::factory(rand(10, 15))->create();
    }
}
