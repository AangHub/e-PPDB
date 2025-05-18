<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Seleksi - Dinas Pendidikan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-blue-800">
                <i class="fas fa-chart-bar mr-2"></i>Lihat Hasil Seleksi
            </h1>
            <a href="javascript:history.back()" class="text-blue-500 hover:text-blue-700">
                <i class="fas fa-arrow-left mr-1"></i>Kembali
            </a>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
                <div class="mb-4 md:mb-0">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Pilih Sekolah</label>
                    <select class="border rounded px-3 py-2 w-full md:w-64">
                        <option>Semua Sekolah</option>
                        <option>SMP Negeri 1</option>
                        <option>SMP Negeri 2</option>
                        <option>SMP Negeri 3</option>
                    </select>
                </div>
                <div class="flex space-x-2">
                    <button class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-2 rounded">
                        <i class="fas fa-download mr-1"></i>Excel
                    </button>
                    <button class="bg-green-500 hover:bg-green-600 text-white px-3 py-2 rounded">
                        <i class="fas fa-print mr-1"></i>Cetak
                    </button>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="py-2 px-4 border">Rank</th>
                            <th class="py-2 px-4 border">NISN</th>
                            <th class="py-2 px-4 border">Nama Siswa</th>
                            <th class="py-2 px-4 border">Sekolah Tujuan</th>
                            <th class="py-2 px-4 border">Skor</th>
                            <th class="py-2 px-4 border">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-50">
                            <td class="py-2 px-4 border text-center">1</td>
                            <td class="py-2 px-4 border">1234567890</td>
                            <td class="py-2 px-4 border">Andi Wijaya</td>
                            <td class="py-2 px-4 border">SMP Negeri 1</td>
                            <td class="py-2 px-4 border text-center">95.8</td>
                            <td class="py-2 px-4 border">
                                <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Diterima</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="py-2 px-4 border text-center">2</td>
                            <td class="py-2 px-4 border">2345678901</td>
                            <td class="py-2 px-4 border">Budi Santoso</td>
                            <td class="py-2 px-4 border">SMP Negeri 1</td>
                            <td class="py-2 px-4 border text-center">92.5</td>
                            <td class="py-2 px-4 border">
                                <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Diterima</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mt-8">
                <h3 class="text-lg font-semibold mb-4">Distribusi Penerimaan per Sekolah</h3>
                <div class="bg-gray-200 h-8 rounded-full overflow-hidden">
                    <div class="bg-blue-500 h-full" style="width: 30%"></div>
                </div>
                <div class="flex justify-between mt-2 text-sm">
                    <span>SMP Negeri 1: 30% (150 siswa)</span>
                    <span>SMP Negeri 2: 25% (125 siswa)</span>
                    <span>SMP Negeri 3: 45% (225 siswa)</span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>