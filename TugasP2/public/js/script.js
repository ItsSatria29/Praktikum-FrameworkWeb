document.addEventListener('DOMContentLoaded', (event) => {
    // Mendapatkan URL saat ini
    const path = window.location.pathname;

    // Menampilkan alert berdasarkan path URL
    if (path === '/home') {
        alert("Selamat datang di Home Page.");
    } else if (path === '/laravel') {
        alert("Selamat datang di Laravel Page.");
    }
});