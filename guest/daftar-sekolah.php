<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Sekolah - E-PPDB SMP/MTs Kota Informatika</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    .school-card:hover {
      transform: translateY(-5px);
      transition: transform 0.3s ease;
    }
  </style>
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">
  
  <!-- Include Navbar -->
  <?php include('../components/header.php'); ?>
  
  <!-- Main Content -->
  <!-- Main Content -->
<main class="flex-grow container mx-auto px-4 py-8">
  <!-- Page Header -->
  <div class="mb-8">
    <h2 class="text-3xl font-bold text-gray-800 mb-2">Daftar Sekolah PPDB</h2>
    <div class="flex items-center text-gray-600">
      <i class="fas fa-info-circle mr-2"></i>
      <p>Daftar sekolah peserta PPDB SMP/MTs Kota Informatika Tahun Ajaran 2023/2024</p>
    </div>
  </div>
  
  <!-- Search and Filter Section -->
  <div class="bg-white rounded-lg shadow-md p-6 mb-8">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
      <!-- Search Input -->
      <div class="md:col-span-2">
        <div class="relative">
          <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            <i class="fas fa-search text-gray-400"></i>
          </div>
          <input type="text" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="Cari sekolah...">
        </div>
      </div>
      
      <!-- Filter Dropdown -->
      <div>
        <select class="block w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
          <option selected>Filter berdasarkan Kecamatan</option>
          <option>Kec. Cyber</option>
          <option>Kec. Digital</option>
          <option>Kec. Teknologi</option>
          <option>Kec. Informatika</option>
        </select>
      </div>
    </div>
  </div>
  
  <!-- Schools Grid -->
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
    <!-- School Card 1 -->
    <div class="school-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
      <div class="h-40 bg-gradient-to-r from-blue-500 to-blue-700 flex items-center justify-center">
        <i class="fas fa-school text-white text-5xl"></i>
      </div>
      <div class="p-6">
        <div class="flex justify-between items-start mb-3">
          <h3 class="text-xl font-bold text-gray-800">SMPN 1 Informatika</h3>
          <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">Unggulan</span>
        </div>
        <div class="flex items-center text-gray-600 mb-3">
          <i class="fas fa-map-marker-alt mr-2 text-blue-500"></i>
          <span>Jl. Teknologi No. 123, Kec. Cyber</span>
        </div>
        <div class="grid grid-cols-2 gap-4 mb-4">
          <div>
            <p class="text-sm text-gray-500">Kuota Total</p>
            <p class="font-semibold text-gray-800">250 siswa</p>
          </div>
          <div>
            <p class="text-sm text-gray-500">Sisa Kuota</p>
            <p class="font-semibold text-green-600">125 siswa</p>
          </div>
        </div>
        <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4">
          <div class="bg-blue-600 h-2.5 rounded-full" style="width: 50%"></div>
        </div>
        <a href="#" class="block text-center bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium transition-colors duration-300">
          <i class="fas fa-eye mr-2"></i>Lihat Detail
        </a>
      </div>
    </div>
    
    <!-- School Card 2 -->
    <div class="school-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
      <div class="h-40 bg-gradient-to-r from-green-500 to-green-700 flex items-center justify-center">
        <i class="fas fa-school text-white text-5xl"></i>
      </div>
      <div class="p-6">
        <div class="flex justify-between items-start mb-3">
          <h3 class="text-xl font-bold text-gray-800">SMPN 2 Digital</h3>
          <span class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">Favorit</span>
        </div>
        <div class="flex items-center text-gray-600 mb-3">
          <i class="fas fa-map-marker-alt mr-2 text-green-500"></i>
          <span>Jl. Digital No. 45, Kec. Digital</span>
        </div>
        <div class="grid grid-cols-2 gap-4 mb-4">
          <div>
            <p class="text-sm text-gray-500">Kuota Total</p>
            <p class="font-semibold text-gray-800">200 siswa</p>
          </div>
          <div>
            <p class="text-sm text-gray-500">Sisa Kuota</p>
            <p class="font-semibold text-green-600">75 siswa</p>
          </div>
        </div>
        <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4">
          <div class="bg-green-600 h-2.5 rounded-full" style="width: 37.5%"></div>
        </div>
        <a href="#" class="block text-center bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg font-medium transition-colors duration-300">
          <i class="fas fa-eye mr-2"></i>Lihat Detail
        </a>
      </div>
    </div>
    
    <!-- School Card 3 -->
    <div class="school-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
      <div class="h-40 bg-gradient-to-r from-purple-500 to-purple-700 flex items-center justify-center">
        <i class="fas fa-school text-white text-5xl"></i>
      </div>
      <div class="p-6">
        <div class="flex justify-between items-start mb-3">
          <h3 class="text-xl font-bold text-gray-800">MTs Al-Hikmah</h3>
          <span class="bg-purple-100 text-purple-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">Religius</span>
        </div>
        <div class="flex items-center text-gray-600 mb-3">
          <i class="fas fa-map-marker-alt mr-2 text-purple-500"></i>
          <span>Jl. Religius No. 78, Kec. Teknologi</span>
        </div>
        <div class="grid grid-cols-2 gap-4 mb-4">
          <div>
            <p class="text-sm text-gray-500">Kuota Total</p>
            <p class="font-semibold text-gray-800">180 siswa</p>
          </div>
          <div>
            <p class="text-sm text-gray-500">Sisa Kuota</p>
            <p class="font-semibold text-green-600">90 siswa</p>
          </div>
        </div>
        <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4">
          <div class="bg-purple-600 h-2.5 rounded-full" style="width: 50%"></div>
        </div>
        <a href="#" class="block text-center bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg font-medium transition-colors duration-300">
          <i class="fas fa-eye mr-2"></i>Lihat Detail
        </a>
      </div>
    </div>
    
    <!-- School Card 4 -->
    <div class="school-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
      <div class="h-40 bg-gradient-to-r from-yellow-500 to-yellow-600 flex items-center justify-center">
        <i class="fas fa-school text-white text-5xl"></i>
      </div>
      <div class="p-6">
        <div class="flex justify-between items-start mb-3">
          <h3 class="text-xl font-bold text-gray-800">SMPN 3 Tekno</h3>
          <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">Sains</span>
        </div>
        <div class="flex items-center text-gray-600 mb-3">
          <i class="fas fa-map-marker-alt mr-2 text-yellow-500"></i>
          <span>Jl. Sains No. 56, Kec. Informatika</span>
        </div>
        <div class="grid grid-cols-2 gap-4 mb-4">
          <div>
            <p class="text-sm text-gray-500">Kuota Total</p>
            <p class="font-semibold text-gray-800">220 siswa</p>
          </div>
          <div>
            <p class="text-sm text-gray-500">Sisa Kuota</p>
            <p class="font-semibold text-green-600">110 siswa</p>
          </div>
        </div>
        <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4">
          <div class="bg-yellow-600 h-2.5 rounded-full" style="width: 50%"></div>
        </div>
        <a href="#" class="block text-center bg-yellow-600 hover:bg-yellow-700 text-white px-4 py-2 rounded-lg font-medium transition-colors duration-300">
          <i class="fas fa-eye mr-2"></i>Lihat Detail
        </a>
      </div>
    </div>
    
    <!-- School Card 5 -->
    <div class="school-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
      <div class="h-40 bg-gradient-to-r from-red-500 to-red-700 flex items-center justify-center">
        <i class="fas fa-school text-white text-5xl"></i>
      </div>
      <div class="p-6">
        <div class="flex justify-between items-start mb-3">
          <h3 class="text-xl font-bold text-gray-800">SMPN 4 Cyber</h3>
          <span class="bg-red-100 text-red-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">IT</span>
        </div>
        <div class="flex items-center text-gray-600 mb-3">
          <i class="fas fa-map-marker-alt mr-2 text-red-500"></i>
          <span>Jl. Cyber No. 89, Kec. Cyber</span>
        </div>
        <div class="grid grid-cols-2 gap-4 mb-4">
          <div>
            <p class="text-sm text-gray-500">Kuota Total</p>
            <p class="font-semibold text-gray-800">210 siswa</p>
          </div>
          <div>
            <p class="text-sm text-gray-500">Sisa Kuota</p>
            <p class="font-semibold text-green-600">42 siswa</p>
          </div>
        </div>
        <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4">
          <div class="bg-red-600 h-2.5 rounded-full" style="width: 20%"></div>
        </div>
        <a href="#" class="block text-center bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg font-medium transition-colors duration-300">
          <i class="fas fa-eye mr-2"></i>Lihat Detail
        </a>
      </div>
    </div>
    
    <!-- School Card 6 -->
    <div class="school-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
      <div class="h-40 bg-gradient-to-r from-indigo-500 to-indigo-700 flex items-center justify-center">
        <i class="fas fa-school text-white text-5xl"></i>
      </div>
      <div class="p-6">
        <div class="flex justify-between items-start mb-3">
          <h3 class="text-xl font-bold text-gray-800">MTs Al-Khawarizmi</h3>
          <span class="bg-indigo-100 text-indigo-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">Matematika</span>
        </div>
        <div class="flex items-center text-gray-600 mb-3">
          <i class="fas fa-map-marker-alt mr-2 text-indigo-500"></i>
          <span>Jl. Algoritma No. 34, Kec. Digital</span>
        </div>
        <div class="grid grid-cols-2 gap-4 mb-4">
          <div>
            <p class="text-sm text-gray-500">Kuota Total</p>
            <p class="font-semibold text-gray-800">190 siswa</p>
          </div>
          <div>
            <p class="text-sm text-gray-500">Sisa Kuota</p>
            <p class="font-semibold text-green-600">95 siswa</p>
          </div>
        </div>
        <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4">
          <div class="bg-indigo-600 h-2.5 rounded-full" style="width: 50%"></div>
        </div>
        <a href="#" class="block text-center bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg font-medium transition-colors duration-300">
          <i class="fas fa-eye mr-2"></i>Lihat Detail
        </a>
      </div>
    </div>
  </div>
  
  <!-- Pagination -->
  <div class="flex justify-center">
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
</main>
  
  <!-- Include Footer -->
  <?php include('../components/footer.php'); ?>
  
  <!-- JavaScript to include components -->
  <script>
    // Function to load HTML components
    function includeHTML() {
      const components = ['navbar', 'footer'];
      
      components.forEach(component => {
        const element = document.getElementById(component);
        if (element) {
          fetch(`../components/${component}.html`)
            .then(response => response.text())
            .then(data => {
              element.innerHTML = data;
            })
            .catch(error => {
              console.error(`Error loading ${component}:`, error);
            });
        }
      });
    }
    
    // Call the function when DOM is loaded
    document.addEventListener('DOMContentLoaded', includeHTML);
  </script>
</body>
</html>