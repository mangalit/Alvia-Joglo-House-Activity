<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Activity;
use App\Models\Tour;
use App\Models\Transport;
use App\Models\Review;

class LandingController extends Controller
{
    public function home()
    {
        $activities = Activity::all();
        $tours = Tour::all();
        $transports = Transport::all();

        // We will include Tracking manually since it's static
        $trackingTrips = [
            ['id' => 1, 'name' => 'Short Trek (2 Hours)'],
            ['id' => 2, 'name' => 'Long Trek (4 Hours)'],
        ];

        $reviews = Review::latest()->get();

        return view('landing_page', compact('activities', 'tours', 'transports', 'trackingTrips', 'reviews'));
    }
}
