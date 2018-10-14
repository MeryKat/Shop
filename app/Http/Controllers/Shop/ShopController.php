<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class ShopController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function cart()
    {
        return view('shop.cart');
    }

     public function checkout()
    {
        return view('shop.checkout');
    }
     public function contact()
    {
        return view('shop.contact');
    }
     public function productDetail()
    {
        return view('shop.product_detail');
    }
     public function products()
    {
      return view('shop.products');   
    }
}
