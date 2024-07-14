<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <!-- Navigation -->
        <nav class="bg-white shadow" aria-labelledby="primary-navigation">
            <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8 flex items-center justify-between">
                <div class="flex items-center">
                    <a href="#" class="text-gray-800 text-lg font-semibold">Logo</a>
                </div>
                <div class="hidden sm:flex items-center space-x-4">
                    @guest
                        @if (Route::has('login'))
                            <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-800">Login</a>
                        @endif
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-gray-600 hover:text-gray-800">Register</a>
                        @endif
                    @else
                        <a href="{{ url('/dashboard') }}" class="text-gray-600 hover:text-gray-800">Dashboard</a>
                    @endguest
                </div>
                <div class="sm:hidden flex items-center -mr-2">
                    <button id="mobile-menu-toggle" aria-haspopup="true" aria-label="Open main menu">
                        <span class="sr-only">Open main menu</span>
                        <span class="block h-3 w-3 bg-gray-700 rounded-full"></span>
                        <span class="block h-3 w-3 bg-gray-700 rounded-full mt-1"></span>
                        <span class="block h-3 w-3 bg-gray-700 rounded-full mt-1"></span>
                    </button>
                </div>
            </div>
        </nav>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="sm:hidden bg-white shadow-md" aria-labelledby="mobile-menu-toggle" role="dialog" aria-modal="true" aria-expanded="false" style="display: none;">
            <div class="py-3">
                @guest
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}" class="block py-2 px-4 text-gray-600 hover:text-gray-800">Login</a>
                    @endif
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="block py-2 px-4 text-gray-600 hover:text-gray-800">Register</a>
                    @endif
                @else
                    <a href="{{ url('/dashboard') }}" class="block py-2 px-4 text-gray-600 hover:text-gray-800">Dashboard</a>
                @endguest
            </div>
        </div>

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    <!-- Mobile Menu Script --
    <script>
        const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuToggle.addEventListener('click', () => {
            const expanded = mobileMenu.getAttribute('aria-expanded') === 'true' || false;
            mobileMenu.setAttribute('aria-expanded', !expanded);
            mobileMenu.style.display = expanded ? 'none' : 'block';
        });
    </script>-->
</body>
</html>
