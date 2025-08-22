<x-guest-layout>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #14b8a6;
            --primary-dark: #0f766e;
            --primary-light: #5eead4;
            --secondary: #06b6d4;
            --accent: #22d3ee;
            --success: #10b981;
            --error: #ef4444;
            --warning: #f59e0b;
            
            --bg-primary: #f0fdfa;
            --bg-secondary: #ccfbf1;
            --bg-tertiary: #99f6e4;
            
            --glass-bg: rgba(255, 255, 255, 0.15);
            --glass-border: rgba(255, 255, 255, 0.25);
            --glass-shadow: rgba(20, 184, 166, 0.15);
            
            --text-primary: #0f172a;
            --text-secondary: #475569;
            --text-muted: #64748b;
            --text-light: #94a3b8;
            
            --shadow-sm: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            --shadow-md: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            --shadow-glow: 0 0 40px rgba(20, 184, 166, 0.3);
            
            --border-radius: 20px;
            --border-radius-sm: 12px;
            --border-radius-lg: 24px;
            
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            --transition-slow: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background: linear-gradient(135deg, 
                var(--bg-primary) 0%, 
                var(--bg-secondary) 25%, 
                var(--bg-tertiary) 50%, 
                var(--primary-light) 75%, 
                var(--primary) 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            position: relative;
            overflow-x: hidden;
        }

        /* Animated Background Particles */
        body::before,
        body::after {
            content: '';
            position: fixed;
            border-radius: 50%;
            pointer-events: none;
            z-index: -1;
        }

        body::before {
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(20, 184, 166, 0.1) 0%, transparent 70%);
            top: -150px;
            right: -150px;
            animation: float1 15s ease-in-out infinite;
        }

        body::after {
            width: 200px;
            height: 200px;
            background: radial-gradient(circle, rgba(6, 182, 212, 0.1) 0%, transparent 70%);
            bottom: -100px;
            left: -100px;
            animation: float2 20s ease-in-out infinite reverse;
        }

        @keyframes float1 {
            0%, 100% { transform: translate(0, 0) rotate(0deg) scale(1); }
            33% { transform: translate(-30px, 30px) rotate(120deg) scale(1.1); }
            66% { transform: translate(30px, -20px) rotate(240deg) scale(0.9); }
        }

        @keyframes float2 {
            0%, 100% { transform: translate(0, 0) rotate(0deg) scale(1); }
            50% { transform: translate(20px, -30px) rotate(180deg) scale(1.2); }
        }

        /* Main Container */
        .login-wrapper {
            width: 100%;
            max-width: 500px;
            position: relative;
            perspective: 1200px;
        }

        .login-container {
            background: var(--glass-bg);
            backdrop-filter: blur(25px);
            -webkit-backdrop-filter: blur(25px);
            border: 2px solid var(--glass-border);
            border-radius: var(--border-radius-lg);
            padding: 60px 50px;
            position: relative;
            box-shadow: 
                var(--shadow-lg),
                0 0 0 1px rgba(255, 255, 255, 0.1),
                inset 0 1px 0 rgba(255, 255, 255, 0.2);
            animation: slideInScale 0.8s cubic-bezier(0.16, 1, 0.3, 1);
            transform-style: preserve-3d;
        }

        @keyframes slideInScale {
            0% {
                opacity: 0;
                transform: translateY(50px) scale(0.9) rotateX(10deg);
            }
            100% {
                opacity: 1;
                transform: translateY(0) scale(1) rotateX(0deg);
            }
        }

        /* Decorative Border */
        .login-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 6px;
            background: linear-gradient(90deg, 
                var(--primary) 0%, 
                var(--secondary) 25%, 
                var(--accent) 50%, 
                var(--secondary) 75%, 
                var(--primary) 100%);
            border-radius: var(--border-radius-lg) var(--border-radius-lg) 0 0;
            animation: shimmer 3s ease-in-out infinite;
        }

        @keyframes shimmer {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }

        /* Header Section */
        .login-header {
            text-align: center;
            margin-bottom: 50px;
            position: relative;
        }

        .logo-section {
            position: relative;
            display: inline-block;
            margin-bottom: 30px;
        }

        .logo-glow {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 140px;
            height: 140px;
            background: radial-gradient(circle, var(--glass-shadow) 0%, transparent 70%);
            border-radius: 50%;
            animation: pulse 4s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { 
                transform: translate(-50%, -50%) scale(1); 
                opacity: 0.6; 
            }
            50% { 
                transform: translate(-50%, -50%) scale(1.2); 
                opacity: 0.3; 
            }
        }

        .logo-svg {
            position: relative;
            z-index: 2;
            width: 100px;
            height: 100px;
            filter: drop-shadow(0 10px 20px var(--glass-shadow));
        }

        .brand-title {
            font-size: 36px;
            font-weight: 800;
            background: linear-gradient(135deg, var(--primary), var(--secondary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 12px;
            letter-spacing: -1.5px;
            line-height: 1.1;
        }

        .brand-subtitle {
            font-size: 17px;
            color: var(--text-secondary);
            font-weight: 500;
            opacity: 0.9;
            letter-spacing: 0.5px;
        }

        /* Session Status */
        .session-alert {
            background: linear-gradient(135deg, 
                rgba(16, 185, 129, 0.1), 
                rgba(16, 185, 129, 0.05));
            border: 2px solid rgba(16, 185, 129, 0.2);
            color: var(--success);
            padding: 18px 24px;
            border-radius: var(--border-radius);
            margin-bottom: 35px;
            font-size: 15px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 15px;
            backdrop-filter: blur(10px);
            animation: slideInLeft 0.6s ease-out 0.3s both;
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Form Styling */
        .login-form {
            position: relative;
        }

        .form-field {
            margin-bottom: 35px;
            position: relative;
            animation: slideInUp 0.6s ease-out both;
        }

        .form-field:nth-child(1) { animation-delay: 0.1s; }
        .form-field:nth-child(2) { animation-delay: 0.2s; }
        .form-field:nth-child(3) { animation-delay: 0.3s; }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .field-label {
            display: block;
            font-size: 16px;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 15px;
            transition: var(--transition);
            letter-spacing: 0.3px;
        }

        .input-group {
            position: relative;
            display: flex;
            align-items: center;
        }

        .field-input {
            width: 100%;
            padding: 20px 28px 20px 65px;
            border: 2px solid rgba(148, 163, 184, 0.15);
            border-radius: var(--border-radius);
            font-size: 17px;
            font-weight: 500;
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(15px);
            transition: var(--transition-slow);
            outline: none;
            color: var(--text-primary);
            letter-spacing: 0.3px;
        }

        .field-input::placeholder {
            color: var(--text-muted);
            font-weight: 400;
        }

        .field-input:focus {
            border-color: var(--primary);
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 
                0 0 0 6px rgba(20, 184, 166, 0.1),
                0 10px 40px rgba(20, 184, 166, 0.2);
            transform: translateY(-3px);
        }

        .field-input:focus + .input-icon {
            color: var(--primary);
            transform: scale(1.15);
        }

        .input-icon {
            position: absolute;
            left: 22px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-muted);
            transition: var(--transition);
            z-index: 2;
        }

        .input-icon svg {
            width: 22px;
            height: 22px;
        }

        /* Enhanced Error Messages */
        .error-alert {
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--error);
            font-size: 14px;
            font-weight: 600;
            margin-top: 15px;
            padding: 12px 16px;
            background: rgba(239, 68, 68, 0.08);
            border: 2px solid rgba(239, 68, 68, 0.15);
            border-radius: var(--border-radius-sm);
            backdrop-filter: blur(10px);
            animation: shake 0.5s ease-in-out;
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            75% { transform: translateX(5px); }
        }

        /* Remember Me Section */
        .remember-section {
            display: flex;
            align-items: center;
            gap: 18px;
            margin: 35px 0;
            animation: slideInUp 0.6s ease-out 0.4s both;
        }

        .checkbox-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }

        .checkbox-input {
            width: 24px;
            height: 24px;
            border: 3px solid rgba(148, 163, 184, 0.3);
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.8);
            cursor: pointer;
            transition: var(--transition);
            appearance: none;
            position: relative;
            backdrop-filter: blur(10px);
        }

        .checkbox-input:checked {
            background: var(--primary);
            border-color: var(--primary);
            box-shadow: 0 6px 20px rgba(20, 184, 166, 0.3);
            transform: scale(1.05);
        }

        .checkbox-input:checked::after {
            content: '✓';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 16px;
            font-weight: 900;
        }

        .checkbox-label {
            font-size: 16px;
            color: var(--text-secondary);
            font-weight: 600;
            cursor: pointer;
            user-select: none;
            letter-spacing: 0.3px;
        }

        /* Form Actions */
        .form-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 45px;
            gap: 25px;
            animation: slideInUp 0.6s ease-out 0.5s both;
        }

        .forgot-link {
            color: var(--primary);
            text-decoration: none;
            font-size: 15px;
            font-weight: 700;
            position: relative;
            transition: var(--transition);
            letter-spacing: 0.3px;
        }

        .forgot-link::after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            transition: width 0.4s ease;
            border-radius: 2px;
        }

        .forgot-link:hover {
            color: var(--primary-dark);
            transform: translateY(-2px);
        }

        .forgot-link:hover::after {
            width: 100%;
        }

        /* Ultimate Login Button */
        .login-btn {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            border: none;
            padding: 20px 40px;
            border-radius: var(--border-radius);
            font-size: 17px;
            font-weight: 700;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: var(--transition-slow);
            box-shadow: var(--shadow-glow);
            min-width: 160px;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .login-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, 
                transparent, 
                rgba(255, 255, 255, 0.4), 
                transparent);
            transition: left 0.7s ease;
        }

        .login-btn::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.6s ease, height 0.6s ease;
        }

        .login-btn:hover {
            transform: translateY(-4px);
            box-shadow: 
                0 20px 60px rgba(20, 184, 166, 0.4),
                0 0 0 8px rgba(20, 184, 166, 0.1);
            background: linear-gradient(135deg, var(--primary-light), var(--accent));
        }

        .login-btn:hover::before {
            left: 100%;
        }

        .login-btn:hover::after {
            width: 300px;
            height: 300px;
        }

        .login-btn:active {
            transform: translateY(-2px);
        }

        /* Loading State */
        .login-btn.loading {
            pointer-events: none;
            opacity: 0.8;
            color: transparent;
        }

        .login-btn.loading::before {
            display: none;
        }

        .login-btn.loading::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 24px;
            height: 24px;
            margin: -12px 0 0 -12px;
            border: 3px solid rgba(255, 255, 255, 0.3);
            border-top: 3px solid white;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .login-container {
                padding: 45px 35px;
                margin: 15px;
                border-radius: var(--border-radius);
            }

            .brand-title {
                font-size: 30px;
            }

            .form-actions {
                flex-direction: column;
                align-items: stretch;
                gap: 20px;
            }

            .login-btn {
                width: 100%;
                justify-content: center;
            }

            .forgot-link {
                text-align: center;
            }
        }

        @media (max-width: 480px) {
            body {
                padding: 15px;
            }

            .login-container {
                padding: 35px 25px;
            }

            .field-input {
                padding: 18px 24px 18px 55px;
                font-size: 16px;
            }

            .input-icon {
                left: 18px;
            }

            .brand-title {
                font-size: 26px;
            }
        }

        /* Accessibility & Performance */
        @media (prefers-reduced-motion: reduce) {
            * {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
        }

        /* Focus States for Accessibility */
        .field-input:focus-visible,
        .checkbox-input:focus-visible,
        .login-btn:focus-visible,
        .forgot-link:focus-visible {
            outline: 3px solid var(--primary);
            outline-offset: 3px;
        }

        /* High Contrast Mode Support */
        @media (prefers-contrast: high) {
            .login-container {
                border: 3px solid var(--text-primary);
                background: white;
            }
            
            .field-input {
                border: 2px solid var(--text-primary);
                background: white;
            }
        }
    </style>

    <div class="login-wrapper">
        <div class="login-container">
            <div class="login-header">
                <div class="logo-section">
                    <div class="logo-glow"></div>
                    <svg class="logo-svg" viewBox="0 0 140 140" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient id="logoGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" style="stop-color:#14b8a6"/>
                                <stop offset="50%" style="stop-color:#06b6d4"/>
                                <stop offset="100%" style="stop-color:#22d3ee"/>
                            </linearGradient>
                            <filter id="logoGlow">
                                <feGaussianBlur stdDeviation="4" result="coloredBlur"/>
                                <feMerge> 
                                    <feMergeNode in="coloredBlur"/>
                                    <feMergeNode in="SourceGraphic"/>
                                </feMerge>
                            </filter>
                            <filter id="logoShadow">
                                <feDropShadow dx="0" dy="8" stdDeviation="6" flood-color="#14b8a6" flood-opacity="0.3"/>
                            </filter>
                        </defs>
                        
                        <!-- Background Circle -->
                        <circle cx="70" cy="70" r="60" fill="url(#logoGrad)" opacity="0.1" filter="url(#logoGlow)"/>
                        
                        <!-- Outer Ring -->
                        <circle cx="70" cy="70" r="55" fill="none" stroke="url(#logoGrad)" stroke-width="3" opacity="0.4"/>
                        
                        <!-- Main Logo Shape - Modern Hexagon with Inner Design -->
                        <path d="M70 20 L100 35 L100 65 L70 80 L40 65 L40 35 Z" 
                              fill="url(#logoGrad)" 
                              filter="url(#logoShadow)" 
                              opacity="0.9"/>
                        
                        <!-- Inner Geometric Pattern -->
                        <path d="M70 30 L85 40 L85 60 L70 70 L55 60 L55 40 Z" 
                              fill="rgba(255,255,255,0.3)" 
                              stroke="rgba(255,255,255,0.6)" 
                              stroke-width="2"/>
                        
                        <!-- Central Diamond -->
                        <path d="M70 40 L75 50 L70 60 L65 50 Z" 
                              fill="white" 
                              filter="url(#logoGlow)"/>
                        
                        <!-- Animated Dots -->
                        <circle cx="45" cy="30" r="3" fill="url(#logoGrad)" opacity="0.7">
                            <animate attributeName="opacity" values="0.7;1;0.7" dur="2s" repeatCount="indefinite"/>
                        </circle>
                        <circle cx="95" cy="30" r="2.5" fill="url(#logoGrad)" opacity="0.5">
                            <animate attributeName="opacity" values="0.5;0.9;0.5" dur="3s" repeatCount="indefinite"/>
                        </circle>
                        <circle cx="95" cy="110" r="3.5" fill="url(#logoGrad)" opacity="0.6">
                            <animate attributeName="opacity" values="0.6;1;0.6" dur="2.5s" repeatCount="indefinite"/>
                        </circle>
                        <circle cx="45" cy="110" r="2" fill="url(#logoGrad)" opacity="0.4">
                            <animate attributeName="opacity" values="0.4;0.8;0.4" dur="4s" repeatCount="indefinite"/>
                        </circle>
                        
                        <!-- Rotating Ring -->
                        <circle cx="70" cy="70" r="45" fill="none" stroke="url(#logoGrad)" stroke-width="1" opacity="0.3" stroke-dasharray="5,5">
                            <animateTransform attributeName="transform" type="rotate" values="0 70 70;360 70 70" dur="20s" repeatCount="indefinite"/>
                        </circle>
                    </svg>
                </div>
                
                <h1 class="brand-title">TechVault</h1>
                <p class="brand-subtitle">Secure Access Portal</p>
            </div>

            <!-- Session Status -->
            @if (session('status'))
                <div class="session-alert">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 12l2 2 4-4"/>
                        <circle cx="12" cy="12" r="10"/>
                    </svg>
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="login-form">
                @csrf

                <!-- Email Field -->
                <div class="form-field">
                    <label for="email" class="field-label">{{ __('Email') }}</label>
                    <div class="input-group">
                        <div class="input-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                <polyline points="22,6 12,13 2,6"/>
                            </svg>
                        </div>
                        <input 
                            id="email" 
                            type="email" 
                            name="email" 
                            value="{{ old('email') }}" 
                            required 
                            autofocus 
                            autocomplete="username"
                            class="field-input"
                            placeholder="Masukkan alamat email Anda"
                        />
                    </div>
                    @error('email')
                        <div class="error-alert">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"/>
                                <line x1="15" y1="9" x2="9" y2="15"/>
                                <line x1="9" y1="9" x2="15" y2="15"/>
                            </svg>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Password Field -->
                <div class="form-field">
                    <label for="password" class="field-label">{{ __('Password') }}</label>
                    <div class="input-group">
                        <div class="input-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                                <circle cx="12" cy="16" r="1"/>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                            </svg>
                        </div>
                        <input 
                            id="password" 
                            type="password" 
                            name="password" 
                            required 
                            autocomplete="current-password"
                            class="field-input"
                            placeholder="Masukkan kata sandi Anda"
                        />
                    </div>
                    @error('password')
                        <div class="error-alert">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"/>
                                <line x1="15" y1="9" x2="9" y2="15"/>
                                <line x1="9" y1="9" x2="15" y2="15"/>
                            </svg>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="remember-section">
                    <div class="checkbox-wrapper">
                        <input id="remember_me" type="checkbox" name="remember" class="checkbox-input">
                    </div>
                    <label for="remember_me" class="checkbox-label">{{ __('Remember me') }}</label>
                </div>

                <!-- Form Actions -->
                <div class="form-actions">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="forgot-link">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <button type="submit" class="login-btn">
                        {{ __('Log in') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('.login-form');
            const button = document.querySelector('.login-btn');
            const inputs = document.querySelectorAll('.field-input');

            // Enhanced form submission with loading state
            form.addEventListener('submit', function(e) {
                button.classList.add('loading');
                button.textContent = '';
                
                // Prevent multiple submissions
                button.disabled = true;
                
                // Re-enable after 5 seconds as fallback
                setTimeout(() => {
                    button.disabled = false;
                    button.classList.remove('loading');
                    button.textContent = '{{ __("Log in") }}';
                }, 5000);
            });

            // Enhanced input interactions
            inputs.forEach(input => {
                const label = input.closest('.form-field').querySelector('.field-label');
                
                input.addEventListener('focus', function() {
                    label.style.color = 'var(--primary)';
                    label.style.transform = 'translateY(-2px)';
                });

                input.addEventListener('blur', function() {
                    label.style.color = 'var(--text-primary)';
                    label.style.transform = 'translateY(0)';
                });

                // Real-time validation feedback
                input.addEventListener('input', function() {
                    if (this.validity.valid) {
                        this.style.borderColor = 'var(--success)';
                    } else if (this.value.length > 0) {
                        this.style.borderColor = 'var(--error)';
                    } else {
                        this.style.borderColor = 'rgba(148, 163, 184, 0.15)';
                    }
                });
            });

            // Enhanced keyboard navigation
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Enter' && e.target.type !== 'submit') {
                    e.preventDefault();
                    const formElements = Array.from(form.querySelectorAll('input, button'));
                    const currentIndex = formElements.indexOf(e.target);
                    const nextElement = formElements[currentIndex + 1];
                    
                    if (nextElement) {
                        nextElement.focus();
                    } else {
                        form.submit();
                    }
                }
            });

            // Add ripple effect to button
            button.addEventListener('click', function(e) {
                const ripple = document.createElement('span');
                const rect = this.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;
                
                ripple.style.cssText = `
                    position: absolute;
                    width: ${size}px;
                    height: ${size}px;
                    left: ${x}px;
                    top: ${y}px;
                    background: rgba(255, 255, 255, 0.3);
                    border-radius: 50%;
                    transform: scale(0);
                    animation: ripple 0.6s ease-out;
                    pointer-events: none;
                `;
                
                this.appendChild(ripple);
                
                setTimeout(() => {
                    ripple.remove();
                }, 600);
            });

            // Add CSS for ripple animation
            const style = document.createElement('style');
            style.textContent = `
                @keyframes ripple {
                    to {
                        transform: scale(2);
                        opacity: 0;
                    }
                }
            `;
            document.head.appendChild(style);
        });
    </script>
</x-guest-layout>

