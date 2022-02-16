<?php

namespace Database\Seeders;

use App\Models\Fighter;
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
        Fighter::create([
            'name' => "Victor",
            'type' => "",
            'details' => "You give up your ability to attack for buffing your on-field cards with 20% attack and hp.",
            'level' => 1,
            'hp' => 8000,
            'attack' => 0]);

        Fighter::create([
            'name' => "Don",
            'type' => "",
            'details' => "For 2 turns, you gain 15% extra attack by expending 15% of your current health. It's cooldown is 2 turns.",
            'level' => 1,
            'hp' => 7500,
            'attack' => 200]);

        Fighter::create([
            'name' => "Karl",
            'type' => "",
            'details' => "Your card's stats are decreased by 15%, but they also cost 20% less.",
            'level' => 1,
            'hp' => 6500,
            'attack' => 250]);

        Fighter::create([
            'name' => "Shean",
            'type' => "",
            'details' => "Whenever you're under max hp, you gain 5% of max hp back every turn.",
            'level' => 1,
            'hp' => 6000,
            'attack' => 200]);
    }
}
