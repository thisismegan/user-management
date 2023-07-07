<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function index()
    {

        $products = Product::with('category', 'image')->get();

        return view('admin/product/index', compact('products'));
    }


    public function create()
    {

        $categories = Category::all();

        return view('admin/product/create', compact('categories'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'title'         => 'required|max:70',
            'description'   => 'required',
            'stock'         => 'required|numeric|max:100',
            'price'         => 'required|numeric',
            'images'        => 'required',
            'images.*'      => 'mimes:jpg,png,jpeg,gif,svg,webp,JPG,PNG,JPEG,GIF,SVG,WEBP'
        ]);


        $product = Product::create([
            'title'         => $request->title,
            'category_id'   => $request->category_id,
            'description'   => $request->description,
            'stock'         => $request->stock,
            'price'         => $request->price
        ]);


        $files = $request->file('images');

        foreach ($files as $file) {
            $name = explode('.', $file->hashName())[0];
            $extension = strtolower($file->getClientOriginalExtension());
            $image = $name . "." . $extension;

            $file->storeAs('public/product', $image);

            Image::create([
                'product_id'    => $product->id,
                'image_name'    => $image
            ]);
        }


        return redirect()->route('product.create')->with('success', 'Produk telah diupload ke database');
    }


    public function show($id)
    {

        $product = Product::join('categories', 'categories.id', '=', 'products.category_id')
            ->where('products.id', $id)
            ->first();
        $images = Product::find($id)->image;

        return view('admin/product/show', compact('product', 'images'));
    }


    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::join('categories', 'categories.id', '=', 'products.category_id')
            ->select('products.*', 'categories.category_name')
            ->where('products.id', $id)
            ->first();
        $images = Product::find($id)->image;

        return view('admin/product/edit', compact('product', 'images', 'categories'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'title'         => 'required|max:70',
            'description'   => 'required',
            'stock'         => 'required|numeric|max:100',
            'price'         => 'required|numeric',
        ]);

        $product = Product::find($id);

        $product->update([
            'title'         => $request->title,
            'category_id'   => $request->category_id,
            'description'   => $request->description,
            'stock'         => $request->stock,
            'price'         => $request->price
        ]);


        if ($request->hasFile('images')) {

            $files = $request->file('images');

            foreach ($files as $file) {
                $name = explode('.', $file->hashName())[0];
                $extension = strtolower($file->getClientOriginalExtension());
                $image = $name . "." . $extension;

                $file->storeAs('public/product', $image);

                Image::create([
                    'product_id'    => $product->id,
                    'image_name'    => $image
                ]);
            }
        }

        return redirect()->route('product.index')->with('success', 'Sukses Update Produk');
    }


    public function deleteProduct(Request $request)
    {

        $images = Image::where('product_id', $request->id)->get();

        //delete image from directory
        foreach ($images as $image) {
            Storage::delete('public/product/' . basename($image->image_name));
        }

        //delete image from database 
        Image::where('product_id', $request->id)->delete();

        //delete product
        $product = Product::find($request->id);
        $product->delete();

        return redirect()->route('product.index')->with('success', 'Produk berhasil dihapus');
    }

    public function deleteImage(Request $request)
    {

        $image = Image::find($request->image_id);
        $product_id = $image->product_id;


        Storage::delete('public/product/' . basename($image->image_name));

        $image->delete();

        return redirect('admin/product/' . $product_id . '/edit')->with('success', 'Gambar berhasil dihapus');
    }
}
