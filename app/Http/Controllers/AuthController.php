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
            return $this->error('Validation failed', 422, $validated->errors());

        $user = User::create($validated->validated());

        if ($user)
            return $this->success('User created successfully', 200);

        return $this->error('User not created', 400);
    }
    
    public function signin(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return $this->success('Authorized', 200, [
                'token' => $request->user()->createToken('token')->plainTextToken
            ]);
        }

        return $this->error('Unauthorized', 403);
    }

    public function logout(Request $request)
    {

    }

}
