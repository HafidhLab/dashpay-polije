<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use App\Models\Balance;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class TopupController extends Controller
{
    public function index() 
    {
        return view('merchant.topup.index');
    }

    public function store(Request $request) 
    {
        $user = User::find($request->user_id);
        $user->increment('balance', $request->transfer);

        Balance::create([
            'operation_type' => 'topup',
            'target_type'    => 'user',
            'target_id'      => $request->user_id,
            'source_type'    => 'merchant',
            'source_id'      => Auth::user()->id,
            'amount'         => $request->transfer, 
        ]);

        flash()->addSuccess('Terima kasih, Anda berhasil melakukan top-up.');
        return back();
    }
}
