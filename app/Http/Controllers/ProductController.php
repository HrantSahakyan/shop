<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function products()
    {
        $products = Product::OrderBy('updated_at')->paginate(12);
        return view('store',compact('products'));
    }
    public function product($slug)
    {
        $product = Product::whereSlug($slug)->first();
        return view('/product' ,compact('product'));
    }
}
