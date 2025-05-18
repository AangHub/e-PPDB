<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Akun - Admin Sistem</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-red-800">
                <i class="fas fa-user-shield mr-2"></i>Kelola Akun & Keamanan
            </h1>
            <a href="javascript:history.back()" class="text-blue-500 hover:text-blue-700">
                <i class="fas fa-arrow-left mr-1"></i>Kembali
            </a>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="mb-8">
                <h3 class="text-lg font-semibold mb-4">Daftar Pengguna Sistem</h3>
                <div class="flex justify-between items-center mb-4">
                    <div class="flex space-x-2">
                        <input type="text" placeholder="Cari pengguna..." class="px-3 py-1 border rounded w-64">
                        <select class="border rounded px-2 py-1">
                            <option>Semua Peran</option>
                            <option>Admin</option>
                            <option>Panitia</option>
                            <option>Dinas</option>
                        </select>
                    </div>
                    <button class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded">
                        <i class="fas fa-plus mr-1"></i>Tambah Pengguna
                    </button>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="py-2 px-4 border">No</th>
                                <th class="py-2 px-4 border">Username</th>
                                <th class="py-2 px-4 border">Nama</th>
                                <th class="py-2 px-4 border">Peran</th>
                                <th class="py-2 px-4 border">Status</th>
                                <th class="py-2 px-4 border">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-gray-50">
                                <td class="py-2 px-4 border text-center">1</td>
                                <td class="py-2 px-4 border">admin</td>
                                <td class="py-2 px-4 border">Admin Utama</td>
                                <td class="py-2 px-4 border">Administrator</td>
                                <td class="py-2 px-4 border">
                                    <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Aktif</span>
                                </td>
                                <td class="py-2 px-4 border text-center">
                                    <button class="text-blue-500 hover:text-blue-700 mr-2">
                                        <i class="fas fa-edit"></i>
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

            <div class="border-t pt-6">
                <h3 class="text-lg font-semibold mb-4">Pengaturan Keamanan Sistem</h3>
                <div class="space-y-4">
                    <div class="flex items-center justify-between p-3 border rounded">
                        <div>
                            <h4 class="font-medium">Kompleksitas Password</h4>
                            <p class="text-sm text-gray-600">Minimal 8 karakter dengan kombinasi huruf, angka, dan simbol</p>
                        </div>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer" checked>
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-500"></div>
                        </label>
                    </div>
                    <div class="flex items-center justify-between p-3 border rounded">
                        <div>
                            <h4 class="font-medium">Autentikasi Dua Faktor</h4>
                            <p class="text-sm text-gray-600">Wajib untuk akun admin dan dinas pendidikan</p>
                        </div>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer">
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-500"></div>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>