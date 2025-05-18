<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backup Data - Admin Sistem</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-yellow-800">
                <i class="fas fa-database mr-2"></i>Backup & Restore Data
            </h1>
            <a href="javascript:history.back()" class="text-blue-500 hover:text-blue-700">
                <i class="fas fa-arrow-left mr-1"></i>Kembali
            </a>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <div class="border rounded-lg p-6 text-center">
                    <i class="fas fa-save text-5xl text-blue-500 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-3">Backup Data</h3>
                    <p class="text-gray-600 mb-4">Buat cadangan seluruh data sistem</p>
                    <div class="space-y-3">
                        <button class="w-full bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                            <i class="fas fa-file-export mr-2"></i>Backup Sekarang
                        </button>
                        <div class="text-sm text-gray-500">
                            Backup terakhir: 15 Mei 2025 14:30
                        </div>
                    </div>
                </div>
                <div class="border rounded-lg p-6 text-center">
                    <i class="fas fa-file-import text-5xl text-green-500 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-3">Restore Data</h3>
                    <p class="text-gray-600 mb-4">Pulihkan data dari cadangan</p>
                    <div class="space-y-3">
                        <div class="border rounded p-2 bg-gray-50">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Pilih File Backup</label>
                            <input type="file" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                        </div>
                        <button class="w-full bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded">
                            <i class="fas fa-upload mr-2"></i>Restore Data
                        </button>
                    </div>
                </div>
            </div>

            <div class="border-t pt-6">
                <h3 class="text-lg font-semibold mb-4">Riwayat Backup</h3>
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="py-2 px-4 border">No</th>
                                <th class="py-2 px-4 border">Nama File</th>
                                <th class="py-2 px-4 border">Tanggal</th>
                                <th class="py-2 px-4 border">Ukuran</th>
                                <th class="py-2 px-4 border">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-gray-50">
                                <td class="py-2 px-4 border text-center">1</td>
                                <td class="py-2 px-4 border">backup_20230515.sql</td>
                                <td class="py-2 px-4 border">15 Mei 2023 14:30</td>
                                <td class="py-2 px-4 border">45 MB</td>
                                <td class="py-2 px-4 border text-center">
                                    <button class="text-blue-500 hover:text-blue-700 mr-2">
                                        <i class="fas fa-download"></i>
                                    </button>
                                    <button class="text-red-500 hover:text-red-700">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="mt-6 bg-blue-50 p-4 rounded-lg">
                <h3 class="font-semibold mb-2">Pengaturan Otomatis</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="bg-white p-3 rounded shadow">
                        <label class="flex items-center">
                            <input type="checkbox" class="rounded text-blue-500" checked>
                            <span class="ml-2">Backup Harian</span>
                        </label>
                    </div>
                    <div class="bg-white p-3 rounded shadow">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Waktu Backup</label>
                        <select class="border rounded px-2 py-1 w-full">
                            <option>00:00</option>
                            <option>02:00</option>
                            <option selected>04:00</option>
                        </select>
                    </div>
                    <div class="bg-white p-3 rounded shadow flex items-end">
                        <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-1 rounded">
                            Simpan Pengaturan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>