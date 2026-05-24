<?php

namespace App\Http\Controllers;

use App\Models\ProductsModel;
use Illuminate\Http\Request;
use function Illuminate\Support\hours;

class HomepageController extends Controller
{
    public function index()
    {
        $sat = date("H");
        $trenutnoVrijeme = date("H:i:s");

        // Uzima zadnjih 6 proizvoda
        $products = ProductsModel::orderBy('id', 'DESC')
            ->take(6)
            ->get();

        return view('welcome', compact(
            'sat',
            'trenutnoVrijeme',
            'products'
        ));
    }
}
