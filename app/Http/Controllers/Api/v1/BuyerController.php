<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
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
        $user = User::find($request->input('username'));
        
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
                'username' => $user->username,
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

    public function checkTotalPriceProduct(Request $request) {
        $code_product = $request->input('code_product');
        $count_item = $request->input('count_item');
        $merchantInput = $request->input('merchant');
        $product = Product::where('code_product', $code_product)->first();
        return response()->json([
            'amount' => $product->price * $count_item
        ]);
    }



}
