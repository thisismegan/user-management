<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class CategoryController extends Controller
{

    public function index()
    {
        $category = Category::all();
        $editCategory = Category::all();
        return view('admin/category/index', compact('category', 'editCategory'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required'
        ]);

        Category::create([
            'category_name' => $request->category_name
        ]);

        return redirect()->route('category.index')->with('success', 'Berhasil menambahkan kategori');
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);

        $category->update([
            'category_name' => $request->category_name
        ]);

        return redirect()->route('category.index')->with('success', 'Kategori berhasil di update');
    }

    public function deleteCategory(Request $request)
    {
        $product = Product::where('category_id', $request->category_id)->count();
        if ($product > 0) {
            return redirect()->route('category.index')->with('failed', 'Tidak dapat hapus kategori, terdapat produk dengan kategori tersebut');
        }
        //delete kategori
        Category::find($request->category_id)->delete();
        return redirect()->route('category.index')->with('success', 'Kategori berhasil dihapus');
    }
}
