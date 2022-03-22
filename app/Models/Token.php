<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use \Error;

class Token extends Model
{
    protected $table = "token";

    static function createToken(): string
    {
        return Str::random(80);
    }

    static function getTokenByKey(string $key): Token|false
    {
        $token = Token::where("api_token", $key)->first();
        if (!isset($token->id)) {
            $token = false;
        }
        return $token;
    }

    static function findUserbyToken(Token $token): User|false
    {
        try {
            return User::where("id", $token->userid)->firstOrFail();
        } catch (Error $e) {
            return false;
        }
    }
}
