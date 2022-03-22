<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request) 
    {
        $user = new User();
        $user->name->$request->input('name');
        $user->email->$request->input('email');
        $user->password=Hash::make($request->input('password'));
        $user->save();
        return $request->input();
    }
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
