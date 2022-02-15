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
            'hp' => 100,
            'attack' => 50,
            'summon_cost' => 10,]);
        Card::create([
            'name' => "Francis",
            'type' => "Tank",
            'details' => "Decreases incoming damage by 30% if it is on the front lane.",
            'level' => 1,
            'hp' => 100,
            'attack' => 50,
            'summon_cost' => 10,]);
        Card::create([
            'name' => "Alejandro",
            'type' => "Soldier",
            'details' => "For every soldier type of card onfield, boosts attack and hp by 15%. Max 4 stacks.",
            'level' => 1,
            'hp' => 100,
            'attack' => 50,
            'summon_cost' => 10,]);
        Card::create([
            'name' => "Cecilia",
            'type' => "Mage",
            'details' => "Pushes on card to the other lane and can attack after once every 2 turns.",
            'level' => 1,
            'hp' => 100,
            'attack' => 50,
            'summon_cost' => 10,]);
        Card::create([
            'name' => "Footman",
            'type' => "Support",
            'details' => "Only card that can operate the building type cards",
            'level' => 1,
            'hp' => 10,
            'attack' => 0,
            'summon_cost' => 1,]);
        Card::create([
            'name' => "Chloe",
            'type' => "Support",
            'details' => "Heals onfield cards by 20% of it's own hp",
            'level' => 1,
            'hp' => 100,
            'attack' => 0,
            'summon_cost' => 1,]);
        Card::create([
            'name' => "Catapult",
            'type' => "Building",
            'details' => "Damaging enemy cards based on the number of people operating it.",
            'level' => 1,
            'hp' => 100,
            'attack' => 50,
            'summon_cost' => 10,]);
        Card::create([
            'name' => "Poisoned food",
            'type' => "Taunt",
            'details' => "Decreases attack by 20% for 2 turns.",
            'level' => 1,
            'hp' => 100,
            'attack' => 50,
            'summon_cost' => 10,]);
                        
    }
}
