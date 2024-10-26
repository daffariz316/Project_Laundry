const hamburger = document.querySelector(".hamburger");
const menu = document.querySelector(".menu");
const navbar = document.getElementById('navbar');
const content = document.getElementById('content'); // Asumsikan ini adalah konten utama yang ingin kita blur

hamburger.addEventListener('click', () => {
    // Hanya jalankan animasi jika berada di tampilan mobile (misalnya lebar layar <= 768px)
    if (window.innerWidth <= 768) {
        hamburger.classList.toggle('is-active');

        if (menu.classList.contains('menu-active')) {
            // Animasi tutup (slide up)

            
            menu.style.maxHeight = menu.scrollHeight + "px"; // Set terlebih dahulu ke tinggi yang sesuai
            setTimeout(() => {
                menu.style.maxHeight = "0"; // Lalu set ke 0 untuk animasi slide up
            }, 10);
            menu.classList.remove('menu-active');

            // Hapus efek blur dari konten setelah menu ditutup
            content.classList.remove('blurred');
        } else {
            // Animasi buka (slide down)
            menu.style.maxHeight = "0"; // Set terlebih dahulu maxHeight ke 0
            menu.classList.add('menu-active');
            setTimeout(() => {
                menu.style.maxHeight = menu.scrollHeight + "px"; // Lalu set ke tinggi yang sesuai untuk animasi slide down
            }, 10);

            // Tambahkan efek blur ke konten di bawah navbar
            content.classList.add('blurred');
        }
    }
});

window.addEventListener('scroll', function() {
    if (window.scrollY > 0) {
        navbar.classList.add('shadow-lg'); // Menambahkan bayangan saat menggulir
    } else {
        navbar.classList.remove('shadow-lg'); // Menghapus bayangan saat di atas
    }
});

// Reset maxHeight pada resize, jika pengguna berpindah dari mobile ke desktop
window.addEventListener('resize', function() {
    if (window.innerWidth > 768) {
        menu.style.maxHeight = "none"; // Pastikan menu terlihat di desktop
        content.classList.remove('blurred'); // Hapus efek blur di desktop
    }
});
