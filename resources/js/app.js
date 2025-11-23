import './bootstrap';

const carousel = document.getElementById('carousel');
let scrollAmount = 0;

function autoScroll() {
    const width = carousel.offsetWidth;
    scrollAmount += width;

    // Kalau sudah sampai ujung, balik ke awal
    if (scrollAmount >= carousel.scrollWidth) {
        scrollAmount = 0;
    }

    carousel.scrollTo({
        left: scrollAmount,
        behavior: 'smooth'
    });
}

// Ganti slide setiap 4 detik
setInterval(autoScroll, 4000);