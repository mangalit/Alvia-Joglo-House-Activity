<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Activity - Alvia Joglo Experience</title>
    <link rel="icon" href="{{ Vite::asset('resources/images/logo-title.jpg') }}" type="image/jpg">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Inter:wght@400;500;600;700&family=Italianno&family=Lato:wght@800;900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,600;1,700&family=Playfair+Display+SC:wght@400;700&family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

    <!-- =========================================================
         NAVBAR
         ========================================================= -->
    <nav class="navbar">
        <a href="{{ url('/') }}"  class="logo-container">
            <img src="{{ Vite::asset('resources/images/Logo.png') }}" alt="Alvia Logo" class="logo-img">
            <span class="logo-text">Experience</span>
        </a>
        <ul class="nav-links" id="navLinks">
            <li><a href="{{ url('/activity') }}">ACTIVITY</a></li>
            <li><a href="{{ url('/tracking') }}">ALVIA TRACKING TRIP</a></li>
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

    <!-- =========================================================
         1. TOUR HERO & THUMBNAIL GRID
         ========================================================= -->
    <header class="tour-hero-section" style="background-image: url('{{ Vite::asset('resources/images/tour-hero-bg.jpg') }}');">
        <div class="tour-hero-overlay"></div>

        <!-- Kotak Judul TOUR -->
        <div class="tour-hero-box-outline" data-aos="zoom-in">
            <div class="tour-hero-box">
                <h1 class="tour-hero-title">TOUR</h1>
            </div>
        </div>

        <!-- Grid 6 Destinasi -->
        <div class="tour-thumb-container">
            @foreach($tours as $index => $tour)
            <a href="#{{ \Illuminate\Support\Str::slug($tour->name) }}" class="tour-thumb-card" data-aos="fade-up" data-aos-delay="{{ ($index % 3) * 100 }}">
                <img src="{{ Vite::asset('resources/images/' . $tour->main_image) }}" alt="{{ $tour->name }}">
                <div class="thumb-title">{{ $tour->name }}</div>
            </a>
            @endforeach
        </div>
    </header>

    <!-- =========================================================
         2. DISCOVER MORE DIVIDER
         ========================================================= -->
    <div class="tour-divider" data-aos="fade-up">
        <h2>Discover More</h2>
    </div>

    <!-- =========================================================
         3. TOUR DETAIL ROWS (ZIG-ZAG)
         ========================================================= -->
    <section class="tour-details-wrapper">
        @foreach($tours as $tour)
        <!-- BARIS: {{ $tour->name }} -->
        <div id="{{ \Illuminate\Support\Str::slug($tour->name) }}" class="tour-row {{ $tour->is_reverse ? 'reverse' : '' }}" data-aos="fade-up">
            <div class="tour-collage" data-aos="{{ $tour->is_reverse ? 'fade-left' : 'fade-right' }}">
                @foreach($tour->images as $image)
                    <img src="{{ Vite::asset('resources/images/' . $image) }}" alt="{{ $tour->name }}">
                @endforeach
            </div>
            <div class="tour-info" data-aos="{{ $tour->is_reverse ? 'fade-right' : 'fade-left' }}">
                <h3>{{ $tour->name }}</h3>
                <div class="info-line"></div>
                <p>
                    {!! nl2br(e($tour->description)) !!}
                </p>
                <div class="start-time">-- START AT {{ $tour->start_time }} --</div>
                <div class="price">{{ $tour->price }}<span class="pax">/Pax</span></div>
                <a href="https://wa.me/6287899030306?text={{ urlencode("Hello Alvia Joglo Experience, I would like to book the " . $tour->name . ". Could you provide more information?") }}" target="_blank" class="btn-tour-book">Book now</a>
            </div>
        </div>
        @endforeach

    </section>

    <!-- FOOTER (SUDAH TERMASUK DALAM KERANGKA) -->
    <footer class="main-footer">
        <div class="footer-container">
            <!-- (Isi footer sesuai standar yang Anda berikan sebelumnya) -->
            <a href="{{ url('/') }}" class="footer-column brand-column">
                <img src="{{ Vite::asset('resources/images/Logo.png') }}" alt="Alvia Joglo Logo" class="footer-logo-img">
                <span class="footer-logo-text">Experience</span>
            </a>
            <div class="footer-column nav-column">
                <h4 class="footer-heading">Navigation</h4>
                <ul class="footer-nav-links">
                    <li><a href="{{ url('/activity') }}">ACTIVITY</a></li>
                    <li><a href="{{ url('/tracking') }}">ALVIA TRACKING TRIP</a></li>
                    <li><a href="{{ url('/tour') }}">TOUR ACTIVITY</a></li>
                    <li><a href="{{ url('/transport') }}">TRANSPORT</a></li>
                    <li><a href="{{ url('/about') }}">ABOUT & CONTACT</a></li>
                </ul>
            </div>
            <div class="footer-column contact-column">
                <h4 class="footer-heading">Contact Us</h4>
                <div class="contact-info">
                    <p class="address">Alvia Joglo House Experience.<br>Pulagan Tampaksiring, Gianyar, Bali<br>Post Code 80552</p>
                    <p class="details"><a href="https://wa.me/6287899030306" target="_blank">+62 878-9903-0306</a><br><a href="mailto:alviajoglohouse@gmail.com">alviajoglohouse@gmail.com</a></p>
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

