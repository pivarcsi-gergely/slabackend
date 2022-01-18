<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FighterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Fighter::factory(10)->create();
    }
}
