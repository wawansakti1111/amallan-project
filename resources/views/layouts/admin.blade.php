<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Amallan') }} - Admin</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- CSS Kustom untuk Layout Admin -->
        <style>
            .admin-header {
                background: linear-gradient(90deg, #008080 0%, #20B2AA 100%); /* Tosca Green */
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                color: white;
                padding: 1.5rem;
                display: flex;
                justify-content: space-between;
                align-items: center;
                position: relative; /* Ensure z-index works */
                z-index: 10;
            }

            .admin-menu a {
                padding: 0.75rem 1.25rem;
                border-radius: 0.75rem;
                transition: background-color 0.3s ease, transform 0.2s ease;
                font-weight: 600;
                color: white;
                text-decoration: none;
                position: relative;
                overflow: hidden;
                z-index: 1;
            }

            .admin-menu a::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(255, 255, 255, 0.15);
                z-index: -1;
                transform: scaleX(0);
                transform-origin: right;
                transition: transform 0.3s ease;
            }

            .admin-menu a:hover::before {
                transform: scaleX(1);
                transform-origin: left;
            }

            .admin-menu a:hover {
                background-color: rgba(255, 255, 255, 0.25);
                transform: translateY(-2px);
            }

            .profile-dropdown-btn {
                background: none;
                border: 2px solid rgba(255, 255, 255, 0.7);
                border-radius: 0.75rem;
                color: white;
                font-weight: 600;
                display: flex;
                align-items: center;
                cursor: pointer;
                padding: 0.5rem 1rem;
                transition: background-color 0.3s ease, border-color 0.3s ease, transform 0.2s ease;
            }

            .profile-dropdown-btn:hover {
                background-color: rgba(255, 255, 255, 0.1);
                border-color: white;
                transform: translateY(-2px);
            }

            .profile-dropdown-btn svg {
                margin-left: 0.5rem;
            }

            /* Ensure dropdown content is visible */
            .relative {
                z-index: 20; /* Higher z-index for the dropdown container */
            }
        </style>
    </head>
    <body class="font-sans antialiased bg-gray-100">
        <div class="min-h-screen">
            <!-- Header khusus admin -->
            <header class="admin-header">
                <!-- Judul atau Logo Admin -->
                <h3 class="text-2xl font-bold">Amallan Admin</h3>
                
                <!-- Menu Navigasi Admin -->
                <nav class="flex items-center space-x-6 admin-menu">
                    <ul class="flex space-x-4">
                        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li><a href="{{ route('admin.news.index') }}">Kelola Berita</a></li>
                    </ul>
                    
                    <!-- Dropdown Profil dan Logout -->
                    <div class="relative">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="profile-dropdown-btn">
                                    <div>{{ Auth::user()->name }}</div>
                                    <div class="ms-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <!-- Tautan ke halaman profil -->
                                <x-dropdown-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-dropdown-link>

                                <!-- Tautan Logout -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                </nav>
            </header>

            <!-- Konten utama -->
            <main class="p-8">
                <!-- Header halaman di sini -->
                @if (isset($header))
                    <header class="bg-white shadow mb-8 rounded-lg">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endif

                <!-- Konten halaman yang diisi oleh view admin -->
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </body>
</html>


