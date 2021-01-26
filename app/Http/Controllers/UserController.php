<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function store(Request $request)
    {
        // All data
        $input = $request->all();
        // Hashing password
        $input['password'] = Hash::make($request->password);
        // Create new record
        User::create($input);
        return response()->json([
            'success' => true,
            'message' => 'Successfully created user'
        ], 200);
    }

    public function login(Request $request)
    {
        $user = User::whereEmail($request->email)->first();
        if(!is_null($user) && Hash::check($request->password, $user->password))
        {
            $token = $user->createToken('gasmapi')->accessToken;
            return response()->json([
                'success' => true,
                'token' => $token,
                'message' => 'Welcome to my API '.$request->email.'!!'
            ], 200);
        }
        else{
            return response()->json([
                'success' => false,
                'message' => 'Try again, credentials wrong!'
            ], 200);
        }
    }

    public function logout()
    {
        $user = auth()->user();
        $user->tokens->each(function($token, $key){
            $token->delete();
        });
        $user->save();
        return response()->json([
            'success' => true,
            'message' => 'Come back soon my friend!!'
        ], 200);
    }
}
