<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transport - Alvia Joglo Experience</title>
    <link rel="icon" href="{{ Vite::asset('resources/images/logo-title.jpg') }}" type="image/jpg">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Inter:wght@400;500&family=Italianno&family=Lato:wght@800;900&family=Playfair+Display:ital,wght@0,400;0,500;0,700;1,400;1,500&family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

    <!-- NAVBAR (100% Sama dengan halaman lain) -->
    <nav class="navbar">
        <a href="{{ url('/') }}" class="logo-container">
            <img src="{{ Vite::asset('resources/images/Logo.png') }}" alt="Alvia Logo" class="logo-img">
            <span class="logo-text">Experience</span>
        </a>
        <ul class="nav-links" id="navLinks">
            <li><a href="{{ url('/activity') }}">ACTIVITY</a></li>
            <li><a href="{{ url('/tracking') }}">ALVIA TREKKING TRIP</a></li>
            <li><a href="{{ url('/tour') }}">TOUR ACTIVITY</a></li>
            <li><a href="{{ url('/transport') }}">TRANSPORT</a></li>
            <li><a href="{{ url('/about') }}">ABOUT & CONTACT</a></li>
        </ul>
        <div class="hamburger" id="hamburgerMenu">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>

    <!-- 1. HERO SECTION -->
    <header class="activity-hero" style="background-image: url('{{ Vite::asset('resources/images/menu-transport.jpg') }}');">
        <div class="activity-hero-overlay"></div>
        <div class="activity-hero-box-outline" data-aos="zoom-in">
            <div class="activity-hero-box">
                <h1 class="activity-hero-title">TRANSPORT</h1>
            </div>
        </div>
    </header>

    <!-- 2. TRANSPORT SERVICE SECTION (Kotak Eksklusif) -->
    <section class="transport-service-section" data-aos="fade-up">
        <div class="ts-container">
            <div class="ts-header" data-aos="fade-up" data-aos-delay="200">
                <h2>TRANSPORT SERVICE</h2>
                <div class="ts-line"></div>
                <p class="route">AIRPORT &mdash; UBUD AREA &mdash; TAMPAKSIRING AREA</p>
            </div>

            <div class="ts-pricing-wrapper">
                @foreach($services as $index => $service)
                    <!-- Opsi {{ $index + 1 }}: {{ $service->name }} -->
                    <div class="ts-card" data-aos="fade-up" data-aos-delay="{{ 300 + ($index * 100) }}">
                        <h4>{{ $service->name }}</h4>
                        <div class="price">{{ $service->price }}</div>
                        <a href="https://wa.me/6287899030306?text={{ urlencode("Hello Alvia Joglo Experience, I would like to book the " . $service->name . " service. Could you provide more information?") }}" target="_blank" class="btn-tour-book">BOOK NOW</a>
                    </div>

                    @if(!$loop->last)
                    <!-- Garis Pemisah Vertikal -->
                    <div class="ts-divider" data-aos="fade-in" data-aos-delay="400"></div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    <!-- 3. VEHICLE RENT TITLE -->
    <div class="tour-divider" style="background-color: #ffffff; padding-bottom: 20px;" data-aos="fade-up">
        <h2 style="font-family: 'Cinzel', serif; font-size: 60px; color: #000000; letter-spacing: 4px;">Motorcycle Rent</h2>
        <div class="info-line" style="width: 35%; height: 2px; background-color: #AC8F57; margin: 15px auto 0 auto;"></div>
    </div>

    <!-- 4. VEHICLE RENT CATALOG (ZIG-ZAG) -->
    <section class="transport-fleet-wrapper">

        @foreach($rents as $rent)
        <!-- Motor: {{ $rent->name }} -->
        <div class="tour-row {{ $rent->is_reverse ? 'reverse' : '' }}" data-aos="fade-up">
            <div class="transport-image" data-aos="{{ $rent->is_reverse ? 'fade-left' : 'fade-right' }}">
                <img src="{{ Vite::asset('resources/images/' . $rent->image) }}" alt="{{ $rent->name }}">
            </div>
            <div class="tour-info" data-aos="{{ $rent->is_reverse ? 'fade-right' : 'fade-left' }}">
                <h3>{{ $rent->name }}</h3>
                <div class="info-line"></div>
                <p>
                    {!! nl2br(e($rent->description)) !!}
                </p>
                <div class="price">{{ $rent->price }}<span class="pax">/DAY</span></div>
                <a href="https://wa.me/6287899030306?text={{ urlencode("Hello Alvia Joglo Experience, I would like to rent the " . $rent->name . ". Could you provide more information?") }}" target="_blank" class="btn-tour-book">BOOK NOW</a>
            </div>
        </div>
        @endforeach

    </section>

    <!-- FOOTER (100% Sama dengan halaman Activity) -->
    <footer class="main-footer">
        <div class="footer-container">
            <a href="{{ url('/') }}" class="footer-column brand-column">
                <img src="{{ Vite::asset('resources/images/Logo.png') }}" alt="Alvia Joglo Logo" class="footer-logo-img">
                <span class="footer-logo-text">Experience</span>
            </a>
            <div class="footer-column nav-column">
                <h4 class="footer-heading">Navigation</h4>
                <ul class="footer-nav-links">
                    <li><a href="{{ url('/activity') }}">ACTIVITY</a></li>
                    <li><a href="{{ url('/tracking') }}">ALVIA TREKKING TRIP</a></li>
                    <li><a href="{{ url('/tour') }}">TOUR ACTIVITY</a></li>
                    <li><a href="{{ url('/transport') }}">TRANSPORT</a></li>
                    <li><a href="{{ url('/about') }}">ABOUT & CONTACT</a></li>
                </ul>
            </div>
            <div class="footer-column contact-column">
                <h4 class="footer-heading">Contact Us</h4>
                <div class="contact-info">
                    <p class="address">
                        Alvia Joglo House Experience.<br>
                        Pulagan Tampaksiring, Gianyar, Bali<br>
                        Post Code 80552
                    </p>
                    <p class="details">
                        <a href="https://wa.me/6287899030306" target="_blank">+62 878-9903-0306</a><br>
                        <a href="mailto:alviajoglohouse@gmail.com">alviajoglohouse@gmail.com</a>
                    </p>
                </div>
            </div>
            <div class="footer-column social-column">
                <h4 class="footer-heading">Get Connected</h4>
                <div class="footer-social-icons">
                    <a href="https://www.facebook.com/alvia.joglo" target="_blank"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/alviajoglo/" target="_blank"><i class="bi bi-instagram"></i></a>
                    <a href="https://wa.me/6287899030306" target="_blank"><i class="bi bi-whatsapp"></i></a>
                </div>
                <a href="https://wa.me/6287899030306?text={{ urlencode("Hello Alvia Joglo Experience, I'm interested in your services. Can you help me plan my activities and tours in Bali?") }}" target="_blank" class="btn-footer-book">BOOK NOW</a>
            </div>
        </div>
    </footer>

    @include('chatbot_widget')
    </body>
    </html>

