<?php

namespace App\Http\Controllers;

use App\Carts;
use Illuminate\Http\Request;
use App\Booking;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function finish()
    {
        return view('checkout');
    }

    public function store()
    {
        $carts = Carts::where('user_id', Auth::user()->id)->get();
        foreach ($carts as $cart) {
            $booking = new Booking();
            $booking->user_id = Auth::user()->id;
            $booking->package_id = $cart->package_id;
            $booking->guests = $cart->guests;
            $booking->start_date = $cart->start_date;
            $booking->end_date = $cart->end_date;
            $booking->code = Str::random(10);
            $booking->status = "PAID";
            $booking->save();
            $cart->delete();
        }

        return redirect('/checkout/finish');
    }
}