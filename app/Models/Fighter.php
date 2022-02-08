<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fighter extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'details',
        'level',
        'hp',
        'attack',
        'summon_cost',
    ];
}