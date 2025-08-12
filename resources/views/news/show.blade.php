<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $news->title }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            /* Minimalist Teal Palette */
            --teal-primary: #20B2AA;
            --teal-dark: #1A9B94;
            --teal-light: #E0F7F6;
            --teal-accent: #4DCCC6;
            
            /* Clean Neutral Colors */
            --text-primary: #2D3748;
            --text-secondary: #4A5568;
            --text-light: #718096;
            --border-light: #E2E8F0;
            --bg-light: #F7FAFC;
            --white: #FFFFFF;
            
            /* Typography */
            --font-heading: 'Inter', sans-serif;
            --font-body: 'Source Serif Pro', serif;
            
            /* Minimal Shadows */
            --shadow-subtle: 0 1px 3px rgba(0, 0, 0, 0.1);
            --shadow-soft: 0 4px 6px rgba(0, 0, 0, 0.05);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: var(--font-body);
            background: var(--bg-light);
            color: var(--text-secondary);
            line-height: 1.7;
            min-height: 100vh;
            font-size: 16px;
        }

        /* Clean Header */
        header {
            background: var(--white);
            border-bottom: 1px solid var(--border-light);
            padding: 1.5rem 2rem;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .header-container {
            max-width: 1000px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-logo-new {
            font-family: var(--font-heading);
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--teal-primary);
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .header-logo-new:hover {
            color: var(--teal-dark);
        }

        .main-nav ul {
            list-style: none;
            display: flex;
            gap: 1.5rem;
        }

        .main-nav a {
            text-decoration: none;
            color: var(--text-secondary);
            font-weight: 500;
            font-size: 0.9rem;
            padding: 0.5rem 1rem;
            border-radius: 6px;
            transition: all 0.2s ease;
            font-family: var(--font-heading);
        }

        .main-nav a:hover {
            color: var(--teal-primary);
            background: var(--teal-light);
        }

        /* Simple Progress Bar */
        .reading-progress {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 2px;
            background: var(--teal-primary);
            z-index: 9999;
            transition: width 0.3s ease;
        }

        /* Clean Back to Top */
        .back-to-top {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            width: 48px;
            height: 48px;
            background: var(--teal-primary);
            color: var(--white);
            border: none;
            border-radius: 50%;
            cursor: pointer;
            font-size: 1rem;
            box-shadow: var(--shadow-soft);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .back-to-top.visible {
            opacity: 1;
            visibility: visible;
        }

        .back-to-top:hover {
            background: var(--teal-dark);
            transform: translateY(-2px);
        }

        /* Main Content */
        .section-padding {
            padding: 3rem 2rem;
            min-height: calc(100vh - 120px);
        }

        .news-container {
            max-width: 800px;
            margin: 0 auto;
            background: var(--white);
            border-radius: 8px;
            overflow: hidden;
            box-shadow: var(--shadow-soft);
            border: 1px solid var(--border-light);
        }

        .news-image {
            width: 100%;
            height: 300px;
            object-fit: cover;
            background: var(--teal-light);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--teal-primary);
            font-size: 2rem;
        }

        .news-content {
            padding: 3rem;
        }

        /* Simple Breadcrumb */
        .breadcrumb {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 2rem;
            font-size: 0.85rem;
            color: var(--text-light);
            font-family: var(--font-heading);
        }

        .breadcrumb a {
            color: var(--teal-primary);
            text-decoration: none;
            font-weight: 500;
        }

        .breadcrumb a:hover {
            text-decoration: underline;
        }

        .breadcrumb i {
            color: var(--text-light);
            font-size: 0.7rem;
        }

        /* Clean Title */
        .news-title {
            font-family: var(--font-heading);
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 2rem;
            line-height: 1.3;
        }

        /* Simplified Meta */
        .news-meta {
            display: flex;
            align-items: center;
            gap: 2rem;
            margin-bottom: 3rem;
            padding: 1rem 0;
            border-bottom: 1px solid var(--border-light);
            font-family: var(--font-heading);
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--text-light);
            font-size: 0.85rem;
            font-weight: 500;
        }

        .meta-item i {
            color: var(--teal-primary);
            font-size: 0.9rem;
            width: 14px;
            text-align: center;
        }

        /* Clean Content */
        .news-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-secondary);
            margin-bottom: 3rem;
        }

        .news-text p {
            margin-bottom: 1.5rem;
        }

        .news-text p:first-of-type:first-letter {
            font-size: 3rem;
            font-weight: 600;
            color: var(--teal-primary);
            float: left;
            line-height: 1;
            margin: 0.1rem 0.5rem 0 0;
            font-family: var(--font-heading);
        }

        /* Simple Action Buttons */
        .action-buttons {
            display: flex;
            gap: 1rem;
            margin-bottom: 2rem;
            flex-wrap: wrap;
        }

        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            background: var(--teal-primary);
            color: var(--white);
            text-decoration: none;
            border-radius: 6px;
            font-weight: 500;
            font-size: 0.9rem;
            transition: all 0.2s ease;
            font-family: var(--font-heading);
        }

        .back-button:hover {
            background: var(--teal-dark);
            transform: translateY(-1px);
        }

        .share-button {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            background: var(--white);
            color: var(--teal-primary);
            text-decoration: none;
            border: 1px solid var(--teal-primary);
            border-radius: 6px;
            font-weight: 500;
            font-size: 0.9rem;
            transition: all 0.2s ease;
            font-family: var(--font-heading);
        }

        .share-button:hover {
            background: var(--teal-primary);
            color: var(--white);
        }

        /* Clean Footer */
        footer {
            background: var(--text-primary);
            color: var(--white);
            padding: 2rem;
            margin-top: 3rem;
            text-align: center;
        }

        .footer-content {
            max-width: 1000px;
            margin: 0 auto;
        }

        .footer-logo {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            font-family: var(--font-heading);
        }

        .footer-text {
            font-size: 0.85rem;
            opacity: 0.8;
            font-family: var(--font-heading);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            header {
                padding: 1rem;
            }

            .header-container {
                flex-direction: column;
                gap: 1rem;
            }

            .main-nav ul {
                gap: 1rem;
            }

            .section-padding {
                padding: 2rem 1rem;
            }

            .news-content {
                padding: 2rem 1.5rem;
            }

            .news-title {
                font-size: 1.8rem;
            }

            .news-meta {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.5rem;
            }

            .news-image {
                height: 200px;
            }

            .action-buttons {
                flex-direction: column;
            }
        }

        @media (max-width: 480px) {
            .news-title {
                font-size: 1.5rem;
            }

            .news-content {
                padding: 1.5rem 1rem;
            }

            .news-text {
                font-size: 1rem;
            }
        }

        /* Minimal Animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .news-container {
            animation: fadeIn 0.5s ease-out;
        }

        /* Clean Scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: var(--bg-light);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--teal-primary);
            border-radius: 3px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--teal-dark);
        }

        /* Print Styles */
        @media print {
            header, footer, .action-buttons, .back-to-top {
                display: none;
            }
            
            .news-container {
                box-shadow: none;
                border: 1px solid var(--border-light);
            }
        }
    </style>
</head>
<body>
    <!-- Reading Progress Bar -->
    <div class="reading-progress" id="reading-progress"></div>
    
    <!-- Back to Top Button -->
    <button class="back-to-top" id="back-to-top" onclick="scrollToTop()">
        <i class="fas fa-arrow-up"></i>
    </button>

    <header>
        <div class="header-container">
            <a href="{{ url('/') }}" class="header-logo-new">
                AMALLAN NEWS PORTAL
            </a>
            <nav class="main-nav">
                <ul>
                    <li><a href="{{ url('/') }}"><i class="fas fa-home"></i> Beranda</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="section-padding">
        <div class="news-container">
            @if ($news->image)
                <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" class="news-image">
            @else
                <div class="news-image">
                    <i class="fas fa-newspaper"></i>
                </div>
            @endif
            <div class="news-content">
                <div class="breadcrumb">
                    <a href="{{ url('/') }}">Beranda</a>
                    <i class="fas fa-chevron-right"></i>
                    <span>Berita</span>
                    <i class="fas fa-chevron-right"></i>
                    <span>{{ Str::limit($news->title, 30) }}</span>
                </div>
                
                <h1 class="news-title">{{ $news->title }}</h1>
                
                <div class="news-meta">
                    <div class="meta-item">
                        <i class="far fa-calendar-alt"></i>
                        <span>{{ $news->created_at->format('d F Y') }}</span>
                    </div>
                    <div class="meta-item">
                        <i class="far fa-clock"></i>
                        <span>{{ $news->created_at->format('H:i') }} WIB</span>
                    </div>
                    <div class="meta-item">
                        <i class="fas fa-eye"></i>
                        <span>Dibaca</span>
                    </div>
                </div>
                
                <div class="news-text">
                    {!! nl2br(e($news->content)) !!}
                </div>
                
                <div class="action-buttons">
                    <a href="{{ url('/') }}" class="back-button">
                        <i class="fas fa-arrow-left"></i>
                        Kembali ke Beranda
                    </a>
                    <a href="#" class="share-button" onclick="shareArticle(); return false;">
                        <i class="fas fa-share-alt"></i>
                        Bagikan Berita
                    </a>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-content">
            <div class="footer-logo">Amallan</div>
            <div class="footer-text">
                &copy; 2024 Amallan. Portal berita terpercaya untuk informasi terkini.
            </div>
        </div>
    </footer>

    <script>
        // Reading Progress Bar
        window.addEventListener('scroll', function() {
            const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (winScroll / height) * 100;
            document.getElementById('reading-progress').style.width = scrolled + '%';
        });

        // Back to Top Button
        window.addEventListener('scroll', function() {
            const backToTopButton = document.getElementById('back-to-top');
            if (window.pageYOffset > 300) {
                backToTopButton.classList.add('visible');
            } else {
                backToTopButton.classList.remove('visible');
            }
        });

        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

        // Share function
        function shareArticle() {
            if (navigator.share) {
                navigator.share({
                    title: document.title,
                    text: 'Baca berita terkini di Amallan',
                    url: window.location.href
                }).catch(console.error);
            } else {
                navigator.clipboard.writeText(window.location.href).then(function() {
                    alert('Link berita telah disalin ke clipboard!');
                }).catch(function() {
                    const textArea = document.createElement('textarea');
                    textArea.value = window.location.href;
                    document.body.appendChild(textArea);
                    textArea.select();
                    document.execCommand('copy');
                    document.body.removeChild(textArea);
                    alert('Link berita telah disalin ke clipboard!');
                });
            }
        }
    </script>
</body>
</html>

