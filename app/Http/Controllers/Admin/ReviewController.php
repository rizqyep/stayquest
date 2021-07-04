<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PackageReview;
class ReviewController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }

    public function index(){
        $reviews = PackageReview::orderBy('created_at','DESC')->paginate(10);

        return view('admin.reviews.index',compact('reviews'));
    }
}
