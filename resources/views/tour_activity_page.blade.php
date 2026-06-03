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

    <!-- =========================================================
         1. TOUR HERO & THUMBNAIL GRID
         ========================================================= -->
    <header class="tour-hero-section" style="background-image: url('{{ Vite::asset('resources/images/tour-hero-bg.png') }}');">
        <div class="tour-hero-overlay"></div>

        <!-- Kotak Judul TOUR -->
        <div class="tour-hero-box-outline">
            <div class="tour-hero-box">
                <h1 class="tour-hero-title">TOUR</h1>
            </div>
        </div>

        <!-- Grid 6 Destinasi -->
        <div class="tour-thumb-container">
            <div class="tour-thumb-card"><img src="{{ Vite::asset('resources/images/tour-art.jpg') }}" alt="Art Village"><div class="thumb-title">Art Village</div></div>
            <div class="tour-thumb-card"><img src="{{ Vite::asset('resources/images/tour-ubud.jpg') }}" alt="Ubud"><div class="thumb-title">Ubud</div></div>
            <div class="tour-thumb-card"><img src="{{ Vite::asset('resources/images/tour-east.png') }}" alt="East Coast"><div class="thumb-title">East Coast Bali</div></div>
            <div class="tour-thumb-card"><img src="{{ Vite::asset('resources/images/tour-west.jpg') }}" alt="West Bali"><div class="thumb-title">West Bali</div></div>
            <div class="tour-thumb-card"><img src="{{ Vite::asset('resources/images/tour-south.jpg') }}" alt="South Bali"><div class="thumb-title">South Bali</div></div>
            <div class="tour-thumb-card"><img src="{{ Vite::asset('resources/images/tour-north.jpg') }}" alt="North Bali"><div class="thumb-title">North Bali</div></div>
        </div>
    </header>

    <!-- =========================================================
         2. DISCOVER MORE DIVIDER
         ========================================================= -->
    <div class="tour-divider">
        <h2>Discover More</h2>
    </div>

    <!-- =========================================================
         3. TOUR DETAIL ROWS (ZIG-ZAG)
         ========================================================= -->
    <section class="tour-details-wrapper">
        <!-- BARIS 1: Art Village (Gambar Kiri, Teks Kanan) -->
        <div class="tour-row">
            <div class="tour-collage">
                <img src="{{ Vite::asset('resources/images/tour-art.jpg') }}" alt="Art">
                <img src="{{ Vite::asset('resources/images/art-2.jpg') }}" alt="Art">
                <img src="{{ Vite::asset('resources/images/art-3.jpg') }}" alt="Art">
                <img src="{{ Vite::asset('resources/images/art-4.jpg') }}" alt="Art">
            </div>
            <div class="tour-info">
                <h3>Art Village Tour</h3>
                <div class="info-line"></div>
                <p>
                    Barong & Keris Dance<br>
                    Gold & Silver Smith Production<br>
                    Coffee Plantation<br>
                    Painting<br>
                    Wood carving
                </p>
                <div class="start-time">-- START AT 8 AM --</div>
                <div class="price">$40 USD<span class="pax">/Pax</span></div>
                <a href="#" class="btn-tour-book">Book now</a>
            </div>
        </div>

        <!-- BARIS 2: Ubud Tour (Teks Kiri, Gambar Kanan karena ada kelas 'reverse') -->
        <div class="tour-row reverse">
            <!-- KUNCI: Tetap panggil collage duluan! -->
            <div class="tour-collage">
                <img src="{{ Vite::asset('resources/images/ubud-1.jpg') }}" alt="Ubud">
                <img src="{{ Vite::asset('resources/images/ubud-2.jpg') }}" alt="Ubud">
                <img src="{{ Vite::asset('resources/images/ubud-3.jpg') }}" alt="Ubud">
                <img src="{{ Vite::asset('resources/images/ubud-4.jpg') }}" alt="Ubud">
            </div>
            <div class="tour-info">
                <h3>Ubud tour</h3>
                <div class="info-line"></div>
                <p>
                    Monkey forest<br>
                    Waterfall<br>
                    Coffee Plantation<br>
                    Temple<br>
                    Rice terrace
                <div class="start-time">-- START AT 8 AM --</div>
                <div class="price">$40 USD<span class="pax">/Pax</span></div>
                <a href="#" class="btn-tour-book">Book Now</a>
            </div>
        </div>

        <!-- Baris 3: East Coast (Gambar Kiri, Teks Kanan) -->
        <div class="tour-row">
            <div class="tour-collage">
                <img src="{{ Vite::asset('resources/images/tour-east.png') }}" alt="east">
                <img src="{{ Vite::asset('resources/images/east-2.jpg') }}" alt="east">
                <img src="{{ Vite::asset('resources/images/east-3.jpg') }}" alt="east">
                <img src="{{ Vite::asset('resources/images/east-4.jpg') }}" alt="east">
            </div>
            <div class="tour-info">
                <h3>East Coast Bali Tour</h3>
                <div class="info-line"></div>
                <p>
                    Lempuyang (Gate of Heaven)<br>
                    Tirta Gangga Water Palace<br>
                    Coffee Plantation<br>
                    Virgin Beach<br>
                    Waterfall
                </p>
                <div class="start-time">-- START AT 8 AM --</div>
                <div class="price">$40 USD<span class="pax">/Pax</span></div>
                <a href="#" class="btn-tour-book">BOOK NOW</a>
            </div>
        </div>

        <!-- BARIS 2: Ubud Tour (Teks Kiri, Gambar Kanan karena ada kelas 'reverse') -->
        <div class="tour-row reverse">
            <!-- KUNCI: Tetap panggil collage duluan! -->
            <div class="tour-collage">
                <img src="{{ Vite::asset('resources/images/west-1.jpg') }}" alt="west">
                <img src="{{ Vite::asset('resources/images/west-2.jpg') }}" alt="west">
                <img src="{{ Vite::asset('resources/images/west-3.jpg') }}" alt="west">
                <img src="{{ Vite::asset('resources/images/west-4.jpg') }}" alt="west">
            </div>
            <div class="tour-info">
                <h3>West bali Tour</h3>
                <div class="info-line"></div>
                <p>
                    Taman Ayun the Royal Temple<br>
                    Jatiluwih UNESCO Rice Field<br>
                    Coffee Plantation<br>
                    Lake Bratan Temple<br>
                    Handara Gate<br>
                    Hidden Hill Photo Spots<br>
                    Waterfall<br>
                    Tanah Lot Temple
                </p>
                <div class="start-time">-- START AT 8 AM --</div>
                <div class="price">$40 USD<span class="pax">/Pax</span></div>
                <a href="#" class="btn-tour-book">BOOK NOW</a>
            </div>
        </div>

        <!-- Baris 5: South Bali (Gambar Kiri, Teks Kanan) -->
        <div class="tour-row">
            <div class="tour-collage">
                <img src="{{ Vite::asset('resources/images/south-1.jpg') }}" alt="south">
                <img src="{{ Vite::asset('resources/images/south-2.jpg') }}" alt="south">
                <img src="{{ Vite::asset('resources/images/tour-south.jpg') }}" alt="south">
                <img src="{{ Vite::asset('resources/images/south-4.jpg') }}" alt="south">
            </div>
            <div class="tour-info">
                <h3>South Bali Tour</h3>
                <div class="info-line"></div>
                <p>
                    Water Sports<br>
                    Coffee Plantation<br>
                    Padang-Padang Beach<br>
                    Uluwatu Temple Kecak & Fire Dance
                </p>
                <div class="start-time">-- START AT 8 AM --</div>
                <div class="price">$40 USD<span class="pax">/Pax</span></div>
                <a href="#" class="btn-tour-book">BOOK NOW</a>
            </div>
        </div>

        <!-- BARIS 2: Ubud Tour (Teks Kiri, Gambar Kanan karena ada kelas 'reverse') -->
        <div class="tour-row reverse">
            <!-- KUNCI: Tetap panggil collage duluan! -->
            <div class="tour-collage">
                <img src="{{ Vite::asset('resources/images/tour-north.jpg') }}" alt="north">
                <img src="{{ Vite::asset('resources/images/north-2.jpg') }}" alt="north">
                <img src="{{ Vite::asset('resources/images/north-3.jpg') }}" alt="north">
                <img src="{{ Vite::asset('resources/images/north-4.png') }}" alt="north">
            </div>
            <div class="tour-info">
                <h3>North Bali tour</h3>
                <div class="info-line"></div>
                <p>
                    Lovina Dolphin Tour<br>
                    Buddhist Temple (Brahma Vihara Arama)<br>
                    Holy Hot Spring
                </p>
                <div class="start-time">-- START AT 8 AM --</div>
                <div class="price">$40 USD<span class="pax">/Pax</span></div>
                <a href="#" class="btn-tour-book">BOOK NOW</a>
            </div>
        </div>

    </section>

    <!-- FOOTER (SUDAH TERMASUK DALAM KERANGKA) -->
    <footer class="main-footer">
        <div class="footer-container">
            <!-- (Isi footer sesuai standar yang Anda berikan sebelumnya) -->
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
                    <p class="address">Alvia Joglo House Experience.<br>Pulagan Tampaksiring, Gianyar, Bali<br>Post Code 80552</p>
                    <p class="details"><a href="#">+62 878-9903-0306</a><br><a href="mailto:alviajoglohouse@gmail.com">alviajoglohouse@gmail.com</a></p>
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
