<?php

namespace App\Http\Controllers;

use App\Carts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $carts = Carts::where('user_id', Auth::user()->id)->get();
        $totalInCart = 0;
        foreach ($carts as $cart) {
            $totalInCart += $cart->package->price;
        }
        return view('cart', compact('carts', 'totalInCart'));
    }

    public function store(Request $request)
    {

        $cart = new Carts();
        $cart->package_id = $request->package_id;
        $cart->user_id = Auth::user()->id;
        $cart->guests = $request->guest;
        $cart->start_date = $request->start_date;
        $cart->end_date = $request->end_date;
        $cart->save();

        return redirect('/carts');
    }
}