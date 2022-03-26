<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use \Error;

class Token extends Model
{
    protected $table = "token";

    protected $fillable = [
        'userid',
        'api_token'
    ];

    static function createToken(int $id): Token
    {
        return Token::create([
            'userid' => $id,
            'api_token' => Str::random(80)
        ]);
    }

    static function getTokenByKey(string $key): Token|false
    {
        $token = Token::firstWhere("api_token", $key);
        if (!isset($token->id)) {
            $token = false;
        }
        return $token;
    }

    static function findUserbyToken(string $key): User|false
    {
        try {
            return User::firstWhere("id", Token::getTokenByKey($key));
        } catch (Error $e) {
            return false;
        }
    }
}
