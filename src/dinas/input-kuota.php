<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Kuota - Dinas Pendidikan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-purple-800">
                <i class="fas fa-edit mr-2"></i>Input Kuota Sekolah
            </h1>
            <a href="javascript:history.back()" class="text-blue-500 hover:text-blue-700">
                <i class="fas fa-arrow-left mr-1"></i>Kembali
            </a>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="mb-6">
                <h3 class="text-lg font-semibold mb-4">Kuota Penerimaan per Sekolah</h3>
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="py-2 px-4 border">No</th>
                                <th class="py-2 px-4 border">Nama Sekolah</th>
                                <th class="py-2 px-4 border">Kuota Tahun Lalu</th>
                                <th class="py-2 px-4 border">Kuota Tahun Ini</th>
                                <th class="py-2 px-4 border">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-gray-50">
                                <td class="py-2 px-4 border text-center">1</td>
                                <td class="py-2 px-4 border">SMP Negeri 1</td>
                                <td class="py-2 px-4 border text-center">150</td>
                                <td class="py-2 px-4 border">
                                    <input type="number" class="border rounded px-2 py-1 w-20" value="160">
                                </td>
                                <td class="py-2 px-4 border text-center">
                                    <button class="text-green-500 hover:text-green-700">
                                        <i class="fas fa-save"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="py-2 px-4 border text-center">2</td>
                                <td class="py-2 px-4 border">SMP Negeri 2</td>
                                <td class="py-2 px-4 border text-center">120</td>
                                <td class="py-2 px-4 border">
                                    <input type="number" class="border rounded px-2 py-1 w-20" value="130">
                                </td>
                                <td class="py-2 px-4 border text-center">
                                    <button class="text-green-500 hover:text-green-700">
                                        <i class="fas fa-save"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="border-t pt-6">
                <h3 class="text-lg font-semibold mb-4">Tambah Sekolah Baru</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Nama Sekolah</label>
                        <input type="text" class="border rounded px-3 py-2 w-full">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Kuota</label>
                        <input type="number" class="border rounded px-3 py-2 w-full">
                    </div>
                    <div class="flex items-end">
                        <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                            <i class="fas fa-plus mr-1"></i>Tambah
                        </button>
                    </div>
                </div>
            </div>

            <div class="mt-6 bg-blue-50 p-4 rounded-lg">
                <h3 class="font-semibold mb-2">Total Kuota Penerimaan</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div class="bg-white p-3 rounded shadow text-center">
                        <div class="text-2xl font-bold text-blue-600">500</div>
                        <div class="text-sm text-gray-600">Total Kuota</div>
                    </div>
                    <div class="bg-white p-3 rounded shadow text-center">
                        <div class="text-2xl font-bold text-green-600">290</div>
                        <div class="text-sm text-gray-600">Kuota Terisi</div>
                    </div>
                    <div class="bg-white p-3 rounded shadow text-center">
                        <div class="text-2xl font-bold text-yellow-600">210</div>
                        <div class="text-sm text-gray-600">Kuota Tersisa</div>
                    </div>
                    <div class="bg-white p-3 rounded shadow text-center">
                        <div class="text-2xl font-bold text-purple-600">15</div>
                        <div class="text-sm text-gray-600">Sekolah</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>