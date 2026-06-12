import './bootstrap';
import AOS from 'aos';
import 'aos/dist/aos.css';

document.addEventListener('DOMContentLoaded', () => {
    // Initialize AOS
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100,
    });

    const hamburger = document.getElementById('hamburgerMenu');
    const navLinks = document.getElementById('navLinks');
    const navbar = document.querySelector('.navbar');

    // =========================================================
    // 1. LOGIKA TOMBOL HAMBURGER (BUKA/TUTUP MENU)
    // =========================================================
    if (hamburger && navLinks) {
        hamburger.addEventListener('click', () => {
            // Membuka/menutup menu laci samping
            navLinks.classList.toggle('active');

            // Mengubah animasi ikon garis 3 menjadi silang (X)
            hamburger.classList.toggle('toggle');
        });
    }

    // =========================================================
    // 2. LOGIKA KLIK AREA KOSONG UNTUK MENUTUP NAVBAR (BARU)
    // =========================================================
    document.addEventListener('click', (event) => {
        // Cek apakah navbar sedang dalam posisi terbuka (punya class 'active')
        if (navLinks && navLinks.classList.contains('active')) {
            // Cek apakah area yang diklik BUKAN bagian dari navLinks dan BUKAN hamburger
            const isClickInsideNav = navLinks.contains(event.target);
            const isClickInsideHamburger = hamburger.contains(event.target);

            if (!isClickInsideNav && !isClickInsideHamburger) {
                // Tutup menu dan kembalikan ikon X menjadi hamburger
                navLinks.classList.remove('active');
                hamburger.classList.remove('toggle');
            }
        }
    });

    // =========================================================
    // 3. LOGIKA EFEK SCROLL NAVBAR (TRANSPARAN -> HITAM)
    // =========================================================
    if (navbar) {
        window.addEventListener('scroll', () => {
            // Jika layar di-scroll lebih dari 50 pixel ke bawah
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                // Jika kembali ke atas
                navbar.classList.remove('scrolled');
            }
        });
    }

    // =========================================================
    // 4. FAST MOBILE ANIMATION TRIGGER
    // =========================================================
    const mobileRevealItems = document.querySelectorAll('.reveal-on-scroll');
    
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
            }
        });
    }, { 
        threshold: 0.05, // Sangat sensitif, terlihat sedikit langsung muncul
        rootMargin: "0px 0px -20px 0px" // Triggers slightly before element hits the bottom
    });

    mobileRevealItems.forEach(item => revealObserver.observe(item));
});
