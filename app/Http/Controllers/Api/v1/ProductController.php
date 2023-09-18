<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProduct($id) {
        $product = Product::find($id);

        if ($product) {
            return response()->json([
                'name' => $product->name,
                'price' => $product->price,
                'merchant' => $product->merchant
            ]);
        }

        return response()->json(['error' => 'User not found'], 404);
    }
}
