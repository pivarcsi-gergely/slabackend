<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function index()
    {
        $cards = Card::all();
        return response()->json($cards);
    }
    public function store(Request $request)
    {
        $card = new Card();
        $card->fill($request->all());
        $card->save();
        return response()->json($card, 201);
    }
    public function show(int $id)
    {
        $card = Card::find($id);
        if (is_null($card)) {
            return response()->json([
                'message' => 'Card not found!'
            ]);
        }
        return response()->json($card);
    }
    public function update(Request $request, Card $card)
    {
        $card->fill($request->all());
        $card->save();
        return response()->json($card, 200);
    }
    public function destroy(int $id)
    {
        Card::destroy($id);
        return response()->noContent();
    }
}
