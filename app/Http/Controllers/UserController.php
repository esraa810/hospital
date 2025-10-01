<?php

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'mobile'   => 'nullable|string|max:20',
            'password' => 'required|string|min:6',

        ]);

        $user = User::create([
            'name'              => $validated['name'],
            'email'             => $validated['email'],
            'mobile'            => $validated['mobile'] ?? null,
            'password'          => Hash::make($validated['password']),

        ]);

        return response()->json([
            'message' => 'User created successfully.',
            'user'    => $user,
        ], 201);
    }
}

