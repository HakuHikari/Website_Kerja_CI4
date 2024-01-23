document.getElementById('profileDropdown').addEventListener('click', function(event) {
  event.stopPropagation(); // Mencegah penyebaran event ke elemen lain

  var dropdownMenu = this.querySelector('.dropdown-menu');
  if (dropdownMenu.style.display === 'none' || dropdownMenu.style.display === '') {
    dropdownMenu.style.display = 'block'; // Menampilkan dropdown saat gambar profil diklik
  } else {
    dropdownMenu.style.display = 'none'; // Menyembunyikan dropdown jika sudah terlihat
  }
});

// Menangkap event klik di luar dropdown untuk menyembunyikan dropdown
document.addEventListener('click', function(event) {
  var dropdownMenu = document.querySelector('.dropdown-menu');
  if (dropdownMenu && !dropdownMenu.contains(event.target)) {
    dropdownMenu.style.display = 'none'; // Menyembunyikan dropdown jika klik diluar dropdown
  }
});

