<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Lunar\Models\Product;

class ProductListController extends Controller
{
    public function __invoke()
    {
        $products = Product::all();
        return compact('products');
    }
}
