<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity - Alvia Joglo Experience</title>
    <link rel="icon" href="{{ Vite::asset('resources/images/logo-title.jpg') }}" type="image/jpg">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Inter:wght@400;500&family=Italianno&family=Lato:wght@800;900&family=Playfair+Display:ital,wght@0,400;0,500;0,700;1,400;1,500&family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

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

    <header class="activity-hero" style="background-image: url('{{ Vite::asset('resources/images/activity-hero.png') }}');">
        <div class="activity-hero-overlay"></div>
        <div class="activity-hero-box-outline">
            <div class="activity-hero-box">
                <h1 class="activity-hero-title">ACTIVITY</h1>
            </div>
        </div>
    </header>

    <section class="activity-section">

        <div class="activity-container">
            <div class="act-header">
                <div class="act-title-col">
                    <h2 class="act-title"><span class="thin-dash"></span>Rafting</h2>
                </div>
                <div class="act-info-col">
                    <h3>Outdoor Action</h3>
                    <p class="min-book">MINIMUM BOOKING 2 HOURS BEFORE</p>
                    <p class="price">Enjoy the river adventure for Rp <strong>900k</strong> / pax</p>
                </div>
            </div>

            <div class="act-content">
                <div class="act-text-box" style="background-image: linear-gradient(rgba(0,0,0,0.65), rgba(0,0,0,0.65)), url('{{ Vite::asset('resources/images/rafting-bg.png') }}');">
                    <h4>Rafting Adventure</h4>
                    <p>Immerse yourself in the thrill of nature with our exhilarating river rafting experience. Navigate through refreshing rapids while being surrounded by lush tropical jungles and breathtaking landscapes. Guided by our professionals, this adventure promises a perfect blend of excitement and safety, creating unforgettable memories during your holiday.</p>
                    <a href="#" class="act-btn">BOOK NOW</a>
                </div>
                <div class="act-images">
                    <img src="{{ Vite::asset('resources/images/rafting-1.png') }}" alt="Rafting 1">
                    <img src="{{ Vite::asset('resources/images/rafting-2.png') }}" alt="Rafting 2">
                    <img src="{{ Vite::asset('resources/images/rafting-3.png') }}" alt="Rafting 3">
                    <img src="{{ Vite::asset('resources/images/rafting-4.png') }}" alt="Rafting 4">
                </div>
            </div>
        </div>

        <div class="activity-container">
            <div class="act-header reverse">
                <div class="act-title-col">
                    <h2 class="act-title"><span class="thin-dash"></span>Tubing</h2>
                </div>
                <div class="act-info-col">
                    <h3>Water Leisure</h3>
                    <p class="min-book">MINIMUM BOOKING 2 HOURS BEFORE</p>
                    <p class="price">Enjoy the relaxing river ride for Rp <strong>500k</strong> / pax</p>
                </div>
            </div>

            <div class="act-content reverse">
                <div class="act-text-box" style="background-image: linear-gradient(rgba(0,0,0,0.65), rgba(0,0,0,0.65)), url('{{ Vite::asset('resources/images/tubing-bg.png') }}');">
                    <h4>River Tubing</h4>
                    <p>Float along the gentle currents and embrace the tranquility of Bali's hidden waterways with our river tubing experience. Drift peacefully through lush canyons and crystal-clear streams, allowing the soothing sounds of nature to wash away your stress. This relaxing yet captivating journey is the perfect way to connect with the island's pristine environment at your own pace.</p>
                    <a href="#" class="act-btn">BOOK NOW</a>
                </div>
                <div class="act-images">
                    <img src="{{ Vite::asset('resources/images/tubing-1.png') }}" alt="Tubing 1">
                    <img src="{{ Vite::asset('resources/images/tubing-2.png') }}" alt="Tubing 2">
                    <img src="{{ Vite::asset('resources/images/tubing-3.png') }}" alt="Tubing 3">
                    <img src="{{ Vite::asset('resources/images/tubing-4.png') }}" alt="Tubing 4">
                </div>
            </div>
        </div>

        <div class="activity-container">
            <div class="act-header atv-header">
                <div class="act-title-col">
                    <h2 class="act-title"><span class="thin-dash"></span> ATV Ride</h2>
                </div>
                <div class="act-info-col">
                    <h3>Adrenaline Rush</h3>
                    <p class="min-book">MINIMUM BOOKING 2 HOURS BEFORE</p>
                    <p class="price">Explore the track for Rp <strong>1.200k</strong>(single) or <strong>1.600k</strong>(tandem)</p>
                </div>
            </div>

            <div class="act-content-atv">
                <div class="act-atv-side">
                    <img src="{{ Vite::asset('resources/images/atv-1.png') }}" alt="ATV 1">
                    <img src="{{ Vite::asset('resources/images/atv-2.png') }}" alt="ATV 2">
                </div>

                <div class="act-text-box" style="background-image: linear-gradient(rgba(0,0,0,0.65), rgba(0,0,0,0.65)), url('{{ Vite::asset('resources/images/atv-bg.png') }}');">
                    <h4>ATV Ride Tour</h4>
                    <p>Gear up for an adrenaline-pumping journey through Bali's rugged terrains and lush landscapes with our ATV ride experience. Conquer challenging dirt trails, navigate through traditional villages, and immerse yourself in the island's untouched natural beauty. Suitable for both beginners and experienced riders, this thrilling adventure offers a unique and exhilarating way to explore the great outdoors.</p>
                    <a href="#" class="act-btn">BOOK NOW</a>
                </div>

                <div class="act-atv-side">
                    <img src="{{ Vite::asset('resources/images/atv-3.png') }}" alt="ATV 3">
                    <img src="{{ Vite::asset('resources/images/atv-4.png') }}" alt="ATV 4">
                </div>
            </div>
        </div>

        <div class="activity-container">
            <div class="act-header reverse">
                <div class="act-title-col">
                    <h2 class="act-title"><span class="thin-dash"></span>Cycling</h2>
                </div>
                <div class="act-info-col">
                    <h3>Rural Discovery</h3>
                    <p class="min-book">MINIMUM BOOKING 2 HOURS BEFORE</p>
                    <p class="price">Enjoy the scenic countryside ride for Rp <strong>500k</strong> / pax</p>
                </div>
            </div>

            <div class="act-content reverse">
                <div class="act-text-box" style="background-image: linear-gradient(rgba(0,0,0,0.65), rgba(0,0,0,0.65)), url('{{ Vite::asset('resources/images/tubing-bg.png') }}');">
                    <h4>Village Cycling</h4>
                    <p>Pedal your way through the serene heart of Bali and discover its hidden gems at a leisurely pace. Glide past sweeping rice terraces, ancient temples, and vibrant local villages where you can witness the authentic daily life of the island. This eco-friendly journey offers a peaceful yet engaging way to breathe in the fresh countryside air and connect deeply with nature.</p>
                    <a href="#" class="act-btn">BOOK NOW</a>
                </div>
                <div class="act-images">
                    <img src="{{ Vite::asset('resources/images/tubing-1.png') }}" alt="Tubing 1">
                    <img src="{{ Vite::asset('resources/images/tubing-2.png') }}" alt="Tubing 2">
                    <img src="{{ Vite::asset('resources/images/tubing-3.png') }}" alt="Tubing 3">
                    <img src="{{ Vite::asset('resources/images/tubing-4.png') }}" alt="Tubing 4">
                </div>
            </div>
        </div>

        <div class="activity-container">
            <div class="act-header">
                <div class="act-title-col">
                    <h2 class="act-title"><span class="thin-dash"></span>Swing</h2>
                </div>
                <div class="act-info-col">
                    <h3>Iconic Experience</h3>
                    <p class="min-book">MINIMUM BOOKING 2 HOURS BEFORE</p>
                    <p class="price">Soar above the lush jungle canopy for Rp <strong>450k</strong> / pax</p>
                </div>
            </div>

            <div class="act-content">
                <div class="act-text-box" style="background-image: linear-gradient(rgba(0,0,0,0.65), rgba(0,0,0,0.65)), url('{{ Vite::asset('resources/images/rafting-bg.png') }}');">
                    <h4>The Iconic Swing</h4>
                    <p>Elevate your Bali getaway with our iconic jungle swing experience. Soar high above the lush tropical canopy and take in breathtaking panoramic views of the surrounding valleys and verdant rice terraces. Feel the exhilarating rush of the wind as you capture unforgettable, picture perfect moments suspended beautifully in the heart of nature.</p>
                    <a href="#" class="act-btn">BOOK NOW</a>
                </div>
                <div class="act-images">
                    <img src="{{ Vite::asset('resources/images/rafting-1.png') }}" alt="Rafting 1">
                    <img src="{{ Vite::asset('resources/images/rafting-2.png') }}" alt="Rafting 2">
                    <img src="{{ Vite::asset('resources/images/rafting-3.png') }}" alt="Rafting 3">
                    <img src="{{ Vite::asset('resources/images/rafting-4.png') }}" alt="Rafting 4">
                </div>
            </div>
        </div>

    </section>

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
