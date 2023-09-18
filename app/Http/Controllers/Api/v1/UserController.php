<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{

    public function index()
    {
        $user = User::select('username', 'balance')->get();

        return response()->json($user, 200);
    }

    public function getUser()
    {
        $user = User::select('id', 'username', 'balance')->get();

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

    public function register(Request $request) 
    {
        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    
        $role = Role::findByName('user');

        $user->assignRole($role);
    
        return response()->json([
            'message' => 'User registered successfully',
            'user' => $user,
        ], 201);
    }

    public function getUserByRole()
    {
        $requestRole = request('role');
    
        try {
            $role = Role::where('name', $requestRole)->firstOrFail();
            $users = $role->users;
            
            return response()->json([
                'success' => true,
                'message' => 'Users with the role ' . $requestRole,
                'data' => $users
            ]);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Role not found',
                'data' => []
            ], 404);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                    'message' => 'An error occurred',
                'data' => []
            ], 500);
        }
    }
}
