<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        // Mengembalikan tampilan dari file landing_page.blade.php
        return view('landing_page');
    }
}
