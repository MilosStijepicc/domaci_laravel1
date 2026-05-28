<?php

use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;


Route::get("/", [\App\Http\Controllers\HomepageController::class, 'index']);
Route::get("/shop", [\App\Http\Controllers\ShopController::class, 'index']);
Route::view("/about", "about");
Route::get("/contact", [\App\Http\Controllers\ContactController::class, 'index']);
Route::get("/admin/all-contacts", [\App\Http\Controllers\ContactController::class, 'getAllContacts']);
Route::post("/send-contact", [\App\Http\Controllers\ContactController::class, 'sendContact']);
Route::get("/admin/add-product", [\App\Http\Controllers\ShopController::class, 'addProduct']);
Route::post("/admin/save-product", [\App\Http\Controllers\ShopController::class, 'saveProduct']);
Route::get("/admin/products", [\App\Http\Controllers\ShopController::class, 'allProducts']);
Route::get("/admin/all-products/", [\App\Http\Controllers\ProductsController::class, 'index']);
Route::get("/admin/delete-product/{product}", [\App\Http\Controllers\ProductsController::class, 'deleteProduct']);
Route::get("/admin/delete-contact/{contact}", [\App\Http\Controllers\ContactController::class, 'deleteContact']);
