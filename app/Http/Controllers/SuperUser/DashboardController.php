<?php

namespace App\Http\Controllers\SuperUser;

use App\Http\Controllers\Controller;
use App\Models\Merchant;
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

    public function create(User $user) {

        $roles = Role::pluck('name', 'id');
        return view('superuser.create', compact('user','roles'));

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

        return to_route('superuser.dashboard');
    }

    public function edit(User $user)
    {
        $roles = Role::pluck('name', 'id');
        return view('superuser.edit', compact('user', 'roles'));
    }
    
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'role_id' => 'required|exists:roles,id',
            'balance' => 0
        ]);

        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);

        $role = Role::find($request->input('role_id'));
        $user->syncRoles([$role->id]); // Sync roles to replace existing roles

        return to_route('superuser.dashboard');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return back();
    }

    public function createMerchant($id)
    {
        $user = User::find($id);
        return view('superuser.merchant.create', compact('user'));
    }

    public function storeMerchant(Request $request)
    {

        Merchant::create([
            'user_id' => $request->user_id,
            'name_merchant' => $request->name_merchant,
            'phone' => $request->phone,
            'person_responsible' => $request->person_responsible
        ]);

        return back();
    }
}
