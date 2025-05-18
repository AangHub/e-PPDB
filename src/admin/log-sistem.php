<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audit Log - Admin Sistem</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-blue-800">
                <i class="fas fa-clipboard-list mr-2"></i>Audit Log Sistem
            </h1>
            <a href="javascript:history.back()" class="text-blue-500 hover:text-blue-700">
                <i class="fas fa-arrow-left mr-1"></i>Kembali
            </a>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
                <div class="mb-4 md:mb-0">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Filter Tanggal</label>
                    <div class="flex space-x-2">
                        <input type="date" class="border rounded px-3 py-1">
                        <span class="flex items-center">s/d</span>
                        <input type="date" class="border rounded px-3 py-1">
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Filter Aktivitas</label>
                    <select class="border rounded px-3 py-1 w-full md:w-48">
                        <option>Semua Aktivitas</option>
                        <option>Login</option>
                        <option>Perubahan Data</option>
                        <option>Hapus Data</option>
                    </select>
                </div>
            </div>

            <div class="space-y-4">
                <div class="border-l-4 border-blue-500 bg-blue-50 p-4 rounded-r">
                    <div class="flex justify-between">
                        <div class="font-medium">Login Sistem</div>
                        <div class="text-sm text-gray-500">10:30, 16 Mei 2023</div>
                    </div>
                    <div class="text-sm mt-1">
                        <span class="font-medium">Admin</span> (admin) login dari IP 192.168.1.1
                    </div>
                </div>
                <div class="border-l-4 border-green-500 bg-green-50 p-4 rounded-r">
                    <div class="flex justify-between">
                        <div class="font-medium">Perubahan Data</div>
                        <div class="text-sm text-gray-500">09:15, 16 Mei 2023</div>
                    </div>
                    <div class="text-sm mt-1">
                        <span class="font-medium">Panitia PPDB</span> (budi_santoso) mengubah status dokumen siswa Andi Wijaya
                    </div>
                </div>
                <div class="border-l-4 border-red-500 bg-red-50 p-4 rounded-r">
                    <div class="flex justify-between">
                        <div class="font-medium">Hapus Data</div>
                        <div class="text-sm text-gray-500">08:00, 16 Mei 2023</div>
                    </div>
                    <div class="text-sm mt-1">
                        <span class="font-medium">Dinas Pendidikan</span> (dinas_kota) menghapus kuota SMP Negeri 5
                    </div>
                </div>
            </div>

            <div class="mt-6 flex justify-between items-center">
                <div class="text-sm text-gray-600">
                    Menampilkan 1-3 dari 128 aktivitas
                </div>
                <div class="flex space-x-1">
                    <button class="px-3 py-1 border rounded bg-gray-100">&laquo;</button>
                    <button class="px-3 py-1 border rounded bg-blue-500 text-white">1</button>
                    <button class="px-3 py-1 border rounded hover:bg-gray-100">2</button>
                    <button class="px-3 py-1 border rounded hover:bg-gray-100">&raquo;</button>
                </div>
            </div>

            <div class="mt-8">
                <h3 class="text-lg font-semibold mb-4">Ekspor Log Aktivitas</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <button class="border rounded-lg p-4 text-center hover:shadow-md transition-shadow">
                        <i class="fas fa-file-excel text-3xl text-green-600 mb-2"></i>
                        <div>Format Excel</div>
                    </button>
                    <button class="border rounded-lg p-4 text-center hover:shadow-md transition-shadow">
                        <i class="fas fa-file-pdf text-3xl text-red-600 mb-2"></i>
                        <div>Format PDF</div>
                    </button>
                    <button class="border rounded-lg p-4 text-center hover:shadow-md transition-shadow">
                        <i class="fas fa-file-csv text-3xl text-blue-600 mb-2"></i>
                        <div>Format CSV</div>
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>