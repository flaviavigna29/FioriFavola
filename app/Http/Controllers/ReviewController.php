<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Requests\ReviewRequest;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Review::all();
        // dd($reviews);
        return view('welcome', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('review.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReviewRequest $request)
    {
        if ($request->input('gender') === 'M') {
            $gender = 'M';
        }
        elseif ($request->input('gender') === 'F'){
            $gender = 'F';
        }

        Review::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'message' => $request->message,
            'body' => $request->body,
            'gender' => $gender,
        ]);

        return redirect()->back()->with('message', 'Recensione inserita con successo.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        //
    }
}
