<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alvia Joglo Experience</title>
    <link rel="icon" href="{{ Vite::asset('resources/images/logo-title.jpg') }}" type="image/jpg">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Inter:wght@400&family=Italianno&family=Lato:wght@800;900&family=Playfair+Display:ital,wght@0,500;0,800;1,400;1,700&family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        /* Fix for browser autofill background */
        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus,
        input:-webkit-autofill:active {
            -webkit-box-shadow: 0 0 0 30px #0c0c0c inset !important;
            -webkit-text-fill-color: #fff !important;
            transition: background-color 5000s ease-in-out 0s;
        }

        /* Ensure focus state stays luxury */
        input:focus, select:focus, textarea:focus {
            background-color: rgba(172, 143, 87, 0.05) !important;
            outline: none !important;
        }

        .filter-btn.active {
            color: #fff !important;
            border-bottom-color: #AC8F57 !important;
        }
    </style>
</head>
<body>

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

    <header class="hero-section">
        <div class="hero-overlay"></div>

        <div class="hero-content" data-aos="fade-up">
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
            <div class="about-box" data-aos="fade-up" data-aos-delay="100">
                <p><span class="dropcap">A</span>lvia Joglo House Experience: Authentic Balinese Activities Amidst the Beauty of Lush Rice Fields</p>
                <p>Step beyond a simple stay and immerse yourself in the Alvia Joglo House Experience. We offer curated activities where the richness of Balinese culture meets the serenity of nature. Our tailored packages invite you to connect deeply with the local heritage, perfectly complementing the traditional charm of our Joglo style house. Whether you are exploring the surrounding rice terraces or engaging in authentic cultural practices, let the tranquil landscapes of Bali be the backdrop to your unforgettable journey.</p>
            </div>
            <div class="about-box" data-aos="fade-up" data-aos-delay="300">
                <p>Connect with us directly via WhatsApp to book your personalized activities – and discover our exclusive experience packages – to make the most of your time at our beautiful Joglo.</p>
                <p>Find inspiration in every moment with the Alvia Joglo House Experience. Our carefully crafted activities provide a deeper connection to the island, from mastering local flavors in a traditional Balinese cooking session to guided walks through the vibrant green rice fields. Immerse yourself in the refreshing pace of rural Bali, surrounded by breathtaking views and genuine hospitality. With our dedicated experience packages, enjoy the perfect combination of adventure, cultural discovery, and the enchanting tranquility of Alvia Joglo House.</p>
            </div>
        </div>
    </section>


    <section class="experience-section">
        <div class="experience-container">
            <div class="experience-text" data-aos="fade-right">
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
                <a href="{{ url('/activity') }}" class="grid-card card-activity" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ Vite::asset('resources/images/menu-activity.jpg') }}" alt="Activity">
                    <div class="card-top-overlay"><h3>Activity</h3></div>
                </a>

                <div class="grid-middle-wrapper">
                    <a href="{{ url('/tracking') }}" class="grid-card card-tracking" data-aos="zoom-in" data-aos-delay="200">
                        <img src="{{ Vite::asset('resources/images/menu-tracking.jpg') }}" alt="Tracking">
                        <div class="card-top-overlay"><h3>Tracking</h3></div>
                    </a>

                    <a href="{{ url('/transport') }}" class="grid-card card-transport" data-aos="zoom-in" data-aos-delay="300">
                        <img src="{{ Vite::asset('resources/images/menu-transport.jpg') }}" alt="Transport">
                        <div class="card-top-overlay"><h3>Transport</h3></div>
                    </a>
                </div>

                <a href="{{ url('/tour') }}" class="grid-card card-tour" data-aos="zoom-in" data-aos-delay="400">
                    <img src="{{ Vite::asset('resources/images/menu-tour.jpg') }}" alt="Tour">
                    <div class="card-top-overlay"><h3>Tour</h3></div>
                </a>
            </div>
        </div>
    </section>

    <!-- LUXURY RATING SYSTEM -->
    <section class="rating-section" data-aos="fade-up" style="background-color: #000; padding: 100px 0; font-family: 'Cinzel', serif; color: #fff; overflow: hidden;">
        <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
            <div class="rating-header" style="text-align: center; margin-bottom: 50px;">
                <h2 style="font-size: 48px; letter-spacing: 5px; margin-bottom: 10px;">GUEST REVIEWS</h2>
                <div style="width: 100px; height: 2px; background-color: #AC8F57; margin: 0 auto;"></div>
            </div>

            <!-- ENHANCED FILTER SYSTEM -->
            <div class="luxury-filters" style="margin-bottom: 50px; text-align: center;">
                <!-- Category Level -->
                <div class="category-tabs" style="display: flex; justify-content: center; gap: 30px; margin-bottom: 25px; font-family: 'Montserrat', sans-serif;">
                    <button onclick="changeCategory('all', this)" class="cat-btn active" style="background: none; border: none; color: #fff; cursor: pointer; letter-spacing: 2px; border-bottom: 2px solid #AC8F57; padding-bottom: 5px; transition: all 0.3s;">ALL</button>
                    @php
                        $allProductCategories = [
                            'activity' => ['label' => 'ACTIVITIES', 'items' => $activities],
                            'tracking' => ['label' => 'TRACKING', 'items' => collect($trackingTrips)->map(fn($t) => (object)$t)],
                            'tour' => ['label' => 'TOURS', 'items' => $tours],
                            'transport' => ['label' => 'TRANSPORT', 'items' => $transports]
                        ];
                    @endphp
                    @foreach($allProductCategories as $type => $cat)
                        <button onclick="changeCategory('{{ $type }}', this)" class="cat-btn" style="background: none; border: none; color: #888; cursor: pointer; letter-spacing: 2px; border-bottom: 2px solid transparent; padding-bottom: 5px; transition: all 0.3s;">{{ $cat['label'] }}</button>
                    @endforeach
                </div>

                <!-- Product Level (Dynamic) -->
                <div id="product-sub-filters" style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap; font-family: 'Montserrat', sans-serif; min-height: 40px;">
                    <!-- Will be populated by JS -->
                </div>
            </div>

            <!-- REVIEWS SLIDER -->
            <div style="position: relative; margin-bottom: 80px;">
                <div id="reviews-slider" style="display: flex; gap: 30px; transition: transform 0.5s ease; padding: 10px 0;">
                    @foreach($reviews as $review)
                    <div class="review-card-wrapper" data-type="{{ $review->activity_type }}" data-id="{{ $review->activity_id }}" style="flex: 0 0 350px;">
                        <div class="review-card" style="background: rgba(255,255,255,0.05); border: 1px solid #AC8F57; padding: 40px; height: 100%; display: flex; flex-direction: column;">
                            <div class="stars" style="color: #AC8F57; margin-bottom: 20px;">
                                @for($i=1; $i<=5; $i++)
                                    <i class="bi bi-star{{ $i <= $review->rating ? '-fill' : '' }}"></i>
                                @endfor
                            </div>
                            <p style="font-family: 'Playfair Display', serif; font-style: italic; font-size: 16px; line-height: 1.6; margin-bottom: 30px; flex-grow: 1;">
                                "{{ $review->comment }}"
                            </p>
                            <div class="reviewer-info">
                                <h4 style="margin: 0; font-size: 18px; letter-spacing: 2px;">{{ strtoupper($review->customer_name) }}</h4>
                                <span style="font-family: 'Montserrat', sans-serif; font-size: 10px; color: #AC8F57;">
                                    FOR:
                                    @php
                                        $pName = '';
                                        if($review->activity_type == 'activity') $pName = $activities->find($review->activity_id)?->name;
                                        elseif($review->activity_type == 'tour') $pName = $tours->find($review->activity_id)?->name;
                                        elseif($review->activity_type == 'transport') $pName = $transports->find($review->activity_id)?->name;
                                        elseif($review->activity_type == 'tracking') {
                                            $track = collect($trackingTrips)->firstWhere('id', $review->activity_id);
                                            $pName = $track['name'] ?? '';
                                        }
                                    @endphp
                                    {{ strtoupper($pName) }}
                                </span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <button onclick="prevSlide()" id="prevBtn" style="position: absolute; left: -25px; top: 50%; transform: translateY(-50%); background: #AC8F57; border: none; color: #fff; width: 50px; height: 50px; border-radius: 50%; cursor: pointer; z-index: 10; display: flex; align-items: center; justify-content: center;"><i class="bi bi-chevron-left"></i></button>
                <button onclick="nextSlide()" id="nextBtn" style="position: absolute; right: -25px; top: 50%; transform: translateY(-50%); background: #AC8F57; border: none; color: #fff; width: 50px; height: 50px; border-radius: 50%; cursor: pointer; z-index: 10; display: flex; align-items: center; justify-content: center;"><i class="bi bi-chevron-right"></i></button>
            </div>

            <!-- OVERALL RATING SECTION -->
            <div class="overall-rating-dashboard" style="margin-bottom: 80px;">
                <div style="text-align: center; margin-bottom: 40px;">
                    <h3 style="font-size: 32px; letter-spacing: 3px;">OVERALL RATING</h3>
                    <div style="width: 60px; height: 1px; background-color: #AC8F57; margin: 10px auto;"></div>
                </div>

                <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(220px, 1fr)); gap: 15px;">
                    @foreach($allProductCategories as $type => $cat)
                        @foreach($cat['items'] as $item)
                            @php
                                $pAvg = $reviews->where('activity_type', $type)->where('activity_id', $item->id)->avg('rating') ?: 0;
                                $pCount = $reviews->where('activity_type', $type)->where('activity_id', $item->id)->count();
                            @endphp
                            <div class="product-avg-card" style="background: rgba(172, 143, 87, 0.05); border: 1px solid rgba(172, 143, 87, 0.2); padding: 15px; border-radius: 4px; text-align: center;">
                                <div style="font-family: 'Montserrat', sans-serif; font-size: 9px; color: #AC8F57; letter-spacing: 1px; margin-bottom: 5px;">{{ $cat['label'] }}</div>
                                <div style="font-size: 14px; letter-spacing: 1px; margin-bottom: 8px; height: 34px; display: flex; align-items: center; justify-content: center;">{{ strtoupper($item->name) }}</div>
                                <div style="color: #AC8F57; font-size: 18px; font-weight: bold;">
                                    {{ number_format($pAvg, 1) }} <span style="font-size: 14px;">★</span>
                                </div>
                                <div style="font-family: 'Montserrat', sans-serif; font-size: 9px; color: #666; margin-top: 5px;">{{ $pCount }} REVIEWS</div>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>

            <!-- SUBMIT REVIEW FORM -->
            <div class="submit-review-container" style="max-width: 800px; margin: 0 auto; border: 1px solid #AC8F57; padding: 60px; background: rgba(172, 143, 87, 0.03);">
                <h3 style="text-align: center; font-size: 32px; letter-spacing: 3px; margin-bottom: 40px;">SHARE YOUR EXPERIENCE</h3>

                @if(session('success'))
                    <div style="background: rgba(40, 167, 69, 0.2); border: 1px solid #28a745; color: #fff; padding: 15px; margin-bottom: 30px; text-align: center; font-family: 'Montserrat', sans-serif;">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div style="background: rgba(220, 53, 69, 0.2); border: 1px solid #dc3545; color: #fff; padding: 15px; margin-bottom: 30px; text-align: center; font-family: 'Montserrat', sans-serif;">
                        {{ session('error') }}
                    </div>
                @endif

                <form action="{{ route('review.store') }}" method="POST">
                    @csrf
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                        <input type="text" name="customer_name" placeholder="YOUR FULL NAME" required style="width: 100%; background: transparent; border: none; border-bottom: 1px solid #AC8F57; padding: 15px 0; color: #fff; font-family: 'Montserrat', sans-serif; outline: none;">

                        <select name="rating" required style="width: 100%; background: transparent; border: none; border-bottom: 1px solid #AC8F57; padding: 15px 0; color: #fff; font-family: 'Montserrat', sans-serif; outline: none; cursor: pointer;">
                            <option value="" disabled selected style="background: #000;">STARS RATING</option>
                            <option value="5" style="background: #000;">5 STARS - EXTRAORDINARY</option>
                            <option value="4" style="background: #000;">4 STARS - EXCELLENT</option>
                            <option value="3" style="background: #000;">3 STARS - VERY GOOD</option>
                            <option value="2" style="background: #000;">2 STARS - FAIR</option>
                            <option value="1" style="background: #000;">1 STAR - POOR</option>
                        </select>
                    </div>

                    <div style="margin-bottom: 20px;">
                        <select name="product_combined" id="product_selector" required style="width: 100%; background: transparent; border: none; border-bottom: 1px solid #AC8F57; padding: 15px 0; color: #fff; font-family: 'Montserrat', sans-serif; outline: none; cursor: pointer;">
                            <option value="" disabled selected style="background: #000;">SELECT PRODUCT / SERVICE</option>

                            <optgroup label="ACTIVITIES" style="background: #000; color: #AC8F57;">
                                @foreach($activities as $act)
                                    <option value="activity:{{ $act->id }}" style="background: #000; color: #fff;">{{ $act->name }}</option>
                                @endforeach
                            </optgroup>

                            <optgroup label="TRACKING TRIPS" style="background: #000; color: #AC8F57;">
                                @foreach($trackingTrips as $track)
                                    <option value="tracking:{{ $track['id'] }}" style="background: #000; color: #fff;">{{ $track['name'] }}</option>
                                @endforeach
                            </optgroup>

                            <optgroup label="TOURS" style="background: #000; color: #AC8F57;">
                                @foreach($tours as $tour)
                                    <option value="tour:{{ $tour->id }}" style="background: #000; color: #fff;">{{ $tour->name }}</option>
                                @endforeach
                            </optgroup>

                            <optgroup label="TRANSPORT" style="background: #000; color: #AC8F57;">
                                @foreach($transports as $trans)
                                    <option value="transport:{{ $trans->id }}" style="background: #000; color: #fff;">{{ $trans->name }} ({{ ucfirst($trans->type) }})</option>
                                @endforeach
                            </optgroup>
                        </select>
                        <input type="hidden" name="activity_type" id="hidden_type">
                        <input type="hidden" name="activity_id" id="hidden_id">
                    </div>

                    <div style="margin-bottom: 40px;">
                        <textarea name="comment" rows="4" placeholder="YOUR MESSAGE" style="width: 100%; background: transparent; border: none; border-bottom: 1px solid #AC8F57; padding: 15px 0; color: #fff; font-family: 'Montserrat', sans-serif; outline: none; resize: none;"></textarea>
                    </div>

                    <div style="text-align: center;">
                        <button type="submit" style="background: #AC8F57; color: #fff; border: 1px solid #AC8F57; padding: 15px 50px; font-family: 'Cinzel', serif; letter-spacing: 3px; cursor: pointer; transition: all 0.3s ease;">
                            SUBMIT REVIEW
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <script>
            // Data for sub-filters (Product level)
            const productData = {
                'activity': @json($activities->map(fn($item) => ['id' => $item->id, 'name' => $item->name])),
                'tour': @json($tours->map(fn($item) => ['id' => $item->id, 'name' => $item->name])),
                'transport': @json($transports->map(fn($item) => ['id' => $item->id, 'name' => $item->name])),
                'tracking': @json($trackingTrips)
            };

            let currentCategory = 'all';
            let currentProductId = 'all';
            let currentTranslate = 0;
            const slider = document.getElementById('reviews-slider');

            function changeCategory(cat, btn) {
                currentCategory = cat;
                currentProductId = 'all';

                // Update UI
                document.querySelectorAll('.cat-btn').forEach(b => {
                    b.style.color = '#888';
                    b.style.borderBottomColor = 'transparent';
                });
                btn.style.color = '#fff';
                btn.style.borderBottomColor = '#AC8F57';

                // Re-build sub-filters
                const subFilterContainer = document.getElementById('product-sub-filters');
                subFilterContainer.innerHTML = '';

                if (cat !== 'all') {
                    // Add "SHOW ALL [CATEGORY]" button
                    const allBtn = createSubFilterBtn('ALL ' + cat.toUpperCase(), 'all', true);
                    subFilterContainer.appendChild(allBtn);

                    productData[cat].forEach(prod => {
                        const pBtn = createSubFilterBtn(prod.name.toUpperCase(), prod.id, false);
                        subFilterContainer.appendChild(pBtn);
                    });
                }

                applyFilters();
            }

            function createSubFilterBtn(label, id, isActive) {
                const btn = document.createElement('button');
                btn.innerText = label;
                btn.className = 'sub-filter-btn' + (isActive ? ' active' : '');
                btn.style.cssText = `background: transparent; border: 1px solid ${isActive ? '#AC8F57' : '#444'}; color: ${isActive ? '#fff' : '#888'}; padding: 5px 15px; font-size: 10px; letter-spacing: 1px; cursor: pointer; transition: all 0.3s;`;

                btn.onclick = function() {
                    document.querySelectorAll('.sub-filter-btn').forEach(b => {
                        b.style.borderColor = '#444';
                        b.style.color = '#888';
                    });
                    this.style.borderColor = '#AC8F57';
                    this.style.color = '#fff';
                    currentProductId = id;
                    applyFilters();
                };
                return btn;
            }

            function applyFilters() {
                currentTranslate = 0;
                slider.style.transform = `translateX(0px)`;

                const allCards = document.querySelectorAll('.review-card-wrapper');
                let visibleCount = 0;

                allCards.forEach(card => {
                    const cardType = card.getAttribute('data-type');
                    const cardId = card.getAttribute('data-id');

                    const typeMatch = (currentCategory === 'all' || cardType === currentCategory);
                    const productMatch = (currentProductId === 'all' || cardId == currentProductId);

                    if (typeMatch && productMatch) {
                        card.style.display = 'block';
                        visibleCount++;
                    } else {
                        card.style.display = 'none';
                    }
                });

                // Control visibility of nav buttons
                document.getElementById('prevBtn').style.display = visibleCount > 0 ? 'flex' : 'none';
                document.getElementById('nextBtn').style.display = visibleCount > 0 ? 'flex' : 'none';
            }

            function nextSlide() {
                const cardWidth = 380;
                const containerWidth = slider.parentElement.offsetWidth;
                const visibleCards = Array.from(document.querySelectorAll('.review-card-wrapper')).filter(c => c.style.display !== 'none');
                const totalWidth = visibleCards.length * cardWidth;

                if (Math.abs(currentTranslate) + containerWidth < totalWidth) {
                    currentTranslate -= cardWidth;
                    slider.style.transform = `translateX(${currentTranslate}px)`;
                }
            }

            function prevSlide() {
                const cardWidth = 380;
                if (currentTranslate < 0) {
                    currentTranslate += cardWidth;
                    slider.style.transform = `translateX(${currentTranslate}px)`;
                }
            }

            // Init form logic
            document.getElementById('product_selector').addEventListener('change', function() {
                const val = this.value.split(':');
                document.getElementById('hidden_type').value = val[0];
                document.getElementById('hidden_id').value = val[1];
            });

            window.onload = () => changeCategory('all', document.querySelector('.cat-btn.active'));
        </script>
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
                        <a href="mailto:alviajoglohouse@gmail.com" target="_blank">alviajoglohouse@gmail.com</a>
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
