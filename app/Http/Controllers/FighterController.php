<?php

namespace App\Http\Controllers;

use App\Models\Fighter;
use Illuminate\Http\Request;

class FighterController extends Controller
{
    public function index()
    {
        $fighters = Fighter::all();
        return response()->json($fighters);
    }
    public function store(Request $request)
    {
        $fighter = new Fighter();
        $fighter->fill($request->all());
        $fighter->save();
        return response()->json($fighter, 201);
    }
    public function show(int $id)
    {
        $fighter = Fighter::find($id);
        if (is_null($fighter)) {
            return response()->json([
                'message' => 'Fighter not found!'
            ], 404);
        }
        return response()->json($fighter);
    }
    public function update(Request $request, Fighter $fighter)
    {
        $fighter->fill($request->all());
        $fighter->save();
        return response()->json($fighter, 200);
    }
    public function destroy(int $id)
    {
        Fighter::destroy($id);
        return response()->noContent();
    }
}
