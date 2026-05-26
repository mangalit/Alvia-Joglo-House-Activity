<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function activity()
    {
        return view('activity_page');
    }
}
