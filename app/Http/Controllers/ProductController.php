<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index()
    {
        // productsテーブルから全てのデータを取得し、変数$productsに代入する
        $products = DB::table('products')->get();

        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        // URL'/products/{id}'の'{id}'部分と主キー(idカラム)の値が一致するデータをproductsテーブルから取得し、変数$productに代入する
        $product = Product::find($id);

        return view('products.show', compact('product'));
    }
}
