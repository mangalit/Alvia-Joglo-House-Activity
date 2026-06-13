<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        // Ambil data review dari cookie (berupa array of keys: activity_type_id)
        $reviewedItems = json_decode($request->cookie('reviewed_items', '[]'), true);

        // Buat kunci unik untuk produk ini
        $currentProductKey = $request->activity_type . '_' . $request->activity_id;

        // Cek apakah user sudah memberikan review untuk produk ini
        if (in_array($currentProductKey, $reviewedItems)) {
            return back()->with('error', 'You have already submitted a review for this item. Thank you for your feedback!');
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

        // Tambahkan produk ini ke daftar yang sudah di-review
        $reviewedItems[] = $currentProductKey;

        // Simpan kembali ke cookie selama 3 bulan (90 hari)
        // 90 hari * 24 jam * 60 menit = 129.600 menit
        return back()
            ->with('success', 'Thank you for your review! It is now live.')
            ->cookie('reviewed_items', json_encode($reviewedItems), 129600);
    }
}
