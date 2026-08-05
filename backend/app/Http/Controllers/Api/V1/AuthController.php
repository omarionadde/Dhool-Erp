<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        if (! Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'message' => 'Invalid credentials'
            ], 401);
        }

        /** @var \App\Models\User $user */
        $user = Auth::user();

        if (! $user->is_active) {
            return response()->json([
                'message' => 'Account is inactive'
            ], 403);
        }

        $token = $user->createToken('dhool-erp')->plainTextToken;

        return response()->json([
            'success' => true,
            'token'   => $token,
            'user'    => $user->load(['company','branch']),
        ]);
    }

    public function me(Request $request)
    {
        return response()->json(
            $request->user()->load(['company','branch'])
        );
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Logged out successfully'
        ]);
    }
}
