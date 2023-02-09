<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ShopListingsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\OrderController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('seller.index');
});

Route::get('/sellerdashboard', function () {
    return view('seller.createshop');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::resource('seller', SellerController::class);
Route::resource('shop', ShopController::class);
Route::resource('shopListings', ShopListingsController::class);
Route::resource('product', ProductController::class);
Route::get('/viewproduct', [ProductController::class, 'index']);
Route::get('/addproduct', [ProductController::class, 'create']);
Route::get('/vieworders', [OrderController::class, 'index']);
Route::get('/orderdetail', [OrderController::class, 'create']);
