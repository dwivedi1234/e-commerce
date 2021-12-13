<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;

class FrontController extends Controller
{
    public function index()
    {
        # code...
        $category = Category::latest()->get();
        $brand = Brand::latest()->get();
        $product = Product::latest()->get();
        return view('welcome',compact('category','brand','product'));
    }
}
