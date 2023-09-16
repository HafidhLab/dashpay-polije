<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class BuyerController extends Controller
{
    public function index(Request $request) {
        $code_product = $request->input('code_product');
        $product = Product::where('code_product', $code_product)->first();
        $user = User::find($request->input('user'));
        
        $countItem = $request->input('count_item');
        $total = $product->price * $countItem;
        $merchantInput = $request->input('merchant');
     
        if ($user->balance >= $total) {
            $user->decrement('balance', $total);
            Transaction::create([
                'user_id' => $user->id,
                'user_merchant' => $merchantInput,
                'name_item' => $product->name,
                'price_product' => $countItem,
                'total' => $total,
                'status' => 'paid'
            ]);
            
            return response()->json([
                'status' => true,
                'user' => $user->name,
                'amount' => $total,
                'message' => 'Berhasil membayar'
            ]);
        } else {
            return response()->json([
                'status' => false,
                'user' => $user->name,
                'message' => 'Saldo tidak mencukupi'
            ]);
        }
    }
}
