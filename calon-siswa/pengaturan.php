<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pengaturan Akun - E-PPDB</title>
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="bg-gray-50">
  <?php include('../components/header-login.php'); ?>

  <!-- Main Content -->
  <main class="ml-0 md:ml-64 p-4 pt-20">
    <div class="container mx-auto max-w-4xl">
      <h1 class="text-2xl font-bold text-gray-800 mb-6">Pengaturan Akun</h1>
      
      <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
        <!-- Tab Navigation -->
        <div class="border-b border-gray-200">
          <nav class="flex -mb-px">
            <button id="account-tab" class="tab-button active py-4 px-6 text-center border-b-2 font-medium text-sm border-blue-500 text-blue-600">
              <i class="fas fa-user-circle mr-2"></i> Akun
            </button>
            <button id="security-tab" class="tab-button py-4 px-6 text-center border-b-2 font-medium text-sm border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300">
              <i class="fas fa-lock mr-2"></i> Keamanan
            </button>
            <button id="notifications-tab" class="tab-button py-4 px-6 text-center border-b-2 font-medium text-sm border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300">
              <i class="fas fa-bell mr-2"></i> Notifikasi
            </button>
          </nav>
        </div>

        <!-- Tab Contents -->
        <div class="p-6">
          <!-- Account Settings -->
          <div id="account-content" class="tab-content active">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Informasi Akun</h2>
            <form class="space-y-6">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                  <input type="text" value="John Doe" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 border">
                </div>
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                  <input type="email" value="john.doe@email.com" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 border">
                </div>
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1">Nomor Telepon</label>
                  <input type="tel" value="081234567890" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 border">
                </div>
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1">Foto Profil</label>
                  <div class="flex items-center">
                    <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 mr-4">
                      <i class="fas fa-user text-xl"></i>
                    </div>
                    <input type="file" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 border">
                  </div>
                </div>
              </div>
              <div class="flex justify-end">
                <button type="button" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md mr-2">Batal</button>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md">Simpan Perubahan</button>
              </div>
            </form>
          </div>

          <!-- Security Settings -->
          <div id="security-content" class="tab-content hidden">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Keamanan Akun</h2>
            <form class="space-y-6">
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Password Saat Ini</label>
                <input type="password" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 border">
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Password Baru</label>
                <input type="password" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 border">
                <p class="mt-1 text-xs text-gray-500">Minimal 8 karakter</p>
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Konfirmasi Password Baru</label>
                <input type="password" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 border">
              </div>
              <div class="flex items-center">
                <input id="logout-all" name="logout-all" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                <label for="logout-all" class="ml-2 block text-sm text-gray-700">
                  Keluar dari semua perangkat
                </label>
              </div>
              <div class="flex justify-end">
                <button type="button" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md mr-2">Batal</button>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md">Perbarui Password</button>
              </div>
            </form>
          </div>

          <!-- Notification Settings -->
          <div id="notifications-content" class="tab-content hidden">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Pengaturan Notifikasi</h2>
            <form class="space-y-6">
              <div>
                <h3 class="font-medium text-gray-700 mb-3">Email Notifikasi</h3>
                <div class="space-y-3">
                  <div class="flex items-center">
                    <input id="email-status" name="email-status" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                    <label for="email-status" class="ml-2 block text-sm text-gray-700">
                      Status pendaftaran
                    </label>
                  </div>
                  <div class="flex items-center">
                    <input id="email-announcement" name="email-announcement" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                    <label for="email-announcement" class="ml-2 block text-sm text-gray-700">
                      Pengumuman penting
                    </label>
                  </div>
                  <div class="flex items-center">
                    <input id="email-reminder" name="email-reminder" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                    <label for="email-reminder" class="ml-2 block text-sm text-gray-700">
                      Pengingat jadwal
                    </label>
                  </div>
                </div>
              </div>
              
              <div>
                <h3 class="font-medium text-gray-700 mb-3">SMS Notifikasi</h3>
                <div class="space-y-3">
                  <div class="flex items-center">
                    <input id="sms-status" name="sms-status" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                    <label for="sms-status" class="ml-2 block text-sm text-gray-700">
                      Status pendaftaran
                    </label>
                  </div>
                  <div class="flex items-center">
                    <input id="sms-announcement" name="sms-announcement" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                    <label for="sms-announcement" class="ml-2 block text-sm text-gray-700">
                      Pengumuman penting
                    </label>
                  </div>
                </div>
              </div>
              
              <div class="flex justify-end">
                <button type="button" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md mr-2">Batal</button>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md">Simpan Pengaturan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>

  <?php include('../components/footer.php'); ?>

  <script>
    // Tab functionality
    document.querySelectorAll('.tab-button').forEach(button => {
      button.addEventListener('click', () => {
        // Remove active class from all buttons and contents
        document.querySelectorAll('.tab-button').forEach(btn => {
          btn.classList.remove('active', 'border-blue-500', 'text-blue-600');
          btn.classList.add('border-transparent', 'text-gray-500');
        });
        document.querySelectorAll('.tab-content').forEach(content => {
          content.classList.add('hidden');
          content.classList.remove('active');
        });

        // Add active class to clicked button
        button.classList.add('active', 'border-blue-500', 'text-blue-600');
        button.classList.remove('border-transparent', 'text-gray-500');

        // Show corresponding content
        const contentId = button.id.replace('-tab', '-content');
        document.getElementById(contentId).classList.remove('hidden');
        document.getElementById(contentId).classList.add('active');
      });
    });
  </script>
</body>
</html>