<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About & Contact - Alvia Joglo Experience</title>
    <link rel="icon" href="{{ Vite::asset('resources/images/logo-title.jpg') }}" type="image/jpg">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Kombinasi Font Anda sebelumnya + Font tambahan untuk halaman About (Playfair SC & Inter Bold) -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Inter:wght@400;500;600;700&family=Italianno&family=Lato:wght@800;900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,600;1,700&family=Playfair+Display+SC:wght@400;700&family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
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

    <!-- =========================================================
         1. ABOUT HERO SECTION
         ========================================================= -->
    <!-- Ganti 'about-hero-bg.jpg' dengan nama file foto pemandangan Anda -->
    <section class="about-hero" style="background-image: url('{{ Vite::asset('resources/images/about-hero-bg.jpg') }}');">
        <div class="about-hero-container">
            <!-- Kotak Kiri (Putih Semi-Transparan) -->
            <div class="hero-box left-box" data-aos="fade-right">
                <p>
                    Nestled in the tranquil heart of the island,<br>
                    Alvia Joglo House is more than just a luxurious<br>
                    stay it is a gateway to Bali's authentic soul.<br>
                    We are dedicated to curating unforgettable<br>
                    experiences, from serene morning treks to<br>
                    exhilarating river rafting. Let us guide you<br>
                    through the hidden gems and vibrant culture<br>
                    of our beloved island, creating memories that<br>
                    will last a lifetime.
                </p>
            </div>

            <!-- Kotak Kanan (Hitam Semi-Transparan) -->
            <div class="hero-box right-box" data-aos="fade-left">
                <h2>About Us</h2>
                <h3>ALVIA JOGLO HOUSE EXPERIENCE</h3>
                <p>
                    Discover the perfect harmony of traditional<br>
                    Balinese heritage and thrilling nature adventures.<br>
                    Your authentic journey begins here.
                </p>
            </div>
        </div>
    </section>

    <!-- =========================================================
         2. BLURRED DESCRIPTION SECTION
         ========================================================= -->
    <!-- Ganti 'about-blur-bg.jpg' dengan nama file gambar latar Anda -->
    <section class="about-description" style="background-image: url('{{ Vite::asset('resources/images/about-blur-bg.png') }}');">
        <div class="desc-overlay"></div> <!-- Layer untuk efek blur -->
        <div class="desc-container">
            <div class="desc-column" data-aos="fade-up" data-aos-delay="200">
                <h4>A Sanctuary of Tradition & Luxury</h4>
                <p>
                    Discover a hidden paradise where authentic Balinese architecture<br>
                    seamlessly with modern luxury. Nestled amidst expansive,<br>
                    emerald green rice terraces, our Joglo house offers a culturally<br>
                    rich retreat. Relax in your exclusive private pool, breathe in the<br>
                    fresh countryside air, and let the serene landscape become your<br>
                    living canvas for a truly tranquil holiday.
                </p>
            </div>
            <div class="desc-column" data-aos="fade-up" data-aos-delay="400">
                <h4>Curated Island Experiences</h4>
                <p>
                    Beyond the comfort of our relaxing rooms and locally inspired<br>
                    kitchen, Alvia is your gateway to Bali's authentic soul. Book your<br>
                    holiday or event with us and dive into our curated experiences.<br>
                    Whether you seek a peaceful getaway or thrilling adventures like<br>
                    morning treks and river rafting, your stay with us promises an<br>
                    enchanting escape from the ordinary.
                </p>
            </div>
        </div>
    </section>

    <!-- =========================================================
         3. CONTACT & MAP SECTION
         ========================================================= -->
    <!-- Ganti 'contact-bg.jpg' dengan nama gambar latar pura/temple Anda -->
    <section class="contact-section" style="background-image: url('{{ Vite::asset('resources/images/contact-bg.jpg') }}');">
        <div class="contact-overlay"></div>
        <div class="contact-container">

            <div class="contact-left" data-aos="fade-right">
                <p class="contact-subtitle">WE'D LOVE TO HEAR FROM YOU</p>
                <h2 class="contact-title">Contact Us</h2>
                <div class="contact-line"></div>
                <p class="contact-desc">
                    Ready to explore Bali's hidden gems?<br>
                    Reach out to customize your itinerary<br>
                    or book your activities directly.
                </p>

                <div class="contact-info-wrapper">
                    <!-- Info Alamat & Kontak -->
                    <div class="info-block">
                        <h4>REACH US THROUGH</h4>
                        <ul>
                            <li><i class="bi bi-geo-alt-fill"></i> <span>Tampaksiring<br>Gianyar<br>Bali, Indonesia 80552</span></li>
                            <li><a href="https://wa.me/6287899030306" target="_blank"><i class="bi bi-telephone-fill"></i> <span>+62 878-9903-0306</span></a></li>
                            <li><a href="mailto:alviajoglohouse@gmail.com"><i class="bi bi-envelope-fill"></i> <span>alviajoglohouse@gmail.com</span></a></li>
                        </ul>
                    </div>

                    <!-- Sosial Media -->
                    <div class="info-block social-block">
                        <h4>SOCIAL NETWORK</h4>
                        <ul>
                            <li><a href="https://www.instagram.com/alviajoglo/" target="_blank"><i class="bi bi-instagram"></i> <span>alviajoglo_house</span></a></li>
                            <li><a href="https://www.facebook.com/alvia.joglo" target="_blank"><i class="bi bi-facebook"></i> <span>alviajoglohouse</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Kolom Peta Kanan -->
            <div class="contact-right" data-aos="zoom-in" data-aos-delay="300">
                <div class="map-container">
                    <!-- Embed Google Maps (Silakan ganti titik kordinat iframe ini nanti dengan lokasi presisi Alvia Joglo) -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d3946.6799527686594!2d115.3103261!3d-8.4330564!3m2!1i1024!2i768!4f13.1!2m1!1salvia%20joglo%20house!5e0!3m2!1sen!2sid!4v1779814705433!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

        </div>
    </section>

    <!-- =========================================================
         FOOTER
         ========================================================= -->
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

