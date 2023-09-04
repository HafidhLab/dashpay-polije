<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $user = User::select('name', 'balance')->get();

        return response()->json($user, 200);
    }

    public function getUser()
    {
        $user = User::select('name', 'balance')->get();

        return response()->json($user, 200);

    }

    public function getUserData($id)
    {
        $user = User::find($id);

        if ($user) {
            return response()->json([
                'name' => $user->name,
                'email' => $user->email,
                'balance' => $user->balance,
            ]);
        }

        return response()->json(['error' => 'User not found'], 404);
    }
}
