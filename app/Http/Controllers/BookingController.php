<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::where('user_id', Auth::user()->id)->orderBy('start_date')->get();
        return view('user.bookings.index', compact('bookings'));
    }
}