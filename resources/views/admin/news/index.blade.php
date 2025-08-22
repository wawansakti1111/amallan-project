<x-app-layout>
    <x-slot name="header">
        <div class="admin-header">
            <div class="header-left">
                <div class="header-icon-wrapper">
                    <svg class="header-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                    </svg>
                </div>
                <div class="header-text">
                    <h1 class="header-title">{{ __('Kelola Berita') }}</h1>
                    <p class="header-subtitle">Manajemen konten berita yang mudah dan efisien</p>
                </div>
            </div>
            <div class="header-stats">
                <div class="stat-item">
                    <span class="stat-number">{{ count($news) }}</span>
                    <span class="stat-label">Total Berita</span>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="admin-container">
        <div class="admin-wrapper">
            
            <!-- Quick Actions Panel -->
            <div class="quick-actions-panel">
                <div class="panel-content">
                    <div class="panel-header">
                        <h2 class="panel-title">Dashboard Berita</h2>
                        <p class="panel-description">Kelola semua konten berita dari satu tempat</p>
                    </div>
                    <div class="panel-actions">
                        <a href="{{ route('admin.news.create') }}" class="primary-action-btn">
                            <div class="btn-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                </svg>
                            </div>
                            <span class="btn-text">Buat Berita Baru</span>
                            <div class="btn-arrow">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Success Alert -->
            @if (session('success'))
            <div class="success-alert">
                <div class="alert-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div class="alert-content">
                    <h4 class="alert-title">Berhasil!</h4>
                    <p class="alert-message">{{ session('success') }}</p>
                </div>
                <button class="alert-close" onclick="this.parentElement.style.display='none'">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            @endif

            <!-- Main Content Card -->
            <div class="content-card">
                <div class="card-header">
                    <div class="header-content">
                        <div class="header-info">
                            <h3 class="card-title">Daftar Berita</h3>
                            <p class="card-subtitle">Kelola dan edit semua artikel berita</p>
                        </div>
                        <div class="header-meta">
                            <div class="meta-badge">
                                <svg class="meta-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                                <span class="meta-text">{{ count($news) }} artikel</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @if(count($news) > 0)
                    <div class="table-wrapper">
                        <table class="data-table">
                            <thead class="table-head">
                                <tr>
                                    <th class="th-title">
                                        <div class="th-content">
                                            <svg class="th-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                            </svg>
                                            <span>Judul Artikel</span>
                                        </div>
                                    </th>
                                    <th class="th-image">
                                        <div class="th-content">
                                            <svg class="th-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                            </svg>
                                            <span>Media</span>
                                        </div>
                                    </th>
                                    <th class="th-actions">
                                        <span>Tindakan</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="table-body">
                                @foreach($news as $item)
                                <tr class="table-row">
                                    <td class="td-title">
                                        <div class="title-wrapper">
                                            <div class="title-indicator"></div>
                                            <div class="title-content">
                                                <h4 class="article-title">{{ $item->title }}</h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="td-image">
                                        <div class="image-wrapper">
                                            @if ($item->image)
                                                <img src="{{ asset('storage/' . $item->image) }}" 
                                                     alt="Gambar artikel" 
                                                     class="article-image">
                                                <div class="image-overlay">
                                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                                    </svg>
                                                </div>
                                            @else
                                                <div class="image-placeholder">
                                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                                    </svg>
                                                    <span class="placeholder-text">No Image</span>
                                                </div>
                                            @endif
                                        </div>
                                    </td>
                                    <td class="td-actions">
                                        <div class="action-group">
                                            <a href="{{ route('admin.news.edit', $item) }}" class="action-btn edit-btn">
                                                <svg class="btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                                </svg>
                                                <span class="btn-label">Edit</span>
                                            </a>
                                            <form action="{{ route('admin.news.destroy', $item) }}" method="POST" class="delete-form">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" 
                                                        class="action-btn delete-btn"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">
                                                    <svg class="btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                    </svg>
                                                    <span class="btn-label">Hapus</span>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <!-- Empty State -->
                    <div class="empty-state">
                        <div class="empty-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                            </svg>
                        </div>
                        <div class="empty-content">
                            <h3 class="empty-title">Belum Ada Berita</h3>
                            <p class="empty-description">Mulai membuat konten berita pertama Anda untuk menarik pembaca</p>
                            <a href="{{ route('admin.news.create') }}" class="empty-action-btn">
                                <svg class="btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                </svg>
                                <span>Buat Berita Pertama</span>
                            </a>
                        </div>
                    </div>
                    @endif
                </div>
            </div>

            <!-- Footer Stats -->
            <div class="footer-stats">
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                        <div class="stat-info">
                            <span class="stat-value">{{ count($news) }}</span>
                            <span class="stat-name">Total Artikel</span>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <div class="stat-info">
                            <span class="stat-value">Aktif</span>
                            <span class="stat-name">Status Sistem</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* CSS Variables for Consistent Design System */
        :root {
            /* Teal Color Palette */
            --primary-teal: #0d9488;
            --primary-teal-light: #14b8a6;
            --primary-teal-dark: #0f766e;
            --secondary-teal: #5eead4;
            --accent-teal: #2dd4bf;
            --teal-50: #f0fdfa;
            --teal-100: #ccfbf1;
            --teal-200: #99f6e4;
            --teal-300: #5eead4;
            --teal-400: #2dd4bf;
            --teal-500: #14b8a6;
            --teal-600: #0d9488;
            --teal-700: #0f766e;
            --teal-800: #115e59;
            --teal-900: #134e4a;
            
            /* Neutral Colors */
            --gray-50: #f8fafc;
            --gray-100: #f1f5f9;
            --gray-200: #e2e8f0;
            --gray-300: #cbd5e1;
            --gray-400: #94a3b8;
            --gray-500: #64748b;
            --gray-600: #475569;
            --gray-700: #334155;
            --gray-800: #1e293b;
            --gray-900: #0f172a;
            
            /* Semantic Colors */
            --white: #ffffff;
            --success: #10b981;
            --danger: #ef4444;
            --warning: #f59e0b;
            
            /* Spacing System (8px base) */
            --space-1: 0.25rem;   /* 4px */
            --space-2: 0.5rem;    /* 8px */
            --space-3: 0.75rem;   /* 12px */
            --space-4: 1rem;      /* 16px */
            --space-5: 1.25rem;   /* 20px */
            --space-6: 1.5rem;    /* 24px */
            --space-8: 2rem;      /* 32px */
            --space-10: 2.5rem;   /* 40px */
            --space-12: 3rem;     /* 48px */
            --space-16: 4rem;     /* 64px */
            --space-20: 5rem;     /* 80px */
            --space-24: 6rem;     /* 96px */
            
            /* Typography Scale */
            --text-xs: 0.75rem;     /* 12px */
            --text-sm: 0.875rem;    /* 14px */
            --text-base: 1rem;      /* 16px */
            --text-lg: 1.125rem;    /* 18px */
            --text-xl: 1.25rem;     /* 20px */
            --text-2xl: 1.5rem;     /* 24px */
            --text-3xl: 1.875rem;   /* 30px */
            --text-4xl: 2.25rem;    /* 36px */
            
            /* Shadows */
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            
            /* Border Radius */
            --radius-sm: 0.5rem;    /* 8px */
            --radius: 0.75rem;      /* 12px */
            --radius-lg: 1rem;      /* 16px */
            --radius-xl: 1.5rem;    /* 24px */
            
            /* Transitions */
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            --transition-fast: all 0.15s ease-out;
        }

        /* Reset and Base */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.6;
            color: var(--gray-800);
            background-color: var(--gray-50);
        }

        /* Header Styles */
        .admin-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: var(--space-6) var(--space-8);
            background: linear-gradient(135deg, var(--primary-teal) 0%, var(--primary-teal-light) 100%);
            border-radius: var(--radius);
            margin-bottom: var(--space-8);
            color: var(--white);
            box-shadow: var(--shadow-lg);
        }

        .header-left {
            display: flex;
            align-items: center;
            gap: var(--space-4);
        }

        .header-icon-wrapper {
            width: var(--space-16);
            height: var(--space-16);
            background: rgba(255, 255, 255, 0.2);
            border-radius: var(--radius-sm);
            display: flex;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(10px);
            flex-shrink: 0;
        }

        .header-icon {
            width: var(--space-8);
            height: var(--space-8);
            color: var(--white);
        }

        .header-text {
            flex: 1;
        }

        .header-title {
            font-size: var(--text-3xl);
            font-weight: 700;
            margin-bottom: var(--space-1);
            letter-spacing: -0.025em;
            line-height: 1.2;
        }

        .header-subtitle {
            font-size: var(--text-base);
            opacity: 0.9;
            font-weight: 400;
            line-height: 1.4;
        }

        .header-stats {
            display: flex;
            gap: var(--space-6);
        }

        .stat-item {
            text-align: center;
            background: rgba(255, 255, 255, 0.15);
            padding: var(--space-4) var(--space-6);
            border-radius: var(--radius-sm);
            backdrop-filter: blur(10px);
            min-width: 120px;
        }

        .stat-number {
            display: block;
            font-size: var(--text-2xl);
            font-weight: 700;
            line-height: 1;
        }

        .stat-label {
            font-size: var(--text-sm);
            opacity: 0.9;
            margin-top: var(--space-1);
            display: block;
        }

        /* Main Container */
        .admin-container {
            padding: 0;
        }

        .admin-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 var(--space-6);
        }

        /* Quick Actions Panel */
        .quick-actions-panel {
            background: var(--white);
            border-radius: var(--radius);
            margin-bottom: var(--space-8);
            box-shadow: var(--shadow);
            border: 1px solid var(--gray-200);
            overflow: hidden;
        }

        .panel-content {
            padding: var(--space-8);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: var(--space-8);
        }

        .panel-header {
            flex: 1;
        }

        .panel-title {
            font-size: var(--text-2xl);
            font-weight: 700;
            color: var(--gray-900);
            margin-bottom: var(--space-2);
            line-height: 1.2;
        }

        .panel-description {
            color: var(--gray-600);
            font-size: var(--text-base);
            line-height: 1.5;
        }

        .panel-actions {
            flex-shrink: 0;
        }

        .primary-action-btn {
            display: inline-flex;
            align-items: center;
            gap: var(--space-4);
            padding: var(--space-4) var(--space-8);
            background: linear-gradient(135deg, var(--primary-teal) 0%, var(--primary-teal-light) 100%);
            color: var(--white);
            text-decoration: none;
            border-radius: var(--radius-sm);
            font-weight: 600;
            font-size: var(--text-base);
            box-shadow: var(--shadow-md);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            min-width: 200px;
            justify-content: center;
        }

        .primary-action-btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-xl);
        }

        .primary-action-btn:active {
            transform: translateY(0);
        }

        .btn-icon {
            width: var(--space-5);
            height: var(--space-5);
            flex-shrink: 0;
        }

        .btn-text {
            flex: 1;
            text-align: center;
        }

        .btn-arrow {
            width: var(--space-4);
            height: var(--space-4);
            transition: var(--transition);
            flex-shrink: 0;
        }

        .primary-action-btn:hover .btn-arrow {
            transform: translateX(var(--space-1));
        }

        /* Success Alert */
        .success-alert {
            display: flex;
            align-items: flex-start;
            gap: var(--space-4);
            padding: var(--space-5);
            background: var(--teal-50);
            border: 1px solid var(--teal-200);
            border-radius: var(--radius-sm);
            margin-bottom: var(--space-8);
            position: relative;
        }

        .alert-icon {
            width: var(--space-6);
            height: var(--space-6);
            color: var(--primary-teal);
            flex-shrink: 0;
            margin-top: var(--space-1);
        }

        .alert-content {
            flex: 1;
        }

        .alert-title {
            font-size: var(--text-base);
            font-weight: 600;
            color: var(--primary-teal-dark);
            margin-bottom: var(--space-1);
            line-height: 1.4;
        }

        .alert-message {
            color: var(--teal-700);
            font-size: var(--text-sm);
            line-height: 1.5;
        }

        .alert-close {
            width: var(--space-6);
            height: var(--space-6);
            color: var(--teal-400);
            background: none;
            border: none;
            cursor: pointer;
            border-radius: var(--space-1);
            transition: var(--transition-fast);
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .alert-close:hover {
            background: var(--teal-100);
            color: var(--teal-600);
        }

        /* Content Card */
        .content-card {
            background: var(--white);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            border: 1px solid var(--gray-200);
            overflow: hidden;
            margin-bottom: var(--space-8);
        }

        .card-header {
            background: linear-gradient(135deg, var(--gray-50) 0%, var(--teal-50) 100%);
            padding: var(--space-6) var(--space-8);
            border-bottom: 1px solid var(--gray-200);
        }

        .header-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: var(--space-6);
        }

        .header-info {
            flex: 1;
        }

        .card-title {
            font-size: var(--text-xl);
            font-weight: 700;
            color: var(--gray-900);
            margin-bottom: var(--space-1);
            line-height: 1.3;
        }

        .card-subtitle {
            color: var(--gray-600);
            font-size: var(--text-sm);
            line-height: 1.4;
        }

        .header-meta {
            display: flex;
            gap: var(--space-4);
            flex-shrink: 0;
        }

        .meta-badge {
            display: flex;
            align-items: center;
            gap: var(--space-2);
            padding: var(--space-2) var(--space-4);
            background: var(--white);
            border: 1px solid var(--teal-200);
            border-radius: var(--radius-sm);
            color: var(--primary-teal);
            font-size: var(--text-sm);
            font-weight: 500;
            min-width: 120px;
            justify-content: center;
        }

        .meta-icon {
            width: var(--space-4);
            height: var(--space-4);
            flex-shrink: 0;
        }

        .meta-text {
            line-height: 1;
        }

        .card-body {
            padding: 0;
        }

        /* Table Styles */
        .table-wrapper {
            overflow-x: auto;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
        }

        .table-head {
            background: var(--gray-50);
        }

        .table-head th {
            padding: var(--space-5) var(--space-8);
            text-align: left;
            font-size: var(--text-xs);
            font-weight: 700;
            color: var(--gray-700);
            text-transform: uppercase;
            letter-spacing: 0.05em;
            border-bottom: 1px solid var(--gray-200);
            white-space: nowrap;
        }

        .th-actions {
            text-align: right;
            width: 200px;
        }

        .th-image {
            width: 120px;
            text-align: center;
        }

        .th-content {
            display: flex;
            align-items: center;
            gap: var(--space-2);
        }

        .th-icon {
            width: var(--space-4);
            height: var(--space-4);
            color: var(--gray-500);
            flex-shrink: 0;
        }

        .table-body {
            background: var(--white);
        }

        .table-row {
            border-bottom: 1px solid var(--gray-100);
            transition: var(--transition-fast);
        }

        .table-row:hover {
            background: var(--teal-50);
        }

        .table-row td {
            padding: var(--space-6) var(--space-8);
            vertical-align: middle;
        }

        /* Title Cell */
        .title-wrapper {
            display: flex;
            align-items: center;
            gap: var(--space-4);
        }

        .title-indicator {
            width: var(--space-3);
            height: var(--space-3);
            background: linear-gradient(135deg, var(--primary-teal) 0%, var(--accent-teal) 100%);
            border-radius: 50%;
            flex-shrink: 0;
        }

        .title-content {
            flex: 1;
            min-width: 0;
        }

        .article-title {
            font-size: var(--text-base);
            font-weight: 600;
            color: var(--gray-900);
            line-height: 1.4;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            margin: 0;
        }

        /* Image Cell */
        .td-image {
            text-align: center;
            width: 120px;
        }

        .image-wrapper {
            position: relative;
            display: inline-block;
        }

        .article-image {
            width: var(--space-16);
            height: var(--space-16);
            border-radius: var(--radius-sm);
            object-fit: cover;
            border: 2px solid var(--teal-200);
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
        }

        .article-image:hover {
            transform: scale(1.05);
            box-shadow: var(--shadow-md);
        }

        .image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(13, 148, 136, 0.8);
            border-radius: var(--radius-sm);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: var(--transition);
        }

        .image-overlay svg {
            width: var(--space-6);
            height: var(--space-6);
            color: var(--white);
        }

        .image-wrapper:hover .image-overlay {
            opacity: 1;
        }

        .image-placeholder {
            width: var(--space-16);
            height: var(--space-16);
            background: var(--gray-100);
            border: 2px dashed var(--gray-300);
            border-radius: var(--radius-sm);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: var(--space-1);
        }

        .image-placeholder svg {
            width: var(--space-6);
            height: var(--space-6);
            color: var(--gray-400);
        }

        .placeholder-text {
            font-size: var(--text-xs);
            color: var(--gray-500);
            font-weight: 500;
            line-height: 1;
        }

        /* Action Buttons */
        .td-actions {
            width: 200px;
        }

        .action-group {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: var(--space-3);
        }

        .action-btn {
            display: inline-flex;
            align-items: center;
            gap: var(--space-2);
            padding: var(--space-2) var(--space-4);
            font-size: var(--text-sm);
            font-weight: 500;
            border-radius: var(--radius-sm);
            text-decoration: none;
            border: none;
            cursor: pointer;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            min-width: 80px;
            justify-content: center;
        }

        .edit-btn {
            background: var(--teal-100);
            color: var(--primary-teal-dark);
            border: 1px solid var(--teal-200);
        }

        .edit-btn:hover {
            background: var(--teal-200);
            color: var(--primary-teal-dark);
            transform: translateY(-1px);
            box-shadow: var(--shadow-sm);
        }

        .delete-btn {
            background: #fef2f2;
            color: #dc2626;
            border: 1px solid #fecaca;
        }

        .delete-btn:hover {
            background: #fee2e2;
            color: #b91c1c;
            transform: translateY(-1px);
            box-shadow: var(--shadow-sm);
        }

        .btn-icon {
            width: var(--space-4);
            height: var(--space-4);
            flex-shrink: 0;
        }

        .btn-label {
            font-weight: 500;
            line-height: 1;
        }

        .delete-form {
            display: inline;
        }

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: var(--space-16) var(--space-8);
        }

        .empty-icon {
            width: var(--space-16);
            height: var(--space-16);
            color: var(--gray-300);
            margin: 0 auto var(--space-6);
        }

        .empty-content {
            max-width: 400px;
            margin: 0 auto;
        }

        .empty-title {
            font-size: var(--text-xl);
            font-weight: 700;
            color: var(--gray-900);
            margin-bottom: var(--space-2);
            line-height: 1.3;
        }

        .empty-description {
            color: var(--gray-600);
            margin-bottom: var(--space-8);
            line-height: 1.6;
            font-size: var(--text-base);
        }

        .empty-action-btn {
            display: inline-flex;
            align-items: center;
            gap: var(--space-2);
            padding: var(--space-4) var(--space-6);
            background: linear-gradient(135deg, var(--primary-teal) 0%, var(--primary-teal-light) 100%);
            color: var(--white);
            text-decoration: none;
            border-radius: var(--radius-sm);
            font-weight: 600;
            box-shadow: var(--shadow-md);
            transition: var(--transition);
            font-size: var(--text-base);
        }

        .empty-action-btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        /* Footer Stats */
        .footer-stats {
            margin-top: var(--space-8);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: var(--space-6);
        }

        .stat-card {
            background: var(--white);
            border: 1px solid var(--gray-200);
            border-radius: var(--radius-sm);
            padding: var(--space-6);
            display: flex;
            align-items: center;
            gap: var(--space-4);
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
        }

        .stat-card:hover {
            box-shadow: var(--shadow-md);
            transform: translateY(-1px);
        }

        .stat-icon {
            width: var(--space-10);
            height: var(--space-10);
            background: var(--teal-100);
            border-radius: var(--radius-sm);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-teal);
            flex-shrink: 0;
        }

        .stat-icon svg {
            width: var(--space-5);
            height: var(--space-5);
        }

        .stat-info {
            flex: 1;
        }

        .stat-value {
            display: block;
            font-size: var(--text-2xl);
            font-weight: 700;
            color: var(--gray-900);
            line-height: 1;
        }

        .stat-name {
            font-size: var(--text-sm);
            color: var(--gray-600);
            margin-top: var(--space-1);
            display: block;
            line-height: 1.4;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .admin-wrapper {
                padding: 0 var(--space-4);
            }
            
            .header-stats {
                display: none;
            }

            .panel-content {
                flex-direction: column;
                gap: var(--space-6);
                text-align: center;
            }

            .primary-action-btn {
                min-width: 250px;
            }
        }

        @media (max-width: 768px) {
            .admin-header {
                flex-direction: column;
                gap: var(--space-4);
                text-align: center;
                padding: var(--space-6);
            }

            .header-left {
                flex-direction: column;
                text-align: center;
                gap: var(--space-3);
            }

            .panel-content {
                padding: var(--space-6);
            }

            .card-header {
                padding: var(--space-4) var(--space-6);
            }

            .header-content {
                flex-direction: column;
                gap: var(--space-4);
                text-align: center;
            }

            .table-row td {
                padding: var(--space-4) var(--space-6);
            }

            .action-group {
                flex-direction: column;
                gap: var(--space-2);
            }

            .action-btn {
                min-width: 100px;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 640px) {
            .admin-wrapper {
                padding: 0 var(--space-3);
            }

            .table-wrapper {
                font-size: var(--text-sm);
            }

            .th-content span,
            .btn-label {
                display: none;
            }

            .action-btn {
                padding: var(--space-2);
                min-width: 40px;
            }

            .primary-action-btn {
                padding: var(--space-3) var(--space-6);
                font-size: var(--text-sm);
                min-width: 200px;
            }

            .btn-text {
                font-size: var(--text-sm);
            }
        }
    </style>
</x-app-layout>

