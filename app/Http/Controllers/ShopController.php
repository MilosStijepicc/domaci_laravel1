<?php

namespace App\Http\Controllers;

use App\Models\ProductsModel;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $products = ProductsModel::all();

        return view("shop", compact('products'));
    }


    public function addProduct()
    {
        return view("add-product");
    }

    public function saveProduct(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:100|unique:products',
            'description' => 'required|min:5',
            'amount' => 'required|integer|min:1',
            'price' => 'required|numeric|min:1'
        ]);

        ProductsModel::create([
            'name' => $request->name,
            'description' => $request->description,
            'amount' => $request->amount,
            'price' => $request->price
        ]);

        return redirect('/admin/products')
            ->with('success', 'Proizvod uspješno dodat!');
    }


    public function allProducts()
    {
        $products = ProductsModel::all();

        return view("products", compact('products'));
    }
}
