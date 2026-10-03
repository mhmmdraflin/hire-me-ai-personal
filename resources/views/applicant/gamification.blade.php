<div class="main-content bg-white">
    <div class="page-content">
        <div class="container mx-auto px-4 lg:max-w-5xl py-8">
            
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-10 gap-4">
                <div>
                    <h1 class="text-2xl font-bold text-gray-900 tracking-tight">{{ $title ?? 'Skill Assessments' }}</h1>
                    <p class="text-gray-500 mt-1 text-sm">Complete challenges to prove your skills and earn verified badges.</p>
                </div>
                <div class="bg-gray-50 border border-gray-200 rounded-lg px-4 py-2 flex items-center gap-3">
                    <div class="text-sm text-gray-500">Your Score</div>
                    <div class="text-lg font-bold text-gray-900">0 <span class="text-xs font-normal text-gray-500">pts</span></div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <!-- Card 1 -->
                <div class="border border-gray-200 rounded-xl p-6 flex flex-col hover:border-gray-300 transition-colors">
                    <div class="flex justify-between items-start mb-4">
                        <div class="w-12 h-12 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                        </div>
                        <span class="bg-gray-100 text-gray-600 text-xs font-medium px-2.5 py-1 rounded">Frontend</span>
                    </div>
                    <h3 class="font-semibold text-gray-900 text-lg mb-1">React Fundamentals</h3>
                    <p class="text-sm text-gray-500 mb-6 flex-grow">Test your knowledge of React hooks, state management, and component lifecycles.</p>
                    
                    <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                        <span class="text-sm font-medium text-gray-900">15 mins</span>
                        <button class="text-blue-600 hover:text-blue-700 text-sm font-medium">Start Challenge</button>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="border border-gray-200 rounded-xl p-6 flex flex-col hover:border-gray-300 transition-colors">
                    <div class="flex justify-between items-start mb-4">
                        <div class="w-12 h-12 rounded-lg bg-green-50 text-green-600 flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg>
                        </div>
                        <span class="bg-gray-100 text-gray-600 text-xs font-medium px-2.5 py-1 rounded">Backend</span>
                    </div>
                    <h3 class="font-semibold text-gray-900 text-lg mb-1">SQL & Database Design</h3>
                    <p class="text-sm text-gray-500 mb-6 flex-grow">Evaluate your ability to write complex queries and design normalized schemas.</p>
                    
                    <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                        <span class="text-sm font-medium text-gray-900">20 mins</span>
                        <button class="text-blue-600 hover:text-blue-700 text-sm font-medium">Start Challenge</button>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="border border-gray-200 rounded-xl p-6 flex flex-col hover:border-gray-300 transition-colors">
                    <div class="flex justify-between items-start mb-4">
                        <div class="w-12 h-12 rounded-lg bg-purple-50 text-purple-600 flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <span class="bg-gray-100 text-gray-600 text-xs font-medium px-2.5 py-1 rounded">Security</span>
                    </div>
                    <h3 class="font-semibold text-gray-900 text-lg mb-1">Web Security Basics</h3>
                    <p class="text-sm text-gray-500 mb-6 flex-grow">Identify and patch common vulnerabilities like XSS, CSRF, and SQL Injection.</p>
                    
                    <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                        <span class="text-sm font-medium text-gray-900">15 mins</span>
                        <button class="text-blue-600 hover:text-blue-700 text-sm font-medium">Start Challenge</button>
                    </div>
                </div>

            </div>
            
        </div>
    </div>
</div>
