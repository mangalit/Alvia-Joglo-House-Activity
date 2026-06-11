<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Transport;

class TransportController extends Controller
{
    public function transport()
    {
        $services = Transport::where('type', 'service')->get();
        $rents = Transport::where('type', 'rent')->get();
        return view('transport_page', compact('services', 'rents'));
    }
}
