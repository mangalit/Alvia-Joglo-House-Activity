<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alvia Local Experiences</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,700;1,400&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Montserrat', sans-serif; background-color: #FDFBF7; color: #3A2C24; }
        h1, h2, h3 { font-family: 'Lora', serif; }
    </style>
</head>
<body>

    <header class="py-12 text-center px-4">
        <h2 class="text-sm tracking-widest uppercase mb-2">Alvia Joglo House</h2>
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Local Experiences</h1>
        <p class="max-w-2xl mx-auto text-gray-600 italic text-sm md:text-base">
            "Minimum booking 2 hours before activity. All tour programs start at 8 AM unless specified."
        </p> [cite: 5, 20]
    </header>

    <div class="container mx-auto px-4 pb-20">

        <section class="mb-16">
            <h2 class="text-2xl border-b border-stone-300 pb-2 mb-8">Alvia Tracking Trip</h2> [cite: 11]
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach($data['tracking'] as $item)
                <div class="bg-white rounded-lg shadow-sm border border-stone-200 overflow-hidden hover:shadow-md transition">
                    <div class="h-48 bg-stone-200"></div> <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-bold">{{ $item['title'] }}</h3>
                            <span class="text-stone-600 font-semibold">{{ $item['price'] }}</span>
                        </div>
                        <p class="text-sm text-gray-500 mb-4">{{ $item['desc'] }}</p>
                        <div class="flex items-center text-xs text-stone-500 italic mb-6">
                            <span>Includes: {{ $item['include'] }}</span>
                        </div>
                        <a href="https://wa.me/6287899030306" class="block w-full text-center bg-[#25D366] text-white py-3 rounded font-semibold hover:bg-green-600">Book via WhatsApp</a>
                    </div>
                </div>
                @endforeach
            </div>
        </section>

        <section class="mb-16">
            <h2 class="text-2xl border-b border-stone-300 pb-2 mb-8">Adventure & Tour Programs</h2> [cite: 4, 19]
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach(array_merge($data['activities'], $data['tours']) as $item)
                <div class="bg-white p-6 rounded-lg border border-stone-100 shadow-sm">
                    <h3 class="font-bold text-lg mb-1">{{ $item['title'] }}</h3>
                    <p class="text-sm text-stone-500 mb-2">{{ $item['desc'] ?? 'Authentic Bali experience' }}</p>
                    <div class="flex justify-between items-center mt-4 pt-4 border-t border-stone-50">
                        <span class="font-bold text-stone-700">{{ $item['price'] }}</span>
                        <a href="https://wa.me/6287899030306" class="text-green-600 font-bold text-sm">BOOK NOW →</a>
                    </div>
                </div>
                @endforeach
            </div>
        </section>

        <section class="grid grid-cols-1 md:grid-cols-2 gap-12 bg-stone-100 p-8 rounded-2xl">
            <div>
                <h2 class="text-xl font-bold mb-4 uppercase tracking-wider">Transport Service</h2> [cite: 2]
                <ul class="space-y-3 text-sm">
                    <li class="flex justify-between border-b border-stone-200 pb-2">
                        <span>Drop & Pickup Ubud Area</span>
                        <span class="font-bold">350k</span>
                    </li> [cite: 3]
                    <li class="flex justify-between border-b border-stone-200 pb-2">
                        <span>Pickup Only / Drop Only Ubud Area</span>
                        <span class="font-bold">175k</span>
                    </li> [cite: 3]
                </ul>
            </div>
            <div>
                <h2 class="text-xl font-bold mb-4 uppercase tracking-wider">Motorcycle Rent</h2> [cite: 34]
                <div class="grid grid-cols-2 gap-4">
                    @foreach($data['rentals'] as $bike)
                    <div class="bg-white p-4 rounded text-center shadow-sm">
                        <p class="text-xs uppercase text-stone-400">Model</p>
                        <p class="font-bold">{{ $bike['name'] }}</p>
                        <p class="text-stone-600 mt-2">{{ $bike['price'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <footer class="mt-20 text-center border-t border-stone-200 pt-10">
            <p class="text-sm text-stone-500 mb-2">Need more info? Contact our host:</p>
            <p class="font-bold">+62 878-9903-0306 (Alvia Joglo House)</p> [cite: 37]
            <p class="font-bold">+62 878-6221-3151 (Wayan Remy)</p> [cite: 38]
        </footer>
    </div>

</body>
</html>
