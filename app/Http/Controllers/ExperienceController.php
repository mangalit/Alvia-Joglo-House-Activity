<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        $data = [
            'tracking' => [
                ['title' => 'Short Track (2 Hours)', 'price' => '350k', 'desc' => 'Sunrise, Traditional Market, Elementary School, Rice Field Walk', 'include' => 'Young Coconut'],
                ['title' => 'Long Track (4 Hours)', 'price' => '550k', 'desc' => 'Sunrise, Traditional Market, Rice Field Walk, Cross River, Finish at Gunungkawi Temple', 'include' => 'Young Coconut'],
            ],
            'activities' => [
                ['title' => 'Rafting', 'price' => '900k/pax'],
                ['title' => 'Tubing', 'price' => '500k/pax'],
                ['title' => 'ATV Ride (Single)', 'price' => '1.200k/pax'],
                ['title' => 'ATV Ride (Tandem)', 'price' => '1.600k'],
                ['title' => 'Swing', 'price' => '450k/pax'],
            ],
            'tours' => [
                ['title' => 'Art Village Tour', 'price' => '$40 USD', 'desc' => 'Barong Dance, Gold & Silver Smith, Painting, Wood Carving'],
                ['title' => 'Ubud Tour', 'price' => '$40 USD', 'desc' => 'Monkey Forest, Waterfall, Temple, Rice Terrace'],
                ['title' => 'East Coast Bali', 'price' => '$70 USD', 'desc' => 'Lempuyang (Gate of Heaven), Tirta Gangga, Virgin Beach'],
                ['title' => 'North Bali Tour', 'price' => '$100 USD', 'desc' => 'Lovina Dolphin Tour, Buddhist Temple, Hot Spring (Start 2 AM)'],
            ],
            'rentals' => [
                ['name' => 'Nmax (Bigger)', 'price' => '250k'],
                ['name' => 'Scoopy (Smaller)', 'price' => '150k'],
            ]
        ];

        return view('experiences.index', compact('data'));
    }
}
