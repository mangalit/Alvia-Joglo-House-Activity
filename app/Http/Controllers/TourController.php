<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourController extends Controller
{
    public function tour()
    {
        return view('tour_activity_page');
    }
}
