<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Login_RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\WishlistController;

Route::get('/', [PageController::class,'index']);
Route::resource('/shop', ShopController::class);
Route::get('/about', [AboutController::class,'index']);
Route::get('/contact', [ContactController::class,'index']);
Route::get('/login_register', [Login_RegisterController::class,'index']);
Route::get('/cart', [CartController::class,'index']);
Route::get('/checkout', [CheckoutController::class,'index']);
Route::get('/product_detail', [ProductDetailController::class,'index']);
Route::get('/product_detail/{MaSP}/{MaSize}/{MaMau}', [ProductDetailController::class, 'index']);
Route::get('/wishlist', [WishlistController::class,'index']);
Route::get('/test_endpoint/{MaMau}', [ProductDetailController::class, 'getProductDetails']);
Route::get('/get-sizes-by-color/{MaMau}/{MaSP}', [ProductDetailController::class, 'getSizesByColor']);
Route::get('/test_endpointa/{MaSP}/{MaSize}/{MaMau}', [ProductDetailController::class, 'getProductDetails1']);