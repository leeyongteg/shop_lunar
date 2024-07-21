<?php

use App\Http\Controllers\Shop\ProductDetailController;
use App\Http\Controllers\Shop\ProductListController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Lunar\Admin\Support\Facades\LunarPanel;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('master.frontoffice');
});

Route::get('products', [ProductListController::class, '__invoke'])->name('product.list');
Route::get('product/{id}', [ProductDetailController::class, '__invoke'])->name('product.detail');
