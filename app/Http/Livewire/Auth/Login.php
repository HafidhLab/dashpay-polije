<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class Login extends Component
{
    public $email, $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:8',
    ];

    public function render()
    {
        return view('livewire.auth.login')
            ->layout('layouts.auth');
    }

    public function login()
    {
        $this->validate();
    }
}
