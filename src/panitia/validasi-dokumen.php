<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validasi Dokumen - Panitia PPDB</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-blue-800">
                <i class="fas fa-file-check mr-2"></i>Validasi Kelengkapan Dokumen
            </h1>
            <a href="javascript:history.back()" class="text-blue-500 hover:text-blue-700">
                <i class="fas fa-arrow-left mr-1"></i>Kembali
            </a>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-semibold">Daftar Dokumen Pendaftar</h2>
                <div class="flex space-x-2">
                    <input type="text" placeholder="Cari nama siswa..." class="px-3 py-1 border rounded">
                    <select class="border rounded px-2 py-1">
                        <option>Filter Status</option>
                        <option>Belum Divalidasi</option>
                        <option>Valid</option>
                        <option>Tidak Valid</option>
                    </select>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="py-2 px-4 border">No</th>
                            <th class="py-2 px-4 border">Nama Siswa</th>
                            <th class="py-2 px-4 border">Sekolah Tujuan</th>
                            <th class="py-2 px-4 border">Status Dokumen</th>
                            <th class="py-2 px-4 border">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-50">
                            <td class="py-2 px-4 border text-center">1</td>
                            <td class="py-2 px-4 border">Andi Wijaya</td>
                            <td class="py-2 px-4 border">SMP Negeri 1</td>
                            <td class="py-2 px-4 border">
                                <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-xs">Belum Divalidasi</span>
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <button class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded text-sm">
                                    <i class="fas fa-search mr-1"></i>Detail
                                </button>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="py-2 px-4 border text-center">2</td>
                            <td class="py-2 px-4 border">Budi Santoso</td>
                            <td class="py-2 px-4 border">SMP Negeri 2</td>
                            <td class="py-2 px-4 border">
                                <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Valid</span>
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <button class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded text-sm">
                                    <i class="fas fa-search mr-1"></i>Detail
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mt-4 flex justify-between items-center">
                <div class="text-sm text-gray-600">
                    Menampilkan 1-2 dari 15 dokumen
                </div>
                <div class="flex space-x-1">
                    <button class="px-3 py-1 border rounded bg-gray-100">&laquo;</button>
                    <button class="px-3 py-1 border rounded bg-blue-500 text-white">1</button>
                    <button class="px-3 py-1 border rounded hover:bg-gray-100">2</button>
                    <button class="px-3 py-1 border rounded hover:bg-gray-100">&raquo;</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>