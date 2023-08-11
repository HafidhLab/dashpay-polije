<?php

namespace App\Http\Livewire\Auth;

use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email, $password;
    public $remember = false;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:8',
    ];

    public function render()
    {
        return view('livewire.auth.login')
            ->layout('layouts.auth');
    }

    public function login(LoginRequest $request)
    {
        $this->validate();
        $request->authenticate($this->email, $this->password, $this->remember);

        return to_route($this->redirectToRoute());
    }

    private function redirectToRoute(): string
    {
        $user = Auth::user();
        $redirects = [
            'superuser' => 'superuser.dashboard',
            'auditor' => 'auditor.dashboard',
            'user' => 'user.dashboard',
            'merchant' => 'merchant.dashboard'
        ];

        foreach($redirects as $role => $route)
            if($user->hasRole($role)) return $route;
    }
}
