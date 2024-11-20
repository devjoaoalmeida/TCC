<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Auth extends Controller
{
    public function auth(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if (!$user){
            response()->json('not authorized', 401);
        }

        if (!password_verify($request->password, $user->password)){
            response()->json('not authorized', 401);
        }

        Jwt::create($user);

    }
}
