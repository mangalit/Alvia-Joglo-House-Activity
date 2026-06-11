<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    public function run(): void
    {
        $activities = [
            [
                'name' => 'Rafting',
                'category' => 'Outdoor Action',
                'min_booking_info' => 'MINIMUM BOOKING 2 HOURS BEFORE',
                'price_info' => 'Enjoy the river adventure for Rp 900k / pax',
                'card_title' => 'Rafting Adventure',
                'description' => 'Immerse yourself in the thrill of nature with our exhilarating river rafting experience. Navigate through refreshing rapids while being surrounded by lush tropical jungles and breathtaking landscapes. Guided by our professionals, this adventure promises a perfect blend of excitement and safety, creating unforgettable memories during your holiday.',
                'bg_image' => 'rafting-bg.png',
                'images' => ['rafting-1.png', 'rafting-2.png', 'rafting-3.png', 'rafting-4.png'],
                'is_reverse' => false,
            ],
            [
                'name' => 'Tubing',
                'category' => 'Water Leisure',
                'min_booking_info' => 'MINIMUM BOOKING 2 HOURS BEFORE',
                'price_info' => 'Enjoy the relaxing river ride for Rp 500k / pax',
                'card_title' => 'River Tubing',
                'description' => "Float along the gentle currents and embrace the tranquility of Bali's hidden waterways with our river tubing experience. Drift peacefully through lush canyons and crystal-clear streams, allowing the soothing sounds of nature to wash away your stress. This relaxing yet captivating journey is the perfect way to connect with the island's pristine environment at your own pace.",
                'bg_image' => 'tubing-bg.png',
                'images' => ['tubing-1.png', 'tubing-2.png', 'tubing-3.png', 'tubing-4.png'],
                'is_reverse' => true,
            ],
            [
                'name' => 'ATV Ride',
                'category' => 'Adrenaline Rush',
                'min_booking_info' => 'MINIMUM BOOKING 2 HOURS BEFORE',
                'price_info' => 'Explore the track for Rp 1.200k(single) or 1.600k(tandem)',
                'card_title' => 'ATV Ride Tour',
                'description' => "Gear up for an adrenaline-pumping journey through Bali's rugged terrains and lush landscapes with our ATV ride experience. Conquer challenging dirt trails, navigate through traditional villages, and immerse yourself in the island's untouched natural beauty. Suitable for both beginners and experienced riders, this thrilling adventure offers a unique and exhilarating way to explore the great outdoors.",
                'bg_image' => 'atv-bg.png',
                'images' => ['atv-1.png', 'atv-2.png', 'atv-3.png', 'atv-4.png'],
                'is_reverse' => false,
            ],
            [
                'name' => 'Cycling',
                'category' => 'Rural Discovery',
                'min_booking_info' => 'MINIMUM BOOKING 2 HOURS BEFORE',
                'price_info' => 'Enjoy the scenic countryside ride for Rp 500k / pax',
                'card_title' => 'Village Cycling',
                'description' => 'Pedal your way through the serene heart of Bali and discover its hidden gems at a leisurely pace. Glide past sweeping rice terraces, ancient temples, and vibrant local villages where you can witness the authentic daily life of the island. This eco-friendly journey offers a peaceful yet engaging way to breathe in the fresh countryside air and connect deeply with nature.',
                'bg_image' => 'tubing-bg.png',
                'images' => ['tubing-1.png', 'tubing-2.png', 'tubing-3.png', 'tubing-4.png'],
                'is_reverse' => true,
            ],
            [
                'name' => 'Swing',
                'category' => 'Iconic Experience',
                'min_booking_info' => 'MINIMUM BOOKING 2 HOURS BEFORE',
                'price_info' => 'Soar above the lush jungle canopy for Rp 450k / pax',
                'card_title' => 'The Iconic Swing',
                'description' => 'Elevate your Bali getaway with our iconic jungle swing experience. Soar high above the lush tropical canopy and take in breathtaking panoramic views of the surrounding valleys and verdant rice terraces. Feel the exhilarating rush of the wind as you capture unforgettable, picture perfect moments suspended beautifully in the heart of nature.',
                'bg_image' => 'rafting-bg.png',
                'images' => ['rafting-1.png', 'rafting-2.png', 'rafting-3.png', 'rafting-4.png'],
                'is_reverse' => false,
            ],
        ];

        foreach ($activities as $activity) {
            Activity::create($activity);
        }
    }
}
