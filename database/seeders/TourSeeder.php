<?php

namespace Database\Seeders;

use App\Models\Tour;
use Illuminate\Database\Seeder;

class TourSeeder extends Seeder
{
    public function run(): void
    {
        $tours = [
            [
                'name' => 'Art Village Tour',
                'description' => "Barong & Keris Dance\nGold & Silver Smith Production\nCoffee Plantation\nPainting\nWood carving",
                'start_time' => '8 AM',
                'price' => '$40 USD',
                'main_image' => 'tour-art.jpg',
                'images' => ['tour-art.jpg', 'art-2.jpg', 'art-3.jpg', 'art-4.jpg'],
                'is_reverse' => false,
            ],
            [
                'name' => 'Ubud Tour',
                'description' => "Monkey forest\nWaterfall\nCoffee Plantation\nTemple\nRice terrace",
                'start_time' => '8 AM',
                'price' => '$40 USD',
                'main_image' => 'tour-ubud.jpg',
                'images' => ['ubud-1.jpg', 'ubud-2.jpg', 'ubud-3.jpg', 'ubud-4.jpg'],
                'is_reverse' => true,
            ],
            [
                'name' => 'East Coast Bali Tour',
                'description' => "Lempuyang (Gate of Heaven)\nTirta Gangga Water Palace\nCoffee Plantation\nVirgin Beach\nWaterfall",
                'start_time' => '8 AM',
                'price' => '$40 USD',
                'main_image' => 'tour-east.png',
                'images' => ['tour-east.png', 'east-2.jpg', 'east-3.jpg', 'east-4.jpg'],
                'is_reverse' => false,
            ],
            [
                'name' => 'West Bali Tour',
                'description' => "Taman Ayun the Royal Temple\nJatiluwih UNESCO Rice Field\nCoffee Plantation\nLake Bratan Temple\nHandara Gate\nHidden Hill Photo Spots\nWaterfall\nTanah Lot Temple",
                'start_time' => '8 AM',
                'price' => '$40 USD',
                'main_image' => 'tour-west.jpg',
                'images' => ['west-1.jpg', 'west-2.jpg', 'west-3.jpg', 'west-4.jpg'],
                'is_reverse' => true,
            ],
            [
                'name' => 'South Bali Tour',
                'description' => "Water Sports\nCoffee Plantation\nPadang-Padang Beach\nUluwatu Temple Kecak & Fire Dance",
                'start_time' => '8 AM',
                'price' => '$40 USD',
                'main_image' => 'tour-south.jpg',
                'images' => ['south-1.jpg', 'south-2.jpg', 'tour-south.jpg', 'south-4.jpg'],
                'is_reverse' => false,
            ],
            [
                'name' => 'North Bali Tour',
                'description' => "Lovina Dolphin Tour\nBuddhist Temple (Brahma Vihara Arama)\nHoly Hot Spring",
                'start_time' => '8 AM',
                'price' => '$40 USD',
                'main_image' => 'tour-north.jpg',
                'images' => ['tour-north.jpg', 'north-2.jpg', 'north-3.jpg', 'north-4.png'],
                'is_reverse' => true,
            ],
        ];

        foreach ($tours as $tour) {
            Tour::updateOrCreate(
                ['name' => $tour['name']],
                $tour
            );
        }
    }
}
