<?php

namespace Database\Seeders;

use App\Models\Card;
use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Card::create([
            'name' => "John S.",
            'type' => "Assassin",
            'details' => "Automatically dogdes an attack when summoned, and once every 4 turns.",
            'level' => 1,
            'hp' => 250,
            'attack' => 450,
            'summon_cost' => 600,
        ]);
        Card::create([
            'name' => "Francis",
            'type' => "Tank",
            'details' => "Decreases incoming damage by 30% if it is on the front lane.",
            'level' => 1,
            'hp' => 1000,
            'attack' => 150,
            'summon_cost' => 600,
        ]);
        Card::create([
            'name' => "Alejandro",
            'type' => "Soldier",
            'details' => "For every soldier type of card onfield, boosts attack and hp by 15%. Max 4 stacks.",
            'level' => 1,
            'hp' => 400,
            'attack' => 200,
            'summon_cost' => 450,
        ]);
        Card::create([
            'name' => "Cecilia",
            'type' => "Mage",
            'details' => "Once every 2 turns, push a card that you attack back a lane, then attack it.",
            'level' => 1,
            'hp' => 150,
            'attack' => 350,
            'summon_cost' => 400,
        ]);
        Card::create([
            'name' => "Footman",
            'type' => "Support",
            'details' => "Only card that can operate the building type cards",
            'level' => 1,
            'hp' => 100,
            'attack' => 0,
            'summon_cost' => 100,
        ]);
        Card::create([
            'name' => "Chloe",
            'type' => "Support",
            'details' => "Heals onfield cards by 20% of it's own max hp, every turn.",
            'level' => 1,
            'hp' => 550,
            'attack' => 50,
            'summon_cost' => 350,
        ]);
        Card::create([
            'name' => "Catapult",
            'type' => "Building",
            'details' => "Damaging enemy cards based on the number of people operating it (max 3).",
            'level' => 1,
            'hp' => 150,
            'attack' => 100,
            'summon_cost' => 200,
        ]);
        Card::create([
            'name' => "Mad Dog",
            'type' => "Taunt",
            'details' => "Decreases the attacking card's attack by 20% for 2 turns.",
            'level' => 1,
            'hp' => 200,
            'attack' => 100,
            'summon_cost' => 200,
        ]);
    }
}
