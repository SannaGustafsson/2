<?php

namespace App\Http\Controllers;

use App\Review;

use Illuminate\Http\Response;

class ReviewsController extends Controller
{
    public function index() 
    {
        //$reviews = Review::all();
        //return response()->json($reviews);
		    $reviews = Review::all();
		    return view("reviews.index", [
		        "reviews" => $reviews
		    ]);
    }
}
