<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amallan.id - Membangun Pesantren Mandiri</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    
    <link rel="stylesheet" href="{{ asset('css/amallan.css') }}">
    
    <style>
        :root {
            /* Enhanced Green Color Palette */
            --emerald-50: #ecfdf5;
            --emerald-100: #d1fae5;
            --emerald-200: #a7f3d0;
            --emerald-300: #6ee7b7;
            --emerald-400: #34d399;
            --emerald-500: #10b981;
            --emerald-600: #059669;
            --emerald-700: #047857;
            --emerald-800: #065f46;
            --emerald-900: #064e3b;
            --teal-400: #2dd4bf;
            --teal-500: #14b8a6;
            --teal-600: #0d9488;
            --teal-700: #0f766e;
            --teal-800: #115e59;
            --green-400: #4ade80;
            --green-500: #22c55e;
            --green-600: #16a34a;
            
            /* Neutral Colors */
            --slate-50: #f8fafc;
            --slate-100: #f1f5f9;
            --slate-200: #e2e8f0;
            --slate-300: #cbd5e1;
            --slate-400: #94a3b8;
            --slate-500: #64748b;
            --slate-600: #475569;
            --slate-700: #334155;
            --slate-800: #1e293b;
            --slate-900: #0f172a;
            --white: #ffffff;
            
            /* Gradients */
            --gradient-emerald: linear-gradient(135deg, var(--emerald-600), var(--teal-600));
            --gradient-emerald-light: linear-gradient(135deg, var(--emerald-500), var(--teal-500));
            --gradient-emerald-dark: linear-gradient(135deg, var(--emerald-800), var(--teal-800));
            
            /* Shadows */
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            --shadow-2xl: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            
            /* Effects */
            --blur-backdrop: blur(16px);
        }

        /* Enhanced Body Styling */
        body {
            background: linear-gradient(135deg, var(--slate-50) 0%, var(--emerald-50) 100%);
            font-family: 'Roboto', sans-serif;
            line-height: 1.6;
            color: var(--slate-800);
        }

        /* Enhanced Header */
        header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: var(--blur-backdrop);
            -webkit-backdrop-filter: var(--blur-backdrop);
            box-shadow: var(--shadow-lg);
            border-bottom: 1px solid rgba(16, 185, 129, 0.1);
            transition: all 0.3s ease;
        }

        .header-logo-new {
            transition: transform 0.3s ease;
        }

        .header-logo-new:hover {
            transform: scale(1.05);
        }

        .main-nav ul li a {
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .main-nav ul li a::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(16, 185, 129, 0.1), transparent);
            transition: left 0.5s ease;
        }

        .main-nav ul li a:hover::before {
            left: 100%;
        }

        .main-nav ul li a:hover {
            color: var(--emerald-700);
            background: var(--emerald-50);
            border-radius: 0.75rem;
            transform: translateY(-1px);
        }

        .button-hubungi {
            background: var(--gradient-emerald);
            transition: all 0.3s ease;
            box-shadow: var(--shadow);
        }

        .button-hubungi:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
            background: var(--gradient-emerald-light);
        }

        /* Enhanced Hero Section */
        #hero {
            background: var(--gradient-emerald);
            position: relative;
            overflow: hidden;
        }

        #hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 30% 20%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
                         radial-gradient(circle at 70% 80%, rgba(255, 255, 255, 0.05) 0%, transparent 50%);
            pointer-events: none;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        #hero h1 {
            text-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .hero-buttons .button {
            transition: all 0.3s ease;
            box-shadow: var(--shadow-lg);
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .hero-buttons .button.white:hover {
            background: var(--emerald-50);
            transform: translateY(-2px);
            box-shadow: var(--shadow-xl);
        }

        .hero-buttons .button.green {
            background: rgba(255, 255, 255, 0.2);
            border: 2px solid rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(8px);
        }

        .hero-buttons .button.green:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
            box-shadow: var(--shadow-xl);
        }

        .hero-image-container {
            position: relative;
            z-index: 2;
        }

        .hero-image-container img {
            filter: drop-shadow(0 10px 30px rgba(0, 0, 0, 0.2));
        }

        /* Enhanced Section Styling */
        .section-heading {
            background: var(--gradient-emerald);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Enhanced About Section */
        #about-amallan {
            background: linear-gradient(135deg, var(--emerald-50), var(--teal-50));
            position: relative;
            overflow: hidden;
        }

        #about-amallan::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 80% 20%, rgba(16, 185, 129, 0.05) 0%, transparent 50%);
            pointer-events: none;
        }

        .about-content {
            position: relative;
            z-index: 2;
        }

        .about-text-content h2 {
            background: var(--gradient-emerald);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .info-box {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(16, 185, 129, 0.2);
            box-shadow: var(--shadow);
        }

        .info-icon {
            background: var(--gradient-emerald);
        }

        /* Enhanced Program Cards */
        .program-card {
            transition: all 0.3s ease;
            border: 1px solid rgba(16, 185, 129, 0.1);
            position: relative;
            overflow: hidden;
        }

        .program-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.02) 0%, rgba(20, 184, 166, 0.02) 100%);
            pointer-events: none;
        }

        .program-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-2xl);
            border-color: var(--emerald-300);
        }

        .icon-circle {
            background: var(--gradient-emerald);
            box-shadow: var(--shadow-lg);
        }

        /* Enhanced Step Cards */
        #how-it-works {
            background: linear-gradient(135deg, var(--white) 0%, var(--emerald-50) 100%);
        }

        .step-card {
            transition: all 0.3s ease;
            border: 1px solid rgba(16, 185, 129, 0.1);
        }

        .step-card:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-xl);
        }

        /* Enhanced Dampak Section */
        .dampak-gallery img {
            transition: transform 0.3s ease;
        }

        .dampak-gallery img:hover {
            transform: scale(1.02);
        }

        .dampak-info-card {
            box-shadow: var(--shadow-xl);
            border: 1px solid rgba(16, 185, 129, 0.1);
        }

        .dampak-info-card h3 {
            color: var(--emerald-700);
        }

        .dampak-info-card ul li i {
            color: var(--emerald-600);
        }

        /* Enhanced News Section */
        .news-card {
            transition: all 0.3s ease;
            border: 1px solid rgba(16, 185, 129, 0.1);
        }

        .news-card:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-xl);
        }

        .news-card a {
            color: var(--emerald-600);
            transition: color 0.3s ease;
        }

        .news-card a:hover {
            color: var(--emerald-700);
        }

        /* Enhanced Temal Section */
        #kenalan-temal {
            background: linear-gradient(135deg, var(--emerald-50), var(--teal-50));
        }

        .temal-container {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            box-shadow: var(--shadow-xl);
            border: 1px solid rgba(16, 185, 129, 0.2);
        }

        .temal-text-content h3 {
            color: var(--emerald-700);
        }

        .temal-tag {
            background: var(--emerald-100);
            color: var(--emerald-700);
        }

        /* Enhanced Bergabung Section */
        #bergabung-gerakan {
            background: var(--gradient-emerald);
            position: relative;
            overflow: hidden;
        }

        #bergabung-gerakan::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 20% 80%, rgba(255, 255, 255, 0.1) 0%, transparent 50%);
            pointer-events: none;
        }

        .gerakan-card-grid {
            position: relative;
            z-index: 2;
        }

        .gerakan-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(12px);
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .gerakan-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-2xl);
            background: var(--white);
        }

        .gerakan-icon-container {
            background: var(--gradient-emerald);
            box-shadow: var(--shadow-lg);
        }

        .gerakan-button {
            background: var(--gradient-emerald);
            transition: all 0.3s ease;
        }

        .gerakan-button:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        .hubungi-kami-container {
            position: relative;
            z-index: 2;
        }

        .button-hubungi-kami-putih {
            background: rgba(255, 255, 255, 0.2);
            border: 2px solid rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(8px);
            transition: all 0.3s ease;
        }

        .button-hubungi-kami-putih:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
            box-shadow: var(--shadow-xl);
        }

        /* Enhanced Contact Section */
        .contact-section-padding {
            background: linear-gradient(135deg, var(--slate-50) 0%, var(--emerald-50) 100%);
        }

        .contact-heading {
            background: var(--gradient-emerald);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .contact-info-new,
        .contact-form-new {
            box-shadow: var(--shadow-xl);
            border: 1px solid rgba(16, 185, 129, 0.1);
        }

        .contact-box-title {
            color: var(--emerald-700);
        }

        .contact-item-new {
            background: var(--emerald-50);
            transition: all 0.3s ease;
        }

        .contact-item-new:hover {
            background: var(--emerald-100);
            transform: translateX(5px);
        }

        .contact-item-new .text-content strong {
            color: var(--emerald-700);
        }

        .contact-form-new input,
        .contact-form-new textarea {
            border: 2px solid var(--emerald-200);
            transition: all 0.3s ease;
        }

        .contact-form-new input:focus,
        .contact-form-new textarea:focus {
            border-color: var(--emerald-500);
            box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.1);
        }

        .contact-form-new button {
            background: var(--gradient-emerald);
            transition: all 0.3s ease;
        }

        .contact-form-new button:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        /* Animation Classes */
        .fade-in-up {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.6s ease forwards;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Header scroll effect */
        .header-scrolled {
            background: rgba(255, 255, 255, 0.98) !important;
            backdrop-filter: blur(20px) !important;
        }
    </style>
</head>
<body class="bg-gray-50 dark:bg-gray-900 transition-all duration-300 font-body">

    <header>
        <a href="#hero">
            <img src="{{ asset('asset/Salinan dari Salinan dari Tambahkan judul (3).png') }}" alt="Logo Amallan" class="header-logo-new">
        </a>
        <nav class="main-nav">
            <ul>
                <li><a href="#hero">Beranda</a></li> <li><a href="#about-amallan">Tentang</a></li>
                <li><a href="#program-utama">Program</a></li>
                <li><a href="#dampak-nyata">Dampak</a></li>
                <li><a href="#bergabung-gerakan">Bergabung</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
        <a href="https://donasi.amallan.id" class="button-hubungi" target="_blank">Donasi Sekarang</a>
        <button class="mobile-menu-toggle" aria-label="Toggle mobile menu" onclick="toggleMobileMenu()">
            <i class="fas fa-bars"></i>
        </button>
    </header>

    <div class="mobile-menu" id="mobile-menu">
        <button class="close-btn" onclick="toggleMobileMenu()">&times;</button>
        <ul>
            <li><a href="#hero" onclick="toggleMobileMenu()">Beranda</a></li>
            <li><a href="#about-amallan" onclick="toggleMobileMenu()">Tentang</a></li>
            <li><a href="#program-utama" onclick="toggleMobileMenu()">Program</a></li>
            <li><a href="#how-it-works" onclick="toggleMobileMenu()">Cara Kerja</a></li>
            <li><a href="#dampak-nyata" onclick="toggleMobileMenu()">Dampak Nyata</a></li>
            <li><a href="#contact" onclick="toggleMobileMenu()">Kontak</a></li>
            <li><a href="https://donasi.amallan.id" class="button-hubungi" style="display: block; text-align: center; margin: 20px auto; width: calc(100% - 50px);" target="_blank">Donasi Sekarang</a></li>
        </ul>
    </div>

    <section id="hero">
        <div class="hero-content">
            <h1>Membangun Pesantren Mandiri Bersama Amallan</h1>
            <p>Mendampingi pondok pesantren di Indonesia menuju kemandirian melalui digitalisasi, pelatihan SDM, dan pendampingan unit usaha produktif.</p>
            <div class="hero-buttons">
                <a href="#contact" class="button white">Gabung Menjadi Sahabat Amal</a>
                <a href="#contact" class="button green">Hubungi Kami</a>
            </div>
        </div>
        <div class="hero-image-container">
            <img src="{{ asset('asset/maskot_amallan.png') }}" alt="Ilustrasi Amallan">
        </div>
    </section>

    <section id="about-amallan" class="section-padding">
        <div class="about-content">
            <div class="about-image-container">
                <img src="{{ asset('asset/maskot_amallan_about.png') }}" alt="Maskot Amallan dan Santri">
            </div>
            <div class="about-text-content">
                <h2>Tentang Amallan</h2>
                <p>Amallan adalah inisiatif sosial yang berfokus pada pendampingan pondok pesantren di Indonesia agar mandiri melalui digitalisasi, pelatihan SDM, dan pendampingan unit usaha produktif. Kami percaya bahwa pesantren adalah aset berharga bangsa yang perlu didukung dengan teknologi dan inovasi.</p>
                
                <p>Dengan semangat #TemanBeramal, kami mengajak seluruh elemen masyarakat untuk berkolaborasi membangun ekosistem pesantren yang mandiri, modern, namun tetap menjaga nilai-nilai keislaman yang luhur.</p>

                <div class="info-box">
                    <div class="info-icon">
                        <i class="fas fa-info"></i>
                    </div>
                    <p><strong>Temal, Teman Beramal</strong> <br>Maskot kami yang mewakili semangat berbagi dan kolaborasi</p>
                </div>
            </div>
        </div>
    </section>
    
    <section id="program-utama" class="section-padding">
        <h2 class="section-heading">Program Utama</h2>
        <p class="section-description">Empat pilar program kami untuk mendukung kemandirian pesantren di era digital</p>
        <div class="program-card-grid">
            <div class="program-card">
                <div class="icon-circle">
                    <img src="{{ asset('asset/icon3.png') }}" alt="Digitalisasi Manajemen Pesantren Icon Komputer">
                </div>
                <h3>Digitalisasi Manajemen Pesantren</h3>
                <p>Sistem manajemen digital untuk administrasi, keuangan, dan akademik pesantren yang terintegrasi.</p>
            </div>
            <div class="program-card">
                <div class="icon-circle">
                    <img src="{{ asset('asset/icon2.png') }}" alt="Pendampingan Unit Usaha Produktif Icon Dollar">
                </div>
                <h3>Pendampingan Unit Usaha Produktif</h3>
                <p>Membantu pesantren mengembangkan unit usaha yang berkelanjutan untuk mendukung kemandirian ekonomi.</p>
            </div>
            <div class="program-card">
                <div class="icon-circle">
                    <img src="{{ asset('asset/icon 4.png') }}" alt="Pelatihan SDM Pesantren Icon Buku">
                </div>
                <h3>Pelatihan SDM Pesantren</h3>
                <p>Program peningkatan kapasitas ustadz, santri, dan pengelola pesantren dalam bidang teknologi dan kewirausahaan.</p>
            </div>
            <div class="program-card">
                <div class="icon-circle">
                    <img src="{{ asset('asset/icon 1.png') }}" alt="Platform Donasi & Crowdfunding Icon Hati">
                </div>
                <h3>Platform Donasi & Crowdfunding</h3>
                <p>Menghubungkan pesantren dengan donatur dan pendukung melalui platform digital yang transparan dan akuntabel.</p>
            </div>
        </div>
    </section>
    
    <section id="how-it-works" class="section-padding">
        <h2 class="section-heading">Bagaimana Amallan Bekerja</h2>
        <p class="section-description">Proses kami dalam mendampingi pesantren menuju kemandirian</p>
        <div class="step-card-grid">
            <div class="step-card">
                <div class="step-number-circle">
                    <img src="{{ asset('asset/num1.png') }}" alt="Langkah 1: Identifikasi Pesantren">
                </div>
                <h3>Identifikasi Pesantren</h3>
                <p>Memetakan kebutuhan dan potensi pesantren mitra untuk pengembangan program yang tepat sasaran.</p>
            </div>
            <div class="step-card">
                <div class="step-number-circle">
                    <img src="{{ asset('asset/num2.png') }}" alt="Langkah 2: Digitalisasi Sistem">
                </div>
                <h3>Digitalisasi Sistem</h3>
                <p>Implementasi sistem digital untuk manajemen pesantren yang efektif dan efisien.</p>
            </div>
            <div class="step-card">
                <div class="step-number-circle">
                    <img src="{{ asset('asset/num3.png') }}" alt="Langkah 3: Pemberdayaan Ekonomi">
                </div>
                <h3>Pemberdayaan Ekonomi</h3>
                <p>Pendampingan pengembangan unit usaha produktif dan pelatihan kewirausahaan.</p>
            </div>
            <div class="step-card">
                <div class="step-number-circle">
                    <img src="{{ asset('asset/num4.png') }}" alt="Langkah 4: Penggalangan Dukungan">
                </div>
                <h3>Penggalangan Dukungan</h3>
                <p>Menghubungkan pesantren dengan jaringan donatur dan pendukung untuk keberlanjutan program.</p>
            </div>
        </div>
    </section>
    
    <section id="dampak-nyata" class="section-padding">
        <h2 class="section-heading">Dampak Nyata</h2>
        <p class="section-description">Kisah sukses pesantren yang telah bermitra dengan Amallan</p>
        <div class="dampak-content">
            <div class="dampak-gallery">
                <img src="{{ asset('asset/darulfikri1.png') }}" alt="Pondok Pesantren Darul Fikri - Gerbang Utama">
                <img src="{{ asset('asset/darulfikri2.png') }}" alt="Pondok Pesantren Darul Fikri - Area Persawahan">
                <img src="{{ asset('asset/darulfikri3.png') }}" alt="Pondok Pesantren Darul Fikri - Kebun Anggur">
                <img src="{{ asset('asset/darulfikri4.png') }}" alt="Pondok Pesantren Darul Fikri - Santri dan Bangunan">
            </div>
            <div class="dampak-info-card">
                <h3>Pondok Pesantren Darul Fikri</h3>
                <p>Sebelum bermitra dengan Amallan, Pondok Pesantren Darul Fikri menghadapi tantangan dalam manajemen administrasi dan keuangan yang masih manual. Selain itu, potensi ekonomi pesantren belum terkelola dengan optimal.</p>
                <p>Setelah 1 tahun bermitra dengan Amallan:</p>
                <ul>
                    <li><i class="fas fa-check-circle"></i> Sistem administrasi dan keuangan terdigitalisasi, meningkatkan efisiensi 70%</li>
                    <li><i class="fas fa-check-circle"></i> Unit usaha produksi makanan ringan berkembang dan memasarkan produk secara online</li>
                    <li><i class="fas fa-check-circle"></i> 25 santri terlatih dalam keterampilan digital dan kewirausahaan</li>
                    <li><i class="fas fa-check-circle"></i> Pendapatan pesantren meningkat 40% dari unit usaha produktif</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="kenalan-temal" class="section-padding">
        <h2 class="section-heading">Kenalan dengan Temal</h2>
        <p class="section-description">Maskot Amallan yang selalu siap menemani perjalanan kebaikan</p>
        <div class="temal-container">
            <div class="temal-text-content">
                <h3>Temal, Teman Beramal</h3>
                <p>Temal adalah maskot Amallan yang mewakili semangat berbagi dan kolaborasi. Dengan senyum ramah dan tangan terbuka, Temal selalu siap mengajak semua kalangan untuk bergabung dalam gerakan kebaikan.</p>
                <p>Temal hadir sebagai simbol bahwa beramal dan berbuat baik itu menyenangkan, terutama ketika dilakukan bersama-sama sebagai sebuah komunitas.</p>
                <div class="temal-tags">
                    <div class="temal-tag">
                        <i class="fas fa-check-circle"></i> Ramah
                    </div>
                    <div class="temal-tag">
                        <i class="fas fa-check-circle"></i> Inspiratif
                    </div>
                    <div class="temal-tag">
                        <i class="fas fa-check-circle"></i> Kolaboratif
                    </div>
                </div>
            </div>
            <div class="temal-image-container">
                <img src="{{ asset('asset/kenalan_temal_maskot.png') }}" alt="Maskot Amallan bernama Temal">
            </div>
        </div>
    </section>

    <section id="bergabung-gerakan" class="section-padding">
        <h2 class="section-heading">Bergabung dengan Gerakan Kebaikan</h2>
        <p class="section-description">Ada banyak cara untuk berkontribusi dalam gerakan digitalisasi dan kemandirian pesantren</p>
        <div class="gerakan-card-grid">
            <div class="gerakan-card">
                <div class="gerakan-icon-container">
                    <img src="{{ asset('asset/icon_donasi.png') }}" alt="Ikon Donasi">
                </div>
                <h3>Donasi</h3>
                <p>Dukung program-program Amallan melalui donasi untuk membantu lebih banyak pesantren mencapai kemandirian.</p>
                <a href="#donasi-page" class="gerakan-button">Donasi Sekarang</a>
            </div>
            <div class="gerakan-card">
                <div class="gerakan-icon-container">
                    <img src="{{ asset('asset/icon_kolaborasi.png') }}" alt="Ikon Kolaborasi">
                </div>
                <h3>Kolaborasi</h3>
                <p>Ajak organisasi atau perusahaan Anda untuk berkolaborasi dalam program pemberdayaan pesantren.</p>
                <a href="#kolaborasi-page" class="gerakan-button">Ajukan Kolaborasi</a>
            </div>
            <div class="gerakan-card">
                <div class="gerakan-icon-container">
                    <img src="{{ asset('asset/icon_relawan.png') }}" alt="Ikon Jadi Relawan">
                </div>
                <h3>Jadi Relawan</h3>
                <p>Kontribusikan waktu, tenaga, dan keahlian Anda untuk membantu pesantren berkembang.</p>
                <a href="#relawan-page" class="gerakan-button">Gabung Sekarang</a>
            </div>
        </div>
        <div class="hubungi-kami-container">
           <a href="#contact" class="button-hubungi-kami-putih">Hubungi Kami</a>
        </div>
    </section>

    <section id="contact" class="contact-section-padding">
        <h2 class="contact-heading">Kontak & Sosial Media</h2>
        <p class="contact-subheading">Hubungi kami untuk informasi lebih lanjut atau kolaborasi</p>
        
        <div class="contact-content-new">
            <div class="contact-info-new">
                <h3 class="contact-box-title">Hubungi Kami</h3>
                <div class="contact-item-new">
                    <img src="{{ asset('asset/icon_email.png') }}" alt="Email Icon">
                    <div class="text-content">
                        <strong>Email</strong>
                        <p>amallanindonesia@gmail.com</p>
                    </div>
                </div>
                <div class="contact-item-new">
                    <img src="{{ asset('asset/icon_whatsapp.png') }}" alt="WhatsApp Icon">
                    <div class="text-content">
                        <strong>WhatsApp</strong>
                        <p>0821 5939 2448</p>
                    </div>
                </div>
                <div class="contact-item-new">
                    <img src="{{ asset('asset/icon_website.png') }}" alt="Website Icon">
                    <div class="text-content">
                        <strong>Website</strong>
                        <p>www.amallan.id</p>
                    </div>
                </div>
                <div class="contact-item-new">
                    <img src="{{ asset('asset/icon_alamat.png') }}" alt="Alamat Icon">
                    <div class="text-content">
                        <strong>Alamat</strong>
                        <p>Jl. HM Suwignyo Gg. Margodadirejo 1 No.12A, Kota Pontianak, Kalbar</p>
                    </div>
                </div>
            </div>

            <div class="contact-form-new">
                <h3 class="contact-box-title">Kirim Pesan</h3>
                <form id="contact-form-new" action="https://formspree.io/f/mblyaozw" method="POST">
                    <div class="form-group">
                        <label for="name-new">Nama</label>
                        <input type="text" id="name-new" name="Nama" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="email-new">Email</label>
                        <input type="email" id="email-new" name="Email" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="wa-new">WA</label>
                        <input type="tel" id="wa-new" name="WhatsApp" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="message-new">Pesan</label>
                        <textarea id="message-new" name="Pesan" rows="4" placeholder="" required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit">Kirim Pesan</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
    <footer id="footer">
        <div class="footer-grid">
            <div class="footer-col footer-logo-col">
                <img src="{{ asset('asset/Salinan dari Salinan dari Tambahkan judul (3).png') }}" alt="Logo Amallan" class="footer-logo-new">
                <p>Gerakan Digitalisasi dan Kemandirian Pesantren.</p>
                <div class="social-icons">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/amallan.id" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="Youtube"><i class="fab fa-youtube"></i></a>
                    <a href="https://wa.me/6285198835192" target="_blank" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
            
            <div class="footer-col">
                <h3>Kontak Kami</h3>
                <div class="footer-contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>Jl. HM Suwignyo Gg. Margodadirejo 1 No.12A, Kota Pontianak, Kalbar</p>
                </div>
                <div class="footer-contact-item">
                    <i class="fas fa-phone-alt"></i>
                    <p>0821 5939 2448</p>
                </div>
                <div class="footer-contact-item">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:amallanindonesia@gmail.com">amallanindonesia@gmail.com</a>
                </div>
            </div>

            <div class="footer-col">
                <h3>Jam Operasional</h3>
                <div class="jam-operasional-item">
                    <p>Senin - Jumat : 08:00 - 17:00</p>
                </div>
                <div class="jam-operasional-item">
                    <p>Sabtu : 09:00 - 15:00</p>
                </div>
                <div class="jam-operasional-item">
                    <p>Minggu : Tutup</p>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 | amallan.id Hak Cipta Dilindungi.</p>
        </div>
    </footer>

    <div id="privacy-modal" class="chatbot-modal">
        <div class="chatbot-modal-content" style="max-width: 600px; height: auto; max-height: 90vh;">
            <button class="chatbot-close-button" onclick="hidePrivacyModal()">&times;</button>
            <div style="padding: 30px; color: var(--general-text-dark);">
                <h3 style="font-family: 'Poppins', sans-serif; font-size: 1.8em; margin-bottom: 20px; color: var(--general-text-dark);">Kebijakan Privasi</h3>
                <p style="margin-bottom: 15px;">Kebijakan Privasi ini menjelaskan bagaimana Amallan.id mengumpulkan, menggunakan, dan melindungi informasi yang Anda berikan ketika menggunakan platform kami.</p>
                
                <h4 style="font-family: 'Poppins', sans-serif; font-size: 1.2em; margin-top: 20px; margin-bottom: 10px; color: var(--general-text-dark);">Informasi yang Kami Kumpulkan</h4>
                <ul style="list-style: disc; margin-left: 20px; margin-bottom: 15px;">
                    <li>Nama dan informasi kontak pondok pesantren</li>
                    <li>Data terkait operasional pesantren</li>
                    <li>Informasi untuk kebutuhan layanan teknologi kami</li>
                </ul>
                
                <h4 style="font-family: 'Poppins', sans-serif; font-size: 1.2em; margin-top: 20px; margin-bottom: 10px; color: var(--general-text-dark);">Penggunaan Informasi</h4>
                <p style="margin-bottom: 15px;">Kami menggunakan informasi yang kami kumpulkan untuk:</p>
                <ul style="list-style: disc; margin-left: 20px; margin-bottom: 15px;">
                    <li>Menyediakan dan meningkatkan layanan kami</li>
                    <li>Memberikan dukungan teknis</li>
                    <li>Mengembangkan fitur baru yang relevan</li>
                    <li>Komunikasi terkait layanan</li>
                </ul>
                
                <h4 style="font-family: 'Poppins', sans-serif; font-size: 1.2em; margin-top: 20px; margin-bottom: 10px; color: var(--general-text-dark);">Keamanan Data</h4>
                <p style="margin-bottom: 20px;">Kami berkomitmen untuk melindungi data pesantren dengan standar keamanan tinggi sesuai prinsip syariah dan regulasi yang berlaku.</p>
                
                <button onclick="hidePrivacyModal()" style="background-color: var(--amallan-dark-green); color: white; padding: 10px 20px; border-radius: 25px; border: none; cursor: pointer; transition: background-color 0.3s ease;">Tutup</button>
            </div>
        </div>
    </div>
    
    <div id="chatbot-modal" class="chatbot-modal">
        <div class="chatbot-modal-content">
            <button class="chatbot-close-button" onclick="closeChatbotModal()">&times;</button>
            <div class="header">
                <img src="{{ asset('asset/Salinan dari Salinan dari Tambahkan judul (2).png') }}" alt="Logo Amallan" class="logo">
                <h1>Chat Temal</h1>
                <button class="clear-chat-button">Bersihkan Chat</button>
            </div>

            <div class="chat-container" id="chat-container">
            </div>

            <div class="input-container">
                <input type="text" id="user-input" placeholder="Tanyakan tentang Amallan..." autocomplete="off">
                <button id="send-button">Kirim</button>
            </div>
        </div>
    </div>

    <button class="chatbot-fab" onclick="openChatbotModal()">
        <i class="fas fa-robot"></i> <span class="fab-text">Chat dengan Temal</span>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script type="module" src="{{ asset('js/amallan.js') }}"></script>
</body>
</html>