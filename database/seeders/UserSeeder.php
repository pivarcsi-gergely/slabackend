<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'xXLolihunter42Xx',
            'email' => 'wert1460@gmail.com',
            'password' => Hash::make('Valami42'),
            'account_number' => 1000001,
            'remember_token' => 'aaaaa',
            'card_count' => 0,
            'fighter_count' => 0,
            'level' => 1,
            'admin' => true,
            'banned' => false,
        ]);
        User::create([
            'username' => 'Startear',
            'email' => 'gergely.pivarcsi@gmail.com',
            'password' => Hash::make('abcdef'),
            'account_number' => 1000002,
            'remember_token' => 'bbbbb',
            'card_count' => 0,
            'fighter_count' => 0,
            'level' => 1,
            'admin' => false,
            'banned' => true,
        ]);
        User::create([
            //Ez lesz a végleges
            'username' => 'Stven',
            'email' => 'sajt.isti@gmail.com',
            'password' => Hash::make('Stvenke2'),
            'account_number' => 1000003,
            'remember_token' => 'ccccc',
            'card_count' => 0,
            'fighter_count' => 0,
            'level' => 1,
            'admin' => false,
            'banned' => false,
        ]);
        User::create([
            'username' => 'TestAdmin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin'),
            'account_number' => 1000004,
            'remember_token' => 'admin',
            'card_count' => 0,
            'fighter_count' => 0,
            'level' => 1,
            'admin' => true,
            'banned' => false,
        ]);
    }
}
