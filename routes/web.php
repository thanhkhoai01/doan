<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\Controller;
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

Route::get('/', [\App\Http\Controllers\CategoriesController::class,'index']);

Route::get('/index', function () {
    return view('layouts.index');
});
Route::get('/users/checkout', function () {
    return view('users.checkouts.checkout');
})->name('checkout');
//Route::get('/shops',function (){
//    return view('shops.shop-gird');
//})->name('shops');



Route::prefix('shops')->name('shops.')->group(function (){
    Route::get('/',[ProductsController::class,'index'])->name('index');
    Route::get('/shop-details/{id}',[ProductsController::class,'show'])->name('show');
});

//
//Route::prefix('admin')->name('admin.')->group(function (){
//    Route::get('/')
//});
Route::resource('admin',\App\Http\Controllers\admin\AccountsController::class);
