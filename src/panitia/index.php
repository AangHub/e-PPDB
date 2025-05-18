<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Panitia PPDB</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold text-center mb-8 text-blue-800">PANEL PANITIA PPDB</h1>
        <div class="flex justify-end items-center mb-6">
            <a href="../guest/index.php" class="text-blue-500 hover:text-blue-700">
                <i class="fas fa-sign-out-alt mr-2"></i>Keluar
            </a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Validasi Kelengkapan Dokumen -->
            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
                <div class="text-center">
                    <i class="fas fa-file-check text-4xl text-green-500 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Validasi Kelengkapan Dokumen</h3>
                    <p class="text-gray-600 mb-4">Verifikasi dokumen pendaftaran siswa</p>
                    <a href="validasi-dokumen.php" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                        <i class="fas fa-search mr-2"></i>Cek Dokumen
                    </a>
                </div>
            </div>

            <!-- Verifikasi Manual Dokumen -->
            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
                <div class="text-center">
                    <i class="fas fa-user-check text-4xl text-purple-500 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Verifikasi Manual Dokumen</h3>
                    <p class="text-gray-600 mb-4">Verifikasi dokumen yang tidak valid otomatis</p>
                    <a href="verifikasi-dokumen.php" class="bg-purple-500 hover:bg-purple-600 text-white px-4 py-2 rounded">
                        <i class="fas fa-check-circle mr-2"></i>Verifikasi
                    </a>
                </div>
            </div>

            <!-- Cek Status Dokumen -->
            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
                <div class="text-center">
                    <i class="fas fa-info-circle text-4xl text-yellow-500 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Cek Status Dokumen</h3>
                    <p class="text-gray-600 mb-4">Pantau status validasi dokumen siswa</p>
                    <a href="status-validasi.php" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded">
                        <i class="fas fa-list mr-2"></i>Lihat Status
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>