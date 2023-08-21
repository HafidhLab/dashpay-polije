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

        // 1. Data kode_barang
        // 2. Data jumlah_barang 
        // 3. Data id_pengguna
        // 4. Data id_merchant

        $code_product = $request->input('code_product');
        $product = Product::where('code_product', $code_product)->first();

        $userInput = $request->input('user');
        $user = User::find($userInput);

        $priceItem = $product->price;
        $countItem = $request->input('count_item');
        $total = $priceItem * $countItem;

        $merchantInput = $request->input('merchant');
     

        if ($user->balance >= $total) {

            $newBalance = $user->balance - $total;
            
            $user->update(['balance' => $newBalance]);
            Transaction::create([
                'user_id' => $user->id,
                'user_merchant' => $merchantInput,
                'name_item' => $product->name,
                'price_product' => $countItem,
                'total' => $total,
                'status' => 'paid'
            ]);
            
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
