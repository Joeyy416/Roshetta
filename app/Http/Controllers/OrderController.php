<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Order as Order;
use App\Product as Product;

class OrderController extends Controller
{

    // 
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index(){

        return view('makeOrder');

    }

    public function submitOrder(Request $request){

      $product = Product::where('name',$request['name'])->get();
      $order = Order::create([
        'user_id' => auth()->id(),
        'name' =>'order no. 3'
        ]);

      $order->products()->attach($product);

      return redirect('/home');
    }
}
