<?php

namespace App\Http\Controllers\SuperUser;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class DashboardController extends Controller
{
    public function index() 
    {
        $users = User::with('roles')->get();
        return view('superuser.index', compact('users'));
    }

    public function create() {

        $roles = Role::pluck('name', 'id');
        return view('superuser.create', compact('roles'));

    }

    public function store(Request $request)
    {
        
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'role_id' => 'required|exists:roles,id',
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt('password'), // Set default password or customize as needed
            'balance' => 0
        ]);

        $role = Role::find($request->input('role_id'));
        $user->assignRole($role);

        return to_route('superuser.index');
    }
}
