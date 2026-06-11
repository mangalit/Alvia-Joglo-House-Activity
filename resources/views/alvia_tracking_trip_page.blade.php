<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alvia Tracking Trip - Alvia Joglo Experience</title>
    <link rel="icon" href="{{ Vite::asset('resources/images/logo-title.jpg') }}" type="image/jpg">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Inter:wght@400;600&family=Italianno&family=Lato:wght@800;900&family=Playfair+Display:ital,wght@0,400;0,500;0,700;1,400;1,500&family=Playfair+Display+SC:wght@400;700&family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

    <!-- NAVBAR -->
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

<!-- HERO SECTION (Menggunakan style dari Activity) -->
    <header class="activity-hero" style="background-image: url('{{ Vite::asset('resources/images/tracking-hero.jpg') }}');">
        <div class="activity-hero-overlay"></div>
        <div class="activity-hero-box-outline">
            <div class="activity-hero-box">
                <h1 class="activity-hero-title">TRACKING</h1>
            </div>
        </div>
    </header>

    <!-- 2. INTRO SECTION -->
    <section class="tracking-intro">
        <div class="intro-left">
            <h2>Alvia<br>Tracking Trip</h2>
        </div>
        <div class="intro-right">
            <h3>Authentic Journey</h3>
            <p>
                Step into the authentic heart of Bali<br>
                with our guided morning treks.<br>
                Start your day with a breathtaking sunrise<br>
                and immerse yourself in the gentle rhythm of local life,<br>
                rich culture, and pristine landscapes.
            </p>
        </div>
    </section>

    <!-- 3. TIMELINE HEADER (SHORT TRACK) -->
    <section class="tracking-timeline-header">
        <div class="timeline-header">
            <h2>Short Track</h2>
            <p class="subtitle">2 Hours Duration | Start From 6AM</p>
            <p class="price">Include a Refreshing Young Coconut | 350k/pax</p>
        </div>
    </section>

    <!-- AREA PREVIEW SVG SAJA -->
    <section class="svg-preview-section">
        <div class="svg-preview-box-7">
            <!-- MURNI COPY PASTE DARI VECTOR 7 ANDA -->
            <svg width="912" height="3294" viewBox="0 0 912 3294" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M503.202 5.33337C503.202 8.27889 505.59 10.6667 508.535 10.6667C511.481 10.6667 513.868 8.27889 513.868 5.33337C513.868 2.38786 511.481 4.05312e-05 508.535 4.05312e-05C505.59 4.05312e-05 503.202 2.38786 503.202 5.33337ZM910.035 798.333L911.033 798.405L910.035 798.333ZM287.535 1044.83L286.543 1044.71L287.535 1044.83ZM1.53521 1881.33L2.53121 1881.24L1.53521 1881.33ZM538.035 2535.83L537.038 2535.91L538.035 2535.83ZM466.255 3293.29C466.786 3293.45 467.341 3293.14 467.495 3292.61L470.015 3283.97C470.17 3283.44 469.866 3282.89 469.335 3282.73C468.805 3282.58 468.25 3282.88 468.095 3283.41L465.855 3291.09L458.175 3288.85C457.645 3288.7 457.09 3289 456.935 3289.53C456.781 3290.06 457.085 3290.62 457.615 3290.77L466.255 3293.29ZM508.535 5.33337L507.542 5.22046C502.531 49.3149 509.936 74.0563 524.951 87.546C539.918 100.992 562.146 102.958 585.953 102.333C597.865 102.02 610.334 101.049 622.517 100.492C634.74 99.9345 646.748 99.7894 657.922 101.108C680.235 103.74 699.089 112.182 709.629 134.756L710.535 134.333L711.442 133.91C700.504 110.485 680.87 101.801 658.156 99.1215C646.816 97.7836 634.677 97.9353 622.426 98.4946C610.135 99.0556 597.805 100.021 585.901 100.334C562.078 100.959 540.61 98.9247 526.288 86.0582C512.015 73.2354 504.539 49.3519 509.529 5.44628L508.535 5.33337ZM710.535 134.333L709.629 134.756C714.911 146.068 715.994 156.765 713.874 167.215C711.75 177.687 706.397 187.971 698.711 198.412C683.311 219.332 658.763 240.613 632.708 265.105C580.701 313.992 523.035 375.377 523.035 470.833H524.035H525.035C525.035 376.29 582.097 315.425 634.078 266.562C660.018 242.179 684.78 220.71 700.322 199.598C708.106 189.024 713.632 178.472 715.834 167.612C718.042 156.73 716.899 145.599 711.442 133.91L710.535 134.333ZM524.035 470.833H523.035C523.035 518.764 548.193 552.409 585.516 578.582C622.797 604.724 672.337 623.5 721.334 641.708C770.401 659.943 818.907 677.604 854.392 701.514C889.829 725.392 912.101 755.375 909.038 798.262L910.035 798.333L911.033 798.405C914.166 754.542 891.286 723.962 855.51 699.856C819.782 675.782 771.013 658.037 722.031 639.833C672.979 621.604 623.695 602.912 586.664 576.944C549.677 551.007 525.035 517.903 525.035 470.833H524.035ZM910.035 798.333L909.038 798.262C906.803 829.55 895.873 853.665 878.436 872.348C860.983 891.049 836.957 904.366 808.449 913.941C751.403 933.102 676.697 937.193 601.58 939.691C526.545 942.186 451.094 943.09 392.829 955.962C363.687 962.399 338.744 971.85 320.268 986.062C301.76 1000.3 289.772 1019.3 286.543 1044.71L287.535 1044.83L288.527 1044.96C291.684 1020.11 303.375 1001.58 321.488 987.647C339.633 973.689 364.252 964.323 393.26 957.915C451.296 945.094 526.499 944.189 601.646 941.69C676.712 939.194 751.716 935.107 809.086 915.837C837.786 906.197 862.144 892.736 879.898 873.713C897.668 854.672 908.768 830.117 911.033 798.405L910.035 798.333ZM287.535 1044.83L286.543 1044.71C281.635 1083.35 291.651 1117.84 309.365 1150.87C327.064 1183.87 352.488 1215.48 378.438 1248.33C430.394 1314.1 484.535 1384.97 484.535 1482.83H485.535H486.535C486.535 1384.19 431.927 1312.82 380.008 1247.09C354.02 1214.19 328.725 1182.73 311.128 1149.92C293.544 1117.14 283.686 1083.07 288.527 1044.96L287.535 1044.83ZM485.535 1482.83H484.535C484.535 1548.81 453.306 1593.28 406.635 1626.25C359.904 1659.26 297.751 1680.71 236.033 1700.58C174.392 1720.43 113.151 1738.71 68.551 1765.42C46.2339 1778.78 28.0132 1794.29 15.9787 1813.23C3.93201 1832.18 -1.87819 1854.51 0.539224 1881.42L1.53521 1881.33L2.53121 1881.24C0.15129 1854.75 5.8681 1832.86 17.6666 1814.3C29.4774 1795.71 47.4201 1780.4 69.5785 1767.13C113.93 1740.57 174.888 1722.37 236.646 1702.48C298.326 1682.62 360.771 1661.1 407.789 1627.88C454.866 1594.62 486.535 1549.6 486.535 1482.83H485.535ZM1.53521 1881.33L0.539224 1881.42C6.21324 1944.59 52.6467 1985.98 119.343 2014.38C186.043 2042.78 273.276 2058.32 361.106 2069.7C449.012 2081.09 537.446 2088.29 606.843 2100.01C641.529 2105.86 671.368 2112.83 693.93 2121.98C716.531 2131.15 731.595 2142.41 737.102 2156.69L738.035 2156.33L738.968 2155.97C733.15 2140.88 717.408 2129.35 694.681 2120.13C671.914 2110.9 641.903 2103.9 607.176 2098.03C537.748 2086.31 449.108 2079.08 361.363 2067.72C273.544 2056.34 186.552 2040.82 120.127 2012.54C53.6987 1984.25 8.10724 1943.32 2.53121 1881.24L1.53521 1881.33ZM738.035 2156.33L737.102 2156.69C742.699 2171.21 743.515 2184.35 740.73 2196.69C737.941 2209.05 731.527 2220.67 722.562 2232.13C704.595 2255.09 676.606 2277.12 647.567 2302.85C589.582 2354.24 527.943 2420.03 537.038 2535.91L538.035 2535.83L539.032 2535.76C530.014 2420.85 591.025 2355.63 648.894 2304.35C677.782 2278.75 706.021 2256.51 724.137 2233.36C733.214 2221.76 739.806 2209.87 742.681 2197.13C745.559 2184.37 744.697 2170.83 738.968 2155.97L738.035 2156.33ZM538.035 2535.83L537.038 2535.91C543.834 2622.49 610.709 2664.35 673.21 2701.69C704.534 2720.4 734.732 2737.96 756.068 2759.43C777.348 2780.84 789.747 2806.08 785.543 2840.21L786.535 2840.33L787.528 2840.46C791.823 2805.59 779.098 2779.76 757.487 2758.02C735.933 2736.33 705.475 2718.64 674.236 2699.97C611.612 2662.56 545.737 2621.18 539.032 2535.76L538.035 2535.83ZM786.535 2840.33L785.543 2840.21C783.448 2857.22 775.106 2873.66 762.241 2889.85C749.375 2906.05 732.027 2921.95 712.007 2937.88C691.989 2953.8 669.334 2969.72 645.869 2985.95C622.412 3002.18 598.144 3018.74 574.941 3035.9C528.553 3070.23 486.272 3107.12 463.067 3149.08C439.811 3191.14 435.739 3238.26 465.659 3292.81L466.535 3292.33L467.412 3291.85C437.831 3237.91 441.884 3191.53 464.817 3150.05C487.798 3108.49 529.768 3071.82 576.13 3037.51C599.301 3020.37 623.534 3003.84 647.007 2987.6C670.471 2971.36 693.176 2955.41 713.252 2939.44C733.325 2923.48 750.805 2907.47 763.807 2891.1C776.808 2874.73 785.373 2857.95 787.528 2840.46L786.535 2840.33Z" fill="black"/>
            </svg>
        </div>
        <div class="timeline-content-wrapper">
            <div class="timeline-item">
                <div class="tl-image">
                    <img src="{{ Vite::asset('resources/images/track-sunrise.png') }}" alt="Golden Sunrise Terraces">
                </div>
                <div class="tl-text">
                    <h3>Golden Sunsrise<br>Terraces</h3>
                    <p>
                        Experience the serene magic of Bali as the first<br>
                        light of day gracefully breaks over the horizon.<br>
                        Watch as the golden sunrays gently illuminate<br>
                        the morning dew across the sweeping,<br>
                        emerald green rice terraces. This peaceful<br>
                        morning walk offers a moment of pure<br>
                        tranquility, allowing you to breathe in the crisp,<br>
                        fresh countryside air as the island slowly<br>
                        awakens.
                    </p>
                </div>
            </div>
        </div>
        <div class="timeline-item reverse">
            <!-- Teks diletakkan di atas agar tampil di sebelah kiri -->
            <div class="tl-text">
                <h3>Authentic<br>Local Market</h3>
                <p>
                    Dive into the lively atmosphere<br>
                    and vibrant colors of a traditional Balinese<br>
                    morning market. Witness the authentic daily<br>
                    routines of the locals as they gather to trade fresh<br>
                    tropical fruits, fragrant exotic spices, and beautifully<br>
                    crafted daily offerings. This immersive stop provides a<br>
                    genuine taste of the island's rich community spirit and<br>
                    enduring cultural heritage.
                </p>
            </div>
            <div class="tl-image">
                <img src="{{ Vite::asset('resources/images/track-market.png') }}" alt="Authentic Local Market">
            </div>
        </div>

        <div class="timeline-item item-school">
            <div class="tl-image">
                <img src="{{ Vite::asset('resources/images/track-school.png') }}" alt="Heartwarming Village School">
            </div>
            <div class="tl-text">
                <h3>Heartwarming<br>Village School</h3>
                <p>
                    Experience the innocent charm and warm<br>
                    hospitality of Bali's younger generation.<br>
                    As we gently pass by the local elementary school,<br>
                    you will be greeted by the genuine smiles and<br>
                    cheerful energy of the village children starting<br>
                    their day. This brief but deeply meaningful<br>
                    encounter offers a touching glimpse into the heart<br>
                    of the community and the pure spirit of the island.
                </p>
            </div>
        </div>

        <div class="explore-divider">
            <h2>-WANT TO EXPLORE FURTHER?-</h2>
        </div>

        <div class="timeline-header long-track-header">
            <h2>Extend Your Journey To The<br>Long Track</h2>
            <p class="subtitle">4 Hours Duration | 550k/pax</p>
        </div>
    </section>

    <section class="svg-preview-section">
        <div class="svg-preview-box-8">
            <!-- MURNI COPY PASTE DARI VECTOR 8 ANDA -->
            <svg width="771" height="2376" viewBox="0 0 771 2376" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M474.843 5.3335C474.843 8.27901 472.456 10.6668 469.51 10.6668C466.564 10.6668 464.177 8.27901 464.177 5.3335C464.177 2.38798 466.564 0.000162601 469.51 0.000162601C472.456 0.000162601 474.843 2.38798 474.843 5.3335ZM1.25885 880.833L0.261414 880.905L1.25885 880.833ZM664.01 1189.33L665.003 1189.21L664.01 1189.33ZM488.011 1556.33L487.015 1556.24L488.011 1556.33ZM766.01 1968.33L765.048 1968.06L766.01 1968.33ZM492.917 2374.75C492.685 2375.26 492.09 2375.47 491.589 2375.24L483.424 2371.45C482.923 2371.22 482.706 2370.63 482.938 2370.13C483.17 2369.63 483.765 2369.41 484.266 2369.64L491.523 2373.01L494.889 2365.75C495.121 2365.25 495.716 2365.03 496.217 2365.26C496.718 2365.49 496.936 2366.09 496.703 2366.59L492.917 2374.75ZM469.51 5.3335L470.488 5.12345C481.013 54.1166 477.42 86.9168 465.247 109.949C453.07 132.99 432.409 146.062 409.257 155.818C397.682 160.694 385.448 164.757 373.314 168.816C361.165 172.88 349.116 176.939 337.842 181.821C315.3 191.584 296.005 204.578 285.417 227.257L284.511 226.833L283.605 226.41C294.494 203.089 314.313 189.833 337.047 179.986C348.412 175.064 360.542 170.979 372.679 166.919C384.831 162.855 396.989 158.816 408.48 153.974C431.458 144.292 451.618 131.458 463.479 109.015C475.345 86.5627 479.007 54.3004 468.532 5.54354L469.51 5.3335ZM284.511 226.833L285.417 227.257C280.114 238.614 278.335 249.016 279.243 258.898C280.152 268.789 283.758 278.225 289.32 287.637C300.476 306.515 319.359 325.089 339.757 346.9C380.487 390.452 426.759 446.442 426.759 541.833H425.759H424.759C424.759 447.225 378.93 391.715 338.296 348.267C318.014 326.578 298.899 307.777 287.598 288.655C281.932 279.067 278.195 269.347 277.252 259.081C276.308 248.807 278.169 238.053 283.605 226.41L284.511 226.833ZM425.759 541.833H426.759C426.759 589.801 399.153 624.163 358.242 651.393C317.359 678.604 263.015 698.814 209.205 718.46C155.328 738.131 102 757.233 62.8974 782.231C23.8212 807.212 -0.804077 837.917 2.25629 880.762L1.25885 880.833L0.261414 880.905C-2.87463 837 22.4644 805.705 61.8201 780.546C101.15 755.403 154.721 736.224 208.519 716.582C262.382 696.916 316.487 676.782 357.134 649.728C397.753 622.692 424.759 588.866 424.759 541.833H425.759ZM1.25885 880.833L2.25629 880.762C6.71783 943.224 48.3889 981.196 109.196 1006.15C170.035 1031.12 249.79 1042.95 329.934 1053.2C410.006 1063.44 490.475 1072.1 552.5 1090.79C614.481 1109.47 658.536 1138.3 665.003 1189.21L664.01 1189.33L663.018 1189.46C656.715 1139.84 613.791 1111.35 551.923 1092.71C490.101 1074.08 409.853 1065.44 329.68 1055.18C249.578 1044.94 169.559 1033.09 108.436 1008C47.2802 982.903 4.7998 944.443 0.261414 880.905L1.25885 880.833ZM664.01 1189.33L665.003 1189.21C674.277 1262.22 634.553 1306.17 590.603 1355.68C546.623 1405.24 498.223 1460.53 489.006 1556.43L488.011 1556.33L487.015 1556.24C496.298 1459.64 545.108 1403.93 589.108 1354.36C633.138 1304.75 672.164 1261.45 663.018 1189.46L664.01 1189.33ZM488.011 1556.33L489.006 1556.43C482.68 1622.25 499.554 1671.05 527.711 1709.68C555.895 1748.34 595.417 1776.88 634.482 1802.1C673.476 1827.28 712.124 1849.21 738.208 1874.59C751.273 1887.31 761.251 1900.94 766.566 1916.36C771.885 1931.79 772.507 1948.93 766.973 1968.6L766.01 1968.33L765.048 1968.06C770.482 1948.74 769.849 1932.02 764.675 1917.01C759.495 1901.98 749.739 1888.6 736.814 1876.03C710.918 1850.83 672.561 1829.07 633.397 1803.78C594.303 1778.54 554.51 1749.84 526.095 1710.85C497.652 1671.83 480.642 1622.55 487.015 1556.24L488.011 1556.33ZM766.01 1968.33L766.973 1968.6C754.48 2013.02 723.245 2036.29 683.155 2047.36C643.129 2058.41 594.196 2057.33 546.058 2053.08C521.979 2050.95 498.063 2048.03 475.537 2045.42C453 2042.81 431.86 2040.52 413.288 2039.64C394.702 2038.77 378.774 2039.32 366.633 2042.37C354.496 2045.41 346.342 2050.88 342.943 2059.69L342.01 2059.33L341.077 2058.97C344.81 2049.29 353.709 2043.54 366.147 2040.43C378.58 2037.31 394.748 2036.77 413.382 2037.65C432.031 2038.52 453.235 2040.82 475.767 2043.43C498.311 2046.04 522.19 2048.96 546.234 2051.09C594.343 2055.34 642.967 2056.38 682.623 2045.43C722.216 2034.5 752.79 2011.65 765.048 1968.06L766.01 1968.33ZM342.01 2059.33L342.943 2059.69C339.481 2068.67 340.21 2076.72 344.113 2084.11C348.041 2091.55 355.217 2098.4 364.752 2104.83C383.829 2117.71 411.976 2128.7 441.159 2139.52C470.28 2150.32 500.413 2160.94 523.248 2173.06C534.669 2179.12 544.332 2185.59 551.151 2192.69C557.979 2199.81 562.01 2207.62 562.01 2216.33H561.01H560.01C560.01 2208.3 556.306 2200.95 549.708 2194.08C543.102 2187.2 533.65 2180.84 522.31 2174.83C499.625 2162.79 469.659 2152.22 440.464 2141.4C411.33 2130.59 382.944 2119.52 363.633 2106.49C353.974 2099.97 346.492 2092.9 342.345 2085.04C338.171 2077.14 337.407 2068.49 341.077 2058.97L342.01 2059.33ZM561.01 2216.33H562.01C562.01 2228.67 554.742 2237.49 544.884 2245.52C539.953 2249.54 534.316 2253.41 528.544 2257.43C522.758 2261.47 516.82 2265.68 511.218 2270.41C500.024 2279.87 490.231 2291.38 485.827 2307.65C481.421 2323.93 482.37 2345.11 492.949 2373.99L492.01 2374.33L491.071 2374.68C480.4 2345.55 479.349 2323.93 483.896 2307.13C488.445 2290.32 498.559 2278.49 509.927 2268.88C515.607 2264.08 521.614 2259.83 527.4 2255.79C533.2 2251.75 533.2 2251.75 538.762 2247.93C543.621 2243.97 553.341 2236.05 560.01 2216.33H561.01Z" fill="black"/>
            </svg>
        </div>
        <div class="timeline-content-wrapper-8">
            <div class="timeline-item reverse item-river">
                <div class="tl-text">
                    <h3>Serene<br>River Crossing</h3>
                    <p>
                        As you venture deeper into the island's<br>
                        untouched beauty, the trail leads you to a<br>
                        refreshing river crossing. Wade through the<br>
                        gentle, crystal clear streams surrounded by a<br>
                        canopy of lush tropical foliage. This invigorating<br>
                        part of the trek not only connects you intimately<br>
                        with nature but also builds a sense of pure<br>
                        adventure as you make your way toward the<br>
                        ancient temple ruins.
                    </p>
                </div>

                <div class="tl-image">
                    <!-- Pastikan nama file gambar Anda sesuai -->
                    <img src="{{ Vite::asset('resources/images/track-river.png') }}" alt="Serene River Crossing">
                </div>
            </div>
        </div>

        <div class="timeline-item item-temple">
            <!-- Gambar di Kiri (Format Normal) -->
            <div class="tl-image">
                <!-- Pastikan nama file gambar Anda sesuai (.jpg atau .png) -->
                <img src="{{ Vite::asset('resources/images/track-temple.png') }}" alt="Gunung Kawi Temple">
            </div>

            <!-- Teks di Kanan -->
            <div class="tl-text">
                <h3>The 11th Century Legacy<br>Gunung Kawi Temple</h3>
                <p>
                    Conclude your epic journey at the<br>
                    breathtaking 11th-century Gunungkawi Temple,<br>
                    one of Bali's most ancient and awe-inspiring<br>
                    archaeological sites. Marvel at the colossal shrines<br>
                    carved directly into the sheer cliff faces,<br>
                    standing as a testament to the island's royal history<br>
                    and spiritual devotion. Surrounded by lush river<br>
                    valleys, this sacred monument offers a profound<br>
                    sense of wonder and a timeless connection<br>
                    to Bali's majestic past.
                </p>
            </div>
        </div>

        <div class="timeline-finish">
            <h2>Finish</h2>
        </div>

    </section>

    <!-- FOOTER -->
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
                        <a href="#">+62 878-9903-0306</a><br>
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
