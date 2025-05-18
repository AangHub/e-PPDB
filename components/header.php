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
        <a href="../src/index.php" class="nav-item text-gray-600 hover:text-blue-600 font-medium">Beranda</a>
        <a href="../src/daftar-sekolah.php" class="nav-item text-gray-600 hover:text-blue-600 font-medium">Daftar Sekolah</a>
        <a href="../src/peringkat.php" class="nav-item text-gray-600 hover:text-blue-600 font-medium">Perankingan</a>
        <a href="../src/bantuan.php" class="nav-item text-gray-600 hover:text-blue-600 font-medium">Bantuan</a>
      </div>
      
      <!-- Login Button -->
      <div>
        <a href="../src/auth/login.php" class="btn-primary bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg font-medium shadow-lg">
          <i class="fas fa-sign-in-alt mr-2"></i>Login
        </a>
      </div>
      
      <!-- Mobile Menu Button -->
      <div class="md:hidden">
        <button id="mobile-menu-button" class="text-gray-600 hover:text-blue-600">
          <i class="fas fa-bars text-xl"></i>
        </button>
      </div>
    </div>
    
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden mt-4 pb-2">
      <a href="../src/index.php" class="block py-2 text-gray-600 hover:text-blue-600 font-medium">Beranda</a>
      <a href="../src/daftar-sekolah.php" class="block py-2 text-gray-600 hover:text-blue-600 font-medium">Daftar Sekolah</a>
      <a href="../src/peringkat.php" class="block py-2 text-gray-600 hover:text-blue-600 font-medium">Perankingan</a>
      <a href="../src/bantuan.php" class="block py-2 text-gray-600 hover:text-blue-600 font-medium">Bantuan</a>
    </div>
  </div>
</nav>

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
        item.classList.remove('text-gray-600');
      }
    });
  });
</script>