<?php

namespace Database\Seeders;

use App\Models\TrackingStop;
use Illuminate\Database\Seeder;

class TrackingStopSeeder extends Seeder
{
    public function run(): void
    {
        $stops = [
            [
                'name' => 'Golden Sunrise Terraces',
                'description' => 'Experience the serene magic of Bali as the first light of day gracefully breaks over the horizon. Watch as the golden sunrays gently illuminate the morning dew across the sweeping, emerald green rice terraces. This peaceful morning walk offers a moment of pure tranquility, allowing you to breathe in the crisp, fresh countryside air as the island slowly awakens.',
                'image' => 'track-sunrise.png',
                'track_type' => 'short',
                'is_reverse' => false,
            ],
            [
                'name' => 'Authentic Local Market',
                'description' => "Dive into the lively atmosphere and vibrant colors of a traditional Balinese morning market. Witness the authentic daily routines of the locals as they gather to trade fresh tropical fruits, fragrant exotic spices, and beautifully crafted daily offerings. This immersive stop provides a genuine taste of the island's rich community spirit and enduring cultural heritage.",
                'image' => 'track-market.png',
                'track_type' => 'short',
                'is_reverse' => true,
            ],
            [
                'name' => 'Heartwarming Village School',
                'description' => "Experience the innocent charm and warm hospitality of Bali's younger generation. As we gently pass by the local elementary school, you will be greeted by the genuine smiles and cheerful energy of the village children starting their day. This brief but deeply meaningful encounter offers a touching glimpse into the heart of the community and the pure spirit of the island.",
                'image' => 'track-school.png',
                'track_type' => 'short',
                'is_reverse' => false,
            ],
            [
                'name' => 'Serene River Crossing',
                'description' => "As you venture deeper into the island's untouched beauty, the trail leads you to a refreshing river crossing. Wade through the gentle, crystal clear streams surrounded by a canopy of lush tropical foliage. This invigorating part of the trek not only connects you intimately with nature but also builds a sense of pure adventure as you make your way toward the ancient temple ruins.",
                'image' => 'track-river.png',
                'track_type' => 'long',
                'is_reverse' => true,
            ],
            [
                'name' => 'The 11th Century Legacy Gunung Kawi Temple',
                'description' => "Conclude your epic journey at the breathtaking 11th-century Gunungkawi Temple, one of Bali's most ancient and awe-inspiring archaeological sites. Marvel at the colossal shrines carved directly into the sheer cliff faces, standing as a testament to the island's royal history and spiritual devotion. Surrounded by lush river valleys, this sacred monument offers a profound sense of wonder and a timeless connection to Bali's majestic past.",
                'image' => 'track-temple.png',
                'track_type' => 'long',
                'is_reverse' => false,
            ],
        ];

        foreach ($stops as $stop) {
            TrackingStop::create($stop);
        }
    }
}
