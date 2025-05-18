<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-PPDB SMP/MTs Kota Informatika</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Font Awesome CDN (for icons) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">
  
<!-- Header/Navigation -->
  <?php include('components/header.php'); ?>

<!-- Hero Section -->
<section class="hero-pattern py-16 md:py-24">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-10 md:mb-0">
                <h1 class="text-3xl md:text-5xl font-bold text-gray-800 leading-tight mb-4">
                    Penerimaan Peserta Didik Baru <span class="text-blue-600">SMP/MTs</span> Kota Informatika
                </h1>
                <p class="text-lg text-gray-600 mb-8">
                    Sistem pendaftaran online yang memudahkan calon siswa mendaftar ke sekolah impian dengan proses yang transparan dan efisien.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#" class="btn-primary bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium shadow-lg flex items-center">
                        <i class="fas fa-user-plus mr-2"></i>
                        Daftar Sekarang
                    </a>
                    <a href="#" class="bg-white hover:bg-gray-100 text-blue-600 border border-blue-600 px-6 py-3 rounded-lg font-medium shadow-lg flex items-center">
                        <i class="fas fa-info-circle mr-2"></i>
                        Informasi Lengkap
                    </a>
                </div>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <div class="relative">
                    <div class="absolute -top-6 -left-6 w-24 h-24 bg-yellow-400 rounded-full opacity-30"></div>
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-blue-400 rounded-full opacity-30"></div>
                    <svg class="w-full max-w-lg floating" viewBox="0 0 500 400" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#3b82f6" d="M156.4,339.5c31.8-2.5,59.4-26.8,80.2-48.5c28.3-29.5,40.5-47,56.1-85.1c14-34.3,20.7-75.6,2.3-111  c-18.1-34.8-55.7-58-90.4-72.3c-11.7-4.8-24.1-8.8-36.8-11.5l-0.9-0.9l-0.6,0.6c-27.7-5.8-56.6-6-82.4,3c-38.8,13.6-64,48.8-66.8,90.3c-3,43.9,17.8,88.3,33.7,128.8c5.3,13.5,10.4,27.1,14.9,40.9C77.5,309.9,111,343.8,156.4,339.5z" opacity="0.2"/>
                        <g transform="translate(100, 50)">
                            <!-- School Building -->
                            <rect x="50" y="100" width="200" height="150" fill="#f0f4f8" stroke="#3b82f6" stroke-width="3"/>
                            <rect x="90" y="150" width="40" height="60" fill="#3b82f6" opacity="0.7"/>
                            <rect x="170" y="150" width="40" height="60" fill="#3b82f6" opacity="0.7"/>
                            <polygon points="50,100 150,30 250,100" fill="#3b82f6" opacity="0.8"/>
                            <rect x="120" y="200" width="60" height="50" fill="#f0f4f8" stroke="#3b82f6" stroke-width="2"/>
                            
                            <!-- Student Figures -->
                            <circle cx="30" cy="220" r="15" fill="#60a5fa"/>
                            <circle cx="30" cy="190" r="10" fill="#60a5fa"/>
                            <rect x="20" y="230" width="20" height="30" rx="5" fill="#60a5fa"/>
                            
                            <circle cx="280" cy="220" r="15" fill="#60a5fa"/>
                            <circle cx="280" cy="190" r="10" fill="#60a5fa"/>
                            <rect x="270" y="230" width="20" height="30" rx="5" fill="#60a5fa"/>
                            
                            <!-- Graduation Cap -->
                            <rect x="130" y="10" width="40" height="10" fill="#1e40af"/>
                            <polygon points="150,0 130,10 170,10" fill="#1e40af"/>
                            <circle cx="150" cy="5" r="3" fill="white"/>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Info Cards -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Informasi Penting</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="card bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl shadow-lg p-6 border-t-4 border-blue-500">
                <div class="bg-blue-500 text-white rounded-full w-14 h-14 flex items-center justify-center mb-4">
                    <i class="fas fa-calendar-alt text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Jadwal Pendaftaran</h3>
                <p class="text-gray-600 mb-4">Pendaftaran dibuka mulai 1 Juni 2023 dan ditutup pada 30 Juni 2023. Pastikan melengkapi dokumen tepat waktu.</p>
                <div class="flex justify-between items-center text-sm text-blue-600">
                    <span class="font-medium">Lihat Detail</span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </div>
            
            <!-- Card 2 -->
            <div class="card bg-gradient-to-br from-green-50 to-green-100 rounded-xl shadow-lg p-6 border-t-4 border-green-500">
                <div class="bg-green-500 text-white rounded-full w-14 h-14 flex items-center justify-center mb-4">
                    <i class="fas fa-file-alt text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Persyaratan Dokumen</h3>
                <p class="text-gray-600 mb-4">Siapkan dokumen seperti ijazah, akta kelahiran, kartu keluarga, dan dokumen pendukung lainnya.</p>
                <div class="flex justify-between items-center text-sm text-green-600">
                    <span class="font-medium">Lihat Detail</span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </div>
            
            <!-- Card 3 -->
            <div class="card bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl shadow-lg p-6 border-t-4 border-purple-500">
                <div class="bg-purple-500 text-white rounded-full w-14 h-14 flex items-center justify-center mb-4">
                    <i class="fas fa-trophy text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Jalur Prestasi</h3>
                <p class="text-gray-600 mb-4">Dapatkan kesempatan masuk melalui jalur prestasi akademik maupun non-akademik dengan mengunggah bukti prestasi.</p>
                <div class="flex justify-between items-center text-sm text-purple-600">
                    <span class="font-medium">Lihat Detail</span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- School Highlight -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-4">Sekolah Unggulan</h2>
        <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">Temukan sekolah terbaik yang sesuai dengan minat dan bakat Anda di Kota Informatika</p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- School 1 -->
            <div class="card bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="h-40 bg-gradient-to-r from-blue-400 to-blue-600 flex items-center justify-center">
                    <i class="fas fa-school text-white text-5xl"></i>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-center mb-3">
                        <h3 class="text-xl font-bold text-gray-800">SMPN 1 Informatika</h3>
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">Unggulan</span>
                    </div>
                    <p class="text-gray-600 mb-4">Sekolah dengan fokus pada pengembangan teknologi informasi dan komunikasi.</p>
                    <div class="flex justify-between items-center">
                        <div>
                            <span class="text-sm text-gray-500">Kuota:</span>
                            <span class="font-medium text-gray-800 ml-1">250 siswa</span>
                        </div>
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium text-sm flex items-center">
                            Detail <i class="fas fa-chevron-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- School 2 -->
            <div class="card bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="h-40 bg-gradient-to-r from-green-400 to-green-600 flex items-center justify-center">
                    <i class="fas fa-school text-white text-5xl"></i>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-center mb-3">
                        <h3 class="text-xl font-bold text-gray-800">SMPN 2 Informatika</h3>
                        <span class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">Favorit</span>
                    </div>
                    <p class="text-gray-600 mb-4">Sekolah dengan keunggulan di bidang sains dan matematika.</p>
                    <div class="flex justify-between items-center">
                        <div>
                            <span class="text-sm text-gray-500">Kuota:</span>
                            <span class="font-medium text-gray-800 ml-1">200 siswa</span>
                        </div>
                        <a href="#" class="text-green-600 hover:text-green-800 font-medium text-sm flex items-center">
                            Detail <i class="fas fa-chevron-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- School 3 -->
            <div class="card bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="h-40 bg-gradient-to-r from-purple-400 to-purple-600 flex items-center justify-center">
                    <i class="fas fa-school text-white text-5xl"></i>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-center mb-3">
                        <h3 class="text-xl font-bold text-gray-800">MTs Al-Hikmah</h3>
                        <span class="bg-purple-100 text-purple-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">Religius</span>
                    </div>
                    <p class="text-gray-600 mb-4">Madrasah dengan keunggulan di bidang keagamaan dan teknologi.</p>
                    <div class="flex justify-between items-center">
                        <div>
                            <span class="text-sm text-gray-500">Kuota:</span>
                            <span class="font-medium text-gray-800 ml-1">180 siswa</span>
                        </div>
                        <a href="#" class="text-purple-600 hover:text-purple-800 font-medium text-sm flex items-center">
                            Detail <i class="fas fa-chevron-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-10">
            <a href="#" class="btn-primary inline-block bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium shadow-lg">
                Lihat Semua Sekolah
            </a>
        </div>
    </div>
</section>

<!-- Statistics -->
<section class="py-16 bg-gradient-to-r from-blue-600 to-blue-800 text-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Statistik PPDB Tahun Ini</h2>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div class="pulse">
                <div class="text-4xl md:text-5xl font-bold mb-2">15</div>
                <div class="text-blue-200">Sekolah</div>
            </div>
            <div class="pulse">
                <div class="text-4xl md:text-5xl font-bold mb-2">3,500+</div>
                <div class="text-blue-200">Pendaftar</div>
            </div>
            <div class="pulse">
                <div class="text-4xl md:text-5xl font-bold mb-2">2,800</div>
                <div class="text-blue-200">Kuota Total</div>
            </div>
            <div class="pulse">
                <div class="text-4xl md:text-5xl font-bold mb-2">98%</div>
                <div class="text-blue-200">Tingkat Kelulusan</div>
            </div>
        </div>
    </div>
</section>

<!-- Timeline -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Alur Pendaftaran</h2>
        
        <div class="relative">
            <!-- Vertical Line -->
            <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-blue-200"></div>
            
            <div class="space-y-12 md:space-y-0">
                <!-- Step 1 -->
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 md:pr-12 md:text-right mb-6 md:mb-0">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Registrasi Akun</h3>
                        <p class="text-gray-600">Buat akun di sistem E-PPDB dengan menggunakan email aktif dan data diri yang valid.</p>
                    </div>
                    <div class="md:w-12 flex justify-center">
                        <div class="w-12 h-12 rounded-full bg-blue-600 text-white flex items-center justify-center text-xl font-bold z-10">1</div>
                    </div>
                    <div class="md:w-1/2 md:pl-12 hidden md:block"></div>
                </div>
                
                <!-- Step 2 -->
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 md:pr-12 hidden md:block"></div>
                    <div class="md:w-12 flex justify-center">
                        <div class="w-12 h-12 rounded-full bg-blue-600 text-white flex items-center justify-center text-xl font-bold z-10">2</div>
                    </div>
                    <div class="md:w-1/2 md:pl-12 mb-6 md:mb-0">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Lengkapi Data</h3>
                        <p class="text-gray-600">Isi formulir pendaftaran dengan data lengkap dan unggah dokumen yang diperlukan.</p>
                    </div>
                </div>
                
                <!-- Step 3 -->
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 md:pr-12 md:text-right mb-6 md:mb-0">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Pilih Sekolah</h3>
                        <p class="text-gray-600">Pilih sekolah tujuan sesuai dengan minat dan kemampuan Anda.</p>
                    </div>
                    <div class="md:w-12 flex justify-center">
                        <div class="w-12 h-12 rounded-full bg-blue-600 text-white flex items-center justify-center text-xl font-bold z-10">3</div>
                    </div>
                    <div class="md:w-1/2 md:pl-12 hidden md:block"></div>
                </div>
                
                <!-- Step 4 -->
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 md:pr-12 hidden md:block"></div>
                    <div class="md:w-12 flex justify-center">
                        <div class="w-12 h-12 rounded-full bg-blue-600 text-white flex items-center justify-center text-xl font-bold z-10">4</div>
                    </div>
                    <div class="md:w-1/2 md:pl-12 mb-6 md:mb-0">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Verifikasi Dokumen</h3>
                        <p class="text-gray-600">Panitia akan memverifikasi dokumen yang telah diunggah.</p>
                    </div>
                </div>
                
                <!-- Step 5 -->
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 md:pr-12 md:text-right mb-6 md:mb-0">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Pengumuman Hasil</h3>
                        <p class="text-gray-600">Cek hasil seleksi pada tanggal yang telah ditentukan melalui sistem E-PPDB.</p>
                    </div>
                    <div class="md:w-12 flex justify-center">
                        <div class="w-12 h-12 rounded-full bg-blue-600 text-white flex items-center justify-center text-xl font-bold z-10">5</div>
                    </div>
                    <div class="md:w-1/2 md:pl-12 hidden md:block"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="bg-gradient-to-r from-blue-600 to-blue-800 rounded-2xl shadow-xl p-8 md:p-12">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="mb-8 md:mb-0 md:mr-8">
                    <h2 class="text-3xl font-bold text-white mb-4">Siap Untuk Mendaftar?</h2>
                    <p class="text-blue-100 mb-6">Jangan lewatkan kesempatan untuk mendaftar ke sekolah impian Anda. Pendaftaran dibuka dengan kuota terbatas.</p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#" class="bg-white hover:bg-gray-100 text-blue-600 px-6 py-3 rounded-lg font-medium shadow-lg flex items-center">
                            <i class="fas fa-user-plus mr-2"></i>
                            Daftar Sekarang
                        </a>
                        <a href="#" class="bg-transparent hover:bg-blue-700 text-white border border-white px-6 py-3 rounded-lg font-medium shadow-lg flex items-center">
                            <i class="fas fa-question-circle mr-2"></i>
                            Bantuan
                        </a>
                    </div>
                </div>
                <div class="w-full md:w-1/3">
                    <div class="bg-white bg-opacity-10 p-6 rounded-xl border border-blue-300 border-opacity-30">
                        <h3 class="text-xl font-bold text-white mb-4">Kontak Panitia</h3>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <div class="w-10 h-10 rounded-full bg-white bg-opacity-20 flex items-center justify-center mr-3">
                                    <i class="fas fa-phone text-white"></i>
                                </div>
                                <span class="text-white">(021) 1234-5678</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-10 h-10 rounded-full bg-white bg-opacity-20 flex items-center justify-center mr-3">
                                    <i class="fas fa-envelope text-white"></i>
                                </div>
                                <span class="text-white">ppdb@kotainformatika.edu</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-10 h-10 rounded-full bg-white bg-opacity-20 flex items-center justify-center mr-3">
                                    <i class="fas fa-map-marker-alt text-white"></i>
                                </div>
                                <span class="text-white">Jl. Teknologi No. 123, Kota Informatika</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

  <?php include('components/footer.php'); ?>

<script>
    // Mobile Menu Toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    
    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
    
    // Scroll Animation
    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.card');
        
        function checkScroll() {
            cards.forEach(card => {
                const cardTop = card.getBoundingClientRect().top;
                const windowHeight = window.innerHeight;
                
                if (cardTop < windowHeight * 0.9) {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }
            });
        }
        
        cards.forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
        });
        
        window.addEventListener('scroll', checkScroll);
        checkScroll();
    });
</script>
</body>
