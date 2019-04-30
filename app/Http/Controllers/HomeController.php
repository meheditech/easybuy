<?php

namespace App\Http\Controllers;

use App\Product;
use Cart;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard.index');
    }

    public function easybuy()
    {
        $products = Product::all();
        $c = Cart::count();
        return view('dashboard.easybuy', compact('products','c'));
    }

    public function master()
    {
        $products = Product::all();
        $c = Cart::count();
        return view('easybuy.layouts.master', compact('products', 'c'));
    }
}
