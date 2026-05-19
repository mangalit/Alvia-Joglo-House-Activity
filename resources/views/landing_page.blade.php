<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alvia Joglo House Experience</title>
    <link rel="icon" href="{{ Vite::asset('resources/images/logo-title.jpg') }}" type="image/jpg">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Inter:wght@400&family=Italianno&family=Lato:wght@800;900&family=Playfair+Display:ital,wght@0,500;0,800;1,400;1,700&family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>

    <nav class="navbar">
        <div class="logo-container">
            <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="Alvia Logo" class="logo-img">
            <span class="logo-text">Experience</span>
        </div>
        <ul class="nav-links" id="navLinks">
            <li><a href="#">ACTIVITY</a></li>
            <li><a href="#">ALVIA TRACKING TRIP</a></li>
            <li><a href="#">TOUR ACTIVITY</a></li>
            <li><a href="#">TRANSPORT</a></li>
            <li><a href="#">ABOUT & CONTACT</a></li>
        </ul>
        <div class="hamburger" id="hamburgerMenu">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>

    <header class="hero-section">
        <div class="hero-overlay"></div>

        <div class="hero-content">
            <p class="welcome-text">WELCOME TO</p>
            <h1 class="main-title">ALVIA JOGLO</h1>
            <h2 class="sub-title">Experience</h2>
            <p class="description">
                Escape to a beautiful stay surrounded by lush rice fields. Enjoy<br>
                the private pool utmost relaxation in the heart of natural<br>
                charm
            </p>
        </div>
    </header>


    <section class="about-section">
        <div class="about-container">
            <div class="about-box">
                <p><span class="dropcap">A</span>lvia Joglo House Experience: Authentic Balinese Activities Amidst the Beauty of Lush Rice Fields</p>
                <p>Step beyond a simple stay and immerse yourself in the Alvia Joglo House Experience. We offer curated activities where the richness of Balinese culture meets the serenity of nature. Our tailored packages invite you to connect deeply with the local heritage, perfectly complementing the traditional charm of our Joglo style house. Whether you are exploring the surrounding rice terraces or engaging in authentic cultural practices, let the tranquil landscapes of Bali be the backdrop to your unforgettable journey.</p>
            </div>
            <div class="about-box">
                <p>Connect with us directly via WhatsApp to book your personalized activities – and discover our exclusive experience packages – to make the most of your time at our beautiful Joglo.</p>
                <p>Find inspiration in every moment with the Alvia Joglo House Experience. Our carefully crafted activities provide a deeper connection to the island, from mastering local flavors in a traditional Balinese cooking session to guided walks through the vibrant green rice fields. Immerse yourself in the refreshing pace of rural Bali, surrounded by breathtaking views and genuine hospitality. With our dedicated experience packages, enjoy the perfect combination of adventure, cultural discovery, and the enchanting tranquility of Alvia Joglo House.</p>
            </div>
        </div>
    </section>


    <section class="experience-section">
        <div class="experience-container">
            <div class="experience-text">
                <h2 class="experience-title">Experience</h2>
                <p class="experience-desc">
                    Reconnect. Reflect. Revitalize.
                    Our experiences are more than
                    moments; they are a curated
                    journey into the heart of Bali's
                    timeless charm, designed to
                    deepen your connection to
                    nature and self.
                </p>
            </div>

            <div class="grid-container">
                <div class="grid-card card-activity">
                    <img src="{{ Vite::asset('resources/images/menu-activity.png') }}" alt="Activity">
                    <div class="card-top-overlay"><h3>Activity</h3></div>
                </div>
                <div class="grid-middle-wrapper">
                    <div class="grid-card card-tracking">
                        <img src="{{ Vite::asset('resources/images/menu-tracking.png') }}" alt="Tracking">
                        <div class="card-top-overlay"><h3>Tracking</h3></div>
                    </div>
                    <div class="grid-card card-transport">
                        <img src="{{ Vite::asset('resources/images/menu-transport.png') }}" alt="Transport">
                        <div class="card-top-overlay"><h3>Transport</h3></div>
                    </div>
                </div>
                <div class="grid-card card-tour">
                    <img src="{{ Vite::asset('resources/images/menu_tour.png') }}" alt="Tour">
                    <div class="card-top-overlay"><h3>Tour</h3></div>
                </div>
            </div>
        </div>
    </section>

        <div class="more-activity-wrapper">
            <a href="#" class="btn-more-activity">more activity</a>
        </div>
    </section>


    <section class="gallery-section">
        <div class="gallery-container">
            <div class="gallery-item"><img src="{{ Vite::asset('resources/images/gallery-atv.png') }}" alt="ATV Adventure"></div>
            <div class="gallery-item"><img src="{{ Vite::asset('resources/images/gallery-cycling.png') }}" alt="Cycling Tour"></div>
            <div class="gallery-item"><img src="{{ Vite::asset('resources/images/gallery-swing.png') }}" alt="Bali Swing"></div>
        </div>
    </section>


    <footer class="main-footer">
        <div class="footer-container">
            <div class="footer-column brand-column">
                <span class="logo-text">Experience</span>
            </div>

            <div class="footer-column">
                <h4>Navigation</h4>
                <ul>
                    <li><a href="#">ACTIVITY</a></li>
                    <li><a href="#">ALVIA TRACKING TRIP</a></li>
                    <li><a href="#">TOUR ACTIVITY</a></li>
                    <li><a href="#">TRANSPORT</a></li>
                    <li><a href="#">ABOUT & CONTACT</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h4>Contact Us</h4>
                <p>Alvia Joglo House Experience.<br>Pulagan Tampaksiring, Gianyar, Bali<br>Post Code 80552</p>
                <p class="footer-contact-detail">+62 878-9903-0306<br>alviajoglohouse@gmail.com</p>
            </div>

            <div class="footer-column social-column">
                <h4>Get Connected</h4>
                <div class="social-icons">
                    <a href="#">FB</a>
                    <a href="#">IG</a>
                    <a href="#">WA</a>
                </div>
                <a href="#" class="btn-book-now">BOOK NOW</a>
            </div>
        </div>
    </footer>

</body>
</html>
