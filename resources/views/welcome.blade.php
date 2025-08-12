<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amallan.id - Membangun Pesantren Mandiri</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <style>
        :root {
            /* Enhanced Green Color Palette - Mempertahankan warna asli */
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
            
            /* Neutral Colors - Improved contrast */
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
            
            /* Gradients - Mempertahankan gradien asli */
            --gradient-emerald: linear-gradient(135deg, var(--emerald-600), var(--teal-600));
            --gradient-emerald-light: linear-gradient(135deg, var(--emerald-500), var(--teal-500));
            --gradient-emerald-dark: linear-gradient(135deg, var(--emerald-800), var(--teal-800));
            
            /* Enhanced Shadows */
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            --shadow-2xl: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            
            /* Enhanced Effects */
            --blur-backdrop: blur(20px);
            --border-radius-sm: 0.375rem;
            --border-radius: 0.5rem;
            --border-radius-md: 0.75rem;
            --border-radius-lg: 1rem;
            --border-radius-xl: 1.5rem;
            
            /* Typography Scale */
            --text-xs: 0.75rem;
            --text-sm: 0.875rem;
            --text-base: 1rem;
            --text-lg: 1.125rem;
            --text-xl: 1.25rem;
            --text-2xl: 1.5rem;
            --text-3xl: 1.875rem;
            --text-4xl: 2.25rem;
            --text-5xl: 3rem;
            --text-6xl: 3.75rem;
            
            /* Spacing Scale */
            --space-1: 0.25rem;
            --space-2: 0.5rem;
            --space-3: 0.75rem;
            --space-4: 1rem;
            --space-5: 1.25rem;
            --space-6: 1.5rem;
            --space-8: 2rem;
            --space-10: 2.5rem;
            --space-12: 3rem;
            --space-16: 4rem;
            --space-20: 5rem;
            --space-24: 6rem;
            --space-32: 8rem;
        }

        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            font-size: 16px;
        }

        body {
            background: linear-gradient(135deg, var(--slate-50) 0%, var(--emerald-50) 100%);
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: var(--slate-800);
            overflow-x: hidden;
        }

        /* Enhanced Typography */
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: var(--space-4);
        }

        h1 { font-size: var(--text-5xl); }
        h2 { font-size: var(--text-4xl); }
        h3 { font-size: var(--text-2xl); }
        h4 { font-size: var(--text-xl); }
        h5 { font-size: var(--text-lg); }
        h6 { font-size: var(--text-base); }

        p {
            margin-bottom: var(--space-4);
            line-height: 1.7;
        }

        /* Container System */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 var(--space-6);
        }

        /* === HEADER YANG DIPERBAIKI === */
        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: var(--blur-backdrop);
            -webkit-backdrop-filter: var(--blur-backdrop);
            box-shadow: var(--shadow-md);
            border-bottom: 1px solid var(--emerald-100);
            transition: transform 0.4s cubic-bezier(0.2, 0.8, 0.2, 1), background 0.3s ease, box-shadow 0.3s ease;
            z-index: 1000;

            /* --- PERUBAHAN DI SINI --- */
            height: 75px; /* Tetapkan tinggi header, sesuaikan nilainya jika perlu */
            padding: 0; /* Hapus padding atas dan bawah agar tinggi header konsisten */
            display: flex;
            align-items: center;
        }

        header.scrolled {
            background: rgba(255, 255, 255, 0.98);
            box-shadow: var(--shadow-lg);
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-logo-new img {
            height: 250px;
            width: auto;
            transition: transform 0.3s ease;
        }
        .header-logo-new:hover img {
            transform: scale(1.05);
        }

        .main-nav ul {
            display: flex;
            list-style: none;
            gap: var(--space-2);
            align-items: center;
        }

        .main-nav ul li a {
            padding: var(--space-2) var(--space-4);
            color: var(--slate-700);
            text-decoration: none;
            font-weight: 600;
            border-radius: var(--border-radius);
            transition: color 0.3s ease, background-color 0.3s ease;
        }

        .main-nav ul li a:hover {
            color: var(--emerald-700);
            background-color: var(--emerald-50);
        }

        /* Actions container for buttons */
        .header-actions {
            display: flex;
            align-items: center;
            gap: var(--space-4);
        }

        .button-hubungi {
            background: var(--gradient-emerald);
            color: var(--white);
            padding: var(--space-2) var(--space-5);
            border-radius: var(--border-radius-lg);
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: var(--shadow-sm);
            border: none;
            cursor: pointer;
            white-space: nowrap;
        }

        .button-hubungi:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
            background: var(--gradient-emerald-light);
        }

        /* Hide the mobile-only button on desktop */
        .header-button-mobile {
            display: none;
        }

        /* Mobile Menu Toggle */
        .menu-toggle {
            display: none;
            background: none;
            border: none;
            font-size: var(--text-2xl);
            color: var(--slate-700);
            cursor: pointer;
            padding: var(--space-2);
            border-radius: var(--border-radius);
            transition: all 0.3s ease;
            z-index: 1001;
        }

        .menu-toggle:hover {
            background: var(--emerald-50);
            color: var(--emerald-700);
        }

        /* === Responsive Header (DIPERBAIKI) === */
        @media (max-width: 1024px) {
            .main-nav {
                display: none;
            }
            .menu-toggle {
                display: block;
            }
            
            /* Mobile navigation panel */
            .main-nav.active {
                display: flex;
                position: fixed;
                top: 0;
                right: 0;
                width: 300px;
                height: 100%;
                background: var(--white);
                box-shadow: var(--shadow-2xl);
                flex-direction: column;
                align-items: flex-start;
                padding: var(--space-16) var(--space-8);
                animation: slideIn 0.3s ease-out;
            }

            @keyframes slideIn {
                from { transform: translateX(100%); }
                to { transform: translateX(0); }
            }

            .main-nav.active ul {
                flex-direction: column;
                align-items: flex-start;
                width: 100%;
                gap: var(--space-4);
            }

            .main-nav.active ul li a {
                display: block;
                width: 100%;
                padding: var(--space-3);
                font-size: var(--text-lg);
            }

            .header-actions .button-hubungi {
                display: none;
            }

            /* Show donation button inside mobile menu */
            .header-button-mobile {
                display: block;
                margin-top: var(--space-8);
                width: 100%;
            }
            .header-button-mobile .button-hubungi {
                display: block;
                width: 100%;
                text-align: center;
            }
        }

        /* Enhanced Hero Section */
        #hero {
            background: var(--gradient-emerald);
            position: relative;
            overflow: hidden;
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding-top: 80px;
        }

        #hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 30% 20%, rgba(255, 255, 255, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 70% 80%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 90% 10%, rgba(255, 255, 255, 0.05) 0%, transparent 40%);
            pointer-events: none;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: var(--space-16);
            align-items: center;
        }

        .hero-text {
            color: var(--white);
        }

        #hero h1 {
            font-size: clamp(var(--text-4xl), 5vw, var(--text-6xl));
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: var(--space-6);
            text-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        #hero p {
            font-size: var(--text-xl);
            margin-bottom: var(--space-8);
            opacity: 0.95;
            line-height: 1.6;
        }

        .hero-buttons {
            display: flex;
            gap: var(--space-4);
            flex-wrap: wrap;
        }

        .hero-buttons .button {
            padding: var(--space-4) var(--space-8);
            border-radius: var(--border-radius-xl);
            font-weight: 600;
            font-size: var(--text-lg);
            text-decoration: none;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: var(--shadow-lg);
            display: inline-flex;
            align-items: center;
            gap: var(--space-2);
            border: none;
            cursor: pointer;
        }

        .hero-buttons .button.white {
            background: var(--white);
            color: var(--emerald-700);
        }

        .hero-buttons .button.white:hover {
            background: var(--emerald-50);
            transform: translateY(-3px);
            box-shadow: var(--shadow-2xl);
        }

        .hero-buttons .button.green {
            background: rgba(255, 255, 255, 0.2);
            border: 2px solid rgba(255, 255, 255, 0.3);
            color: var(--white);
            backdrop-filter: blur(10px);
        }

        .hero-buttons .button.green:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-3px);
            box-shadow: var(--shadow-2xl);
        }

        .hero-image-container {
            position: relative;
            z-index: 2;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .hero-image-container img {
            max-width: 100%;
            height: auto;
            filter: drop-shadow(0 20px 40px rgba(0, 0, 0, 0.3));
            border-radius: var(--border-radius-xl);
        }

        /* Enhanced Section Styling */
        .section-padding {
            padding: var(--space-24) 0;
        }

        .section-heading {
            background: var(--gradient-emerald);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-family: 'Poppins', sans-serif;
            font-size: clamp(var(--text-3xl), 4vw, var(--text-5xl));
            font-weight: 800;
            text-align: center;
            margin-bottom: var(--space-4);
        }

        .section-description {
            font-size: var(--text-xl);
            text-align: center;
            max-width: 700px;
            margin: 0 auto var(--space-16);
            color: var(--slate-600);
            line-height: 1.7;
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
            background: radial-gradient(circle at 80% 20%, rgba(16, 185, 129, 0.08) 0%, transparent 50%);
            pointer-events: none;
        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: var(--space-16);
            align-items: center;
            position: relative;
            z-index: 2;
        }

        .about-image-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .about-image-container img {
            width: 100%;
            max-width: 450px;
            height: auto;
            border-radius: 50%;
            border: 15px solid rgba(16, 185, 129, 0.2);
            box-shadow: var(--shadow-2xl);
            object-fit: cover;
            aspect-ratio: 1 / 1;
            transition: transform 0.3s ease;
        }

        .about-image-container img:hover {
            transform: scale(1.02);
        }

        .about-text-content h2 {
            background: var(--gradient-emerald);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-size: clamp(var(--text-3xl), 4vw, var(--text-4xl));
            text-align: left;
            margin-bottom: var(--space-6);
        }

        .about-text-content p {
            font-size: var(--text-lg);
            line-height: 1.8;
            color: var(--slate-700);
            margin-bottom: var(--space-6);
        }

        .info-box {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(16, 185, 129, 0.2);
            box-shadow: var(--shadow-lg);
            border-radius: var(--border-radius-xl);
            padding: var(--space-6);
            display: flex;
            align-items: flex-start;
            gap: var(--space-5);
            transition: all 0.3s ease;
        }

        .info-box:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-xl);
        }

        .info-box .info-icon {
            background: var(--gradient-emerald);
            color: var(--white);
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: var(--text-2xl);
            flex-shrink: 0;
            box-shadow: var(--shadow-md);
        }

        .info-box p {
            margin: 0;
            font-size: var(--text-base);
            color: var(--slate-700);
            line-height: 1.6;
        }

        .info-box p strong {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            color: var(--emerald-700);
        }

        /* Enhanced Program Cards */
        #program-utama {
            background: linear-gradient(135deg, var(--slate-100) 0%, var(--emerald-100) 100%);
        }

        .program-card-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: var(--space-8);
            max-width: 1200px;
            margin: 0 auto;
        }

        .program-card {
            background: var(--white);
            border-radius: var(--border-radius-xl);
            box-shadow: var(--shadow-md);
            padding: var(--space-8);
            text-align: center;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid rgba(16, 185, 129, 0.1);
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
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
            transform: translateY(-8px);
            box-shadow: var(--shadow-2xl);
            border-color: var(--emerald-300);
        }

        .icon-circle {
            background: var(--gradient-emerald);
            box-shadow: var(--shadow-lg);
            width: 90px;
            height: 90px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: var(--space-6);
            flex-shrink: 0;
            padding: var(--space-4);
            transition: transform 0.3s ease;
        }

        .program-card:hover .icon-circle {
            transform: scale(1.1);
        }

        .icon-circle img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .program-card h3 {
            color: var(--emerald-700);
            font-size: var(--text-xl);
            margin-bottom: var(--space-4);
        }

        .program-card p {
            color: var(--slate-600);
            line-height: 1.6;
            margin: 0;
        }

        /* Enhanced Step Cards */
        #how-it-works {
            background: linear-gradient(135deg, var(--white) 0%, var(--emerald-50) 100%);
        }

        .step-card-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: var(--space-8);
            max-width: 1200px;
            margin: 0 auto;
        }

        .step-card {
            background: var(--white);
            border-radius: var(--border-radius-xl);
            box-shadow: var(--shadow-md);
            padding: var(--space-8);
            text-align: center;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid var(--slate-200);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .step-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-xl);
            border-color: var(--emerald-300);
        }

        .step-number-circle {
            background: var(--emerald-600);
            color: var(--white);
            width: 90px;
            height: 90px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: var(--space-6);
            flex-shrink: 0;
            padding: var(--space-4);
            font-size: var(--text-3xl);
            font-weight: 800;
            box-shadow: var(--shadow-lg);
            transition: transform 0.3s ease;
        }

        .step-card:hover .step-number-circle {
            transform: scale(1.1);
        }

        .step-card h3 {
            color: var(--emerald-700);
            font-size: var(--text-xl);
            margin-bottom: var(--space-4);
        }

        .step-card p {
            color: var(--slate-600);
            line-height: 1.6;
            margin: 0;
        }

        /* Enhanced Dampak Section */
        #dampak-nyata {
            background: linear-gradient(135deg, var(--emerald-50) 0%, var(--teal-50) 100%);
        }

        .dampak-content {
            display: grid;
            grid-template-columns: 1.2fr 1fr;
            gap: var(--space-8);
            align-items: stretch;
            border-radius: var(--border-radius-xl);
            overflow: hidden;
            box-shadow: var(--shadow-xl);
            background: var(--white);
        }

        .dampak-gallery {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: repeat(2, 1fr);
            gap: var(--space-2);
            padding: 0;
        }

        .dampak-gallery img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .dampak-gallery img:hover {
            transform: scale(1.05);
        }

        .dampak-info-card {
            background: var(--emerald-50);
            padding: var(--space-10);
            display: flex;
            flex-direction: column;
            justify-content: center;
            border: 1px solid rgba(16, 185, 129, 0.2);
        }

        .dampak-info-card h3 {
            color: var(--emerald-800);
            font-size: var(--text-2xl);
            margin-bottom: var(--space-6);
        }

        .dampak-info-card p,
        .dampak-info-card ul li {
            font-size: var(--text-base);
            color: var(--slate-700);
            line-height: 1.7;
        }

        .dampak-info-card ul {
            list-style: none;
            padding: 0;
            margin: var(--space-4) 0;
        }

        .dampak-info-card ul li {
            position: relative;
            padding-left: var(--space-6);
            margin-bottom: var(--space-2);
        }

        .dampak-info-card ul li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--emerald-600);
            font-weight: bold;
        }

        .dampak-info-card ul li strong {
            color: var(--emerald-700);
            font-weight: 600;
        }

        /* Enhanced News Section */
        #news-section {
            background: linear-gradient(135deg, var(--white), var(--emerald-50));
            padding: var(--space-24) 0;
        }

        .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: var(--space-8);
            max-width: 1200px;
            margin: 0 auto;
        }

        .news-item {
            background: var(--white);
            border-radius: var(--border-radius-xl);
            box-shadow: var(--shadow-md);
            overflow: hidden;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid rgba(16, 185, 129, 0.1);
        }

        .news-item:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-2xl);
        }

        .news-item img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .news-item:hover img {
            transform: scale(1.05);
        }

        .news-content {
            padding: var(--space-6);
        }

        .news-content h3 {
            color: var(--emerald-800);
            font-size: var(--text-xl);
            margin-bottom: var(--space-3);
            line-height: 1.4;
        }

        .news-content p {
            color: var(--slate-600);
            line-height: 1.6;
            margin-bottom: var(--space-4);
        }

        .news-content .read-more {
            color: var(--emerald-600);
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: var(--space-2);
        }

        .news-content .read-more:hover {
            color: var(--emerald-800);
            transform: translateX(4px);
        }

        /* Enhanced CTA Section */
        #cta-section {
            background: var(--gradient-emerald-dark);
            color: var(--white);
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        #cta-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 20% 80%, rgba(255, 255, 255, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255, 255, 255, 0.1) 0%, transparent 50%);
            pointer-events: none;
        }

        #cta-section .container {
            position: relative;
            z-index: 2;
        }

        #cta-section h2 {
            font-size: clamp(var(--text-3xl), 4vw, var(--text-5xl));
            margin-bottom: var(--space-6);
            text-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);
        }

        #cta-section p {
            font-size: var(--text-xl);
            max-width: 800px;
            margin: 0 auto var(--space-10);
            line-height: 1.7;
            opacity: 0.95;
        }

        #cta-section .button {
            background: var(--white);
            color: var(--emerald-700);
            padding: var(--space-5) var(--space-10);
            border-radius: var(--border-radius-xl);
            text-decoration: none;
            font-weight: 700;
            font-size: var(--text-lg);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: var(--shadow-xl);
            display: inline-flex;
            align-items: center;
            gap: var(--space-3);
            border: none;
            cursor: pointer;
        }

        #cta-section .button:hover {
            background: var(--slate-100);
            transform: translateY(-4px);
            box-shadow: var(--shadow-2xl);
        }

        /* Enhanced Footer */
        footer {
            background: var(--slate-900);
            color: var(--slate-300);
            padding: var(--space-20) 0 var(--space-8);
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: var(--space-10);
            margin-bottom: var(--space-10);
        }

        .footer-section h4 {
            color: var(--emerald-400);
            font-size: var(--text-xl);
            margin-bottom: var(--space-5);
        }

        .footer-section p,
        .footer-section ul li a {
            color: var(--slate-400);
            line-height: 1.8;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: var(--space-2);
        }

        .footer-section ul li a:hover {
            color: var(--emerald-400);
        }

        .social-links {
            display: flex;
            gap: var(--space-4);
            margin-top: var(--space-4);
        }

        .social-links a {
            color: var(--slate-400);
            font-size: var(--text-2xl);
            transition: all 0.3s ease;
            padding: var(--space-2);
            border-radius: var(--border-radius);
        }

        .social-links a:hover {
            color: var(--emerald-400);
            background: rgba(16, 185, 129, 0.1);
            transform: translateY(-2px);
        }

        .footer-section form {
            margin-top: var(--space-4);
        }

        .footer-section input {
            width: 100%;
            padding: var(--space-4);
            border-radius: var(--border-radius-md);
            background: var(--slate-800);
            border: 1px solid var(--slate-700);
            color: var(--white);
            margin-bottom: var(--space-3);
            transition: border-color 0.3s ease;
        }

        .footer-section input:focus {
            outline: none;
            border-color: var(--emerald-600);
        }

        .footer-section input::placeholder {
            color: var(--slate-500);
        }

        .footer-section button {
            width: 100%;
            padding: var(--space-4);
            background: var(--emerald-600);
            color: var(--white);
            border: none;
            border-radius: var(--border-radius-md);
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .footer-section button:hover {
            background: var(--emerald-700);
            transform: translateY(-1px);
        }

        .footer-bottom {
            text-align: center;
            padding-top: var(--space-8);
            border-top: 1px solid var(--slate-700);
            color: var(--slate-500);
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .hero-content {
                grid-template-columns: 1fr;
                gap: var(--space-12);
                text-align: center;
            }

            .about-content {
                grid-template-columns: 1fr;
                gap: var(--space-12);
                text-align: center;
            }

            .about-text-content h2 {
                text-align: center;
            }

            .dampak-content {
                grid-template-columns: 1fr;
            }

            .dampak-gallery {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                aspect-ratio: 16/9;
            }

            .program-card-grid,
            .step-card-grid,
            .news-grid {
                grid-template-columns: 1fr;
            }

            .dampak-info-card {
                padding: var(--space-6);
            }

            .social-links {
                justify-content: center;
            }
            
            .footer-section {
                margin-bottom: var(--space-8);
            }
        }

        @media (max-width: 768px) {
            .main-nav {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: rgba(255, 255, 255, 0.98);
                backdrop-filter: var(--blur-backdrop);
                box-shadow: var(--shadow-xl);
                border-radius: 0 0 var(--border-radius-xl) var(--border-radius-xl);
                padding: var(--space-6);
            }

            .main-nav.active {
                display: block;
            }

            .main-nav ul {
                flex-direction: column;
                gap: var(--space-2);
            }

            .main-nav ul li a {
                display: block;
                text-align: center;
                padding: var(--space-4);
            }

            .menu-toggle {
                display: block;
            }

            .button-hubungi {
                display: none;
            }

            .hero-buttons {
                justify-content: center;
            }

            .hero-buttons .button {
                flex: 1;
                min-width: 200px;
                justify-content: center;
            }

            .program-card-grid,
            .step-card-grid,
            .news-grid {
                grid-template-columns: 1fr;
            }

            .dampak-info-card {
                padding: var(--space-6);
            }

            .social-links {
                justify-content: center;
            }
            
            .footer-section {
                margin-bottom: var(--space-8);
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 var(--space-4);
            }

            .section-padding {
                padding: var(--space-16) 0;
            }

            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }

            .hero-buttons .button {
                width: 100%;
                max-width: 300px;
            }

            .about-image-container img {
                width: 80%;
            }

            .info-box {
                flex-direction: column;
                text-align: center;
                gap: var(--space-4);
            }

            .dampak-gallery {
                grid-template-columns: 1fr;
            }
        }

        /* Animation Classes */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .slide-in-left {
            opacity: 0;
            transform: translateX(-50px);
            transition: all 0.6s ease;
        }

        .slide-in-left.visible {
            opacity: 1;
            transform: translateX(0);
        }

        .slide-in-right {
            opacity: 0;
            transform: translateX(50px);
            transition: all 0.6s ease;
        }

        .slide-in-right.visible {
            opacity: 1;
            transform: translateX(0);
        }

        /* Utility Classes */
        .text-center { text-align: center; }
        .text-left { text-align: left; }
        .text-right { text-align: right; }
        .flex { display: flex; }
        .flex-center { display: flex; justify-content: center; align-items: center; }
        .grid { display: grid; }
        .hidden { display: none; }
        .block { display: block; }
        .relative { position: relative; }
        .absolute { position: absolute; }
        .fixed { position: fixed; }
        .w-full { width: 100%; }
        .h-full { height: 100%; }
        .rounded { border-radius: var(--border-radius); }
        .rounded-lg { border-radius: var(--border-radius-lg); }
        .rounded-xl { border-radius: var(--border-radius-xl); }
        .shadow { box-shadow: var(--shadow); }
        .shadow-lg { box-shadow: var(--shadow-lg); }
        .shadow-xl { box-shadow: var(--shadow-xl); }

        /* --- STYLES UNTUK CHATBOT (VERSI PERBAIKAN) --- */

        /* Tombol Ikon Chatbot (Floating Action Button) */
        .chatbot-fab {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: var(--gradient-emerald);
            color: white;
            width: 65px;
            height: 65px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: var(--shadow-xl);
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 10000; /* Z-index tinggi untuk tombol */
            border: 2px solid white;
        }

        .chatbot-fab:hover {
            transform: scale(1.08);
            box-shadow: var(--shadow-2xl);
        }

        .chatbot-fab img {
            width: 45px;
            height: 45px;
            object-fit: contain;
        }

        /* Modal Chatbot */
        .chatbot-modal {
            display: none; /* Defaultnya tersembunyi */
            position: fixed;
            z-index: 10001; /* Z-index LEBIH TINGGI dari tombolnya */
            bottom: 110px;
            right: 30px;
            width: 90%;
            max-width: 400px;
            height: 70vh;
            max-height: 550px;
            background-color: white;
            border-radius: var(--border-radius-xl);
            box-shadow: var(--shadow-2xl);
            transform-origin: bottom right;
            animation: fadeInScale 0.3s ease-out;
            overflow: hidden; /* Penting agar konten di dalam tidak keluar dari border-radius */
        }

        .chatbot-modal.is-visible {
            display: flex; /* Tampilkan modal jika memiliki class is-visible */
            flex-direction: column;
        }

        @keyframes fadeInScale {
            from { opacity: 0; transform: scale(0.9); }
            to { opacity: 1; transform: scale(1); }
        }

        .chatbot-content {
            display: flex;
            flex-direction: column;
            width: 100%;
            height: 100%;
        }

        .chatbot-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: var(--space-4) var(--space-6);
            background: var(--gradient-emerald);
            color: white;
            flex-shrink: 0; /* Mencegah header menyusut */
        }

        .chatbot-header h3 {
            margin: 0;
            font-size: var(--text-lg);
            font-weight: 600;
        }

        .close-chatbot-button {
            background: none;
            border: none;
            color: white;
            font-size: var(--text-2xl);
            cursor: pointer;
            transition: transform 0.2s ease;
        }

        .close-chatbot-button:hover {
            transform: scale(1.2);
        }

        #chat-container {
            flex-grow: 1;
            padding: var(--space-4);
            overflow-y: auto;
            background-color: var(--slate-50);
            display: flex;
            flex-direction: column;
            gap: var(--space-4);
        }

        /* Styling untuk Bubble Chat (User & Bot) */
        .message {
            padding: var(--space-3) var(--space-4);
            border-radius: var(--border-radius-lg);
            max-width: 85%;
            font-size: var(--text-base);
            line-height: 1.5;
        }

        .user-message {
            background-color: var(--emerald-500);
            color: white;
            align-self: flex-end;
            border-bottom-right-radius: var(--space-1);
        }

        .bot-message-wrapper {
            display: flex;
            align-items: flex-end;
            gap: var(--space-2);
            align-self: flex-start;
        }

        .mascot-icon {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            flex-shrink: 0;
            background: white;
            border: 2px solid var(--emerald-200);
        }

        .bot-message {
            background-color: white;
            color: var(--slate-700);
            border: 1px solid var(--slate-200);
            border-bottom-left-radius: var(--space-1);
        }

        .quick-replies {
            display: flex;
            flex-wrap: wrap;
            gap: var(--space-2);
            margin-top: var(--space-2);
            padding: 0 var(--space-4); /* Diberi padding agar tidak menempel */
        }

        .quick-reply {
            padding: var(--space-2) var(--space-3);
            background-color: var(--emerald-100);
            color: var(--emerald-700);
            border: 1px solid var(--emerald-300);
            border-radius: var(--border-radius-xl);
            font-size: var(--text-sm);
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .quick-reply:hover {
            background-color: var(--emerald-200);
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }


        /* Input Area Chatbot */
        .chatbot-input {
            display: flex;
            padding: var(--space-4);
            background-color: white;
            border-top: 1px solid var(--slate-200);
            flex-shrink: 0; /* Mencegah input area menyusut */
            gap: var(--space-2);
        }

        #user-input {
            flex-grow: 1;
            padding: var(--space-3) var(--space-4);
            border: 1px solid var(--slate-300);
            border-radius: var(--border-radius-xl);
            font-size: var(--text-base);
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        #user-input:focus {
            outline: none;
            border-color: var(--emerald-600);
            box-shadow: 0 0 0 2px var(--emerald-100);
        }

        .send-button {
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            border: none;
            cursor: pointer;
            transition: all 0.2s ease;
            background-color: var(--emerald-600);
            color: white;
            font-size: var(--text-lg);
            flex-shrink: 0;
        }

        .send-button:hover {
            background-color: var(--emerald-700);
            transform: scale(1.1);
        }

        /* Responsive */
        @media (max-width: 480px) {
            .chatbot-modal {
                bottom: 0;
                right: 0;
                width: 100%;
                height: 100%;
                max-height: 100%;
                border-radius: 0;
            }
            .chatbot-fab {
                bottom: 20px;
                right: 20px;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="header-content">
                <div class="header-logo-new">
                    <a href="/"><img src="{{ asset('asset/logo_full.png') }}" alt="Amallan.id Logo"></a>
                </div>
                <nav class="main-nav" id="mainNav">
                    <ul>
                        <li><a href="#hero">Beranda</a></li>
                        <li><a href="#news-section">Berita</a></li>
                        <li><a href="#program-utama">Program</a></li>
                        <li><a href="#how-it-works">Cara Kerja</a></li>
                        <li><a href="#dampak-nyata">Dampak</a></li>
                        <li><a href="#about-amallan">Tentang Kami</a></li>
                        <li class="header-button-mobile"><a href="http://donasi.amallan.id" class="button-hubungi">Donasi Sekarang</a></li>
                    </ul>
                </nav>
                <div class="header-actions">
                    <a href="http://donasi.amallan.id" class="button-hubungi">Donasi Sekarang</a>
                    <button class="menu-toggle" id="menuToggle">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section id="hero" class="section-padding">
            <div class="container">
                <div class="hero-content">
                    <div class="hero-text">
                        <h1 class="fade-in">Membangun Pesantren Mandiri Bersama Amallan.id</h1>
                        <p class="fade-in">Bergabunglah dengan gerakan kebaikan untuk mendukung pembangunan dan pengembangan pesantren di seluruh Indonesia. Setiap donasi Anda adalah investasi untuk masa depan generasi Qur'ani yang mandiri dan berdaya.</p>
                        <div class="hero-buttons fade-in">
                            <a href="http://donasi.amallan.id" class="button white">
                                <i class="fas fa-hand-holding-heart"></i>
                                Donasi Sekarang
                            </a>
                            <a href="#about-amallan" class="button green">
                                <i class="fas fa-info-circle"></i>
                                Pelajari Lebih Lanjut
                            </a>
                        </div>
                    </div>
                    <div class="hero-image-container fade-in">
                        <img src="{{ asset('asset/maskot_amallan.png') }}" alt="Pesantren Mandiri">
                    </div>
                </div>
            </div>
        </section>

        <section id="about-amallan" class="section-padding">
            <div class="container">
                <div class="about-content">
                    <div class="about-image-container slide-in-left">
                        <img src="{{ asset('asset/maskot_amallan_about.png') }}" alt="Tentang Amallan.id">
                    </div>
                    <div class="about-text-content slide-in-right">
                        <h2>Tentang Amallan.id</h2>
                        <p>Amallan.id adalah sebuah inisiatif mulia yang berdedikasi untuk mendukung pembangunan dan pengembangan pesantren di seluruh Indonesia. Kami percaya bahwa pesantren adalah pilar penting dalam mencetak generasi Qur'ani yang tidak hanya unggul dalam ilmu agama, tetapi juga mandiri dan berdaya saing di era modern.</p>
                        <p>Melalui platform crowdfunding yang transparan dan akuntabel, kami mengajak Anda untuk menjadi bagian dari gerakan kebaikan ini. Setiap donasi yang Anda berikan akan langsung disalurkan untuk kebutuhan vital pesantren, mulai dari pembangunan fasilitas, pengadaan sarana belajar, hingga beasiswa bagi santri berprestasi.</p>
                        <div class="info-box">
                            <div class="info-icon">
                                <i class="fas fa-hand-holding-heart"></i>
                            </div>
                            <p><strong>Visi Kami:</strong> Menjadi jembatan kebaikan yang menghubungkan para dermawan dengan pesantren, demi terwujudnya generasi Qur'ani yang mandiri dan berdaya.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="program-utama" class="section-padding">
            <div class="container">
                <h2 class="section-heading fade-in">Program Utama Kami</h2>
                <p class="section-description fade-in">Kami memiliki beberapa program unggulan yang dirancang untuk memberikan dampak maksimal bagi pesantren dan santri.</p>
                <div class="program-card-grid">
                    <div class="program-card fade-in">
                        <div class="icon-circle">
                            <img src="{{ asset('asset/icon-pembangunan.png') }}" alt="Pembangunan Fasilitas">
                        </div>
                        <h3>Pembangunan & Renovasi</h3>
                        <p>Mendukung pembangunan gedung baru, asrama, masjid, dan fasilitas penunjang lainnya untuk menciptakan lingkungan belajar yang nyaman dan kondusif.</p>
                    </div>
                    <div class="program-card fade-in">
                        <div class="icon-circle">
                            <img src="{{ asset('asset/icon-sarana.png') }}" alt="Pengadaan Sarana Belajar">
                        </div>
                        <h3>Pengadaan Sarana Belajar</h3>
                        <p>Menyediakan Al-Qur'an, kitab kuning, buku pelajaran, perangkat komputer, dan alat peraga edukatif untuk menunjang proses belajar mengajar.</p>
                    </div>
                    <div class="program-card fade-in">
                        <div class="icon-circle">
                            <img src="{{ asset('asset/icon-beasiswa.png') }}" alt="Beasiswa Santri">
                        </div>
                        <h3>Beasiswa Santri</h3>
                        <p>Memberikan bantuan biaya pendidikan bagi santri yatim, dhuafa, dan berprestasi agar mereka dapat terus menimba ilmu tanpa terkendala biaya.</p>
                    </div>
                    <div class="program-card fade-in">
                        <div class="icon-circle">
                            <img src="{{ asset('asset/icon-pemberdayaan.png') }}" alt="Pemberdayaan Ekonomi">
                        </div>
                        <h3>Pemberdayaan Ekonomi Pesantren</h3>
                        <p>Mengembangkan unit usaha pesantren seperti pertanian, peternakan, atau kerajinan tangan untuk menciptakan kemandirian finansial pesantren.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="how-it-works" class="section-padding">
            <div class="container">
                <h2 class="section-heading fade-in">Cara Kerja Kami</h2>
                <p class="section-description fade-in">Proses yang transparan dan akuntabel untuk memastikan donasi Anda tepat sasaran dan memberikan dampak maksimal.</p>
                <div class="step-card-grid">
                    <div class="step-card fade-in">
                        <div class="step-number-circle">1</div>
                        <h3>Identifikasi Kebutuhan</h3>
                        <p>Kami melakukan survei mendalam untuk mengidentifikasi pesantren yang membutuhkan bantuan dan jenis bantuan yang diperlukan.</p>
                    </div>
                    <div class="step-card fade-in">
                        <div class="step-number-circle">2</div>
                        <h3>Verifikasi & Validasi</h3>
                        <p>Tim kami melakukan verifikasi langsung ke lokasi untuk memastikan keabsahan dan urgensi kebutuhan pesantren.</p>
                    </div>
                    <div class="step-card fade-in">
                        <div class="step-number-circle">3</div>
                        <h3>Penggalangan Dana</h3>
                        <p>Kami membuat kampanye penggalangan dana yang transparan dengan target yang jelas dan timeline yang realistis.</p>
                    </div>
                    <div class="step-card fade-in">
                        <div class="step-number-circle">4</div>
                        <h3>Penyaluran & Monitoring</h3>
                        <p>Dana yang terkumpul disalurkan langsung ke pesantren dengan monitoring ketat dan laporan berkala kepada donatur.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="dampak-nyata" class="section-padding">
            <div class="container">
                <h2 class="section-heading fade-in">Dampak Nyata yang Telah Kami Capai</h2>
                <p class="section-description fade-in">Berkat dukungan para dermawan, kami telah berhasil memberikan dampak positif bagi ribuan santri dan puluhan pesantren di Indonesia.</p>
                <div class="dampak-content fade-in">
                    <div class="dampak-gallery">
                        <img src="{{ asset('asset/dampak-1.png') }}" alt="Pembangunan Asrama">
                        <img src="{{ asset('asset/dampak-2.png') }}" alt="Santri Belajar">
                        <img src="{{ asset('asset/dampak-3.png') }}" alt="Fasilitas Baru">
                        <img src="{{ asset('asset/dampak-4.png') }}" alt="Kegiatan Pesantren">
                    </div>
                    <div class="dampak-info-card">
                        <h3>Pencapaian Kami</h3>
                        <p>Dalam 3 tahun terakhir, Amallan.id telah berhasil:</p>
                        <ul>
                            <li><strong>25+ Pesantren</strong> telah menerima bantuan pembangunan dan renovasi fasilitas</li>
                            <li><strong>500+ Santri</strong> mendapat beasiswa pendidikan penuh</li>
                            <li><strong>15+ Provinsi</strong> di Indonesia telah merasakan dampak program kami</li>
                            <li><strong>Rp 2.5 Miliar+</strong> dana telah tersalurkan dengan transparansi penuh</li>
                            <li><strong>10+ Unit Usaha</strong> pesantren telah dikembangkan untuk kemandirian ekonomi</li>
                        </ul>
                        <p>Setiap donasi yang Anda berikan bukan hanya membangun fisik pesantren, tetapi juga membangun masa depan generasi Qur'ani yang akan menjadi pemimpin umat.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="news-section" class="section-padding">
            <div class="container">
                <h2 class="section-heading fade-in">Berita & Update Terbaru</h2>
                <p class="section-description fade-in">Ikuti perkembangan terbaru dari program-program kami dan dampak yang telah dicapai.</p>
                <div class="news-grid">
                    @foreach ($news as $item)
                        <article class="news-item fade-in">
                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}">
                            <div class="news-content">
                                <h3>{{ $item->title }}</h3>
                                <p>{{ Str::limit(strip_tags($item->content), 150) }}</p>
                                <a href="{{ route('news.show', $item->slug) }}" class="read-more">
                                    Baca Selengkapnya
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="cta-section" class="section-padding">
            <div class="container">
                <h2 class="fade-in">Mari Bersama Membangun Masa Depan Generasi Qur'ani</h2>
                <p class="fade-in">Setiap donasi Anda, sekecil apapun, memiliki dampak besar bagi masa depan pendidikan Islam di Indonesia. Bergabunglah dengan ribuan dermawan lainnya dalam gerakan kebaikan ini.</p>
                <a href="http://donasi.amallan.id" class="button fade-in">
                    <i class="fas fa-hand-holding-heart"></i>
                    Mulai Berdonasi Sekarang
                </a>
            </div>
        </section>
    </main>

    <button class="chatbot-fab" id="chatbot-fab" aria-label="Buka Chat Temal">
        <img src="{{ asset('asset/maskot_amallan.png') }}" alt="Chatbot Icon">
    </button>
    
    <div id="chatbot-modal" class="chatbot-modal">
        <div class="chatbot-content">
            <div class="chatbot-header">
                <h3>💬 Chat Temal</h3>
                <button class="close-chatbot-button" id="close-chatbot-button" aria-label="Tutup Chat">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div id="chat-container">
                </div>
            <div class="chatbot-input">
                <input type="text" id="user-input" placeholder="Ketik pesan Anda..." autocomplete="off">
                <button id="send-button" class="send-button" aria-label="Kirim Pesan">
                    <i class="fas fa-paper-plane"></i>
                </button>
            </div>
        </div>
    </div>
    
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h4>Amallan.id</h4>
                    <p>Platform crowdfunding terpercaya untuk mendukung pembangunan dan pengembangan pesantren di seluruh Indonesia. Bersama kita wujudkan generasi Qur'ani yang mandiri dan berdaya.</p>
                    <div class="social-links">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                        <a href="#" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h4>Program Kami</h4>
                    <ul>
                        <li><a href="#program-utama">Pembangunan & Renovasi</a></li>
                        <li><a href="#program-utama">Pengadaan Sarana Belajar</a></li>
                        <li><a href="#program-utama">Beasiswa Santri</a></li>
                        <li><a href="#program-utama">Pemberdayaan Ekonomi</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Informasi</h4>
                    <ul>
                        <li><a href="#about-amallan">Tentang Kami</a></li>
                        <li><a href="#how-it-works">Cara Kerja</a></li>
                        <li><a href="#dampak-nyata">Dampak Nyata</a></li>
                        <li><a href="#news-section">Berita & Update</a></li>
                        <li><a href="#">Kontak</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Newsletter</h4>
                    <p>Dapatkan update terbaru tentang program dan dampak yang telah dicapai.</p>
                    <form>
                        <input type="email" placeholder="Masukkan email Anda" required>
                        <button type="submit">Berlangganan</button>
                    </form>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Amallan.id. Semua hak cipta dilindungi. Dibuat dengan ❤️ untuk kemajuan pendidikan Islam Indonesia.</p>
            </div>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/amallan.js') }}"></script>
</body>
</html>