<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\PackageReview;
use Illuminate\Support\Facades\Auth;
use Alert;
class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(Request $request)
    {
        $review = new PackageReview();
        if ($request->image) {
            $image = Storage::disk('public')->put('review_images', $request->image);
            $review->image = $image;
        }
        $review->rating = $request->rating;
        $review->package_id = $request->package_id;
        $review->user_id = Auth::user()->id;
        $review->text = $request->text;

        $review->save();
        Alert::success('Yeay!', 'Your review has been submitted!');
        return redirect('/packages/' . $request->package_id);
    }
}