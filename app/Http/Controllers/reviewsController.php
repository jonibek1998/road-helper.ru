<?php

namespace App\Http\Controllers;

use App\Review;
use App\Service;
use Illuminate\Http\Request;

class reviewsController extends Controller
{
    public function index()
    {
        $reviews = Review::where('status', 1)->get();
        $services = Service::all();
        // return view('front.layout', compact('services'));
        return view('front.pages.reviews', compact(
            'services',
            'reviews'
        ));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'text' => 'required',
            'avatar' => 'nullable|image'
        ]);

        $review = Review::add($request->all());
        $review->uploadAvatar($request->file('avatar'));

        return redirect()->back();
    }
}
