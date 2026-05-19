import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.getElementById('hamburgerMenu');
    const navLinks = document.getElementById('navLinks');

    if (hamburger && navLinks) {
        hamburger.addEventListener('click', () => {
            // Membuka/menutup menu laci samping
            navLinks.classList.toggle('active');

            // Mengubah animasi ikon garis 3 menjadi silang (X)
            hamburger.classList.toggle('toggle');
        });
    }
    const navbar = document.querySelector('.navbar');

    window.addEventListener('scroll', () => {
        // Jika layar di-scroll lebih dari 50 pixel ke bawah
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            // Jika kembali ke atas
            navbar.classList.remove('scrolled');
        }
    });
});
