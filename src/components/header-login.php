<nav class="bg-white shadow-md">
  <div class="container mx-auto px-4">
    <div class="flex justify-between items-center py-4">
      <!-- Logo/Brand -->
      <div class="flex items-center space-x-2">
        <a href="index.html" class="flex items-center space-x-2">
          <div class="bg-blue-600 text-white p-2 rounded-lg">
            <i class="fas fa-graduation-cap text-xl"></i>
          </div>
          <div>
            <h1 class="text-xl font-bold text-gray-800">E-PPDB</h1>
            <p class="text-xs text-blue-600">Kota Informatika</p>
          </div>
        </a>
      </div>
      
      <!-- Desktop Navigation -->
      <div class="hidden md:flex items-center space-x-8">
        <a href="../calon-siswa/index.php" class="nav-item text-gray-600 hover:text-blue-600 font-medium">Beranda</a>
        <a href="../calon-siswa/daftar-sekolah.php" class="nav-item text-gray-600 hover:text-blue-600 font-medium">Daftar Sekolah</a>
        <a href="../calon-siswa/peringkat.php" class="nav-item text-gray-600 hover:text-blue-600 font-medium">Perankingan</a>
        <a href="../calon-siswa/bantuan.php" class="nav-item text-gray-600 hover:text-blue-600 font-medium">Bantuan</a>
      </div>
      
      <!-- Right Side (Profile + Mobile Menu Button) -->
      <div class="flex items-center space-x-4">
        <!-- Profile Dropdown -->
        <div class="relative">
          <button id="profileButton" class="flex items-center space-x-2 focus:outline-none">
            <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600">
              <i class="fas fa-user"></i>
            </div>
            <span class="hidden md:inline text-gray-700">John Doe</span>
            <i class="fas fa-chevron-down text-gray-500 text-xs"></i>
          </button>
          
          <!-- Dropdown Menu -->
          <div id="profileDropdown" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-10">
            <a href="../calon-siswa/profile.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
              <i class="fas fa-user-circle mr-2"></i>Profil Saya
            </a>
            <a href="../calon-siswa/pengaturan.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
              <i class="fas fa-cog mr-2"></i>Pengaturan
            </a>
            <div class="border-t border-gray-200"></div>
            <a href="../guest/index.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
              <i class="fas fa-sign-out-alt mr-2"></i>Keluar
            </a>
          </div>
        </div>
        
        <!-- Mobile Menu Button -->
        <div class="md:hidden">
          <button id="mobile-menu-button" class="text-gray-600 hover:text-blue-600">
            <i class="fas fa-bars text-xl"></i>
          </button>
        </div>
      </div>
    </div>
    
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden mt-4 pb-2">
      <a href="../calon-siswa/index.php" class="block py-2 text-gray-600 hover:text-blue-600 font-medium">Beranda</a>
      <a href="../calon-siswa/daftar-sekolah.php" class="block py-2 text-gray-600 hover:text-blue-600 font-medium">Daftar Sekolah</a>
      <a href="../calon-siswa/peringkat.php" class="block py-2 text-gray-600 hover:text-blue-600 font-medium">Perankingan</a>
      <a href="../calon-siswa/bantuan.php" class="block py-2 text-gray-600 hover:text-blue-600 font-medium">Bantuan</a>
    </div>
  </div>
</nav>

<script>
  // Profile dropdown toggle
  document.getElementById('profileButton').addEventListener('click', function() {
    document.getElementById('profileDropdown').classList.toggle('hidden');
  });
  
  // Close dropdown when clicking outside
  document.addEventListener('click', function(event) {
    const dropdown = document.getElementById('profileDropdown');
    const button = document.getElementById('profileButton');
    
    if (!button.contains(event.target) && !dropdown.contains(event.target)) {
      dropdown.classList.add('hidden');
    }
  });

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
        item.classList.remove('text-gray-600');
      }
    });
  });
</script>