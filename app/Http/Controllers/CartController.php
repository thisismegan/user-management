<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function index()
    {
        $carts  = Cart::with('user', 'product.image')->where('user_id', Auth::user()->id)->get();
        return view('home/cart', compact('carts'));
    }

    public function store(Request $request)
    {

        $count  = Cart::where('user_id', Auth::user()->id)->where('product_id', $request->product_id)->count();
        $cart = Cart::where('user_id', Auth::user()->id)->where('product_id', $request->product_id);

        if ($count == 0) {
            Cart::create([
                'user_id'    => Auth::user()->id,
                'product_id' => $request->product_id,
                'qty'        => $request->qty
            ]);

            return redirect()->back()->with('success', 'Sukses menambahkan produk ke dalam keranjang');
        }

        $maxQty = $request->max_qty;
        $qty = $cart->first()->qty;

        if (($qty + $request->qty) >= $maxQty) {
            return redirect()->back()->with('failed', 'Anda melebihi jumlah stok pembelian');
        }

        if ($count > 0) {
            $cart->update([
                'qty' => $qty + $request->qty
            ]);

            return redirect()->back()->with('success', 'Sukses menambahkan produk ke dalam keranjang');
        }
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
