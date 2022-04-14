<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Token;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $user = User::firstWhere('username', $request->username);

        if (!isset($request->username) || !Hash::check($request->password, $user->password)) {
            return response([
                'message' => 'Invalid username or password!'
            ], 400);
        }

        if ($user->banned == 1) {
             return response([
                'message' => 'You are banned!'
            ], 403);
        }

        Token::createToken($user->id);

        return response()->json(['message' => "You've logged in"]);
    }

    public function banUser(int $id)
    {
        $user = User::firstWhere('id', $id);

        if (!isset($user)) {
            return response()->json([
                'message' => "A user with this id doesn't exist."
            ], 404);
        }

        $user->banned = 1;
        $user->save();

        return response()->json([
            'message' => "The user has been banned!"
        ]);
    }

    public function unbanUser(int $id)
    {
        $user = User::firstWhere('id', $id);

        if (!isset($user)) {
            return response()->json([
                'message' => "A user with this id doesn't exist."
            ], 404);
        }

        $user->banned = 0;
        $user->save();

        return response()->json([
            'message' => "The user has been unbanned!"
        ]);
    }

    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function store(UserRequest $request)
    {
        if ($request->username == User::findFirst($request->username)->username) {
            return response()->json([
                'message' => 'This username is taken , choose another!'
            ], 401);
        }
        if ($request->email == User::findFirst($request->eamil)->email) {
            return response()->json([
                'message' => 'This email has been registered, choose another!'
            ], 401);
        }
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
            ], 404);
        }
        return response()->json($user);
    }
    public function update(Request $request, int $id)
    {
        $user = User::find($id);

        if (is_null($id)) {
            return response()->json([
                'message' => 'Error updating the User'
            ], 404);
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
