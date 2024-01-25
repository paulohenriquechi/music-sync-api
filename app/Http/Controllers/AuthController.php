<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    use HttpResponses;

    public function signup(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        if ($validated->fails())
            return $this->error($validated->errors(), 'Validation failed', 422);

        $user = User::create($validated->validated());

        if ($user)
            return $this->success(null, 'User created successfully');

        return $this->error(null, 'User not created');
    }

    public function signin(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return $this->success([
                'token' => $request->user()->createToken('token')->plainTextToken
            ], 'Authorized');
        }

        return $this->error(null, 'Unauthorized', 403);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return $this->success(null, 'Token revoked');
    }
}
