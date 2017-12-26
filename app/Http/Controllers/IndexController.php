<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Hot;


class IndexController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$products = Product::all();	
        return view('index')->with('products', $products);
    }
}
