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

    <header class="activity-hero" style="background-image: url('{{ Vite::asset('resources/images/activity-hero.jpg') }}');">
        <div class="activity-hero-overlay"></div>
        <div class="activity-hero-box-outline" data-aos="zoom-in">
            <div class="activity-hero-box">
                <h1 class="activity-hero-title">ACTIVITY</h1>
            </div>
        </div>
    </header>

    <section class="activity-section">

        @foreach($activities as $activity)
        <div class="activity-container" data-aos="fade-up">
            <div class="act-header {{ $activity->is_reverse ? 'reverse' : '' }} {{ $activity->name == 'ATV Ride' ? 'atv-header' : '' }}">
                <div class="act-title-col">
                    <h2 class="act-title"><span class="thin-dash"></span>{{ $activity->name }}</h2>
                </div>
                <div class="act-info-col">
                    <h3>{{ $activity->category }}</h3>
                    <p class="min-book">{{ $activity->min_booking_info }}</p>
                    <p class="price">{!! preg_replace('/(\d[\d.]*k)/', '<strong>$1</strong>', $activity->price_info) !!}</p>
                </div>
            </div>

            @if($activity->name == 'ATV Ride')
            <div class="act-content-atv">
                <div class="act-atv-side">
                    @if(isset($activity->images[0])) <img src="{{ Vite::asset('resources/images/' . $activity->images[0]) }}" alt="{{ $activity->name }} 1"> @endif
                    @if(isset($activity->images[1])) <img src="{{ Vite::asset('resources/images/' . $activity->images[1]) }}" alt="{{ $activity->name }} 2"> @endif
                </div>

                <div class="act-text-box" style="background-image: linear-gradient(rgba(0,0,0,0.65), rgba(0,0,0,0.65)), url('{{ Vite::asset('resources/images/' . $activity->bg_image) }}');">
                    <h4>{{ $activity->card_title }}</h4>
                    <p>{{ $activity->description }}</p>
                    <a href="https://wa.me/6287899030306?text={{ urlencode("Hello Alvia Joglo Experience, I would like to book the " . $activity->name . " activity. Could you provide more information?") }}" target="_blank" class="act-btn">BOOK NOW</a>
                </div>

                <div class="act-atv-side">
                    @if(isset($activity->images[2])) <img src="{{ Vite::asset('resources/images/' . $activity->images[2]) }}" alt="{{ $activity->name }} 3"> @endif
                    @if(isset($activity->images[3])) <img src="{{ Vite::asset('resources/images/' . $activity->images[3]) }}" alt="{{ $activity->name }} 4"> @endif
                </div>
            </div>
            @else
            <div class="act-content {{ $activity->is_reverse ? 'reverse' : '' }}">
                <div class="act-text-box" style="background-image: linear-gradient(rgba(0,0,0,0.65), rgba(0,0,0,0.65)), url('{{ Vite::asset('resources/images/' . $activity->bg_image) }}');">
                    <h4>{{ $activity->card_title }}</h4>
                    <p>{{ $activity->description }}</p>
                    <a href="https://wa.me/6287899030306?text={{ urlencode("Hello Alvia Joglo Experience, I would like to book the " . $activity->name . " activity. Could you provide more information?") }}" target="_blank" class="act-btn">BOOK NOW</a>
                </div>
                <div class="act-images">
                    @foreach($activity->images as $image)
                        <img src="{{ Vite::asset('resources/images/' . $image) }}" alt="{{ $activity->name }}">
                    @endforeach
                </div>
            </div>
            @endif
        </div>
        @endforeach

    </section>

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

