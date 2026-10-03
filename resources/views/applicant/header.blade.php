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
        <div class="container mx-auto px-4 py-4 flex items-center relative">
          
          <!-- Logo kiri -->
          <div class="text-2xl font-bold text-blue-600">
            <a href="{{ url('/') }}">Hire Me</a>
          </div>
      
          <!-- Nav center -->
          <nav class="hidden md:flex space-x-6 absolute left-1/2 transform -translate-x-1/2">
            <a href="{{ route('applicant.dashboard') }}" class="{{ request()->routeIs('applicant.dashboard') ? 'text-blue-600 font-semibold' : 'text-gray-600 hover:text-gray-900' }} transition-colors">Dashboard</a>
            <a href="{{ route('applicant.interviewai') }}" class="{{ request()->routeIs('applicant.interviewai') ? 'text-blue-600 font-semibold' : 'text-gray-600 hover:text-gray-900' }} transition-colors">AI Interview</a>
            <a href="{{ route('applicant.personality') }}" class="{{ request()->routeIs('applicant.personality') ? 'text-blue-600 font-semibold' : 'text-gray-600 hover:text-gray-900' }} transition-colors">Personality Test</a>
            <a href="{{ route('applicant.gamification') }}" class="{{ request()->routeIs('applicant.gamification') ? 'text-blue-600 font-semibold' : 'text-gray-600 hover:text-gray-900' }} transition-colors">Gamification</a>
          </nav>
          
          <!-- Kanan: Logout -->
          <div class="ml-auto flex items-center">
              <a href="{{ route('login') }}" class="text-sm font-medium text-gray-600 hover:text-red-600 transition-colors px-3 py-1.5 border border-transparent hover:border-red-100 hover:bg-red-50 rounded-md">
                  Log Out
              </a>
          </div>
      
        </div>
      </header>

      <body class="flex flex-col min-h-screen">
        <div id="layout-wrapper" class="flex-grow">