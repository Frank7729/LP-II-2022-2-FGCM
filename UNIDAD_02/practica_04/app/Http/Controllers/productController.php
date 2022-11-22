<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function index(){
        $products=product::latest('id')->paginate(8);
        return view('products.index', compact('products'));
    }

    public function category(category $category){
        //dd('buscar post cat'.$category);
        $products=product::where('category_id', $category->id)->latest('id')->paginate(8);
        return view('products.index', compact('products'));
    }

    public function show(product $product){
        $similares=product::where('category_id', $product->category_id)->where('id','!=', $product->id)->take(5)->get();
        return view('products.show', compact('product','similares'));
    }
}
