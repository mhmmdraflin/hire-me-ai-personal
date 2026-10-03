<!-- resources/views/template/header.blade.php -->
<header class="bg-white shadow">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <!-- Logo -->
        <div class="h-10">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/homepage/logo_full_website.png') }}" alt="MySite Logo" class="h-full object-contain">
            </a>
        </div>

        <!-- Navigation Menu -->
        <nav class="hidden md:flex space-x-6">
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-blue-600 font-semibold' : 'text-gray-700 hover:text-blue-600' }} transition-colors">Home</a>
            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-blue-600 font-semibold' : 'text-gray-700 hover:text-blue-600' }} transition-colors">About</a>
            <a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'text-blue-600 font-semibold' : 'text-gray-700 hover:text-blue-600' }} transition-colors">Services</a>
            <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-blue-600 font-semibold' : 'text-gray-700 hover:text-blue-600' }} transition-colors">Contact</a>
        </nav>

        <!-- Button Login / Signup -->
        <div class="hidden md:block">
            <a href="{{ url('/login') }}" class="bg-blue-600 text-white text-sm font-bold px-5 py-3 rounded hover:bg-blue-700">
                LOGIN
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="md:hidden">
            <button id="menu-toggle" class="text-gray-700 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor"
                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden px-4 pb-4">
        <a href="{{ route('home') }}" class="block py-2 {{ request()->routeIs('home') ? 'text-blue-600 font-semibold' : 'text-gray-700 hover:text-blue-600' }}">Home</a>
        <a href="{{ route('about') }}" class="block py-2 {{ request()->routeIs('about') ? 'text-blue-600 font-semibold' : 'text-gray-700 hover:text-blue-600' }}">About</a>
        <a href="{{ route('services') }}" class="block py-2 {{ request()->routeIs('services') ? 'text-blue-600 font-semibold' : 'text-gray-700 hover:text-blue-600' }}">Services</a>
        <a href="{{ route('contact') }}" class="block py-2 {{ request()->routeIs('contact') ? 'text-blue-600 font-semibold' : 'text-gray-700 hover:text-blue-600' }}">Contact</a>
        <a href="{{ url('/register') }}"
            class="block py-2 mt-2 bg-blue-600 text-white text-center rounded hover:bg-blue-700">
            Register
        </a>
    </div>

    <!-- Script Toggle Menu -->
    <script>
        const toggle = document.getElementById('menu-toggle');
        const menu = document.getElementById('mobile-menu');

        toggle.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</header>
