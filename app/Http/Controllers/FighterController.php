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
    public function create()
    {
    }
    public function store(Request $request)
    {
        $fighter = new Fighter();
        $fighter->fill($request->all());
        $fighter->save();
        return response()->json($fighter, 201);
    }
    public function show(Fighter $fighter)
    {
        return response()->json($fighter);
    }
    public function edit(Fighter $fighter)
    {
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
