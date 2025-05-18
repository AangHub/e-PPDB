<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistik & Laporan - Dinas Pendidikan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-green-800">
                <i class="fas fa-chart-pie mr-2"></i>Statistik & Laporan
            </h1>
            <a href="javascript:history.back()" class="text-blue-500 hover:text-blue-700">
                <i class="fas fa-arrow-left mr-1"></i>Kembali
            </a>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <div class="border rounded-lg p-4">
                    <h3 class="font-semibold mb-4">Jumlah Pendaftar per Sekolah</h3>
                    <div class="h-64 flex items-end space-x-2">
                        <div class="flex-1 bg-blue-500" style="height: 70%"></div>
                        <div class="flex-1 bg-green-500" style="height: 50%"></div>
                        <div class="flex-1 bg-yellow-500" style="height: 80%"></div>
                        <div class="flex-1 bg-purple-500" style="height: 40%"></div>
                    </div>
                    <div class="flex justify-between mt-2 text-xs">
                        <span>SMPN 1</span>
                        <span>SMPN 2</span>
                        <span>SMPN 3</span>
                        <span>SMPN 4</span>
                    </div>
                </div>
                <div class="border rounded-lg p-4">
                    <h3 class="font-semibold mb-4">Persentase Penerimaan</h3>
                    <div class="h-64 flex items-center justify-center">
                        <div class="w-48 h-48 rounded-full border-8 border-blue-500 border-t-transparent" style="transform: rotate(45deg);"></div>
                    </div>
                    <div class="flex justify-center space-x-4 mt-4 text-sm">
                        <span class="flex items-center"><span class="inline-block w-3 h-3 bg-blue-500 mr-1"></span> Diterima (60%)</span>
                        <span class="flex items-center"><span class="inline-block w-3 h-3 bg-gray-300 mr-1"></span> Tidak Diterima (40%)</span>
                    </div>
                </div>
            </div>

            <div class="mb-6">
                <h3 class="text-lg font-semibold mb-4">Buat Laporan</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="border rounded-lg p-4 text-center hover:shadow-md transition-shadow cursor-pointer">
                        <i class="fas fa-file-excel text-4xl text-green-600 mb-3"></i>
                        <h4 class="font-medium">Laporan Excel</h4>
                        <p class="text-sm text-gray-600 mt-1">Ekspor data dalam format Excel</p>
                    </div>
                    <div class="border rounded-lg p-4 text-center hover:shadow-md transition-shadow cursor-pointer">
                        <i class="fas fa-file-pdf text-4xl text-red-600 mb-3"></i>
                        <h4 class="font-medium">Laporan PDF</h4>
                        <p class="text-sm text-gray-600 mt-1">Cetak laporan dalam format PDF</p>
                    </div>
                    <div class="border rounded-lg p-4 text-center hover:shadow-md transition-shadow cursor-pointer">
                        <i class="fas fa-chart-line text-4xl text-blue-600 mb-3"></i>
                        <h4 class="font-medium">Analisis Statistik</h4>
                        <p class="text-sm text-gray-600 mt-1">Laporan analisis lengkap</p>
                    </div>
                </div>
            </div>

            <div class="border-t pt-4">
                <h3 class="text-lg font-semibold mb-4">Laporan Tersimpan</h3>
                <div class="space-y-2">
                    <div class="flex justify-between items-center p-3 border rounded hover:bg-gray-50">
                        <div>
                            <i class="fas fa-file-excel text-green-600 mr-3"></i>
                            <span>Laporan_PPDB_2023.xlsx</span>
                        </div>
                        <div class="text-sm text-gray-500">15 Mei 2023</div>
                    </div>
                    <div class="flex justify-between items-center p-3 border rounded hover:bg-gray-50">
                        <div>
                            <i class="fas fa-file-pdf text-red-600 mr-3"></i>
                            <span>Statistik_Penerimaan.pdf</span>
                        </div>
                        <div class="text-sm text-gray-500">10 Mei 2023</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>