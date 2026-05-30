<?php

namespace App\Http\Controllers;

use App\Models\ProductsModel;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = ProductsModel::all();
        return view("allProducts", compact('products'));
    }

    public function deleteProduct($product)
    {
        $singleProduct = ProductsModel::where(['id' => $product])->first();
        if($singleProduct == null)
        {
            die("OVAJ PROIZVOD NE POSTOJI");
        }

        $singleProduct->delete();

        return redirect()->route('allProducts');
    }

    public function edit($id)
    {
        $product = ProductsModel::findOrFail($id);

        return view('edit-product', compact('product'));
    }
    public function update(Request $request, $id)
    {
        $product = ProductsModel::findOrFail($id);

        $product->name = $request->name;
        $product->description = $request->description;
        $product->amount = $request->amount;
        $product->price = $request->price;

        $product->save();
        return redirect()->route('allProducts');
    }
}
