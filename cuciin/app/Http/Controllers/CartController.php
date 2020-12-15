<?php

namespace App\Http\Controllers;

use App\Models\Examples;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class CartController extends Controller
{
    public function viewCart()
    {
        // mengambil data dari table pegawai
        // $carts = DB::table('example')->get();
        $examples = DB::table('examples')->get();
        // mengirim data pegawai ke view index
        return view('pemesananUser', ['examples' => $examples]);
    }

    public function addToCart(Request $request)
    {
        if (Auth::check()) {
            DB::table('products')->insert([
                'product_id' => $request->product_id,
                'quantity' => $request->quantity,
            ]);
            // alihkan halaman ke halaman pegawai
            return view('pemesananUser');
        }
    }

    public function index()
    {
        // memanggil view tambah
        $i = 0;
        $examples = DB::table('examples')->get();
        return view('pemesananUser', ['examples' => $examples], compact('i'));
    }

    public function listCart()
    {
        //MENGAMBIL DATA DARI COOKIE
        $carts = json_decode(request()->cookie('dw-carts'), true);
        //UBAH ARRAY MENJADI COLLECTION, KEMUDIAN GUNAKAN METHOD SUM UNTUK MENGHITUNG SUBTOTAL
        $subtotal = collect($carts)->sum(function ($q) {
            return $q['qty'] * $q['product_price']; //SUBTOTAL TERDIRI DARI QTY * PRICE
        });
        //LOAD VIEW CART.BLADE.PHP DAN PASSING DATA CARTS DAN SUBTOTAL
        return view('pemesananUser', compact('carts', 'subtotal'));
    }
}
