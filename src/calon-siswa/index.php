<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - E-PPDB SMP/MTs Kota Informatika</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    .school-card:hover {
      transform: translateY(-5px);
      transition: transform 0.3s ease;
    }
    .form-container {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.5s ease-out;
    }
    .form-container.active {
      max-height: 2000px; /* Nilai besar untuk mengakomodasi semua form */
    }
  </style>
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">

  <?php include('../components/header-login.php'); ?>

<!-- Main Content -->
<main class="p-4 pt-10">
  <div class="container mx-auto">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Dashboard Calon Siswa</h1>
    
    <!-- Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
      <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-blue-500">
        <div class="flex items-center">
          <div class="p-3 rounded-full bg-blue-100 text-blue-600 mr-4">
            <i class="fas fa-file-alt text-xl"></i>
          </div>
          <div>
            <h3 class="text-lg font-medium text-gray-800">Formulir Pendaftaran</h3>
            <p class="text-gray-600">Lengkapi formulir pendaftaran</p>
          </div>
        </div>
        <button onclick="toggleForm('formulir')" class="mt-4 inline-block text-blue-600 hover:text-blue-800 font-medium">
          Isi Formulir <i class="fas fa-arrow-right ml-1"></i>
        </button>
      </div>
      
      <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-yellow-500">
        <div class="flex items-center">
          <div class="p-3 rounded-full bg-yellow-100 text-yellow-600 mr-4">
            <i class="fas fa-trophy text-xl"></i>
          </div>
          <div>
            <h3 class="text-lg font-medium text-gray-800">Prestasi</h3>
            <p class="text-gray-600">Tambahkan prestasi akademik/non-akademik</p>
          </div>
        </div>
        <button onclick="toggleForm('prestasi')" class="mt-4 inline-block text-yellow-600 hover:text-yellow-800 font-medium">
          Tambah Prestasi <i class="fas fa-arrow-right ml-1"></i>
        </button>
      </div>
      
      <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-green-500">
        <div class="flex items-center">
          <div class="p-3 rounded-full bg-green-100 text-green-600 mr-4">
            <i class="fas fa-file-upload text-xl"></i>
          </div>
          <div>
            <h3 class="text-lg font-medium text-gray-800">Berkas Pendukung</h3>
            <p class="text-gray-600">Upload dokumen persyaratan</p>
          </div>
        </div>
        <button onclick="toggleForm('berkas')" class="mt-4 inline-block text-green-600 hover:text-green-800 font-medium">
          Upload Berkas <i class="fas fa-arrow-right ml-1"></i>
        </button>
      </div>
      
      <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-purple-500">
        <div class="flex items-center">
          <div class="p-3 rounded-full bg-purple-100 text-purple-600 mr-4">
            <i class="fas fa-print text-xl"></i>
          </div>
          <div>
            <h3 class="text-lg font-medium text-gray-800">Cetak Bukti</h3>
            <p class="text-gray-600">Cetak bukti pendaftaran</p>
          </div>
        </div>
        <button onclick="toggleForm('cetak')" class="mt-4 inline-block text-purple-600 hover:text-purple-800 font-medium">
          Cetak Bukti <i class="fas fa-arrow-right ml-1"></i>
        </button>
      </div>
    </div>

    <!-- Form Container -->
    <div id="formContainer" class="form-container mb-8">
      <!-- Formulir Pendaftaran -->
      <div id="formulirForm" class="hidden bg-white rounded-lg shadow-md p-6 mb-6">
        <h2 class="text-xl font-bold text-gray-800 mb-4">Formulir Pendaftaran</h2>
        <form>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
              <input type="text" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 border">
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">NISN</label>
              <input type="text" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 border">
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Tempat Lahir</label>
              <input type="text" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 border">
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Tanggal Lahir</label>
              <input type="date" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 border">
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Kelamin</label>
              <select class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 border">
                <option>Laki-laki</option>
                <option>Perempuan</option>
              </select>
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Agama</label>
              <select class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 border">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Katolik</option>
                <option>Hindu</option>
                <option>Buddha</option>
                <option>Konghucu</option>
              </select>
            </div>
          </div>
          <div class="flex justify-end">
            <button type="button" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md mr-2">Batal</button>
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md">Simpan</button>
          </div>
        </form>
      </div>

      <!-- Form Prestasi -->
      <div id="prestasiForm" class="hidden bg-white rounded-lg shadow-md p-6 mb-6">
        <h2 class="text-xl font-bold text-gray-800 mb-4">Tambah Prestasi</h2>
        <form>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Prestasi</label>
              <select class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 border">
                <option>Akademik</option>
                <option>Non-Akademik</option>
              </select>
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Tingkat Prestasi</label>
              <select class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 border">
                <option>Sekolah</option>
                <option>Kecamatan</option>
                <option>Kabupaten/Kota</option>
                <option>Provinsi</option>
                <option>Nasional</option>
                <option>Internasional</option>
              </select>
            </div>
            <div class="md:col-span-2">
              <label class="block text-sm font-medium text-gray-700 mb-1">Nama Prestasi</label>
              <input type="text" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 border">
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Tahun</label>
              <input type="number" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 border">
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Upload Sertifikat</label>
              <input type="file" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 border">
            </div>
          </div>
          <div class="flex justify-end">
            <button type="button" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md mr-2">Batal</button>
            <button type="submit" class="px-4 py-2 bg-yellow-600 text-white rounded-md">Simpan</button>
          </div>
        </form>
      </div>

      <!-- Form Berkas -->
      <div id="berkasForm" class="hidden bg-white rounded-lg shadow-md p-6 mb-6">
        <h2 class="text-xl font-bold text-gray-800 mb-4">Upload Berkas Pendukung</h2>
        <form>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Foto 3x4</label>
              <input type="file" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 border">
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Ijazah/SKL</label>
              <input type="file" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 border">
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Kartu Keluarga</label>
              <input type="file" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 border">
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Akta Kelahiran</label>
              <input type="file" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 border">
            </div>
          </div>
          <div class="flex justify-end">
            <button type="button" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md mr-2">Batal</button>
            <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-md">Upload</button>
          </div>
        </form>
      </div>

      <!-- Form Cetak -->
      <div id="cetakForm" class="hidden bg-white rounded-lg shadow-md p-6 mb-6">
        <h2 class="text-xl font-bold text-gray-800 mb-4">Cetak Bukti Pendaftaran</h2>
        <div class="bg-gray-50 p-6 rounded-lg text-center">
          <i class="fas fa-file-pdf text-5xl text-red-500 mb-4"></i>
          <p class="text-gray-600 mb-4">Bukti pendaftaran Anda siap dicetak. Pastikan semua data sudah benar sebelum mencetak.</p>
          <button class="px-4 py-2 bg-purple-600 text-white rounded-md">
            <i class="fas fa-print mr-2"></i> Cetak Dokumen
          </button>
        </div>
      </div>
    </div>
    
    <!-- Status Pendaftaran -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-8">
      <h2 class="text-xl font-bold text-gray-800 mb-4">Status Pendaftaran</h2>
      <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tahapan</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Keterangan</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">Formulir Pendaftaran</td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Selesai</span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-gray-500">Formulir sudah lengkap</td>
            </tr>
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">Berkas Pendukung</td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">Belum Lengkap</span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-gray-500">Harap upload KK dan Ijazah</td>
            </tr>
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">Prestasi</td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">Opsional</span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-gray-500">Bisa ditambahkan jika ada</td>
            </tr>
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">Verifikasi</td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-gray-100 text-gray-800">Menunggu</span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-gray-500">Akan diverifikasi setelah semua lengkap</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>

  <?php include('../components/footer.php'); ?>

<script>
  function toggleForm(formType) {
    // Hide all forms first
    document.querySelectorAll('#formContainer > div').forEach(form => {
      form.classList.add('hidden');
    });
    
    // Show the selected form
    const form = document.getElementById(formType + 'Form');
    form.classList.remove('hidden');
    
    // Toggle form container
    const container = document.getElementById('formContainer');
    if (container.classList.contains('active')) {
      // If clicking the same form button, close it
      if (container.dataset.currentForm === formType) {
        container.classList.remove('active');
        container.dataset.currentForm = '';
        return;
      }
    } else {
      container.classList.add('active');
    }
    container.dataset.currentForm = formType;
  }
</script>
</body>
</html>