<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    use HttpResponses;

    public function register(Request $request)
    {
        $validated = Validator::make([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        if ($validated->fails())
            return $this->error('Validation failed', 422, $validated->errors());

        $user = User::create($validated);

        if ($user)
            return $this->success('User created successfully', 200);

        return $this->error('User not created', 400);
    }
    
    public function login(Request $request)
    {

    }

    public function logout(Request $request)
    {

    }

}
