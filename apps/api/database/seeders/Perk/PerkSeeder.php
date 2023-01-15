<?php

namespace Database\Seeders\Perk;

use App\Models\Perk\Perk;
use Illuminate\Database\Seeder;

class PerkSeeder extends Seeder
{
    public function run()
    {
        Perk::factory(30)->create();
    }
}
