<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Token;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $validatedReq = $request->validate([
            'username' => 'required|string|min:3|max:50',
            'password' => 'required|confirmed|current_password:api'
        ]);

        $toBeValidatedUser =  User::where('username', $validatedReq['username'])->first();

        if (!$toBeValidatedUser) {
            return response([
                'message' => 'Helytelen felhasználónév vagy jelszó!'
            ]);
        }
        if (!Hash::check($validatedReq['password'], $toBeValidatedUser->password)) {
            return response([
                'message' => 'Helytelen felhasználónév vagy jelszó!'
            ]);
        }

        $token = Token::createToken();

        return $toBeValidatedUser;
    }

    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function store(Request $request)
    {

        $validatedReq = $request->validate([
            'username' => 'required|string|min:3|max:50',
            'password' => 'required|confirmed|current_password:api'
        ]);

        $user = new User();
        $user->name = $validatedReq['username'];
        $user->email = $validatedReq['email'];
        $user->password = Hash::make($validatedReq['password']);
        $user->save();
        return response()->json($user, 201);
    }

    public function show(User $user)
    {
        return response()->json($user);
    }
    public function update(Request $request, User $user)
    {
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
