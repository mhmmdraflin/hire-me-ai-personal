<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'My Website' }}</title>

    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Optional: Font & Icon -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Optional: Alpine.js for interactivity -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.css" rel="stylesheet" type="text/css" />
</head>

<!-- Header -->
<header class="bg-white shadow">
    <div class="container mx-auto px-4 py-4 flex items-center justify-between">

        <!-- Logo kiri -->
        <div class="text-2xl font-bold text-blue-600 flex items-center space-x-2 lg:ml-12">
            <a href="{{ url('/') }}" class="text-blue-600 font-bold tracking-tight">HireMe.AI</a>
        </div>

        <!-- Nav tengah -->
        <nav class="hidden md:flex space-x-6 absolute left-1/2 transform -translate-x-1/2">
            <a href="{{ route('recruiter.dashboard') }}"
                class="{{ request()->routeIs('recruiter.dashboard') ? 'text-blue-600 font-semibold' : 'text-gray-600 hover:text-gray-900' }} transition-colors">
                Dashboard
            </a>
            <a href="{{ route('recruiter.jobs') }}"
                class="{{ request()->routeIs('recruiter.jobs') ? 'text-blue-600 font-semibold' : 'text-gray-600 hover:text-gray-900' }} transition-colors">
                Jobs
            </a>
            <a href="{{ route('recruiter.candidates') }}"
                class="{{ request()->routeIs('recruiter.candidates') ? 'text-blue-600 font-semibold' : 'text-gray-600 hover:text-gray-900' }} transition-colors">
                Candidates
            </a>
            <a href="{{ route('recruiter.analytic') }}"
                class="{{ request()->routeIs('recruiter.analytic') ? 'text-blue-600 font-semibold' : 'text-gray-600 hover:text-gray-900' }} transition-colors">
                Analytic
            </a>
        </nav>

        <!-- Kanan -->
        <div class="relative lg:mr-12 flex items-center gap-4">
            <div class="hidden sm:flex items-center space-x-2">
                <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-bold text-sm">
                    R
                </div>
                <span class="font-medium text-sm text-gray-700">Hi, Recruiter</span>
            </div>
            
            <form action="{{ route('logout') }}" method="POST" class="m-0">
                @csrf
                <button type="submit" class="text-sm font-medium text-gray-600 hover:text-red-600 transition-colors px-3 py-1.5 border border-transparent hover:border-red-100 hover:bg-red-50 rounded-md">
                    Log Out
                </button>
            </form>
        </div>

    </div>
</header>

<body class="flex flex-col min-h-screen">
    <div id="layout-wrapper" class="flex-grow">
