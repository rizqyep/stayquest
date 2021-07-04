<?php

namespace App\Http\Controllers;

use App\Carts;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('checkout.index');
    }

    public function store()
    {
        $carts = Carts::where('user_id', Auth::user()->id)->get();
        foreach ($carts as $cart) {
            $booking = new Booking();
            $booking->user_id = Auth::user()->id;
            $booking->package_id = $cart->package_id;
            $booking->guests = $cart->guests;
            $booking->start_date = $booking->start_date;
            $booking->end_date = $booking->end_date;
        }
    }
}