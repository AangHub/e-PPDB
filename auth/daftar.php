<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar - E-PPDB</title>
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      background-color: #f8fafc;
    }
    .register-card {
      max-width: 400px;
      width: 90%;
    }
  </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4">
  <div class="register-card bg-white rounded-xl shadow-lg p-8">
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
    
    <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">Buat Akun Baru</h1>
    
    <!-- Form Daftar -->
    <form id="registerForm" class="space-y-4">
      <div>
        <label for="fullname" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
        <div class="relative">
          <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            <i class="fas fa-user text-gray-400"></i>
          </div>
          <input type="text" id="fullname" name="fullname" required
                 class="pl-10 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 border"
                 placeholder="Nama lengkap">
        </div>
      </div>
      
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Alamat Email</label>
        <div class="relative">
          <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            <i class="fas fa-envelope text-gray-400"></i>
          </div>
          <input type="email" id="email" name="email" required
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
          <input type="password" id="password" name="password" required
                 class="pl-10 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 border"
                 placeholder="••••••••">
        </div>
        <p class="mt-1 text-xs text-gray-500">Minimal 8 karakter</p>
      </div>
      
      <div>
        <label for="confirmPassword" class="block text-sm font-medium text-gray-700 mb-1">Konfirmasi Password</label>
        <div class="relative">
          <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            <i class="fas fa-lock text-gray-400"></i>
          </div>
          <input type="password" id="confirmPassword" name="confirmPassword" required
                 class="pl-10 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 border"
                 placeholder="••••••••">
        </div>
        <p id="passwordError" class="mt-1 text-sm text-red-600 hidden">Password tidak cocok</p>
      </div>
      
      <div class="flex items-center">
        <input id="terms" name="terms" type="checkbox" required
               class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
        <label for="terms" class="ml-2 block text-sm text-gray-700">
          Saya menyetujui <a href="#" class="text-blue-600 hover:text-blue-500">Syarat & Ketentuan</a>
        </label>
      </div>
      
      <div>
        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
          Daftar
        </button>
      </div>
    </form>
    
    <div class="mt-6 text-center text-sm">
      <p class="text-gray-500">
        Sudah punya akun?
        <a href="login.html" class="font-medium text-blue-600 hover:text-blue-500">
          Masuk disini
        </a>
      </p>
    </div>
  </div>

  <script>
    document.getElementById('registerForm').addEventListener('submit', function(e) {
      e.preventDefault();
      
      // Validasi email sederhana
      const email = document.getElementById('email').value;
      const emailError = document.getElementById('emailError');
      
      if (!email.includes('@') || !email.includes('.')) {
        emailError.classList.remove('hidden');
        return;
      } else {
        emailError.classList.add('hidden');
      }
      
      // Validasi password
      const password = document.getElementById('password').value;
      const confirmPassword = document.getElementById('confirmPassword').value;
      const passwordError = document.getElementById('passwordError');
      
      if (password !== confirmPassword) {
        passwordError.classList.remove('hidden');
        return;
      } else {
        passwordError.classList.add('hidden');
      }
      
      // Simulasi pendaftaran berhasil
      window.location.href = '../calon-siswa/dashboard-siswa.html';
    });
  </script>
</body>
</html>