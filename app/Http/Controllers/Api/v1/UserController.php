<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{

    public function index()
    {
        $user = User::select('name', 'balance')->get();

        return response()->json($user, 200);
    }

    public function getUser()
    {
        $user = User::select('id', 'name', 'balance')->get();

        return response()->json($user, 200);

    }

    public function getUserData($id)
    {
        $user = User::find($id);

        if ($user) {
            return response()->json([
                'id' => $user->id,
                'email' => $user->email,
                'balance' => $user->balance,
            ]);
        }

        return response()->json(['error' => 'User not found'], 404);
    }

    public function retrieveUser() 
    {
        $response = Http::post('https://bc.kcbindo.co.id/register', [
            "username"      => "superuser123",
            "walletAddress" => "0x1cdesfss",
            "isSuperuser"   => true
        ]);

        return $response->body();
    }
}
