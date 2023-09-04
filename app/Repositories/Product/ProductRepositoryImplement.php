<?php

namespace App\Repositories\Product;

use App\Models\Product;
use App\Repositories\Product\ProductRepository;
use Illuminate\Http\Request;

class ProductRepositoryImplement implements ProductRepository{

    /**
    * Model class to be used in this repository for the common methods inside Eloquent
    * Don't remove or change $this->model variable name
    * @property Model|mixed $model;
    */
    protected $model;

    public function __construct(Product $model)
    {
        $this->model = $model;
    }

    private function productData(Request $request): array
    {
        return [
            'code_product' => $request->code_product,
            'name' => $request->name,
            'price' => $request->price
        ];

    }

    public function getAllProduct()
    {
        return $this->model->all();
    }

    public function createProduct(Request $request)
    {

        $this->model->create($this->productData($request));
        flash()->addSuccess('Berhasil menambahkan produk');

        return to_route('merchant.product.index');
    }

    public function deleteProduct($id)
    {
        $product =  $this->model->find($id);
        $product->delete();
        flash()->addSuccess('Berhasil menghapus product '. $product->name);
        
        return $product;
    }


}