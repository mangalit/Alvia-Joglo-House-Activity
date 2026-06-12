<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gemini\Laravel\Facades\Gemini;
use App\Models\Activity;
use App\Models\Tour;
use App\Models\Transport;

class ChatbotController extends Controller
{
    public function chat(Request $request)
    {
        $message = $request->input('message');
        $apiKey = config('gemini.api_key');

        if (!$apiKey) {
            return response()->json(['error' => 'Gemini API Key not configured in .env'], 500);
        }

        // Fetch some context from database to feed the AI
        $activities = Activity::all(['name', 'price_info'])->take(5);
        $tours = Tour::all(['name', 'price', 'start_time'])->take(5);
        $transports = Transport::all(['name', 'price'])->take(5);

        $context = "You are a helpful assistant for Alvia Joglo House, a tourism business in Bali.
        Here is some information about our services:
        Activities: " . $activities->map(fn($a) => "{$a->name} ({$a->price_info})")->implode(', ') . ".
        Tours: " . $tours->map(fn($t) => "{$t->name} starting at {$t->start_time}, price {$t->price}")->implode(', ') . ".
        Transports: " . $transports->map(fn($tr) => "{$tr->name} price {$tr->price}")->implode(', ') . ".
        Always be polite, speak like a local Balinese guide if possible, and answer in the same language as the user (Indonesian or English).
        If users ask for booking, tell them they can contact via WhatsApp.";

        try {
            // Menggunakan gemini-flash-latest agar selalu mendapat versi terbaru yang aktif
            $result = Gemini::generativeModel('gemini-flash-latest')->generateContent([
                $context,
                "User says: " . $message
            ]);

            return response()->json([
                'reply' => $result->text()
            ]);
        } catch (\Exception $e) {
            $errorMessage = $e->getMessage();
            \Log::error('Gemini Error: ' . $errorMessage);

            // Jika error kuota, berikan pesan yang lebih ramah
            if (str_contains($errorMessage, 'quota') || str_contains($errorMessage, '429')) {
                return response()->json(['error' => 'Server sedang sibuk (Quota limit). Mohon tunggu sebentar dan coba lagi.'], 500);
            }

            return response()->json(['error' => $errorMessage], 500);
        }
    }
}
