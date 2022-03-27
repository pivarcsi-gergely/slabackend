<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::all();
        return response()->json($games);
    }
    public function store(Request $request)
    {
        $game = new Game();
        $game->fill($request->all());
        $game->save();
        return response()->json($game, 201);
    }
    public function show(Game $game)
    {
        return response()->json($game);
    }
    public function update(Request $request, Game $game)
    {
        $game->fill($request->all());
        $game->save();
        return response()->json($game, 200);
    }
    public function destroy(int $id)
    {
        Game::destroy($id);
        return response()->noContent();
    }
}
