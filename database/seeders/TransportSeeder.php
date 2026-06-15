<?php

namespace Database\Seeders;

use App\Models\Transport;
use Illuminate\Database\Seeder;

class TransportSeeder extends Seeder
{
    public function run(): void
    {
        $transports = [
            [
                'name' => 'DROP & PICK UP',
                'type' => 'service',
                'price' => 'RP 350K',
                'route' => 'AIRPORT — UBUD AREA — TAMPAKSIRING AREA',
            ],
            [
                'name' => 'DROP OR PICK UP',
                'type' => 'service',
                'price' => 'RP 175K',
                'route' => 'AIRPORT — UBUD AREA — TAMPAKSIRING AREA',
            ],
            [
                'name' => 'YAMAHA N-MAX',
                'type' => 'rent',
                'price' => 'RP 250K/DAY',
                'description' => "PREMIUM MAXI SCOOTER\nCOMFORTABLE RIDING POSITION\nHELMETS INCLUDED",
                'image' => 'rent-nmax.jpg',
                'is_reverse' => false,
            ],
            [
                'name' => 'HONDA SCOOPY',
                'type' => 'rent',
                'price' => 'RP 150K/DAY',
                'description' => "CLASSIC & STYLISH DESIGN\nEASY TO RIDE\nHELMETS INCLUDED",
                'image' => 'rent-scoopy.jpg',
                'is_reverse' => true,
            ],
        ];

        foreach ($transports as $transport) {
            Transport::updateOrCreate(
                ['name' => $transport['name']],
                $transport
            );
        }
    }
}
