<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        User::create([
            'username' => 'xXLolihunter42Xx',
            'email' => 'wert1460@gmail.com',
            'password' => 'Barbara',
            'account_number' => '1000001',
            'card_count' => '0',
            'fighter_count' => '0',
            'level' => '1',
            'admin' => 'true',
            'banned' =>'false',
        ]);
        User::create([
            'username' => 'Startear',
            'email' => 'gergely.pivarcsi@gmail.com',
            'password' => '',
            'account_number' => '1000002',
            'card_count' => '0',
            'fighter_count' => '0',
            'level' => '1',
            'admin' => 'false',
            'banned' =>'true',
        ]);
        User::create([
            'username' => '',
            'email' => 'sajt.isti@gmail.com',
            'password' => '',
            'account_number' => '1000003',
            'card_count' => '0',
            'fighter_count' => '0',
            'level' => '1',
            'admin' => 'false',
            'banned' =>'false',
        ]);
        User::create([
            'username' => 'TestAdmin',
            'email' => 'ok@example.com',
            'password' => 'admin',
            'account_number' => '1000004',
            'card_count' => '0',
            'fighter_count' => '0',
            'level' => '1',
            'admin' => 'true',
            'banned' =>'false',
        ]);
    }
}