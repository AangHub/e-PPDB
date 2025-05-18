<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - E-PPDB</title>
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      background-color: #f8fafc;
    }
    .login-card {
      max-width: 400px;
      width: 90%;
    }
  </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4">
  <div class="login-card bg-white rounded-xl shadow-lg p-8">
    <!-- Tombol Kembali -->
    <a href="javascript:history.back()" class="text-blue-600 hover:text-blue-800 mb-6 inline-flex items-center">
      <i class="fas fa-arrow-left mr-2"></i>
      Kembali
    </a>
    
    <!-- Logo Aplikasi -->
    <div class="flex justify-center mb-8">
      <div class="bg-blue-600 text-white p-3 rounded-lg">
        <i class="fas fa-graduation-cap text-3xl"></i>
      </div>
    </div>
    
    <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">Masuk ke Akun Anda</h1>
    
    <!-- Form Login -->
    <form id="loginForm" class="space-y-4">
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Alamat Email</label>
        <div class="relative">
          <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            <i class="fas fa-envelope text-gray-400"></i>
          </div>
          <input type="email" id="email" name="email" 
                 class="pl-10 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 border"
                 placeholder="email@contoh.com">
        </div>
        <p id="emailError" class="mt-1 text-sm text-red-600 hidden">Email tidak valid</p>
      </div>
      
      <div>
        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
        <div class="relative">
          <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            <i class="fas fa-lock text-gray-400"></i>
          </div>
          <input type="password" id="password" name="password" 
                 class="pl-10 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 border"
                 placeholder="••••••••">
        </div>
      </div>
      
      <div class="flex items-center justify-between">
        <div class="flex items-center">
          <input id="remember" name="remember" type="checkbox" 
                 class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
          <label for="remember" class="ml-2 block text-sm text-gray-700">
            Ingat saya
          </label>
        </div>
        
        <div class="text-sm">
          <a href="#" class="font-medium text-blue-600 hover:text-blue-500">
            Lupa password?
          </a>
        </div>
      </div>
      
      <div>
        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
          Masuk
        </button>
      </div>
    </form>
    
    <div class="mt-6">
      <div class="relative">
        <div class="absolute inset-0 flex items-center">
          <div class="w-full border-t border-gray-300"></div>
        </div>
        <div class="relative flex justify-center text-sm">
          <span class="px-2 bg-white text-gray-500">
            Belum punya akun?
          </span>
        </div>
      </div>
      
      <div class="mt-4">
        <a href="daftar.php" class="w-full flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
          Daftar Sekarang
        </a>
      </div>
    </div>
  </div>

  <script>
    document.getElementById('loginForm').addEventListener('submit', function(e) {
      e.preventDefault();
      
      const email = document.getElementById('email').value.toLowerCase();
      let redirectUrl = '';
      
      // Hapus validasi email
      document.getElementById('emailError').classList.add('hidden');
      
      // Tentukan redirect URL berdasarkan email
      if (email.includes('calonsiswa') || email.includes('siswa')) {
        redirectUrl = '../calon-siswa/index.php';
      } else if (email.includes('admin') || email.includes('administrator')) {
        redirectUrl = '../admin/index.php';
      } else if (email.includes('dinas') || email.includes('disdik')) {
        redirectUrl = '../dinas/index.php';
      } else if (email.includes('panitia') || email.includes('ppdb')) {
        redirectUrl = '../panitia/index.php';
      } else {
        // Default redirect jika tidak ada kecocokan
        redirectUrl = '../calon-siswa/index.php';
      }
      
      // Redirect ke halaman yang sesuai
      window.location.href = redirectUrl;
    });
  </script>
</body>
</html>