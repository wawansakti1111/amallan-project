<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <style>
            :root {
                /* Dark Teal Color Palette */
                --primary-dark-teal: #0d4f47;
                --primary-teal: #0f766e;
                --primary-light-teal: #14b8a6;
                --accent-teal: #5eead4;
                --secondary-teal: #99f6e4;
                
                /* Complementary Colors */
                --dark-slate: #0f172a;
                --medium-slate: #1e293b;
                --light-slate: #334155;
                --warm-gray: #64748b;
                --cool-gray: #94a3b8;
                
                /* Background Gradients */
                --bg-primary: linear-gradient(135deg, #0d4f47 0%, #0f766e 25%, #134e4a 50%, #065f46 75%, #064e3b 100%);
                --bg-secondary: linear-gradient(135deg, rgba(13, 79, 71, 0.95) 0%, rgba(15, 118, 110, 0.9) 100%);
                --bg-glass: rgba(255, 255, 255, 0.08);
                --bg-glass-hover: rgba(255, 255, 255, 0.12);
                
                /* Shadows & Effects */
                --shadow-primary: 0 25px 50px -12px rgba(13, 79, 71, 0.4);
                --shadow-glow: 0 0 40px rgba(20, 184, 166, 0.3);
                --shadow-inner: inset 0 2px 4px rgba(0, 0, 0, 0.1);
                
                /* Border & Radius */
                --border-glass: 1px solid rgba(94, 234, 212, 0.2);
                --border-radius: 20px;
                --border-radius-lg: 28px;
                
                /* Transitions */
                --transition-smooth: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
                --transition-bounce: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            }

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
                background: var(--bg-primary);
                min-height: 100vh;
                position: relative;
                overflow-x: hidden;
                color: white;
            }

            /* Animated Background Elements */
            body::before,
            body::after {
                content: '';
                position: fixed;
                pointer-events: none;
                z-index: -1;
            }

            body::before {
                width: 600px;
                height: 600px;
                background: radial-gradient(circle, rgba(20, 184, 166, 0.15) 0%, transparent 70%);
                top: -300px;
                right: -300px;
                border-radius: 50%;
                animation: float-slow 20s ease-in-out infinite;
            }

            body::after {
                width: 400px;
                height: 400px;
                background: radial-gradient(circle, rgba(94, 234, 212, 0.1) 0%, transparent 70%);
                bottom: -200px;
                left: -200px;
                border-radius: 50%;
                animation: float-reverse 25s ease-in-out infinite;
            }

            @keyframes float-slow {
                0%, 100% { 
                    transform: translate(0, 0) rotate(0deg) scale(1); 
                    opacity: 0.6;
                }
                33% { 
                    transform: translate(-50px, 50px) rotate(120deg) scale(1.1); 
                    opacity: 0.8;
                }
                66% { 
                    transform: translate(50px, -30px) rotate(240deg) scale(0.9); 
                    opacity: 0.4;
                }
            }

            @keyframes float-reverse {
                0%, 100% { 
                    transform: translate(0, 0) rotate(0deg) scale(1); 
                    opacity: 0.4;
                }
                50% { 
                    transform: translate(30px, -50px) rotate(180deg) scale(1.2); 
                    opacity: 0.7;
                }
            }

            /* Main Container */
            .main-container {
                min-height: 100vh;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                padding: 2rem;
                position: relative;
            }

            /* Logo Section */
            .logo-container {
                margin-bottom: 3rem;
                text-align: center;
                position: relative;
            }

            .logo-wrapper {
                position: relative;
                display: inline-block;
                margin-bottom: 1.5rem;
            }

            .logo-glow {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 120px;
                height: 120px;
                background: radial-gradient(circle, var(--primary-light-teal) 0%, transparent 70%);
                border-radius: 50%;
                opacity: 0.3;
                animation: pulse-glow 3s ease-in-out infinite;
            }

            @keyframes pulse-glow {
                0%, 100% { 
                    transform: translate(-50%, -50%) scale(1); 
                    opacity: 0.3; 
                }
                50% { 
                    transform: translate(-50%, -50%) scale(1.2); 
                    opacity: 0.6; 
                }
            }

            .logo-svg {
                position: relative;
                z-index: 2;
                width: 80px;
                height: 80px;
                filter: drop-shadow(0 10px 30px rgba(20, 184, 166, 0.4));
                transition: var(--transition-smooth);
            }

            .logo-svg:hover {
                transform: scale(1.1) rotate(5deg);
                filter: drop-shadow(0 15px 40px rgba(20, 184, 166, 0.6));
            }

            .brand-title {
                font-size: 2.5rem;
                font-weight: 900;
                background: linear-gradient(135deg, var(--accent-teal), var(--primary-light-teal), var(--secondary-teal));
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
                margin-bottom: 0.5rem;
                letter-spacing: -0.05em;
                text-shadow: 0 0 30px rgba(20, 184, 166, 0.5);
            }

            .brand-subtitle {
                font-size: 1.1rem;
                color: var(--cool-gray);
                font-weight: 500;
                opacity: 0.9;
                letter-spacing: 0.05em;
            }

            /* Content Card */
            .content-card {
                width: 100%;
                max-width: 480px;
                background: var(--bg-glass);
                backdrop-filter: blur(20px);
                -webkit-backdrop-filter: blur(20px);
                border: var(--border-glass);
                border-radius: var(--border-radius-lg);
                padding: 3rem 2.5rem;
                position: relative;
                box-shadow: 
                    var(--shadow-primary),
                    var(--shadow-inner),
                    0 0 0 1px rgba(255, 255, 255, 0.05);
                animation: slide-up 0.8s cubic-bezier(0.16, 1, 0.3, 1);
                transition: var(--transition-smooth);
            }

            @keyframes slide-up {
                0% {
                    opacity: 0;
                    transform: translateY(50px) scale(0.95);
                }
                100% {
                    opacity: 1;
                    transform: translateY(0) scale(1);
                }
            }

            .content-card:hover {
                transform: translateY(-5px);
                box-shadow: 
                    0 35px 70px -12px rgba(13, 79, 71, 0.5),
                    var(--shadow-glow),
                    var(--shadow-inner),
                    0 0 0 1px rgba(255, 255, 255, 0.1);
            }

            /* Decorative Elements */
            .content-card::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                height: 4px;
                background: linear-gradient(90deg, 
                    var(--primary-dark-teal) 0%, 
                    var(--primary-light-teal) 25%, 
                    var(--accent-teal) 50%, 
                    var(--primary-light-teal) 75%, 
                    var(--primary-dark-teal) 100%);
                border-radius: var(--border-radius-lg) var(--border-radius-lg) 0 0;
                animation: shimmer 4s ease-in-out infinite;
            }

            @keyframes shimmer {
                0%, 100% { opacity: 1; }
                50% { opacity: 0.7; }
            }

            .content-card::after {
                content: '';
                position: absolute;
                top: 20px;
                right: 20px;
                width: 60px;
                height: 60px;
                background: radial-gradient(circle, rgba(94, 234, 212, 0.1) 0%, transparent 70%);
                border-radius: 50%;
                animation: float-corner 8s ease-in-out infinite;
            }

            @keyframes float-corner {
                0%, 100% { 
                    transform: translate(0, 0) scale(1); 
                    opacity: 0.3; 
                }
                50% { 
                    transform: translate(-10px, 10px) scale(1.2); 
                    opacity: 0.6; 
                }
            }

            /* Responsive Design */
            @media (max-width: 768px) {
                .main-container {
                    padding: 1.5rem;
                }

                .content-card {
                    padding: 2.5rem 2rem;
                    max-width: 100%;
                }

                .brand-title {
                    font-size: 2rem;
                }

                .logo-svg {
                    width: 60px;
                    height: 60px;
                }
            }

            @media (max-width: 480px) {
                .main-container {
                    padding: 1rem;
                }

                .content-card {
                    padding: 2rem 1.5rem;
                    border-radius: var(--border-radius);
                }

                .brand-title {
                    font-size: 1.75rem;
                }
            }

            /* Accessibility */
            @media (prefers-reduced-motion: reduce) {
                * {
                    animation-duration: 0.01ms !important;
                    animation-iteration-count: 1 !important;
                    transition-duration: 0.01ms !important;
                }
            }

            /* High Contrast Mode */
            @media (prefers-contrast: high) {
                .content-card {
                    border: 2px solid var(--accent-teal);
                    background: rgba(0, 0, 0, 0.8);
                }
            }
        </style>
    </head>
    <body>
        <div class="main-container">
            <div class="logo-container">
                <div class="logo-wrapper">
                    <div class="logo-glow"></div>
                    <svg class="logo-svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient id="logoGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" style="stop-color:#5eead4"/>
                                <stop offset="50%" style="stop-color:#14b8a6"/>
                                <stop offset="100%" style="stop-color:#0f766e"/>
                            </linearGradient>
                            <filter id="logoGlow">
                                <feGaussianBlur stdDeviation="3" result="coloredBlur"/>
                                <feMerge> 
                                    <feMergeNode in="coloredBlur"/>
                                    <feMergeNode in="SourceGraphic"/>
                                </feMerge>
                            </filter>
                        </defs>
                        
                        <!-- Outer Ring -->
                        <circle cx="50" cy="50" r="45" fill="none" stroke="url(#logoGradient)" stroke-width="2" opacity="0.3"/>
                        
                        <!-- Main Shape -->
                        <path d="M50 10 L80 30 L80 70 L50 90 L20 70 L20 30 Z" 
                              fill="url(#logoGradient)" 
                              filter="url(#logoGlow)" 
                              opacity="0.9"/>
                        
                        <!-- Inner Pattern -->
                        <path d="M50 20 L70 35 L70 65 L50 80 L30 65 L30 35 Z" 
                              fill="rgba(255,255,255,0.2)" 
                              stroke="rgba(255,255,255,0.4)" 
                              stroke-width="1"/>
                        
                        <!-- Center Diamond -->
                        <path d="M50 35 L60 50 L50 65 L40 50 Z" 
                              fill="white" 
                              opacity="0.8"/>
                        
                        <!-- Animated Dots -->
                        <circle cx="25" cy="25" r="2" fill="url(#logoGradient)" opacity="0.6">
                            <animate attributeName="opacity" values="0.6;1;0.6" dur="2s" repeatCount="indefinite"/>
                        </circle>
                        <circle cx="75" cy="25" r="1.5" fill="url(#logoGradient)" opacity="0.4">
                            <animate attributeName="opacity" values="0.4;0.8;0.4" dur="3s" repeatCount="indefinite"/>
                        </circle>
                        <circle cx="75" cy="75" r="2.5" fill="url(#logoGradient)" opacity="0.5">
                            <animate attributeName="opacity" values="0.5;0.9;0.5" dur="2.5s" repeatCount="indefinite"/>
                        </circle>
                        <circle cx="25" cy="75" r="1.8" fill="url(#logoGradient)" opacity="0.3">
                            <animate attributeName="opacity" values="0.3;0.7;0.3" dur="4s" repeatCount="indefinite"/>
                        </circle>
                    </svg>
                </div>
                
                <h1 class="brand-title">Amallan</h1>
                <p class="brand-subtitle">Secure Access Portal  </p>
            </div>

            <div class="content-card">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>

