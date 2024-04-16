<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterUserController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required']
        ]);

        $remember_token =  Hash::make(rand(11111111, 99999999));

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'remember_token' => $remember_token,
            'password' => $request->password,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return response()->json([
            'success' => true,
            'remember_token' => $remember_token,
            'name' => $request->name,
        ]);
    }
}
