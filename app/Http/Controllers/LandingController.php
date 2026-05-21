<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing_page');
    }

    public function activity()
    {
        return view('activity_page');
    }

    public function tracking()
    {
        return view('alvia_tracking_trip_page');
    }

    public function tour()
    {
        return view('tour_activity_page');
    }

    public function transport()
    {
        return view('transport_page');
    }

    public function about()
    {
        return view('about_&_contact_page');
    }
}