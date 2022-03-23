<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\FighterController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('/cards', CardController::class)->middleware('token');
Route::resource('/fighters', FighterController::class)->middleware('token');
Route::resource('/users', UserController::class)->middleware('token');

Route::post('/users/login', [UserController::class, 'login']);
Route::post('/users/register', [UserController::class, 'store']);
