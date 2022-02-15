<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }
    public function create()
    {
    }
    public function store(Request $request)
    {
        $user = new User();
        $user->fill($request->all());
        $user->save();
        return response()->json($user, 201);
    }
    public function show(User $user)
    {
        return response()->json($user);
    }
    public function edit(User $user)
    {
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
