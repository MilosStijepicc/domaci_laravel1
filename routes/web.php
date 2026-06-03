<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;

Route::get("/", [\App\Http\Controllers\HomepageController::class, 'index']);
Route::get("/shop", [\App\Http\Controllers\ShopController::class, 'index']);
Route::view("/about", "about");
Route::get("/contact", [\App\Http\Controllers\ContactController::class, 'index']);
Route::post("/send-contact", [\App\Http\Controllers\ContactController::class, 'sendContact'])
    ->name("sendContact");

Route::get("/admin/all-contacts", [\App\Http\Controllers\ContactController::class, 'getAllContacts'])
    ->name("allContacts");
Route::get("/admin/add-product", [\App\Http\Controllers\ShopController::class, 'addProduct'])
    ->name("addProduct");
Route::post("/admin/save-product", [\App\Http\Controllers\ShopController::class, 'saveProduct'])
    ->name("saveProduct");
Route::get("/admin/products", [\App\Http\Controllers\ShopController::class, 'allProducts']);
Route::get("/admin/all-products/", [\App\Http\Controllers\ProductsController::class, 'index'])
    ->name("allProducts");
Route::get("/admin/delete-product/{product}", [\App\Http\Controllers\ProductsController::class, 'deleteProduct'])
    ->name("deleteProduct");
Route::get("/admin/delete-contact/{contact}", [\App\Http\Controllers\ContactController::class, 'deleteContact'])
    ->name("deleteContact");
Route::get('/admin/products/edit/{product}', [\App\Http\Controllers\ProductsController::class, 'edit'])
    ->name('editProduct');
Route::post('/admin/products/update/{product}', [\App\Http\Controllers\ProductsController::class, 'update'])
    ->name('updateProduct');
Route::get('/admin/contacts/edit/{product}', [\App\Http\Controllers\ContactController::class, 'edit'])
    ->name("editContact");
Route::post('/admin/contacts/update/{product}', [\App\Http\Controllers\ContactController::class, 'update'])
->name("updateContact");

require __DIR__.'/auth.php';
