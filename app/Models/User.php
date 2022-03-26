<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use \Error;

class User extends Authenticatable
{
    //The attributes that are mass assignable.
    protected $fillable = [
        'username',
        'email',
        'password',
        'account_number',
        'card_count',
        'fighter_count',
        'level',
        'admin',
        'banned',
    ];

    //The attributes that should be hidden for serialization.
    protected $hidden = [
        'password',
        'remember_token',
    ];
    public $timestamps = false;

    static function findTokenByUser($id): Token|false
    {
        try {
            return Token::firstWhere("userid", $id);
        } catch (Error $e) {
            return false;
        }
    }
}
