<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;

//Dodata ruta i blade radi testiranja :)
Route::view('/logout', 'logout');


Route::get("/", [\App\Http\Controllers\HomepageController::class, 'index']);
Route::get("/shop", [\App\Http\Controllers\ShopController::class, 'index']);
Route::view("/about", "about");
Route::get("/contact", [\App\Http\Controllers\ContactController::class, 'index']);
Route::post("/send-contact", [\App\Http\Controllers\ContactController::class, 'sendContact'])
    ->name("sendContact");

Route::middleware('auth')->prefix("admin")->group(function () {

    Route::get("/products", [\App\Http\Controllers\ShopController::class, 'allProducts']);

    Route::get("/all-contacts", [\App\Http\Controllers\ContactController::class, 'getAllContacts'])
        ->name("allContacts");

    Route::get("/add-product", [\App\Http\Controllers\ShopController::class, 'addProduct'])
        ->name("addProduct");

    Route::post("/save-product", [\App\Http\Controllers\ShopController::class, 'saveProduct'])
        ->name("saveProduct");

    Route::get("/all-products/", [\App\Http\Controllers\ProductsController::class, 'index'])
        ->name("allProducts");

    Route::get("/delete-product/{product}", [\App\Http\Controllers\ProductsController::class, 'deleteProduct'])
        ->name("deleteProduct");

    Route::get("/delete-contact/{contact}", [\App\Http\Controllers\ContactController::class, 'deleteContact'])
        ->name("deleteContact");

    Route::get('/products/edit/{product}', [\App\Http\Controllers\ProductsController::class, 'edit'])
        ->name('editProduct');

    Route::post('/products/update/{product}', [\App\Http\Controllers\ProductsController::class, 'update'])
        ->name('updateProduct');

    Route::get('/contacts/edit/{product}', [\App\Http\Controllers\ContactController::class, 'edit'])
        ->name("editContact");

    Route::post('/contacts/update/{product}', [\App\Http\Controllers\ContactController::class, 'update'])
        ->name("updateContact");

});



require __DIR__.'/auth.php';
