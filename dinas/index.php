<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Dinas Pendidikan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold text-center mb-8 text-blue-800">PANEL DINAS PENDIDIKAN</h1>
        <div class="flex justify-end items-center mb-6">
            <a href="../guest/index.php" class="text-blue-500 hover:text-blue-700">
                <i class="fas fa-sign-out-alt mr-2"></i>Keluar
            </a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Lihat Hasil Seleksi -->
            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
                <div class="text-center">
                    <i class="fas fa-chart-bar text-4xl text-blue-500 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Lihat Hasil Seleksi</h3>
                    <p class="text-gray-600 mb-4">Pantau hasil seleksi PPDB seluruh sekolah</p>
                    <a href="hasil-seleksi.php" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                        <i class="fas fa-eye mr-2"></i>Lihat Hasil
                    </a>
                </div>
            </div>

            <!-- Lihat Statistik & Laporan -->
            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
                <div class="text-center">
                    <i class="fas fa-chart-pie text-4xl text-green-500 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Lihat Statistik & Laporan</h3>
                    <p class="text-gray-600 mb-4">Analisis data PPDB secara menyeluruh</p>
                    <a href="statistik-laporan.php" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded">
                        <i class="fas fa-file-alt mr-2"></i>Buat Laporan
                    </a>
                </div>
            </div>

            <!-- Input Kuota Sekolah -->
            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
                <div class="text-center">
                    <i class="fas fa-edit text-4xl text-purple-500 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Input Kuota Sekolah</h3>
                    <p class="text-gray-600 mb-4">Kelola kuota penerimaan siswa per sekolah</p>
                    <a href="input-kuota.php" class="bg-purple-500 hover:bg-purple-600 text-white px-4 py-2 rounded">
                        <i class="fas fa-pencil-alt mr-2"></i>Kelola Kuota
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>