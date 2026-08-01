<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProductRequest;
use App\Repositories\ProductRepository;


class ShopController extends Controller
{

    private $productRepo;


    public function __construct()
    {
        $this->productRepo = new ProductRepository();
    }


    public function index()
    {
        $products = $this->productRepo->getAll();

        return view("shop", compact('products'));
    }


    public function addProduct()
    {
        return view("add-product");
    }


    public function saveProduct(SaveProductRequest $request)
    {
        $this->productRepo->createNew($request);


        return redirect('/admin/products')
            ->with('success','Proizvod uspješno dodat!');
    }


    public function allProducts()
    {
        $products = $this->productRepo->getAll();


        return view("products", compact('products'));
    }

}
