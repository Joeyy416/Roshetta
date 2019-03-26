<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product as Product;
use App\Order as Order;
use App\User;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user=auth()->user();

        $orders = Order::all();
        $users = User::all();
        return view('home')->with('users',$users);
    }

}
