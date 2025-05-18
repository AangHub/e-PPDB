<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perankingan - E-PPDB SMP/MTs Kota Informatika</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    .ranking-table tr:nth-child(even) {
      background-color: #f9fafb;
    }
    .ranking-table tr:hover {
      background-color: #f3f4f6;
    }
    .medal-gold {
      color: #facc15;
      text-shadow: 0 0 2px rgba(0,0,0,0.3);
    }
    .medal-silver {
      color: #e5e7eb;
      text-shadow: 0 0 2px rgba(0,0,0,0.3);
    }
    .medal-bronze {
      color: #f97316;
      text-shadow: 0 0 2px rgba(0,0,0,0.3);
    }
  </style>
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">
  
  <?php include('components/header.php'); ?>

<!-- Main Content -->
<main class="flex-grow container mx-auto px-4 py-8">
  <!-- Page Header -->
  <div class="mb-8">
    <h2 class="text-3xl font-bold text-gray-800 mb-2">Perankingan Siswa</h2>
    <div class="flex items-center text-gray-600">
      <i class="fas fa-info-circle mr-2"></i>
      <p>Daftar perankingan sementara calon peserta didik baru SMP/MTs Kota Informatika</p>
    </div>
  </div>
  
  <!-- Filter Section -->
  <div class="bg-white rounded-lg shadow-md p-6 mb-8">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
      <!-- Search Input -->
      <div class="md:col-span-2">
        <div class="relative">
          <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            <i class="fas fa-search text-gray-400"></i>
          </div>
          <input type="text" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="Cari ID peserta atau sekolah...">
        </div>
      </div>
      
      <!-- Filter Dropdown 1 -->
      <div>
        <select class="block w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
          <option selected>Semua Jalur</option>
          <option>Zonasi</option>
          <option>Afirmasi</option>
          <option>Prestasi</option>
          <option>Perpindahan</option>
        </select>
      </div>
      
      <!-- Filter Dropdown 2 -->
      <div>
        <select class="block w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
          <option selected>Semua Sekolah</option>
          <option>SMPN 1 Informatika</option>
          <option>SMPN 2 Digital</option>
          <option>MTs Al-Hikmah</option>
          <option>SMPN 3 Tekno</option>
          <option>SMPN 4 Cyber</option>
          <option>MTs Al-Khawarizmi</option>
        </select>
      </div>
    </div>
  </div>
  
  <!-- Ranking Table -->
  <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
    <div class="overflow-x-auto">
      <table class="min-w-full divide-y divide-gray-200 ranking-table">
        <thead class="bg-gray-50">
          <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Peringkat</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID Peserta</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sekolah Tujuan</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jalur</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Skor</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
          <!-- Rank 1 -->
          <tr>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="flex items-center">
                <span class="text-xl font-bold medal-gold"><i class="fas fa-trophy"></i></span>
                <span class="ml-2 font-bold">1</span>
              </div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="text-sm font-medium text-gray-900">PPDB2023-001</div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="text-sm text-gray-900">SMPN 1 Informatika</div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Prestasi</span>
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
              98.75
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">Proses Seleksi</span>
            </td>
          </tr>
          
          <!-- Rank 2 -->
          <tr>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="flex items-center">
                <span class="text-xl font-bold medal-silver"><i class="fas fa-trophy"></i></span>
                <span class="ml-2 font-bold">2</span>
              </div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="text-sm font-medium text-gray-900">PPDB2023-042</div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="text-sm text-gray-900">SMPN 2 Digital</div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <span class="px-2 py-1 text-xs font-semibold rounded-full bg-purple-100 text-purple-800">Zonasi</span>
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
              97.20
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">Proses Seleksi</span>
            </td>
          </tr>
          
          <!-- Rank 3 -->
          <tr>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="flex items-center">
                <span class="text-xl font-bold medal-bronze"><i class="fas fa-trophy"></i></span>
                <span class="ml-2 font-bold">3</span>
              </div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="text-sm font-medium text-gray-900">PPDB2023-087</div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="text-sm text-gray-900">MTs Al-Hikmah</div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Prestasi</span>
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
              96.85
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">Proses Seleksi</span>
            </td>
          </tr>
          
          <!-- Rank 4-10 -->
          <tr>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="flex items-center">
                <span class="ml-6 font-bold">4</span>
              </div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="text-sm font-medium text-gray-900">PPDB2023-125</div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="text-sm text-gray-900">SMPN 1 Informatika</div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <span class="px-2 py-1 text-xs font-semibold rounded-full bg-purple-100 text-purple-800">Zonasi</span>
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
              95.30
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">Proses Seleksi</span>
            </td>
          </tr>
          
          <tr>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="flex items-center">
                <span class="ml-6 font-bold">5</span>
              </div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="text-sm font-medium text-gray-900">PPDB2023-056</div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="text-sm text-gray-900">SMPN 3 Tekno</div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <span class="px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">Afirmasi</span>
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
              94.75
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">Proses Seleksi</span>
            </td>
          </tr>
          
          <tr>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="flex items-center">
                <span class="ml-6 font-bold">6</span>
              </div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="text-sm font-medium text-gray-900">PPDB2023-178</div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="text-sm text-gray-900">SMPN 2 Digital</div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Prestasi</span>
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
              93.90
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">Proses Seleksi</span>
            </td>
          </tr>
          
          <tr>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="flex items-center">
                <span class="ml-6 font-bold">7</span>
              </div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="text-sm font-medium text-gray-900">PPDB2023-203</div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="text-sm text-gray-900">MTs Al-Khawarizmi</div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <span class="px-2 py-1 text-xs font-semibold rounded-full bg-purple-100 text-purple-800">Zonasi</span>
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
              92.45
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">Proses Seleksi</span>
            </td>
          </tr>
          
          <tr>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="flex items-center">
                <span class="ml-6 font-bold">8</span>
              </div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="text-sm font-medium text-gray-900">PPDB2023-112</div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="text-sm text-gray-900">SMPN 4 Cyber</div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <span class="px-2 py-1 text-xs font-semibold rounded-full bg-gray-100 text-gray-800">Perpindahan</span>
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
              91.80
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">Proses Seleksi</span>
            </td>
          </tr>
          
          <tr>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="flex items-center">
                <span class="ml-6 font-bold">9</span>
              </div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="text-sm font-medium text-gray-900">PPDB2023-165</div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="text-sm text-gray-900">SMPN 1 Informatika</div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Prestasi</span>
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
              90.25
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">Proses Seleksi</span>
            </td>
          </tr>
          
          <tr>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="flex items-center">
                <span class="ml-6 font-bold">10</span>
              </div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="text-sm font-medium text-gray-900">PPDB2023-077</div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="text-sm text-gray-900">MTs Al-Hikmah</div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <span class="px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">Afirmasi</span>
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
              89.60
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">Proses Seleksi</span>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  
  <!-- Pagination -->
  <div class="flex justify-between items-center">
    <div class="text-sm text-gray-700">
      Menampilkan <span class="font-medium">1</span> sampai <span class="font-medium">10</span> dari <span class="font-medium">250</span> hasil
    </div>
    <nav class="inline-flex rounded-md shadow">
      <a href="#" class="px-3 py-2 rounded-l-md border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">
        <i class="fas fa-chevron-left"></i>
      </a>
      <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-blue-600 font-medium">1</a>
      <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-gray-500 hover:bg-gray-50">2</a>
      <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-gray-500 hover:bg-gray-50">3</a>
      <a href="#" class="px-3 py-2 rounded-r-md border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">
        <i class="fas fa-chevron-right"></i>
      </a>
    </nav>
  </div>
  
  <!-- Info Box -->
  <div class="mt-8 bg-blue-50 border-l-4 border-blue-500 p-4">
    <div class="flex">
      <div class="flex-shrink-0">
        <i class="fas fa-info-circle text-blue-500"></i>
      </div>
      <div class="ml-3">
        <h3 class="text-sm font-medium text-blue-800">Informasi Penting</h3>
        <div class="mt-2 text-sm text-blue-700">
          <p>Perankingan ini bersifat sementara dan dapat berubah hingga pengumuman hasil seleksi akhir. Hasil akhir akan diumumkan sesuai jadwal yang telah ditentukan.</p>
        </div>
      </div>
    </div>
  </div>
</main>

  <?php include('components/footer.php'); ?>


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
  });
</script>
</body>
</html>