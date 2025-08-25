<x-admin-layout>
    <x-slot name="header">
        <style>
            /* ===== TEAL ADMIN THEME - MODERN DESIGN ===== */
            :root {
                /* Teal Color Palette */
                --primary-teal: #14b8a6;
                --primary-teal-dark: #0f766e;
                --primary-teal-light: #5eead4;
                --primary-teal-lighter: #a7f3d0;
                --primary-teal-lightest: #ccfbf1;
                /* Supporting Colors */
                --white: #ffffff;
                --gray-50: #f9fafb;
                --gray-100: #f3f4f6;
                --gray-200: #e5e7eb;
                --gray-300: #d1d5db;
                --gray-400: #9ca3af;
                --gray-500: #6b7280;
                --gray-600: #4b5563;
                --gray-700: #374151;
                --gray-800: #1f2937;
                --gray-900: #111827;
                /* Status Colors */
                --success: #10b981;
                --success-light: #d1fae5;
                --warning: #f59e0b;
                --warning-light: #fef3c7;
                --error: #ef4444;
                --error-light: #fee2e2;
                /* Shadows */
                --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
                --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
                --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
                --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
                --shadow-teal: 0 10px 15px -3px rgba(20, 184, 166, 0.1), 0 4px 6px -2px rgba(20, 184, 166, 0.05);
                /* Border Radius */
                --radius-sm: 0.375rem;
                --radius-md: 0.5rem;
                --radius-lg: 0.75rem;
                --radius-xl: 1rem;
                /* Transitions */
                --transition-fast: 0.15s ease-in-out;
                --transition-normal: 0.3s ease-in-out;
                --transition-slow: 0.5s ease-in-out;
            }
            /* ===== GLOBAL STYLES ===== */
            * {
                box-sizing: border-box;
            }
            body {
                font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
                background: linear-gradient(135deg, var(--gray-50) 0%, var(--primary-teal-lightest) 100%);
                min-height: 100vh;
                margin: 0;
                padding: 0;
            }
            /* ===== PAGE HEADER ===== */
            .page-header {
                background: linear-gradient(135deg, var(--primary-teal) 0%, var(--primary-teal-dark) 100%);
                color: var(--white);
                padding: 2rem 0;
                margin-bottom: 2rem;
                position: relative;
                overflow: hidden;
            }
            .page-header::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="75" cy="75" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="50" cy="10" r="0.5" fill="rgba(255,255,255,0.05)"/><circle cx="20" cy="80" r="0.5" fill="rgba(255,255,255,0.05)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
                opacity: 0.3;
            }
            .header-content {
                display: flex;
                align-items: center;
                gap: 1rem;
                max-width: 1200px;
                margin: 0 auto;
                padding: 0 1.5rem;
                position: relative;
                z-index: 1;
            }
            .header-icon {
                background: rgba(255, 255, 255, 0.2);
                padding: 0.75rem;
                border-radius: var(--radius-lg);
                backdrop-filter: blur(10px);
                border: 1px solid rgba(255, 255, 255, 0.1);
            }
            .header-text h2 {
                margin: 0;
                font-size: 1.875rem;
                font-weight: 700;
                text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }
            .header-text p {
                margin: 0.25rem 0 0 0;
                opacity: 0.9;
                font-size: 1rem;
            }
            /* ===== MAIN CONTENT ===== */
            .main-content {
                padding: 0 1.5rem 2rem;
            }
            .container {
                max-width: 1200px;
                margin: 0 auto;
            }
            /* ===== ALERTS ===== */
            .alert {
                border-radius: var(--radius-lg);
                padding: 1rem 1.5rem;
                margin-bottom: 1.5rem;
                border: 1px solid transparent;
                animation: slideInDown 0.5s ease-out;
            }
            .alert-success {
                background: linear-gradient(135deg, var(--success-light) 0%, rgba(16, 185, 129, 0.1) 100%);
                border-color: var(--success);
                color: var(--gray-800);
            }
            .alert-content {
                display: flex;
                align-items: center;
                gap: 0.75rem;
            }
            .alert-icon {
                width: 1.25rem;
                height: 1.25rem;
                color: var(--success);
                flex-shrink: 0;
            }
            /* ===== CARDS ===== */
            .card {
                background: var(--white);
                border-radius: var(--radius-xl);
                box-shadow: var(--shadow-lg);
                margin-bottom: 2rem;
                overflow: hidden;
                border: 1px solid var(--gray-200);
                transition: all var(--transition-normal);
            }
            .card:hover {
                box-shadow: var(--shadow-xl);
                transform: translateY(-2px);
            }
            .form-card {
                border-top: 4px solid var(--primary-teal);
            }
            .table-card {
                border-top: 4px solid var(--primary-teal-dark);
            }
            .card-header {
                background: linear-gradient(135deg, var(--gray-50) 0%, var(--primary-teal-lightest) 100%);
                padding: 1.5rem 2rem;
                border-bottom: 1px solid var(--gray-200);
            }
            .card-header .header-content {
                display: flex;
                align-items: center;
                gap: 1rem;
                padding: 0;
                margin: 0;
            }
            .card-header .header-icon {
                background: var(--primary-teal);
                color: var(--white);
                padding: 0.5rem;
                border-radius: var(--radius-md);
                box-shadow: var(--shadow-teal);
            }
            .card-header h3 {
                margin: 0;
                font-size: 1.25rem;
                font-weight: 600;
                color: var(--gray-800);
            }
            .card-header .header-text p {
                margin: 0.25rem 0 0 0;
                font-size: 0.875rem;
                color: var(--gray-600);
            }
            .card-body {
                padding: 2rem;
            }
            /* ===== FORMS ===== */
            .modern-form {
                display: flex;
                flex-direction: column;
                gap: 1.5rem;
            }
            .form-group {
                display: flex;
                flex-direction: column;
                gap: 0.5rem;
            }
            .form-label {
                display: flex;
                align-items: center;
                gap: 0.5rem;
                font-weight: 600;
                color: var(--gray-700);
                font-size: 0.875rem;
                text-transform: uppercase;
                letter-spacing: 0.05em;
            }
            .form-label svg {
                color: var(--primary-teal);
            }
            /* Input Styles */
            .input-wrapper {
                position: relative;
            }
            .form-input {
                width: 100%;
                padding: 0.875rem 1rem;
                border: 2px solid var(--gray-200);
                border-radius: var(--radius-lg);
                font-size: 1rem;
                transition: all var(--transition-normal);
                background: var(--white);
                color: var(--gray-800);
            }
            .form-input:focus {
                outline: none;
                border-color: var(--primary-teal);
                box-shadow: 0 0 0 3px rgba(20, 184, 166, 0.1);
            }
            .input-focus-border {
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                height: 2px;
                background: linear-gradient(90deg, var(--primary-teal) 0%, var(--primary-teal-light) 100%);
                transform: scaleX(0);
                transition: transform var(--transition-normal);
                border-radius: 0 0 var(--radius-lg) var(--radius-lg);
            }
            .form-input:focus + .input-focus-border {
                transform: scaleX(1);
            }
            /* Textarea Styles */
            .textarea-wrapper {
                position: relative;
            }
            .form-textarea {
                width: 100%;
                padding: 0.875rem 1rem;
                border: 2px solid var(--gray-200);
                border-radius: var(--radius-lg);
                font-size: 1rem;
                transition: all var(--transition-normal);
                background: var(--white);
                color: var(--gray-800);
                resize: vertical;
                min-height: 120px;
                font-family: inherit;
            }
            .form-textarea:focus {
                outline: none;
                border-color: var(--primary-teal);
                box-shadow: 0 0 0 3px rgba(20, 184, 166, 0.1);
            }
            .textarea-focus-border {
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                height: 2px;
                background: linear-gradient(90deg, var(--primary-teal) 0%, var(--primary-teal-light) 100%);
                transform: scaleX(0);
                transition: transform var(--transition-normal);
                border-radius: 0 0 var(--radius-lg) var(--radius-lg);
            }
            .form-textarea:focus + .textarea-focus-border {
                transform: scaleX(1);
            }
            /* File Input Styles */
            .file-input-wrapper {
                position: relative;
            }
            .form-file {
                position: absolute;
                opacity: 0;
                width: 100%;
                height: 100%;
                cursor: pointer;
            }
            .file-input-label {
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 0.75rem;
                padding: 2rem;
                border: 2px dashed var(--gray-300);
                border-radius: var(--radius-lg);
                background: var(--gray-50);
                color: var(--gray-600);
                cursor: pointer;
                transition: all var(--transition-normal);
                font-weight: 500;
            }
            .file-input-label:hover {
                border-color: var(--primary-teal);
                background: var(--primary-teal-lightest);
                color: var(--primary-teal-dark);
            }
            .file-input-label svg {
                color: var(--primary-teal);
            }
            /* Current Image Display */
            .current-image {
                margin-bottom: 1rem;
            }
            .current-image-label {
                color: var(--gray-600);
                font-size: 0.875rem;
                margin-bottom: 0.5rem;
                font-weight: 500;
            }
            .image-preview-container {
                position: relative;
                display: inline-block;
                border-radius: var(--radius-lg);
                overflow: hidden;
                box-shadow: var(--shadow-md);
            }
            .image-preview {
                width: 120px;
                height: 80px;
                object-fit: cover;
                display: block;
                transition: transform var(--transition-normal);
            }
            .image-overlay {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: rgba(20, 184, 166, 0.8);
                display: flex;
                align-items: center;
                justify-content: center;
                opacity: 0;
                transition: opacity var(--transition-normal);
                color: var(--white);
            }
            .image-preview-container:hover .image-overlay {
                opacity: 1;
            }
            .image-preview-container:hover .image-preview {
                transform: scale(1.05);
            }
            /* ===== BUTTONS ===== */
            .form-actions {
                display: flex;
                gap: 1rem;
                margin-top: 1rem;
                flex-wrap: wrap;
            }
            .btn {
                display: inline-flex;
                align-items: center;
                gap: 0.5rem;
                padding: 0.75rem 1.5rem;
                border-radius: var(--radius-lg);
                font-weight: 600;
                font-size: 0.875rem;
                text-decoration: none;
                border: none;
                cursor: pointer;
                transition: all var(--transition-normal);
                position: relative;
                overflow: hidden;
            }
            .btn::before {
                content: '';
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
                transition: left var(--transition-slow);
            }
            .btn:hover::before {
                left: 100%;
            }
            .btn-primary {
                background: linear-gradient(135deg, var(--primary-teal) 0%, var(--primary-teal-dark) 100%);
                color: var(--white);
                box-shadow: var(--shadow-teal);
            }
            .btn-primary:hover {
                transform: translateY(-2px);
                box-shadow: 0 15px 25px -5px rgba(20, 184, 166, 0.2), 0 10px 10px -5px rgba(20, 184, 166, 0.1);
            }
            .btn-secondary {
                background: var(--white);
                color: var(--gray-700);
                border: 2px solid var(--gray-300);
            }
            .btn-secondary:hover {
                background: var(--gray-50);
                border-color: var(--gray-400);
                transform: translateY(-1px);
            }
            .btn-edit {
                background: linear-gradient(135deg, var(--primary-teal-light) 0%, var(--primary-teal) 100%);
                color: var(--white);
                padding: 0.5rem 1rem;
                font-size: 0.8rem;
            }
            .btn-edit:hover {
                transform: translateY(-1px);
                box-shadow: var(--shadow-md);
            }
            .btn-delete {
                background: linear-gradient(135deg, var(--error) 0%, #dc2626 100%);
                color: var(--white);
                padding: 0.5rem 1rem;
                font-size: 0.8rem;
            }
            .btn-delete:hover {
                transform: translateY(-1px);
                box-shadow: 0 10px 15px -3px rgba(239, 68, 68, 0.2), 0 4px 6px -2px rgba(239, 68, 68, 0.1);
            }
            .btn-icon {
                width: 1rem;
                height: 1rem;
                flex-shrink: 0;
            }
            /* ===== TABLE ===== */
            .table-container {
                overflow-x: auto;
                border-radius: var(--radius-lg);
                border: 1px solid var(--gray-200);
            }
            .table {
                width: 100%;
                border-collapse: collapse;
                background: var(--white);
            }
            .table thead {
                background: linear-gradient(135deg, var(--primary-teal) 0%, var(--primary-teal-dark) 100%);
                color: var(--white);
            }
            .table th {
                padding: 1rem 1.5rem;
                text-align: left;
                font-weight: 600;
                font-size: 0.875rem;
                text-transform: uppercase;
                letter-spacing: 0.05em;
            }
            .table th.text-right {
                text-align: right;
            }
            .th-content {
                display: flex;
                align-items: center;
                gap: 0.5rem;
            }
            .table th.text-right .th-content {
                justify-content: flex-end;
            }
            .table-row {
                border-bottom: 1px solid var(--gray-200);
                transition: all var(--transition-normal);
            }
            .table-row:hover {
                background: linear-gradient(135deg, var(--primary-teal-lightest) 0%, var(--gray-50) 100%);
                transform: scale(1.01);
                box-shadow: var(--shadow-sm);
            }
            .table td {
                padding: 1rem 1.5rem;
                vertical-align: middle;
            }
            /* Table Cell Styles */
            .title-cell {
                max-width: 300px;
            }
            .title-content h4 {
                margin: 0 0 0.25rem 0;
                font-size: 1rem;
                font-weight: 600;
                color: var(--gray-800);
                line-height: 1.4;
            }
            .title-content p {
                margin: 0;
                font-size: 0.875rem;
                color: var(--gray-600);
                line-height: 1.4;
            }
            .image-cell {
                width: 120px;
            }
            .image-thumbnail-container {
                position: relative;
                display: inline-block;
                border-radius: var(--radius-md);
                overflow: hidden;
                box-shadow: var(--shadow-sm);
            }
            .image-thumbnail {
                width: 80px;
                height: 60px;
                object-fit: cover;
                display: block;
                transition: transform var(--transition-normal);
            }
            .image-thumbnail-container:hover .image-thumbnail {
                transform: scale(1.1);
            }
            .image-thumbnail-container .image-overlay {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: rgba(20, 184, 166, 0.8);
                display: flex;
                align-items: center;
                justify-content: center;
                opacity: 0;
                transition: opacity var(--transition-normal);
                color: var(--white);
            }
            .image-thumbnail-container:hover .image-overlay {
                opacity: 1;
            }
            .image-placeholder {
                width: 80px;
                height: 60px;
                background: var(--gray-100);
                border: 2px dashed var(--gray-300);
                border-radius: var(--radius-md);
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                color: var(--gray-400);
                font-size: 0.75rem;
                text-align: center;
                gap: 0.25rem;
            }
            .action-cell {
                width: 160px;
                text-align: right;
            }
            .action-buttons {
                display: flex;
                gap: 0.5rem;
                justify-content: flex-end;
                align-items: center;
            }
            .inline-form {
                display: inline;
            }
            /* ===== ANIMATIONS ===== */
            @keyframes slideInDown {
                from {
                    opacity: 0;
                    transform: translateY(-20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
            @keyframes fadeIn {
                from {
                    opacity: 0;
                }
                to {
                    opacity: 1;
                }
            }
            @keyframes pulse {
                0%, 100% {
                    opacity: 1;
                }
                50% {
                    opacity: 0.5;
                }
            }
            /* ===== RESPONSIVE DESIGN ===== */
            @media (max-width: 768px) {
                .main-content {
                    padding: 0 1rem 2rem;
                }
                .card-body {
                    padding: 1.5rem;
                }
                .header-content {
                    padding: 0 1rem;
                }
                .header-text h2 {
                    font-size: 1.5rem;
                }
                .form-actions {
                    flex-direction: column;
                }
                .btn {
                    justify-content: center;
                }
                .action-buttons {
                    flex-direction: column;
                    gap: 0.25rem;
                }
                .table th,
                .table td {
                    padding: 0.75rem 1rem;
                }
                .title-cell {
                    max-width: 200px;
                }
                .action-cell {
                    width: 120px;
                }
            }
            @media (max-width: 480px) {
                .header-content {
                    flex-direction: column;
                    text-align: center;
                    gap: 0.75rem;
                }
                .card-header .header-content {
                    flex-direction: row;
                    text-align: left;
                }
                .table-container {
                    font-size: 0.875rem;
                }
                .image-thumbnail {
                    width: 60px;
                    height: 45px;
                }
                .image-placeholder {
                    width: 60px;
                    height: 45px;
                    font-size: 0.625rem;
                }
            }
            /* ===== ACCESSIBILITY ===== */
            @media (prefers-reduced-motion: reduce) {
                * {
                    animation-duration: 0.01ms !important;
                    animation-iteration-count: 1 !important;
                    transition-duration: 0.01ms !important;
                }
            }
            /* Focus styles for keyboard navigation */
            .btn:focus,
            .form-input:focus,
            .form-textarea:focus,
            .form-file:focus + .file-input-label {
                outline: 2px solid var(--primary-teal);
                outline-offset: 2px;
            }
            /* High contrast mode support */
            @media (prefers-contrast: high) {
                .card {
                    border: 2px solid var(--gray-800);
                }
                .btn-primary {
                    border: 2px solid var(--primary-teal-dark);
                }
                .table-row:hover {
                    background: var(--primary-teal-lightest);
                }
            }
        </style>
        <div class="page-header">
            <div class="header-content">
                <div class="header-icon">
                    <svg width="32" height="32" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                    </svg>
                </div>
                <div class="header-text">
                    <h2>{{ __('Kelola Berita') }}</h2>
                    <p>Kelola dan publikasikan berita terbaru dengan mudah</p>
                </div>
            </div>
        </div>
    </x-slot>
    <div class="main-content">
        <div class="container">
            @if (session('success'))
                <div class="alert alert-success">
                    <div class="alert-content">
                        <svg class="alert-icon" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>{{ session('success') }}</span>
                    </div>
                </div>
            @endif
            <!-- Form Section -->
            <div class="card form-card">
                <div class="card-header">
                    <div class="header-content">
                        <div class="header-icon">
                            <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                        </div>
                        <h3>{{ isset($editingNews) ? 'Edit Berita' : 'Tambah Berita Baru' }}</h3>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ isset($editingNews) ? route('admin.news.update', $editingNews) : route('admin.news.store') }}" method="POST" enctype="multipart/form-data" class="modern-form">
                        @csrf
                        @if (isset($editingNews))
                            @method('PUT')
                        @endif
                        <div class="form-group">
                            <label for="title" class="form-label">
                                <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                </svg>
                                Judul Berita
                            </label>
                            <div class="input-wrapper">
                                <input type="text" name="title" id="title" class="form-input" value="{{ old('title', $editingNews->title ?? '') }}" placeholder="Masukkan judul berita yang menarik...">
                                <div class="input-focus-border"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="content" class="form-label">
                                <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                Konten Berita
                            </label>
                            <div class="textarea-wrapper">
                                <textarea name="content" id="content" rows="8" class="form-textarea" placeholder="Tulis konten berita di sini...">{{ old('content', $editingNews->content ?? '') }}</textarea>
                                <div class="textarea-focus-border"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="image" class="form-label">
                                <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                Gambar Berita
                            </label>
                            @if (isset($editingNews) && $editingNews->image)
                                <div class="current-image">
                                    <p class="current-image-label">Gambar saat ini:</p>
                                    <div class="image-preview-container">
                                        <img src="{{ asset('storage/' . $editingNews->image) }}" class="image-preview">
                                        <div class="image-overlay">
                                            <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="file-input-wrapper">
                                <input type="file" name="image" id="image" class="form-file">
                                <label for="image" class="file-input-label">
                                    <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                    </svg>
                                    <span>Pilih gambar atau drag & drop</span>
                                </label>
                            </div>

                            <!-- Preview Gambar Baru -->
                            <div id="new-image-preview-container" class="mt-4 hidden">
                                <p class="current-image-label">Pratinjau gambar baru:</p>
                                <div class="image-preview-container">
                                    <img id="new-image-preview" class="image-preview" src="#" alt="Pratinjau gambar" style="width: 120px; height: 80px; object-fit: cover;">
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">
                                <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>{{ isset($editingNews) ? 'Update Berita' : 'Simpan Berita' }}</span>
                            </button>
                            @if (isset($editingNews))
                                <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">
                                    <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                    <span>Batal Edit</span>
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
            <!-- Table Section -->
            <div class="card table-card">
                <div class="card-header">
                    <div class="header-content">
                        <div class="header-icon">
                            <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                            </svg>
                        </div>
                        <div class="header-text">
                            <h3>Daftar Berita</h3>
                            <p>Kelola semua berita yang telah dipublikasikan</p>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-container">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="th-content">
                                            <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                            </svg>
                                            <span>Judul Berita</span>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="th-content">
                                            <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                            </svg>
                                            <span>Gambar</span>
                                        </div>
                                    </th>
                                    <th class="text-right">
                                        <div class="th-content">
                                            <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                                            </svg>
                                            <span>Aksi</span>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($allNews as $item)
                                <tr class="table-row">
                                    <td class="title-cell">
                                        <div class="title-content">
                                            <h4>{{ $item->title }}</h4>
                                            <p>{{ Str::limit($item->content, 80) }}</p>
                                        </div>
                                    </td>
                                    <td class="image-cell">
                                        @if ($item->image)
                                            <div class="image-thumbnail-container">
                                                <img src="{{ asset('storage/' . $item->image) }}" class="image-thumbnail">
                                                <div class="image-overlay">
                                                    <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        @else
                                            <div class="image-placeholder">
                                                <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                </svg>
                                                <span>Tidak ada gambar</span>
                                            </div>
                                        @endif
                                    </td>
                                    <td class="action-cell">
                                        <div class="action-buttons">
                                            <a href="{{ route('admin.news.edit', $item) }}" class="btn btn-edit" title="Edit berita">
                                                <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                                </svg>
                                                <span>Edit</span>
                                            </a>
                                            <form action="{{ route('admin.news.destroy', $item) }}" method="POST" class="inline-form">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-delete" title="Hapus berita" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">
                                                    <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                    </svg>
                                                    <span>Hapus</span>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Script untuk Preview Gambar -->
    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const fileInput = document.getElementById('image');
            const previewContainer = document.getElementById('new-image-preview-container');
            const previewImage = document.getElementById('new-image-preview');

            if (!fileInput || !previewContainer || !previewImage) {
                console.error("Salah satu elemen preview tidak ditemukan. Periksa ID.");
                return;
            }

            function showPreview(file) {
                if (file && file.type.startsWith('image/')) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        previewImage.src = e.target.result;
                        previewContainer.classList.remove('hidden');
                    };
                    reader.readAsDataURL(file);
                }
            }

            // Saat pilih file dari klik
            fileInput.addEventListener('change', function(e) {
                const file = e.target.files[0];
                showPreview(file);
            });

            // Drag & Drop
            const fileLabel = fileInput.nextElementSibling;

            ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                fileLabel.addEventListener(eventName, preventDefaults, false);
            });

            function preventDefaults(e) {
                e.preventDefault();
                e.stopPropagation();
            }

            ['dragenter', 'dragover'].forEach(eventName => {
                fileLabel.addEventListener(eventName, () => {
                    fileLabel.classList.add('bg-teal-50', 'border-teal-300');
                });
            });

            ['dragleave', 'drop'].forEach(eventName => {
                fileLabel.addEventListener(eventName, () => {
                    fileLabel.classList.remove('bg-teal-50', 'border-teal-300');
                });
            });

            fileLabel.addEventListener('drop', function(e) {
                const dt = e.dataTransfer;
                const file = dt.files[0];
                fileInput.files = dt.files;
                showPreview(file);
            });
        });
    </script>
    @endpush
</x-admin-layout>