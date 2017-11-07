<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
    	$products = Product::all()->paginate(5);
    	return view('product_index',['products'=>'$products']);
    }
}
