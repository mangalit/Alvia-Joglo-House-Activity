<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        // Solusi 1: Cek apakah user sudah memberi review dalam sesi ini
        if ($request->session()->has('has_reviewed')) {
            return back()->with('error', 'You have already submitted a review. Thank you for your feedback!');
        }

        $validated = $request->validate([
            'activity_type' => 'required|string',
            'activity_id' => 'required|integer',
            'customer_name' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string',
        ]);

        $validated['is_approved'] = true; // Langsung aktif

        Review::create($validated);

        // Tandai sesi bahwa user sudah memberi review
        $request->session()->put('has_reviewed', true);

        return back()->with('success', 'Thank you for your review! It is now live.');
    }
}
