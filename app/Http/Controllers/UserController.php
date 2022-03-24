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

        $validator = Validator::make($request->all(), (new UserRequest())->rules());
        if ($validator->fails()) {
            $errormsg = "";
            foreach ($validator->errors()->all() as $error) {
                $errormsg .= $error . " ";
            }
            $errormsg = trim($errormsg);
            return response()->json($errormsg, 400);
        }

        $token = Token::createToken();
        $user = Token::findUserbyToken($token);

        return response()->json();
    }

    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), (new UserRequest())->rules());
        if ($validator->fails()) {
            $errormsg = "";
            foreach ($validator->errors()->all() as $error) {
                $errormsg .= $error . " ";
            }
            $errormsg = trim($errormsg);
            return response()->json($errormsg, 400);
        }

        $user = new User();
        $user->fill($request->all());
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
