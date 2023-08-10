<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Balance;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index()
    {

        $user = Auth::user()->id;

        $listTransaksi = Transaction::where([
            'user_id' => $user,
            ])->get();
        $listTopup = Balance::where([
            'operation_type' => 'topup',
            'target_id' => $user
        ])->get();
        return view('user.dashboard', compact('listTransaksi', 'listTopup'));
    }
}
