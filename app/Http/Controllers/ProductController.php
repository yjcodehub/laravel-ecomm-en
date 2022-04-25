<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    function index()
    {
        if(!session()->has('user')){
            return redirect('/login');
        }
        $products = Product::all();
        return view('product', ['products'=>$products]);
    }

    function detail($id)
    {
        $data =  Product::find($id);
        return view("detail", ['data'=>$data]);
    }
}
