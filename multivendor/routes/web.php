<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ShopListingsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SocialShareController;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        $role = Auth::user()->roleid;
        if($role == 2){
            return redirect()->route('seller.index');
        }else{
            return view('dashboard');
        }

    })->name('dashboard');

    Route::resource('seller', SellerController::class);
    Route::resource('shop', ShopController::class);
    Route::resource('shopListings', ShopListingsController::class);
    Route::resource('product', ProductController::class);
    Route::resource('order', OrderController::class);
    Route::get('social-share', [SocialShareController::class, 'index']);
    Route::get('/viewproduct', [ProductController::class, 'index']);
    Route::get('/addproduct', [ProductController::class, 'create']);
    Route::get('/vieworders', [OrderController::class, 'index']);


});



