<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $products = [
            "Bečka šnicla", "Karađorđeva šnicla", "Pileća prsa", "Pomfrit"
        ];
        return view('shop', compact('products'));
    }
}
