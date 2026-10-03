<div class="main-content bg-gray-50/50 min-h-screen">
    <div class="page-content py-8">
        <div class="container mx-auto px-4 max-w-7xl">
            <h3 class="text-2xl font-bold text-gray-900 mb-8 tracking-tight">{{ $title ?? 'AI Interview' }}</h3>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                <!-- Kolom Kiri -->
                <div class="lg:col-span-7 flex flex-col gap-6">
                    <!-- Setup Card -->
                    <div class="w-full bg-white rounded-2xl shadow-sm border border-gray-200 p-6">
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-gray-900">Setup Interview</h3>
                            <p class="text-sm text-gray-500 mt-1">Configure your AI interviewer settings before starting.</p>
                        </div>
                        
                        <div class="space-y-5">
                            <div>
                                <label for="interviewType" class="block text-sm font-medium text-gray-700 mb-1.5">Interview Role</label>
                                <select id="interviewType" name="interviewType"
                                    class="block w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg text-sm text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
                                    <option value="">-- Select role --</option>
                                    <option value="frontend">Frontend Developer</option>
                                    <option value="backend">Backend Developer</option>
                                    <option value="fullstack">Fullstack Developer</option>
                                </select>
                            </div>

                            <div>
                                <label for="experienceLevel" class="block text-sm font-medium text-gray-700 mb-1.5">Experience Level</label>
                                <select id="experienceLevel" name="experienceLevel"
                                    class="block w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg text-sm text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
                                    <option value="basic">Entry Level</option>
                                    <option value="intermediate">Intermediate</option>
                                    <option value="advanced">Senior / Advanced</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Focus Areas</label>
                                <div class="flex flex-col gap-y-3">
                                    <label class="inline-flex items-center group cursor-pointer">
                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-50 border-gray-300 rounded focus:ring-blue-500">
                                        <span class="ml-3 text-sm text-gray-700 group-hover:text-gray-900 transition-colors">Technical Skills</span>
                                    </label>
                                    <label class="inline-flex items-center group cursor-pointer">
                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-50 border-gray-300 rounded focus:ring-blue-500">
                                        <span class="ml-3 text-sm text-gray-700 group-hover:text-gray-900 transition-colors">Behavioral Questions</span>
                                    </label>
                                    <label class="inline-flex items-center group cursor-pointer">
                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-50 border-gray-300 rounded focus:ring-blue-500">
                                        <span class="ml-3 text-sm text-gray-700 group-hover:text-gray-900 transition-colors">System Design / Architecture</span>
                                    </label>
                                </div>
                            </div>

                            <div>
                                <label for="duration" class="block text-sm font-medium text-gray-700 mb-1.5">Duration</label>
                                <select name="duration" id="duration"
                                    class="block w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg text-sm text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
                                    <option value="15">15 Minutes</option>
                                    <option value="30">30 Minutes</option>
                                    <option value="45">45 Minutes</option>
                                    <option value="60">60 Minutes</option>
                                </select>
                            </div>

                            <button class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2.5 px-4 rounded-lg transition-colors mt-2">
                                Start Interview
                            </button>
                        </div>
                    </div>

                    <!-- Tips Card -->
                    <div class="w-full bg-white rounded-2xl shadow-sm border border-gray-200 p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Interview Tips</h3>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="shrink-0 mt-0.5">
                                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                <p class="ml-3 text-sm text-gray-600 leading-relaxed">Take your time thinking before answering. Silence is better than rushing.</p>
                            </div>
                            <div class="flex items-start">
                                <div class="shrink-0 mt-0.5">
                                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                <p class="ml-3 text-sm text-gray-600 leading-relaxed">Use the STAR method (Situation, Task, Action, Result) for behavioral questions.</p>
                            </div>
                            <div class="flex items-start">
                                <div class="shrink-0 mt-0.5">
                                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                <p class="ml-3 text-sm text-gray-600 leading-relaxed">Treat the AI like a real person. Be concise, clear, and confident.</p>
                            </div>
                            <div class="flex items-start">
                                <div class="shrink-0 mt-0.5">
                                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                <p class="ml-3 text-sm text-gray-600 leading-relaxed">You can ask for clarification if a question isn't clear.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kolom Kanan (Chat) -->
                <div class="lg:col-span-5 h-[650px]">
                    <div class="w-full h-full bg-white rounded-2xl shadow-sm border border-gray-200 flex flex-col">
                        
                        <!-- Header -->
                        <div class="px-6 py-4 border-b border-gray-100 flex items-center gap-3">
                            <div class="relative">
                                <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center text-blue-600">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                </div>
                                <div class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 border-2 border-white rounded-full"></div>
                            </div>
                            <div>
                                <h3 class="text-sm font-bold text-gray-900">AI Recruiter</h3>
                                <p class="text-xs text-gray-500">Active</p>
                            </div>
                        </div>

                        <!-- Chat Messages -->
                        <div class="flex-1 overflow-y-auto p-6 space-y-6">
                            
                            <!-- Bot Message -->
                            <div class="flex w-full">
                                <div class="bg-gray-100 text-gray-800 px-4 py-3 rounded-2xl rounded-tl-sm text-sm max-w-[85%] leading-relaxed">
                                    Hello! I'm your AI interviewer for today. Before we begin, are you ready to start the technical assessment?
                                </div>
                            </div>

                            <!-- User Message -->
                            <div class="flex w-full justify-end">
                                <div class="bg-blue-600 text-white px-4 py-3 rounded-2xl rounded-tr-sm text-sm max-w-[85%] leading-relaxed">
                                    Yes, I'm ready to begin.
                                </div>
                            </div>
                            
                            <!-- Bot Message -->
                            <div class="flex w-full">
                                <div class="bg-gray-100 text-gray-800 px-4 py-3 rounded-2xl rounded-tl-sm text-sm max-w-[85%] leading-relaxed">
                                    Great. Let's start with a basic concept. Can you explain the difference between a GET and a POST request in REST APIs?
                                </div>
                            </div>
                            
                        </div>

                        <!-- Input Area -->
                        <div class="p-4 border-t border-gray-100 bg-gray-50/50 rounded-b-2xl">
                            <form class="flex items-end gap-2">
                                <div class="flex-1 relative">
                                    <textarea rows="1" placeholder="Type your answer here..."
                                        class="w-full bg-white border border-gray-300 rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent resize-none overflow-hidden block"></textarea>
                                </div>
                                <button type="submit"
                                    class="shrink-0 bg-blue-600 text-white p-3 rounded-xl hover:bg-blue-700 transition-colors flex items-center justify-center">
                                    <svg class="w-5 h-5 ml-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                                </button>
                            </form>
                            <p class="text-center text-xs text-gray-400 mt-3">Press Enter to send, Shift + Enter for new line</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
