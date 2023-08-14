<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class BuyerController extends Controller
{
    public function index(Request $request) {
        $userInput = $request->input('user');
        $priceItem = $request->input('price');

        $user = User::find($userInput);

        if ($user->balance >= $priceItem) {
            $paymentAmount = $request->input('transfer');
            $newBalance = $user->balance - $paymentAmount;
            
            $user->update(['balance' => $newBalance]);
            
            return response()
                    ->json([
                        'status' => true,
                        'user' => $user->name,
                        'message' => 'Berhasil membayar'
                    ]);
        } else {
            return response()
                    ->json([
                        'status' => false,
                        'user' => $user->name,
                        'message' => 'Saldo tidak mencukupi'
                    ]);
        }
    }
}
