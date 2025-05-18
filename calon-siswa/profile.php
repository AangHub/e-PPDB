<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil Siswa - E-PPDB</title>
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="bg-gray-50">
  <?php include('../components/header-login.php'); ?>

  <!-- Main Content -->
  <main class="p-4 pt-20">
    <div class="container mx-auto max-w-4xl">
      <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Profil Calon Siswa</h1>
        <a href="edit-profile.php" class="text-blue-600 hover:text-blue-800 flex items-center">
          <i class="fas fa-edit mr-2"></i> Edit Profil
        </a>
      </div>

      <!-- Profile Card -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
        <!-- Profile Header -->
        <div class="bg-blue-600 p-6 text-white flex items-center">
          <div class="w-20 h-20 rounded-full bg-white flex items-center justify-center text-blue-600 text-3xl mr-6">
            <i class="fas fa-user"></i>
          </div>
          <div>
            <h2 class="text-xl font-bold">John Doe</h2>
            <p class="text-blue-100">Calon Siswa SMP/MTs</p>
            <p class="text-blue-100 mt-1">ID Pendaftaran: PPDB2023-001</p>
          </div>
        </div>

        <!-- Profile Content -->
        <div class="p-6">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Data Pribadi -->
            <div>
              <h3 class="text-lg font-semibold text-gray-800 mb-4 border-b pb-2">Data Pribadi</h3>
              <div class="space-y-3">
                <div>
                  <p class="text-sm text-gray-500">Nama Lengkap</p>
                  <p class="font-medium">John Doe</p>
                </div>
                <div>
                  <p class="text-sm text-gray-500">NISN</p>
                  <p class="font-medium">1234567890</p>
                </div>
                <div>
                  <p class="text-sm text-gray-500">Tempat, Tanggal Lahir</p>
                  <p class="font-medium">Jakarta, 15 Januari 2010</p>
                </div>
                <div>
                  <p class="text-sm text-gray-500">Jenis Kelamin</p>
                  <p class="font-medium">Laki-laki</p>
                </div>
                <div>
                  <p class="text-sm text-gray-500">Agama</p>
                  <p class="font-medium">Islam</p>
                </div>
              </div>
            </div>

            <!-- Kontak & Sekolah -->
            <div>
              <h3 class="text-lg font-semibold text-gray-800 mb-4 border-b pb-2">Kontak & Sekolah</h3>
              <div class="space-y-3">
                <div>
                  <p class="text-sm text-gray-500">Alamat</p>
                  <p class="font-medium">Jl. Pendidikan No. 123, RT 01/RW 05, Jakarta Selatan</p>
                </div>
                <div>
                  <p class="text-sm text-gray-500">No. HP</p>
                  <p class="font-medium">081234567890</p>
                </div>
                <div>
                  <p class="text-sm text-gray-500">Email</p>
                  <p class="font-medium">john.doe@email.com</p>
                </div>
                <div>
                  <p class="text-sm text-gray-500">Sekolah Asal</p>
                  <p class="font-medium">SDN Pendidikan Jakarta</p>
                </div>
                <div>
                  <p class="text-sm text-gray-500">Tahun Lulus</p>
                  <p class="font-medium">2023</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Data Orang Tua -->
          <div class="mt-8">
            <h3 class="text-lg font-semibold text-gray-800 mb-4 border-b pb-2">Data Orang Tua</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
              <div>
                <h4 class="font-medium text-gray-700 mb-2">Ayah</h4>
                <div class="space-y-2">
                  <p class="text-sm text-gray-500">Nama</p>
                  <p class="font-medium">Budi Santoso</p>
                  <p class="text-sm text-gray-500">Pekerjaan</p>
                  <p class="font-medium">PNS</p>
                  <p class="text-sm text-gray-500">No. HP</p>
                  <p class="font-medium">081234567891</p>
                </div>
              </div>
              <div>
                <h4 class="font-medium text-gray-700 mb-2">Ibu</h4>
                <div class="space-y-2">
                  <p class="text-sm text-gray-500">Nama</p>
                  <p class="font-medium">Ani Santoso</p>
                  <p class="text-sm text-gray-500">Pekerjaan</p>
                  <p class="font-medium">Ibu Rumah Tangga</p>
                  <p class="text-sm text-gray-500">No. HP</p>
                  <p class="font-medium">081234567892</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Pilihan Sekolah -->
          <div class="mt-8">
            <h3 class="text-lg font-semibold text-gray-800 mb-4 border-b pb-2">Pilihan Sekolah</h3>
            <div class="space-y-3">
              <div>
                <p class="text-sm text-gray-500">Pilihan Pertama</p>
                <p class="font-medium">SMPN 1 Informatika</p>
              </div>
              <div>
                <p class="text-sm text-gray-500">Pilihan Kedua</p>
                <p class="font-medium">SMPN 2 Digital</p>
              </div>
              <div>
                <p class="text-sm text-gray-500">Jalur Pendaftaran</p>
                <p class="font-medium">Zonasi</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Prestasi -->
      <div class="bg-white rounded-lg shadow-md p-6 mb-8">
        <h2 class="text-xl font-bold text-gray-800 mb-4">Prestasi</h2>
        <div class="overflow-x-auto">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jenis</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Prestasi</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tingkat</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tahun</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              <tr>
                <td class="px-6 py-4 whitespace-nowrap">Akademik</td>
                <td class="px-6 py-4 whitespace-nowrap">Juara 1 Olimpiade Matematika</td>
                <td class="px-6 py-4 whitespace-nowrap">Kecamatan</td>
                <td class="px-6 py-4 whitespace-nowrap">2022</td>
              </tr>
              <tr>
                <td class="px-6 py-4 whitespace-nowrap">Non-Akademik</td>
                <td class="px-6 py-4 whitespace-nowrap">Juara 2 Lomba Pidato</td>
                <td class="px-6 py-4 whitespace-nowrap">Sekolah</td>
                <td class="px-6 py-4 whitespace-nowrap">2021</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Berkas Pendukung -->
<div class="bg-white rounded-lg shadow-md p-6">
  <h2 class="text-xl font-bold text-gray-800 mb-4">Berkas Pendukung</h2>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
    <!-- Foto 3x4 -->
    <div class="border rounded-lg p-4 text-center">
      <i class="fas fa-file-image text-3xl text-blue-500 mb-2"></i>
      <p class="font-medium">Foto 3x4</p>
      <p class="text-sm text-green-600 mb-2">Sudah diupload</p>
      <button class="text-xs bg-blue-100 text-blue-600 px-3 py-1 rounded hover:bg-blue-200">
        <i class="fas fa-sync-alt mr-1"></i>Upload Ulang
      </button>
    </div>
    
    <!-- Ijazah/SKL -->
    <div class="border rounded-lg p-4 text-center">
      <i class="fas fa-file-certificate text-3xl text-blue-500 mb-2"></i>
      <p class="font-medium">Ijazah/SKL</p>
      <p class="text-sm text-green-600 mb-2">Sudah diupload</p>
      <button class="text-xs bg-blue-100 text-blue-600 px-3 py-1 rounded hover:bg-blue-200">
        <i class="fas fa-sync-alt mr-1"></i>Upload Ulang
      </button>
    </div>
    
    <!-- Kartu Keluarga -->
    <div class="border rounded-lg p-4 text-center">
      <i class="fas fa-file-contract text-3xl text-blue-500 mb-2"></i>
      <p class="font-medium">Kartu Keluarga</p>
      <p class="text-sm text-yellow-600 mb-2">Belum diupload</p>
      <button class="text-xs bg-green-100 text-green-600 px-3 py-1 rounded hover:bg-green-200">
        <i class="fas fa-upload mr-1"></i>Upload
      </button>
    </div>
    
    <!-- Akta Kelahiran -->
    <div class="border rounded-lg p-4 text-center">
      <i class="fas fa-file-alt text-3xl text-blue-500 mb-2"></i>
      <p class="font-medium">Akta Kelahiran</p>
      <p class="text-sm text-green-600 mb-2">Sudah diupload</p>
      <button class="text-xs bg-blue-100 text-blue-600 px-3 py-1 rounded hover:bg-blue-200">
        <i class="fas fa-sync-alt mr-1"></i>Upload Ulang
      </button>
    </div>
  </div>
</div>
      </div>
    </div>
  </main>

  <?php include('../components/footer.php'); ?>
</body>
</html>