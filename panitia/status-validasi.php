<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Status Dokumen - Panitia PPDB</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-yellow-800">
                <i class="fas fa-info-circle mr-2"></i>Cek Status Dokumen
            </h1>
            <a href="javascript:history.back()" class="text-blue-500 hover:text-blue-700">
                <i class="fas fa-arrow-left mr-1"></i>Kembali
            </a>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="mb-6">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                    <div class="mb-4 md:mb-0">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Filter Sekolah</label>
                        <select class="border rounded px-3 py-2 w-full md:w-64">
                            <option>Semua Sekolah</option>
                            <option>SMP Negeri 1</option>
                            <option>SMP Negeri 2</option>
                            <option>SMP Negeri 3</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Status Dokumen</label>
                        <select class="border rounded px-3 py-2 w-full md:w-64">
                            <option>Semua Status</option>
                            <option>Lengkap</option>
                            <option>Belum Lengkap</option>
                            <option>Perlu Verifikasi</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="space-y-4">
                <div class="border rounded-lg p-4 hover:shadow-md transition-shadow">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                        <div class="mb-2 md:mb-0">
                            <h3 class="font-semibold">Andi Wijaya</h3>
                            <p class="text-sm text-gray-600">SMP Negeri 1 - Pendaftaran: 12/05/2023</p>
                        </div>
                        <div class="flex items-center">
                            <div class="mr-4">
                                <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Lengkap</span>
                            </div>
                            <button class="text-blue-500 hover:text-blue-700 text-sm">
                                <i class="fas fa-eye mr-1"></i>Detail
                            </button>
                        </div>
                    </div>
                </div>

                <div class="border rounded-lg p-4 hover:shadow-md transition-shadow">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                        <div class="mb-2 md:mb-0">
                            <h3 class="font-semibold">Budi Santoso</h3>
                            <p class="text-sm text-gray-600">SMP Negeri 2 - Pendaftaran: 10/05/2023</p>
                        </div>
                        <div class="flex items-center">
                            <div class="mr-4">
                                <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-xs">Perlu Verifikasi</span>
                            </div>
                            <button class="text-blue-500 hover:text-blue-700 text-sm">
                                <i class="fas fa-eye mr-1"></i>Detail
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6 bg-blue-50 p-4 rounded-lg">
                <h3 class="font-semibold mb-2">Statistik Dokumen</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div class="bg-white p-3 rounded shadow text-center">
                        <div class="text-2xl font-bold text-blue-600">125</div>
                        <div class="text-sm text-gray-600">Total Pendaftar</div>
                    </div>
                    <div class="bg-white p-3 rounded shadow text-center">
                        <div class="text-2xl font-bold text-green-600">98</div>
                        <div class="text-sm text-gray-600">Dokumen Lengkap</div>
                    </div>
                    <div class="bg-white p-3 rounded shadow text-center">
                        <div class="text-2xl font-bold text-yellow-600">15</div>
                        <div class="text-sm text-gray-600">Perlu Verifikasi</div>
                    </div>
                    <div class="bg-white p-3 rounded shadow text-center">
                        <div class="text-2xl font-bold text-red-600">12</div>
                        <div class="text-sm text-gray-600">Tidak Lengkap</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>