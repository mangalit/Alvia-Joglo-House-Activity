<?php

namespace Database\Seeders;

use App\Models\Review;
use App\Models\Activity;
use App\Models\Tour;
use App\Models\Transport;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        // Clear existing reviews first
        Review::truncate();

        $reviews = [];

        // --- ACTIVITIES ---
        $activities = Activity::all();
        foreach ($activities as $act) {
            $reviews[] = [
                'activity_type' => 'activity',
                'activity_id' => $act->id,
                'customer_name' => 'Michael Stevens',
                'rating' => 5,
                'comment' => "The {$act->name} was the highlight of our trip! Everything was perfectly organized.",
                'is_approved' => true,
            ];
            $reviews[] = [
                'activity_type' => 'activity',
                'activity_id' => $act->id,
                'customer_name' => 'Sarah Jenkins',
                'rating' => 4,
                'comment' => "Very exciting experience. The staff was friendly and the equipment was top notch.",
                'is_approved' => true,
            ];
        }

        // --- TOURS ---
        $tours = Tour::all();
        foreach ($tours as $tour) {
            $reviews[] = [
                'activity_type' => 'tour',
                'activity_id' => $tour->id,
                'customer_name' => 'David Miller',
                'rating' => 5,
                'comment' => "Our guide for the {$tour->name} was so knowledgeable. We learned so much about Balinese culture.",
                'is_approved' => true,
            ];
            $reviews[] = [
                'activity_type' => 'tour',
                'activity_id' => $tour->id,
                'customer_name' => 'Emma Watson',
                'rating' => 5,
                'comment' => "Breathtaking views and smooth travel. A must-do when in Bali!",
                'is_approved' => true,
            ];
        }

        // --- TRACKING ---
        $trackingIds = [1, 2]; // Short and Long
        $trackNames = ['Short Trek', 'Long Trek'];
        foreach ($trackingIds as $index => $id) {
            $reviews[] = [
                'activity_type' => 'tracking',
                'activity_id' => $id,
                'customer_name' => 'James Bond',
                'rating' => 5,
                'comment' => "The " . $trackNames[$index] . " offered amazing sunrise views. Pure tranquility.",
                'is_approved' => true,
            ];
            $reviews[] = [
                'activity_type' => 'tracking',
                'activity_id' => $id,
                'customer_name' => 'Linda Grey',
                'rating' => 4,
                'comment' => "Beautiful scenery, although a bit challenging. Totally worth the effort!",
                'is_approved' => true,
            ];
        }

        // --- TRANSPORT ---
        $transports = Transport::all();
        foreach ($transports as $trans) {
            $reviews[] = [
                'activity_type' => 'transport',
                'activity_id' => $trans->id,
                'customer_name' => 'Robert Downey',
                'rating' => 5,
                'comment' => "Reliable and punctual. The {$trans->name} made our commute so easy.",
                'is_approved' => true,
            ];
            if ($trans->type == 'rent') {
                $reviews[] = [
                    'activity_type' => 'transport',
                    'activity_id' => $trans->id,
                    'customer_name' => 'Scarlett J.',
                    'rating' => 5,
                    'comment' => "The bike was in excellent condition. Perfect for exploring the area.",
                    'is_approved' => true,
                ];
            }
        }

        foreach ($reviews as $review) {
            Review::create($review);
        }
    }
}
