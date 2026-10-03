<div class="main-content bg-gray-50/50 min-h-screen">
    <div class="page-content py-8">
        <div class="container mx-auto px-4 lg:max-w-7xl">
            
            <div class="mb-8">
                <h3 class="text-2xl font-bold text-gray-900 tracking-tight">{{ $title ?? 'Candidate Tracking' }}</h3>
                <p class="text-sm text-gray-500 mt-1">Review and manage candidates across all your job postings.</p>
            </div>

            <!-- Candidate Kanban Board / List -->
            <div class="flex overflow-x-auto gap-6 pb-4">
                
                <!-- Applied Column -->
                <div class="flex-shrink-0 w-80 flex flex-col gap-4">
                    <div class="flex items-center justify-between border-b-2 border-gray-200 pb-2">
                        <h4 class="font-semibold text-gray-700 flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-blue-500"></span>
                            New Applied
                        </h4>
                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-0.5 rounded-full font-medium">2</span>
                    </div>

                    <!-- Card -->
                    <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-200 hover:shadow-md transition-shadow cursor-pointer">
                        <div class="flex justify-between items-start mb-2">
                            <h5 class="font-bold text-gray-900 text-sm">John Doe</h5>
                            <span class="text-xs text-gray-400">2d ago</span>
                        </div>
                        <p class="text-xs text-blue-600 font-medium mb-3">Software Engineer</p>
                        
                        <div class="flex items-center gap-2 text-xs text-gray-500 mb-4">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                            PT Tech Innovators
                        </div>
                        
                        <div class="flex gap-2 border-t border-gray-100 pt-3">
                            <button class="flex-1 py-1.5 bg-blue-50 text-blue-600 hover:bg-blue-100 rounded-md text-xs font-medium transition-colors">Review CV</button>
                            <button class="px-2 py-1.5 bg-gray-50 text-gray-600 hover:bg-gray-100 rounded-md text-xs font-medium transition-colors"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg></button>
                        </div>
                    </div>

                    <!-- Card -->
                    <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-200 hover:shadow-md transition-shadow cursor-pointer">
                        <div class="flex justify-between items-start mb-2">
                            <h5 class="font-bold text-gray-900 text-sm">Jane Smith</h5>
                            <span class="text-xs text-gray-400">3d ago</span>
                        </div>
                        <p class="text-xs text-blue-600 font-medium mb-3">UI/UX Designer</p>
                        
                        <div class="flex items-center gap-2 text-xs text-gray-500 mb-4">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                            Creative Studio
                        </div>
                        
                        <div class="flex gap-2 border-t border-gray-100 pt-3">
                            <button class="flex-1 py-1.5 bg-blue-50 text-blue-600 hover:bg-blue-100 rounded-md text-xs font-medium transition-colors">Review CV</button>
                            <button class="px-2 py-1.5 bg-gray-50 text-gray-600 hover:bg-gray-100 rounded-md text-xs font-medium transition-colors"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg></button>
                        </div>
                    </div>
                </div>

                <!-- Interviewing Column -->
                <div class="flex-shrink-0 w-80 flex flex-col gap-4">
                    <div class="flex items-center justify-between border-b-2 border-yellow-400 pb-2">
                        <h4 class="font-semibold text-gray-700 flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-yellow-400"></span>
                            Interviewing
                        </h4>
                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-0.5 rounded-full font-medium">1</span>
                    </div>

                    <!-- Card -->
                    <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-200 hover:shadow-md transition-shadow cursor-pointer">
                        <div class="flex justify-between items-start mb-2">
                            <h5 class="font-bold text-gray-900 text-sm">Alex Johnson</h5>
                            <span class="text-xs text-gray-400">1w ago</span>
                        </div>
                        <p class="text-xs text-blue-600 font-medium mb-3">Software Engineer</p>
                        
                        <div class="mt-2 text-xs font-medium text-yellow-600 bg-yellow-50 inline-block px-2 py-1 rounded">
                            AI Interview Passed (85%)
                        </div>
                    </div>
                </div>

                <!-- Hired Column -->
                <div class="flex-shrink-0 w-80 flex flex-col gap-4">
                    <div class="flex items-center justify-between border-b-2 border-green-500 pb-2">
                        <h4 class="font-semibold text-gray-700 flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-green-500"></span>
                            Hired
                        </h4>
                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-0.5 rounded-full font-medium">0</span>
                    </div>
                    
                    <div class="text-center py-8 px-4 border-2 border-dashed border-gray-200 rounded-xl">
                        <p class="text-sm text-gray-400">No candidates in this stage yet.</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
