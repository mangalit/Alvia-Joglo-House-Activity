<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tour;

class TourController extends Controller
{
    public function tour()
    {
        $tours = Tour::all();
        return view('tour_activity_page', compact('tours'));
    }
}
