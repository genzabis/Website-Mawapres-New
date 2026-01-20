<?php require_once 'includes/config.php'; ?>
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa Berprestasi - UIN SAIZU</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fonts: Plus Jakarta Sans (Headings) & Inter (Body) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#00509E', // Deep Blue
                        secondary: '#E6F0FA', // Light Blue
                        accent: '#fbbf24', // Gold/Amber
                        dark: '#0f172a',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        heading: ['Plus Jakarta Sans', 'sans-serif'],
                    },
                    boxShadow: {
                        'soft': '0 4px 20px -2px rgba(0, 0, 0, 0.05)',
                        'card': '0 10px 40px -10px rgba(0, 80, 158, 0.08)',
                    }
                }
            }
        }
    </script>

    <style>
        /* Custom Utilities */
        .glass-nav {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
        }

        .hero-pattern {
            background-color: #E6F0FA;
            background-image: radial-gradient(#00509E 0.5px, transparent 0.5px);
            background-size: 24px 24px;
        }

        .card-transition {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-transition:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-600 font-sans antialiased selection:bg-primary selection:text-white">

    <!-- 1. Sticky Header -->
    <header class="fixed w-full top-0 z-50 glass-nav border-b border-gray-100 transition-all duration-300">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <!-- Logo Area -->
            <a href="index.php" class="flex items-center gap-3 group">
                <img src="assets/Logo Mapres.png" alt="Logo UIN SAIZU" class="h-10 w-auto object-contain">
            </a>
            
            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center gap-8">
                <a href="index.php" class="text-sm font-semibold text-primary">Beranda</a>
                <a href="#prestasi" class="text-sm font-medium text-gray-600 hover:text-primary transition-colors">Data Prestasi</a>
                <a href="#statistik" class="text-sm font-medium text-gray-600 hover:text-primary transition-colors">Statistik</a>
            </nav>

            <!-- Login Button -->
            <div class="flex items-center">
                <a href="auth/login.php" class="hidden sm:inline-flex items-center justify-center px-5 py-2.5 text-sm font-semibold text-white transition-all duration-200 bg-primary border border-transparent rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary shadow-sm hover:shadow-md">
                    Login
                </a>
            </div>
        </div>
    </header>

    <!-- 2. Hero Section (Centered & Clean) -->
    <section class="relative pt-32 pb-20 lg:pt-40 lg:pb-28 overflow-hidden hero-pattern">
        <!-- Background Gradient Decoration -->
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full bg-gradient-to-b from-transparent via-white/50 to-gray-50 pointer-events-none"></div>

        <div class="container relative mx-auto px-4 sm:px-6 lg:px-8 text-center">

            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-heading font-bold text-gray-900 tracking-tight mb-6">
                Portal Mahasiswa <br class="hidden sm:block" />
                <span class="text-primary bg-clip-text text-transparent bg-gradient-to-r from-primary to-blue-600">Berprestasi</span>
            </h1>

            <p class="max-w-2xl mx-auto text-lg text-gray-600 mb-10 leading-relaxed">
                Platform resmi pengarsipan dan validasi pencapaian akademik maupun non-akademik mahasiswa UIN Prof. K.H. Saifuddin Zuhri Purwokerto.
            </p>

            <!-- Search Bar -->
            <div class="max-w-xl mx-auto relative group">
                <div class="absolute -inset-1 bg-gradient-to-r from-primary to-blue-400 rounded-2xl blur opacity-20 group-hover:opacity-30 transition duration-1000 group-hover:duration-200"></div>
                <form action="search.php" method="GET" class="relative flex items-center bg-white rounded-xl shadow-card p-2 border border-gray-100">
                    <svg class="w-6 h-6 text-gray-400 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <input type="text" name="q" placeholder="Cari nama mahasiswa, NIM, atau prestasi..."
                        class="w-full px-4 py-2.5 text-gray-700 bg-transparent border-none focus:ring-0 placeholder-gray-400 text-sm sm:text-base">
                    <button type="submit" class="bg-primary text-white px-6 py-2.5 rounded-lg text-sm font-semibold hover:bg-blue-700 transition-colors">
                        Cari
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- 3. Statistics Section -->
    <section id="statistik" class="py-12 bg-white border-y border-gray-100">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 sm:gap-8">
                <!-- Stat 1 -->
                <div class="p-6 rounded-2xl bg-gray-50 border border-gray-100 text-center hover:border-blue-200 transition-colors">
                    <p class="text-4xl font-heading font-bold text-primary mb-2">1,200+</p>
                    <p class="text-sm font-medium text-gray-500">Total Prestasi</p>
                </div>
                <!-- Stat 2 -->
                <div class="p-6 rounded-2xl bg-gray-50 border border-gray-100 text-center hover:border-blue-200 transition-colors">
                    <p class="text-4xl font-heading font-bold text-primary mb-2">450</p>
                    <p class="text-sm font-medium text-gray-500">Tingkat Nasional</p>
                </div>
                <!-- Stat 3 -->
                <div class="p-6 rounded-2xl bg-gray-50 border border-gray-100 text-center hover:border-blue-200 transition-colors">
                    <p class="text-4xl font-heading font-bold text-primary mb-2">85</p>
                    <p class="text-sm font-medium text-gray-500">Tingkat Internasional</p>
                </div>
                <!-- Stat 4 -->
                <div class="p-6 rounded-2xl bg-gray-50 border border-gray-100 text-center hover:border-blue-200 transition-colors">
                    <p class="text-4xl font-heading font-bold text-primary mb-2">8</p>
                    <p class="text-sm font-medium text-gray-500">Fakultas</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Featured Achievements Section (PHP Loop) -->
    <section id="prestasi" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row justify-between items-end mb-12 gap-4">
                <div>
                    <h2 class="text-3xl font-heading font-bold text-gray-900">Prestasi Unggulan</h2>
                    <p class="mt-2 text-gray-500">Mahasiswa yang telah mengharumkan nama universitas bulan ini.</p>
                </div>
                <a href="all-achievements.php" class="text-primary font-semibold hover:text-blue-700 flex items-center gap-1 text-sm">
                    Lihat Semua
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                // Fetch Data Logic
                try {
                    // Check if $pdo exists to avoid error if config not connected
                    if (isset($pdo)) {
                        $stmt = $pdo->query("SELECT * FROM featured_achievements ORDER BY created_at DESC LIMIT 6");
                        $featured = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    } else {
                        $featured = []; // Fallback for UI testing without DB
                    }
                } catch (Exception $e) {
                    $featured = [];
                }
                ?>

                <?php if (count($featured) > 0): ?>
                    <?php foreach ($featured as $item): ?>
                        <!-- Card Item -->
                        <a href="detail_prestasi.php?id=<?= $item['id'] ?>" class="group block h-full">
                            <div class="bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-soft card-transition h-full flex flex-col">
                                <!-- Image with Tag -->
                                <div class="relative h-56 overflow-hidden bg-gray-200">
                                    <img src="<?= htmlspecialchars($item['image_path']) ?>"
                                        alt="<?= htmlspecialchars($item['title']) ?>"
                                        class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
                                    <div class="absolute top-4 left-4 bg-white/95 backdrop-blur px-3 py-1 rounded-full text-xs font-bold text-primary shadow-sm">
                                        <?= isset($item['category']) ? htmlspecialchars($item['category']) : 'Akademik' ?>
                                    </div>
                                </div>

                                <!-- Content -->
                                <div class="p-6 flex-grow flex flex-col">
                                    <div class="flex items-center gap-2 text-xs text-gray-400 mb-3">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                        <span><?= date('d M Y', strtotime($item['created_at'])) ?></span>
                                    </div>
                                    <h3 class="text-xl font-heading font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors line-clamp-2">
                                        <?= htmlspecialchars($item['title']) ?>
                                    </h3>
                                    <p class="text-gray-500 text-sm line-clamp-3 mb-4 flex-grow">
                                        <?= htmlspecialchars($item['description']) ?>
                                    </p>
                                    <span class="text-primary text-sm font-semibold flex items-center mt-auto">
                                        Baca Detail
                                        <svg class="w-4 h-4 ml-1 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                <?php else: ?>
                    <!-- Empty State -->
                    <div class="col-span-full py-16 text-center bg-white rounded-2xl border border-dashed border-gray-300">
                        <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                        <h3 class="text-lg font-medium text-gray-900">Belum Ada Data</h3>
                        <p class="text-gray-500 mt-1">Data prestasi mahasiswa belum tersedia saat ini.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- 5. Information Section -->
    <section id="informasi" class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12">
                <!-- Info Card 1 -->
                <div class="p-8 lg:p-10 rounded-3xl bg-secondary relative overflow-hidden group">
                    <div class="relative z-10">
                        <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center text-primary mb-6 shadow-sm">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-heading font-bold text-gray-900 mb-3">Validasi Resmi</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Setiap prestasi yang ditampilkan telah melalui proses verifikasi ketat oleh tim kemahasiswaan untuk memastikan keaslian dan kualitas data.
                        </p>
                        <a href="#" class="inline-flex items-center text-primary font-semibold hover:underline">
                            Pelajari Alur Validasi
                        </a>
                    </div>
                    <!-- Decorative Icon -->
                    <svg class="absolute -bottom-6 -right-6 w-48 h-48 text-primary opacity-5 transform rotate-12 group-hover:scale-110 transition duration-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                </div>

                <!-- Info Card 2 -->
                <div class="p-8 lg:p-10 rounded-3xl bg-gray-50 border border-gray-100 relative overflow-hidden group">
                    <div class="relative z-10">
                        <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center text-gray-700 mb-6 shadow-sm border border-gray-100">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-heading font-bold text-gray-900 mb-3">Arsip Digital</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Pusat database terintegrasi yang menyimpan rekam jejak prestasi mahasiswa dari tahun ke tahun sebagai warisan intelektual kampus.
                        </p>
                        <a href="#" class="inline-flex items-center text-gray-900 font-semibold hover:underline">
                            Lihat Arsip Lengkap
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Footer -->
    <footer class="bg-gray-900 text-white pt-16 pb-8">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                <!-- Brand -->
                <div class="space-y-4">
                    <img src="assets/Logo Mapres.png" alt="Logo White" class="h-12 w-auto brightness-0 invert">
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Pusat informasi dan apresiasi prestasi mahasiswa UIN Prof. K.H. Saifuddin Zuhri Purwokerto.
                    </p>
                </div>

                <!-- Links -->
                <div>
                    <h4 class="text-lg font-bold mb-6 text-white">Navigasi</h4>
                    <ul class="space-y-3 text-gray-400 text-sm">
                        <li><a href="#" class="hover:text-primary transition-colors">Beranda</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors">Data Prestasi</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors">Pengumuman</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors">Login Admin</a></li>
                    </ul>
                </div>

                <!-- Fakultas -->
                <div>
                    <h4 class="text-lg font-bold mb-6 text-white">Fakultas</h4>
                    <ul class="space-y-3 text-gray-400 text-sm">
                        <li><a href="#" class="hover:text-primary transition-colors">Sains & Teknologi</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors">Tarbiyah & Ilmu Keguruan</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors">Syariah</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors">Ekonomi & Bisnis Islam</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors">Dakwah</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors">Ushuluddin, Adab & Humaniora</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="text-lg font-bold mb-6 text-white">Hubungi Kami</h4>
                    <ul class="space-y-4 text-gray-400 text-sm">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-primary mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span>Jl. A. Yani No.40A, Purwokerto, Jawa Tengah, Indonesia</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span>kemahasiswaan@uinsaizu.ac.id</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-gray-500 text-sm">
                    &copy; <?= date('Y') ?> UIN SAIZU. All rights reserved.
                </p>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-500 hover:text-white transition-colors">Privacy Policy</a>
                    <a href="#" class="text-gray-500 hover:text-white transition-colors">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>