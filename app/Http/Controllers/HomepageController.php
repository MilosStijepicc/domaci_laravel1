<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Illuminate\Support\hours;

class HomepageController extends Controller
{
    public function index()
    {
        $sat = date("h");
        $trenutnoVrijeme = date("h:i:s");

        return view('welcome', compact('sat', 'trenutnoVrijeme' ));
    }
}
