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
            <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="Alvia Logo" class="logo-img">
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

    <!-- 1. HERO SECTION (Langsung menggunakan class activity-hero agar kotak bingkai gandanya persis kembar) -->
    <header class="activity-hero" style="background-image: url('{{ Vite::asset('resources/images/menu-transport.png') }}');">
        <div class="activity-hero-overlay"></div>
        <div class="activity-hero-box-outline">
            <div class="activity-hero-box">
                <h1 class="activity-hero-title">TRANSPORT</h1>
            </div>
        </div>
    </header>

    <!-- 2. TRANSPORT SERVICE SECTION (Kotak Eksklusif) -->
    <section class="transport-service-section">
        <div class="ts-container">
            <div class="ts-header">
                <h2>TRANSPORT SERVICE</h2>
                <div class="ts-line"></div>
                <p class="route">AIRPORT &mdash; UBUD AREA &mdash; TAMPAKSIRING AREA</p>
            </div>

            <div class="ts-pricing-wrapper">
                <!-- Opsi 1: Drop & Pick Up -->
                <div class="ts-card">
                    <h4>DROP & PICK UP</h4>
                    <div class="price">RP 350K</div>
                    <a href="#" class="btn-tour-book">BOOK NOW</a>
                </div>

                <!-- Garis Pemisah Vertikal -->
                <div class="ts-divider"></div>

                <!-- Opsi 2: Drop or Pick Up -->
                <div class="ts-card">
                    <h4>DROP OR PICK UP</h4>
                    <div class="price">RP 175K</div>
                    <a href="#" class="btn-tour-book">BOOK NOW</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. VEHICLE RENT TITLE -->
    <div class="tour-divider" style="background-color: #ffffff; padding-bottom: 20px;">
        <h2 style="font-family: 'Cinzel', serif; font-size: 60px; color: #000000; letter-spacing: 4px;">Motorcycle Rent</h2>
        <div class="info-line" style="width: 35%; height: 2px; background-color: #AC8F57; margin: 15px auto 0 auto;"></div>
    </div>

    <!-- 4. VEHICLE RENT CATALOG (ZIG-ZAG) -->
    <section class="transport-fleet-wrapper">

        <!-- Motor 1: N-Max (Gambar Kiri, Teks Kanan) -->
        <div class="tour-row">
            <div class="transport-image">
                <img src="{{ Vite::asset('resources/images/rent-nmax.jpg') }}" alt="Yamaha N-Max">
            </div>
            <div class="tour-info">
                <h3>YAMAHA N-MAX</h3>
                <div class="info-line"></div>
                <p>
                    PREMIUM MAXI SCOOTER<br>
                    COMFORTABLE RIDING POSITION<br>
                    HELMETS INCLUDED
                </p>
                <div class="price">RP 250K<span class="pax">/DAY</span></div>
                <a href="#" class="btn-tour-book">BOOK NOW</a>
            </div>
        </div>

        <!-- Motor 2: Scoopy (Teks Kiri, Gambar Kanan) -->
        <div class="tour-row reverse">
            <div class="transport-image">
                <img src="{{ Vite::asset('resources/images/rent-scoopy.jpg') }}" alt="Honda Scoopy">
            </div>
            <div class="tour-info">
                <h3>HONDA SCOOPY</h3>
                <div class="info-line"></div>
                <p>
                    CLASSIC & STYLISH DESIGN<br>
                    EASY TO RIDE<br>
                    HELMETS INCLUDED
                </p>
                <div class="price">RP 150K<span class="pax">/DAY</span></div>
                <a href="#" class="btn-tour-book">BOOK NOW</a>
            </div>
        </div>

    </section>

    <!-- FOOTER (100% Sama dengan halaman Activity) -->
    <footer class="main-footer">
        <div class="footer-container">
            <a href="{{ url('/') }}" class="footer-column brand-column">
                <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="Alvia Joglo Logo" class="footer-logo-img">
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
                    <p class="address">
                        Alvia Joglo House Experience.<br>
                        Pulagan Tampaksiring, Gianyar, Bali<br>
                        Post Code 80552
                    </p>
                    <p class="details">
                        <a href="tel:+6287899030306">+62 878-9903-0306</a><br>
                        <a href="mailto:alviajoglohouse@gmail.com">alviajoglohouse@gmail.com</a>
                    </p>
                </div>
            </div>
            <div class="footer-column social-column">
                <h4 class="footer-heading">Get Connected</h4>
                <div class="footer-social-icons">
                    <a href="#" target="_blank"><i class="bi bi-facebook"></i></a>
                    <a href="#" target="_blank"><i class="bi bi-instagram"></i></a>
                    <a href="#" target="_blank"><i class="bi bi-whatsapp"></i></a>
                </div>
                <a href="#" class="btn-footer-book">BOOK NOW</a>
            </div>
        </div>
    </footer>

</body>
</html>
