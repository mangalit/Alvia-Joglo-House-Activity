import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
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
});
