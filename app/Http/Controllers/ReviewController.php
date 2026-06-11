<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'activity_type' => 'required|string',
            'activity_id' => 'required|integer',
            'customer_name' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string',
        ]);

        $validated['is_approved'] = true; // Langsung aktif

        Review::create($validated);

        return back()->with('success', 'Thank you for your review! It is now live.');
    }
}
