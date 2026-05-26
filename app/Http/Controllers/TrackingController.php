<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrackingController extends Controller
{
    public function tracking()
    {
        return view('alvia_tracking_trip_page');
    }
}
