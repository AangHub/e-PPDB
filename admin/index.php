<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Admin Sistem</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold text-center mb-8 text-blue-800">PANEL ADMIN SISTEM</h1>
        <div class="flex justify-end items-center mb-6">
            <a href="../guest/index.php" class="text-blue-500 hover:text-blue-700">
                <i class="fas fa-sign-out-alt mr-2"></i>Keluar
            </a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Kelola Akun & Keamanan -->
            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
                <div class="text-center">
                    <i class="fas fa-user-shield text-4xl text-red-500 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Kelola Akun & Keamanan</h3>
                    <p class="text-gray-600 mb-4">Manajemen user dan pengaturan keamanan</p>
                    <a href="kelola-akun.php" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded">
                        <i class="fas fa-cog mr-2"></i>Kelola Sistem
                    </a>
                </div>
            </div>

            <!-- Backup & Restore Data -->
            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
                <div class="text-center">
                    <i class="fas fa-database text-4xl text-yellow-500 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Backup & Restore Data</h3>
                    <p class="text-gray-600 mb-4">Cadangkan atau pulihkan data sistem</p>
                    <a href="backup-restore.php" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded">
                        <i class="fas fa-save mr-2"></i>Kelola Data
                    </a>
                </div>
            </div>

            <!-- Audit Log Sistem -->
            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
                <div class="text-center">
                    <i class="fas fa-clipboard-list text-4xl text-blue-500 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Audit Log Sistem</h3>
                    <p class="text-gray-600 mb-4">Pantau aktivitas pengguna sistem</p>
                    <a href="log-sistem.php" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                        <i class="fas fa-history mr-2"></i>Lihat Log
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>