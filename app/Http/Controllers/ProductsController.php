<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProductRequest;
use App\Repositories\ProductRepository;


class ProductsController extends Controller
{
    private $productRepo;

    public function __construct()
    {
        $this->productRepo = new ProductRepository();
    }

    public function index()
    {
        $products = $this->productRepo->getAll();

        return view("allProducts", compact('products'));
    }

    public function deleteProduct($product)
    {
        $singleProduct = $this->productRepo->getProductById($product);

        if($singleProduct == null)
        {
            die("OVAJ PROIZVOD NE POSTOJI");
        }

        $singleProduct->delete();


        return redirect()->route('allProducts');
    }

    public function edit($product)
    {
        return view('edit-product', compact('product'));
    }

    public function update(UpdateProductRequest $request, $product)
    {
        $this->productRepo->updateProductById($product,$request);

        return redirect()->route('allProducts');
    }

}
