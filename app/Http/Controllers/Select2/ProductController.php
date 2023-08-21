<?php

namespace App\Http\Controllers\Select2;

use App\Http\Controllers\Controller;
use App\Http\Resources\Select2\ProductResource;
use App\Models\Product;
use App\Traits\Select2Responser;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use Select2Responser;

    public function products(Request $request)
    {
        $query = $request->q ?? '';
        $produts = Product::where('code_product', 'like', "%{$query}%")->first();  
        return $this->response(ProductResource::class, $produts->simplePaginate());
    }
}
