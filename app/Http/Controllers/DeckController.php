<?php

namespace App\Http\Controllers;

use App\Models\Deck;
use Illuminate\Http\Request;

class DeckController extends Controller
{

    public function index()
    {
        $decks = Deck::all();
        return response()->json($decks);
    }
    public function store(Request $request)
    {
        $deck = new Deck();
        $deck->fill($request->all());
        $deck->save();
        return response()->json($deck, 201);
    }
    public function show(int $id)
    {
        $deck = Deck::find($id);
        if (is_null($deck)) {
            return response()->json([
                'message' => 'Deck not found!'
            ], 404);
        }
        return response()->json($deck);
    }
    public function update(Request $request, Deck $deck)
    {
        $deck->fill($request->all());
        $deck->save();
        return response()->json($deck, 200);
    }
    public function destroy(int $id)
    {
        Deck::destroy($id);
        return response()->noContent();
    }
}
