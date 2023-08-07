<?php

namespace App\Http\Livewire\SuperUser;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Dashboard extends Component
{

    use WithPagination;

    public $userDetail;
    public $modalFormVisible = false;

    public function render()
    {
        return view('livewire.super-user.dashboard', [
            'users' => User::with('roles')->paginate(5)
        ]);
    }
}
