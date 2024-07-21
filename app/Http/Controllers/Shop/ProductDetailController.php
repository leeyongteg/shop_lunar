<?php

namespace App\Http\Controllers\Shop;

use Lunar\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductDetailController extends Controller
{
    public function __invoke(int $id)
    {
        $product = Product::findOrFail($id);
    }
}
