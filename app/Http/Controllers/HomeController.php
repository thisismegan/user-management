<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $keyword = request('search');
        $categories = Category::all();
        $products = Product::with('category', 'image');

        if ($keyword) {
            $products->where('title', 'like', '%' . $keyword . '%');
        }

        return view('home/index', compact('categories', 'products'));
    }

    public function detailProduct($id)
    {
        $product = Product::join('categories', 'categories.id', '=', 'products.category_id')
            ->where('products.id', $id)
            ->select('products.*', 'categories.category_name')
            ->first();
        $images = Image::where('product_id', $id)->get();

        return view('home/detail_product', compact('product', 'images'));
    }

    public function search()
    {
        $keyword = request('keyword');
        $product = new Product;

        $procutSearch =  $product->Search($keyword);

        dd($procutSearch);

        if ($product) {
            return view('home/search', compact('productSearch'));
        }

        redirect()->back();
    }
}
