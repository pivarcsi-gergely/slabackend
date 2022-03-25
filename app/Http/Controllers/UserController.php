<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Token;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function login(Request $request)
    {
        /*$request = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer'
        ]);*/

        $user =  User::firstWhere('username', $request->username);

        if (!isset($request->username) || !Hash::check($request->password, $user->password)) {
            return response([
                'message' => 'Invalid username or password!' . User::find($request->username)
            ], 404);
        }

        $token = Token::createToken($user->id);
        //$tokenKeyUser = Token::findUserbyToken($token);

        return response()->json(['message' => "You've logged in"]);
    }

    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function store(UserRequest $request)
    {
        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        $user->save();
        return response()->json($user, 201);
    }

    public function show(int $id)
    {
        $user = User::find($id);
        if (is_null($user)) {
            return response()->json([
                'message' => 'User not found!'
            ]);
        }
        return response()->json($user);
    }
    public function update(Request $request, int $id)
    {
        $user = User::find($id);

        if (is_null($id)) {
            return response()->json([
                'message' => 'Error updating the User'
            ]);
        }

        $user->fill($request->all());
        $user->save();
        return response()->json($user, 200);
    }

    public function destroy(int $id)
    {
        User::destroy($id);
        return response()->noContent();
    }
}
