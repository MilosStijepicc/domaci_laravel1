<?php

namespace App\Repositories;

use App\Models\ProductsModel;

class ProductRepository
{
    private $productModel;

    public function __construct()
    {
        $this->productModel = new ProductsModel();
    }

    public function createNew($request)
    {
        return $this->productModel->create([
            'name' => $request->name,
            'description' => $request->description,
            'amount' => $request->amount,
            'price' => $request->price
        ]);
    }


    public function getAll()
    {
        return $this->productModel->all();
    }


    public function getLatest($number)
    {
        return $this->productModel
            ->orderBy('id','DESC')
            ->take($number)
            ->get();
    }


    public function getProductById($id)
    {
        return $this->productModel
            ->where('id',$id)
            ->first();
    }


    public function updateProductById($product,$request)
    {
        $product->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'amount'=>$request->amount,
            'price'=>$request->price
        ]);
    }

}
