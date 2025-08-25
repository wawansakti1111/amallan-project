<x-guest-layout>
    <style>
        :root {
            /* Dark Teal Color Palette - Matching Layout */
            --primary-dark-teal: #0d4f47;
            --primary-teal: #0f766e;
            --primary-light-teal: #14b8a6;
            --accent-teal: #5eead4;
            --secondary-teal: #99f6e4;
            
            /* Status Colors */
            --success: #10b981;
            --error: #ef4444;
            --warning: #f59e0b;
            
            /* Text Colors */
            --text-primary: #ffffff;
            --text-secondary: #e2e8f0;
            --text-muted: #94a3b8;
            --text-light: #cbd5e1;
            
            /* Background & Effects */
            --bg-input: rgba(255, 255, 255, 0.1);
            --bg-input-focus: rgba(255, 255, 255, 0.15);
            --bg-button: linear-gradient(135deg, var(--primary-teal), var(--primary-light-teal));
            --bg-button-hover: linear-gradient(135deg, var(--primary-light-teal), var(--accent-teal));
            
            /* Shadows & Borders */
            --shadow-input: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            --shadow-input-focus: 0 10px 25px -3px rgba(20, 184, 166, 0.3);
            --shadow-button: 0 10px 25px -3px rgba(15, 118, 110, 0.4);
            --shadow-button-hover: 0 20px 40px -3px rgba(20, 184, 166, 0.5);
            
            --border-input: 1px solid rgba(94, 234, 212, 0.2);
            --border-input-focus: 2px solid var(--primary-light-teal);
            --border-error: 2px solid var(--error);
            
            /* Transitions */
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            --transition-bounce: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        /* Session Status Alert */
        .session-status {
            background: linear-gradient(135deg, 
                rgba(16, 185, 129, 0.15), 
                rgba(16, 185, 129, 0.1));
            border: 1px solid rgba(16, 185, 129, 0.3);
            color: var(--success);
            padding: 1rem 1.25rem;
            border-radius: 16px;
            margin-bottom: 2rem;
            font-size: 0.95rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            backdrop-filter: blur(10px);
            animation: slide-in-down 0.6s ease-out;
        }

        @keyframes slide-in-down {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Form Styling */
        .login-form {
            position: relative;
        }

        .form-group {
            margin-bottom: 1.75rem;
            position: relative;
            animation: slide-in-up 0.6s ease-out both;
        }

        .form-group:nth-child(1) { animation-delay: 0.1s; }
        .form-group:nth-child(2) { animation-delay: 0.2s; }
        .form-group:nth-child(3) { animation-delay: 0.3s; }
        .form-group:nth-child(4) { animation-delay: 0.4s; }

        @keyframes slide-in-up {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form-label {
            display: block;
            font-size: 0.95rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 0.75rem;
            transition: var(--transition);
            letter-spacing: 0.025em;
        }

        .input-container {
            position: relative;
            display: flex;
            align-items: center;
        }

        .form-input {
            width: 100%;
            padding: 1rem 1.25rem 1rem 3.5rem;
            border: var(--border-input);
            border-radius: 16px;
            font-size: 1rem;
            font-weight: 500;
            background: var(--bg-input);
            backdrop-filter: blur(10px);
            transition: var(--transition);
            outline: none;
            color: var(--text-primary);
            letter-spacing: 0.025em;
        }

        .form-input::placeholder {
            color: var(--text-muted);
            font-weight: 400;
        }

        .form-input:focus {
            border: var(--border-input-focus);
            background: var(--bg-input-focus);
            box-shadow: var(--shadow-input-focus);
            transform: translateY(-2px);
        }

        .form-input:focus + .input-icon {
            color: var(--primary-light-teal);
            transform: scale(1.1);
        }

        .form-input.error {
            border: var(--border-error);
            background: rgba(239, 68, 68, 0.1);
        }

        .input-icon {
            position: absolute;
            left: 1.25rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-muted);
            transition: var(--transition);
            z-index: 2;
        }

        .input-icon svg {
            width: 20px;
            height: 20px;
        }

        /* Error Messages */
        .error-message {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--error);
            font-size: 0.875rem;
            font-weight: 600;
            margin-top: 0.75rem;
            padding: 0.75rem 1rem;
            background: rgba(239, 68, 68, 0.1);
            border: 1px solid rgba(239, 68, 68, 0.2);
            border-radius: 12px;
            backdrop-filter: blur(10px);
            animation: shake 0.5s ease-in-out;
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-3px); }
            75% { transform: translateX(3px); }
        }

        /* Remember Me Section */
        .remember-container {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin: 1.5rem 0;
            animation: slide-in-up 0.6s ease-out 0.3s both;
        }

        .checkbox-container {
            position: relative;
            display: flex;
            align-items: center;
        }

        .checkbox {
            width: 20px;
            height: 20px;
            border: 2px solid rgba(94, 234, 212, 0.3);
            border-radius: 6px;
            background: var(--bg-input);
            cursor: pointer;
            transition: var(--transition-bounce);
            appearance: none;
            position: relative;
            backdrop-filter: blur(10px);
        }

        .checkbox:checked {
            background: var(--primary-light-teal);
            border-color: var(--primary-light-teal);
            box-shadow: 0 4px 12px rgba(20, 184, 166, 0.3);
            transform: scale(1.05);
        }

        .checkbox:checked::after {
            content: '✓';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 12px;
            font-weight: 900;
        }

        .checkbox-label {
            font-size: 0.95rem;
            color: var(--text-secondary);
            font-weight: 500;
            cursor: pointer;
            user-select: none;
            letter-spacing: 0.025em;
        }

        /* Form Actions */
        .form-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 2rem;
            gap: 1.5rem;
            animation: slide-in-up 0.6s ease-out 0.4s both;
        }

        .forgot-password {
            color: var(--accent-teal);
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 600;
            position: relative;
            transition: var(--transition);
            letter-spacing: 0.025em;
        }

        .forgot-password::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--accent-teal), var(--primary-light-teal));
            transition: width 0.3s ease;
            border-radius: 1px;
        }

        .forgot-password:hover {
            color: var(--secondary-teal);
            transform: translateY(-1px);
        }

        .forgot-password:hover::after {
            width: 100%;
        }

        /* Login Button */
        .login-button {
            background: var(--bg-button);
            color: white;
            border: none;
            padding: 1rem 2rem;
            border-radius: 16px;
            font-size: 1rem;
            font-weight: 700;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: var(--transition);
            box-shadow: var(--shadow-button);
            min-width: 140px;
            letter-spacing: 0.05em;
            text-transform: uppercase;
        }

        .login-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, 
                transparent, 
                rgba(255, 255, 255, 0.3), 
                transparent);
            transition: left 0.6s ease;
        }

        .login-button::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.5s ease, height 0.5s ease;
        }

        .login-button:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-button-hover);
            background: var(--bg-button-hover);
        }

        .login-button:hover::before {
            left: 100%;
        }

        .login-button:hover::after {
            width: 200px;
            height: 200px;
        }

        .login-button:active {
            transform: translateY(-1px);
        }

        /* Loading State */
        .login-button.loading {
            pointer-events: none;
            opacity: 0.8;
            color: transparent;
        }

        .login-button.loading::before {
            display: none;
        }

        .login-button.loading::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 20px;
            height: 20px;
            margin: -10px 0 0 -10px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-top: 2px solid white;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .form-actions {
                flex-direction: column;
                align-items: stretch;
                gap: 1rem;
            }

            .login-button {
                width: 100%;
                justify-content: center;
            }

            .forgot-password {
                text-align: center;
            }
        }

        @media (max-width: 480px) {
            .form-input {
                padding: 0.875rem 1rem 0.875rem 3rem;
                font-size: 0.95rem;
            }

            .input-icon {
                left: 1rem;
            }

            .input-icon svg {
                width: 18px;
                height: 18px;
            }
        }

        /* Focus States for Accessibility */
        .form-input:focus-visible,
        .checkbox:focus-visible,
        .login-button:focus-visible,
        .forgot-password:focus-visible {
            outline: 2px solid var(--accent-teal);
            outline-offset: 2px;
        }

        /* High Contrast Mode Support */
        @media (prefers-contrast: high) {
            .form-input {
                border: 2px solid var(--text-primary);
                background: rgba(0, 0, 0, 0.8);
            }
            
            .login-button {
                border: 2px solid var(--accent-teal);
            }
        }
    </style>

    <!-- Session Status -->
    @if (session('status'))
        <div class="session-status">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M9 12l2 2 4-4"/>
                <circle cx="12" cy="12" r="10"/>
            </svg>
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}" class="login-form">
        @csrf

        <!-- Email Field -->
        <div class="form-group">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <div class="input-container">
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
                    class="form-input {{ $errors->has('email') ? 'error' : '' }}"
                    placeholder="Masukkan alamat email Anda"
                />
            </div>
            @error('email')
                <div class="error-message">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"/>
                        <line x1="15" y1="9" x2="9" y2="15"/>
                        <line x1="9" y1="9" x2="15" y2="15"/>
                    </svg>
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Password Field -->
        <div class="form-group">
            <label for="password" class="form-label">{{ __('Password') }}</label>
            <div class="input-container">
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
                    class="form-input {{ $errors->has('password') ? 'error' : '' }}"
                    placeholder="Masukkan kata sandi Anda"
                />
            </div>
            @error('password')
                <div class="error-message">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"/>
                        <line x1="15" y1="9" x2="9" y2="15"/>
                        <line x1="9" y1="9" x2="15" y2="15"/>
                    </svg>
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Remember Me -->
        <div class="remember-container">
            <div class="checkbox-container">
                <input id="remember_me" type="checkbox" name="remember" class="checkbox">
            </div>
            <label for="remember_me" class="checkbox-label">{{ __('Remember me') }}</label>
        </div>

        <!-- Form Actions -->
        <div class="form-actions">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="forgot-password">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <button type="submit" class="login-button">
                {{ __('Log in') }}
            </button>
        </div>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('.login-form');
            const button = document.querySelector('.login-button');
            const inputs = document.querySelectorAll('.form-input');

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
                const label = input.closest('.form-group').querySelector('.form-label');
                
                input.addEventListener('focus', function() {
                    label.style.color = 'var(--accent-teal)';
                    label.style.transform = 'translateY(-1px)';
                });

                input.addEventListener('blur', function() {
                    label.style.color = 'var(--text-primary)';
                    label.style.transform = 'translateY(0)';
                });

                // Real-time validation feedback
                input.addEventListener('input', function() {
                    this.classList.remove('error');
                    const errorMsg = this.closest('.form-group').querySelector('.error-message');
                    if (errorMsg) {
                        errorMsg.style.opacity = '0';
                        setTimeout(() => {
                            if (errorMsg.style.opacity === '0') {
                                errorMsg.remove();
                            }
                        }, 300);
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
                    animation: ripple 0.6s linear;
                    pointer-events: none;
                `;
                
                this.appendChild(ripple);
                
                setTimeout(() => {
                    ripple.remove();
                }, 600);
            });

            // Add ripple animation
            const style = document.createElement('style');
            style.textContent = `
                @keyframes ripple {
                    to {
                        transform: scale(4);
                        opacity: 0;
                    }
                }
            `;
            document.head.appendChild(style);

            // Smooth error message animations
            const errorMessages = document.querySelectorAll('.error-message');
            errorMessages.forEach((msg, index) => {
                msg.style.animationDelay = `${index * 0.1}s`;
            });
        });
    </script>
</x-guest-layout>

