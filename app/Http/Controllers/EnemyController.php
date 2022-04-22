<?php

namespace App\Http\Controllers;

use App\Models\Enemy;
use Illuminate\Http\Request;

class EnemyController extends Controller
{
    public function index()
    {
        $enemies = Enemy::all();
        return response()->json($enemies);
    }
    public function store(Request $request)
    {
        $enemy = new Enemy();
        $enemy->fill($request->all());
        $enemy->save();
        return response()->json($enemy, 201);
    }
    public function show(int $id)
    {
        $enemy = Enemy::find($id);
        if (is_null($enemy)) {
            return response()->json([
                'message' => 'Enemy not found!'
            ], 404);
        }
        return response()->json($enemy);
    }
    public function update(Request $request, Enemy $enemy)
    {
        $enemy->fill($request->all());
        $enemy->save();
        return response()->json($enemy, 200);
    }
    public function destroy(int $id)
    {
        Enemy::destroy($id);
        return response()->noContent();
    }
}
