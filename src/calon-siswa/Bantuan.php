<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bantuan - E-PPDB SMP/MTs Kota Informatika</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    .accordion-content {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.3s ease-out;
    }
  </style>
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">
  
<!-- Navigation -->
  <?php include('../components/header-login.php'); ?>

<!-- Main Content -->
<main class="flex-grow container mx-auto px-4 py-8">
  <!-- Page Header -->
  <div class="text-center mb-12">
    <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Pusat Bantuan</h1>
    <p class="text-lg text-gray-600 max-w-2xl mx-auto">Temukan solusi untuk masalah Anda atau hubungi kami jika membutuhkan bantuan lebih lanjut.</p>
  </div>
  
  <!-- Search Help -->
  <div class="bg-white rounded-lg shadow-md p-6 mb-12 max-w-3xl mx-auto">
    <div class="relative">
      <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
        <i class="fas fa-search text-gray-400"></i>
      </div>
      <input type="text" class="block w-full pl-10 pr-3 py-4 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 text-lg" placeholder="Cari topik bantuan...">
    </div>
  </div>
  
  <!-- FAQ Section -->
  <div class="max-w-3xl mx-auto mb-12">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Pertanyaan Umum</h2>
    
    <!-- FAQ Item 1 -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden mb-4">
      <button class="accordion-button w-full flex justify-between items-center p-6 text-left font-medium text-gray-800 hover:bg-gray-50">
        <span>Bagaimana cara mendaftar PPDB online?</span>
        <i class="fas fa-chevron-down transition-transform duration-300"></i>
      </button>
      <div class="accordion-content px-6 pb-6 text-gray-600">
        <p class="mb-4">Untuk mendaftar PPDB online, ikuti langkah-langkah berikut:</p>
        <ol class="list-decimal pl-5 space-y-2">
          <li>Buka halaman utama E-PPDB dan klik tombol "Daftar Sekarang"</li>
          <li>Isi formulir pendaftaran dengan data yang valid</li>
          <li>Unggah dokumen yang diperlukan (ijazah, akta kelahiran, dll)</li>
          <li>Pilih sekolah tujuan</li>
          <li>Submit pendaftaran dan tunggu verifikasi</li>
        </ol>
      </div>
    </div>
    
    <!-- FAQ Item 2 -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden mb-4">
      <button class="accordion-button w-full flex justify-between items-center p-6 text-left font-medium text-gray-800 hover:bg-gray-50">
        <span>Dokumen apa saja yang diperlukan untuk pendaftaran?</span>
        <i class="fas fa-chevron-down transition-transform duration-300"></i>
      </button>
      <div class="accordion-content px-6 pb-6 text-gray-600">
        <p>Dokumen yang diperlukan meliputi:</p>
        <ul class="list-disc pl-5 mt-2 space-y-2">
          <li>Fotokopi ijazah/surat keterangan lulus SD/MI</li>
          <li>Fotokopi akta kelahiran</li>
          <li>Fotokopi Kartu Keluarga</li>
          <li>Pas foto 3x4 (latar merah)</li>
          <li>Dokumen pendukung lain sesuai jalur pendaftaran</li>
        </ul>
      </div>
    </div>
    
    <!-- FAQ Item 3 -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden mb-4">
      <button class="accordion-button w-full flex justify-between items-center p-6 text-left font-medium text-gray-800 hover:bg-gray-50">
        <span>Kapan pengumuman hasil seleksi PPDB?</span>
        <i class="fas fa-chevron-down transition-transform duration-300"></i>
      </button>
      <div class="accordion-content px-6 pb-6 text-gray-600">
        <p>Pengumuman hasil seleksi PPDB akan dilaksanakan pada:</p>
        <div class="mt-4 p-4 bg-blue-50 rounded-lg">
          <p class="font-medium">Tanggal: 15 Juli 2023</p>
          <p class="font-medium">Pukul: 10.00 WIB</p>
          <p class="mt-2">Hasil dapat dilihat melalui akun pendaftaran Anda atau di halaman pengumuman resmi.</p>
        </div>
      </div>
    </div>
    
    <!-- FAQ Item 4 -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden mb-4">
      <button class="accordion-button w-full flex justify-between items-center p-6 text-left font-medium text-gray-800 hover:bg-gray-50">
        <span>Bagaimana jika lupa password akun pendaftaran?</span>
        <i class="fas fa-chevron-down transition-transform duration-300"></i>
      </button>
      <div class="accordion-content px-6 pb-6 text-gray-600">
        <p>Jika lupa password, Anda dapat:</p>
        <ol class="list-decimal pl-5 mt-2 space-y-2">
          <li>Klik "Lupa Password" di halaman login</li>
          <li>Masukkan alamat email yang digunakan saat pendaftaran</li>
          <li>Buka email Anda dan ikuti petunjuk reset password</li>
          <li>Buat password baru dan konfirmasi</li>
        </ol>
        <p class="mt-4 text-sm text-gray-500">Jika masih mengalami masalah, hubungi panitia PPDB melalui kontak yang tersedia.</p>
      </div>
    </div>
  </div>
  
  <!-- Contact Section -->
  <div class="bg-white rounded-lg shadow-md overflow-hidden max-w-3xl mx-auto">
    <div class="p-6 md:p-8">
      <h2 class="text-2xl font-bold text-gray-800 mb-6">Butuh Bantuan Lebih Lanjut?</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <h3 class="text-lg font-semibold text-gray-800 mb-4">Hubungi Panitia PPDB</h3>
          <div class="space-y-4">
            <div class="flex items-start">
              <div class="flex-shrink-0 h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600">
                <i class="fas fa-phone"></i>
              </div>
              <div class="ml-3">
                <p class="text-sm font-medium text-gray-500">Telepon</p>
                <p class="text-gray-800">(021) 1234-5678</p>
              </div>
            </div>
            <div class="flex items-start">
              <div class="flex-shrink-0 h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600">
                <i class="fas fa-envelope"></i>
              </div>
              <div class="ml-3">
                <p class="text-sm font-medium text-gray-500">Email</p>
                <p class="text-gray-800">ppdb@kotainformatika.edu</p>
              </div>
            </div>
            <div class="flex items-start">
              <div class="flex-shrink-0 h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <div class="ml-3">
                <p class="text-sm font-medium text-gray-500">Alamat</p>
                <p class="text-gray-800">Jl. Teknologi No. 123, Kota Informatika</p>
              </div>
            </div>
          </div>
        </div>
        <div>
          <h3 class="text-lg font-semibold text-gray-800 mb-4">Jam Operasional</h3>
          <div class="bg-gray-50 rounded-lg p-4">
            <div class="flex justify-between py-2 border-b border-gray-200">
              <span class="text-gray-700">Senin - Jumat</span>
              <span class="font-medium">08.00 - 16.00 WIB</span>
            </div>
            <div class="flex justify-between py-2 border-b border-gray-200">
              <span class="text-gray-700">Sabtu</span>
              <span class="font-medium">08.00 - 14.00 WIB</span>
            </div>
            <div class="flex justify-between py-2">
              <span class="text-gray-700">Minggu</span>
              <span class="font-medium text-red-500">Libur</span>
            </div>
          </div>
          <div class="mt-6">
            <h4 class="text-sm font-medium text-gray-500 mb-2">Media Sosial</h4>
            <div class="flex space-x-4">
              <a href="#" class="h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 hover:bg-blue-200">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 hover:bg-blue-200">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 hover:bg-blue-200">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#" class="h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 hover:bg-blue-200">
                <i class="fab fa-whatsapp"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

  <?php include('../components/footer.php'); ?>


<script>
  // Mobile Menu Toggle
  document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (mobileMenuButton && mobileMenu) {
      mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
      });
    }
    
    // Highlight current page in navigation
    const currentPage = window.location.pathname.split('/').pop();
    const navItems = document.querySelectorAll('.nav-item');
    
    navItems.forEach(item => {
      if (item.getAttribute('href') === currentPage) {
        item.classList.add('text-blue-600');
        item.classList.remove('text-gray-600', 'hover:text-blue-600');
      }
    });
    
    // Accordion functionality
    const accordionButtons = document.querySelectorAll('.accordion-button');
    
    accordionButtons.forEach(button => {
      button.addEventListener('click', () => {
        const content = button.nextElementSibling;
        const icon = button.querySelector('i');
        
        // Toggle content
        if (content.style.maxHeight) {
          content.style.maxHeight = null;
          icon.classList.remove('transform', 'rotate-180');
        } else {
          content.style.maxHeight = content.scrollHeight + 'px';
          icon.classList.add('transform', 'rotate-180');
        }
      });
    });
  });
</script>
</body>
</html>