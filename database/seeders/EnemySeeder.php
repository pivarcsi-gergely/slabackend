<?php

namespace Database\Seeders;

use App\Models\Enemy;
use Illuminate\Database\Seeder;

class EnemySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Enemy::create([
            'name' => 'Yargol',
            'type' => 'Orc boss',
            'details' => '',
            'level' => 1,
            'hp' => 15000,
            'attack' => '350'
        ]);
    }
}
