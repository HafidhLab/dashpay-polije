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

    public function getAllProduct()
    {
        return $this->model->all();
    }

    public function createProduct(Request $request)
    {

        return $this->model->create($this->productData($request));
        
    }

    private function productData(Request $request): array
    {
        return [
            'code_product' => $request->code_product,
            'name' => $request->name,
            'price' => $request->price
        ];

    }
}