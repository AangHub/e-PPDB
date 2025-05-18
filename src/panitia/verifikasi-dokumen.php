<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Manual - Panitia PPDB</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-purple-800">
                <i class="fas fa-user-check mr-2"></i>Verifikasi Manual Dokumen
            </h1>
            <a href="javascript:history.back()" class="text-blue-500 hover:text-blue-700">
                <i class="fas fa-arrow-left mr-1"></i>Kembali
            </a>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="mb-6 p-4 bg-yellow-50 border-l-4 border-yellow-400">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <i class="fas fa-exclamation-circle text-yellow-500 mt-1 mr-3"></i>
                    </div>
                    <div>
                        <p class="text-sm text-yellow-700">
                            Dokumen berikut memerlukan verifikasi manual karena tidak valid secara otomatis. Silakan periksa dan berikan status akhir.
                        </p>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                <div class="border rounded-lg p-4">
                    <h3 class="font-semibold mb-2">Data Siswa</h3>
                    <p class="text-sm"><span class="font-medium">Nama:</span> Citra Dewi</p>
                    <p class="text-sm"><span class="font-medium">NISN:</span> 1234567890</p>
                    <p class="text-sm"><span class="font-medium">Sekolah:</span> SMP Negeri 3</p>
                </div>
                <div class="border rounded-lg p-4">
                    <h3 class="font-semibold mb-2">Dokumen</h3>
                    <div class="space-y-2">
                        <div class="flex items-center">
                            <i class="fas fa-file-image text-blue-500 mr-2"></i>
                            <span class="text-sm">Foto 3x4.jpg</span>
                            <span class="ml-auto bg-red-100 text-red-800 px-2 py-0.5 rounded text-xs">Tidak Valid</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-file-certificate text-blue-500 mr-2"></i>
                            <span class="text-sm">Ijazah_SD.pdf</span>
                            <span class="ml-auto bg-green-100 text-green-800 px-2 py-0.5 rounded text-xs">Valid</span>
                        </div>
                    </div>
                </div>
                <div class="border rounded-lg p-4">
                    <h3 class="font-semibold mb-2">Alasan Tidak Valid</h3>
                    <p class="text-sm text-red-600">Foto tidak sesuai ukuran 3x4, background tidak merah</p>
                    <div class="mt-4">
                        <button class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded text-sm mr-2">
                            <i class="fas fa-check mr-1"></i>Setujui
                        </button>
                        <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm">
                            <i class="fas fa-times mr-1"></i>Tolak
                        </button>
                    </div>
                </div>
            </div>

            <div class="border-t pt-4">
                <h3 class="font-semibold mb-2">Catatan Verifikasi</h3>
                <textarea class="w-full border rounded p-2" rows="3" placeholder="Tambahkan catatan jika diperlukan..."></textarea>
                <div class="mt-2 flex justify-end">
                    <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                        <i class="fas fa-save mr-1"></i>Simpan Verifikasi
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>