<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('frontend.home.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('frontend.detail.index', compact('product'));
    }

}
