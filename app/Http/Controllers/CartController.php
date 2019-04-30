<?php

namespace App\Http\Controllers;

use App\Product;

use Cart;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function single_product($id)
    {
        $products = Product::findOrFail($id);
        return view('easybuy.cart.single-product', compact('products'));
    }


    public function addcart($id)
    {
        $product = Product::findOrFail($id);

        $data ['id'] = $product->id;
        $data ['name'] = $product->title;
        $data ['qty'] = 1;
        $data ['price'] = $product->price;
        $data ['photo'] = $product->photo;

        $cart = Cart::add($data);

        //Cart::destroy();

        $item = Product::orderBy('id', 'desc')->get();

        return redirect()->back()->with('success', 'Product Added to Cart');
    }

    public function cartlist()
    {
        $carts = Cart::content();
        return view('easybuy.cart.cartlist', compact('carts'));
    }

    public function cartremove($id)
    {
        Cart::remove($id);
        return redirect()->back()->with('success', 'Item Removed');
    }

    public function index()
    {
        $carts = Cart::content();
        return view('easybuy.cart.checkout', compact('carts'));
    }

    public function checkout(Request $request)
    {
        $data = $request->all();
        $name = $request->get('name');
        $qty = $request->get('qty');
        $price = $request->get('price');
        $mobile = $request->get('mobile');
        $msg = "Hi,".$name." Your Order has been placed. Your Total items :".$qty.", Total Amount :".$price;

        $client = new Client();
        $url = "http://66.45.237.70/api.php?username=01787962903&password=HZMAYDF7&number=".$mobile."&message=".$msg;
        $response = $client->request('GET', $url);
        return $response;
    }
}
