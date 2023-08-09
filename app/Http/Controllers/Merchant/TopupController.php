<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class TopupController extends Controller
{
    public function index() {
        return view('merchant.topup.index');
    }

    public function store(Request $request) {
        
        $user = User::find($request->user_id);
        $topup = $user->saldo += $request->transfer;

        $user->update(['saldo' => $topup]);

        return back();
    }
}
