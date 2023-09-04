<?php

namespace App\Repositories\Product;

use Illuminate\Http\Request;

interface ProductRepository{

    public function getAllProduct();
    public function createProduct(Request $request);
    public function deleteProduct($id);

}
