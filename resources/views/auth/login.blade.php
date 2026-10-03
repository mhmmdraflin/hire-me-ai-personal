@extends('homepage.home')

@section('content')
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 bg-gray-50">
        <div class="max-w-md w-full bg-white p-8 rounded-2xl shadow-sm border border-gray-100">
            
            <div class="text-center mb-8">
                <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight">
                    Log in to your account
                </h2>
                <p class="mt-2 text-sm text-gray-600">
                    Or <a href="{{ url('/register') }}" class="font-medium text-blue-600 hover:text-blue-500 transition-colors">create a new account</a>
                </p>
            </div>
            
            <form id="loginForm" class="space-y-6" action="#" method="POST">
                <div class="space-y-4">
                    <!-- Email -->
                    <div class="text-left">
                        <label for="email" class="block text-sm font-medium text-gray-700">
                            Email address
                        </label>
                        <input id="email" name="email" type="email" autocomplete="email" required
                            class="appearance-none bg-white relative block w-full px-3 py-2 border mt-1 border-gray-300 placeholder-gray-400 text-gray-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all sm:text-sm"
                            placeholder="email@example.com">
                    </div>

                    <!-- Password -->
                    <div class="text-left">
                        <label for="password" class="block text-sm font-medium text-gray-700">
                            Password
                        </label>
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                            class="appearance-none bg-white relative block w-full mt-1 px-3 py-2 border border-gray-300 placeholder-gray-400 text-gray-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all sm:text-sm"
                            placeholder="••••••••">
                    </div>

                    <!-- Role Selection -->
                    <div class="pt-2">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Login as</label>
                        <div class="flex space-x-6">
                            <label class="flex items-center space-x-2 cursor-pointer group">
                                <input type="radio" name="role" value="applicant" checked
                                    class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500 cursor-pointer">
                                <span class="text-sm font-medium text-gray-700 group-hover:text-gray-900 transition-colors">Applicant</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer group">
                                <input type="radio" name="role" value="recruiter"
                                    class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500 cursor-pointer">
                                <span class="text-sm font-medium text-gray-700 group-hover:text-gray-900 transition-colors">Recruiter</span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember" name="remember" type="checkbox"
                            class="h-4 w-4 bg-white text-blue-600 focus:ring-blue-500 border-gray-300 rounded cursor-pointer transition-colors">
                        <label for="remember" class="ml-2 block text-sm text-gray-700 cursor-pointer">Remember me</label>
                    </div>

                    <div class="text-sm">
                        <a href="#" class="font-medium text-blue-600 hover:text-blue-500 transition-colors">Forgot your password?</a>
                    </div>
                </div>

                <div>
                    <button type="submit" id="submitBtn"
                        class="group relative w-full flex justify-center py-2.5 px-4 border border-transparent text-sm font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors shadow-sm">
                        Log in
                    </button>
                </div>
            </form>

            <div class="relative mt-8">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-200"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-3 bg-white text-gray-500">Or continue with</span>
                </div>
            </div>

            <div class="flex justify-center gap-4 mt-6">
                <button type="button"
                    class="flex-1 h-12 border border-gray-200 rounded-xl hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-gray-200 transition-all flex items-center justify-center bg-white shadow-sm">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Google_Favicon_2025.svg/250px-Google_Favicon_2025.svg.png"
                        alt="Google" class="h-5 w-5">
                </button>
                
                <button type="button"
                    class="flex-1 h-12 border border-gray-200 rounded-xl hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-gray-200 transition-all flex items-center justify-center bg-white shadow-sm">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M15.228 11.391c-.015-1.921 1.57-2.844 1.642-2.888-1.04-1.52-2.978-1.728-3.633-1.748-1.53-.153-2.993.896-3.774.896-.78 0-1.99-1.025-3.239-1.002-1.603.023-3.082.92-3.905 2.348-1.666 2.87-1.162 7.158 1.103 10.428.89 1.258 1.954 2.651 3.306 2.602 1.305-.047 1.802-.835 3.376-.835 1.564 0 2.031.835 3.385.811 1.401-.023 2.324-1.272 3.204-2.548 1.018-1.48 1.442-2.915 1.464-2.99-.033-.012-2.808-1.071-2.929-4.074zm-2.148-3.666c.725-.873 1.213-2.083 1.077-3.292-1.034.041-2.296.685-3.045 1.573-.591.685-1.171 1.916-1.015 3.111 1.155.088 2.274-.526 2.983-1.392z"/>
                    </svg>
                </button>
                
                <button type="button"
                    class="flex-1 h-12 border border-gray-200 rounded-xl hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-gray-200 transition-all flex items-center justify-center bg-white shadow-sm">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/91/Octicons-mark-github.svg" 
                        alt="GitHub" class="h-5 w-5 opacity-90">
                </button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const form = document.getElementById('loginForm');
            form.addEventListener('submit', function(e) {
                e.preventDefault();

                const submitBtn = document.getElementById('submitBtn');
                const originalText = submitBtn.innerText;
                const role = document.querySelector('input[name="role"]:checked').value;
                
                submitBtn.disabled = true;
                submitBtn.innerText = 'Logging in...';

                // Determine redirect URL based on selected role
                const redirectUrl = role === 'recruiter' 
                    ? '{{ url('/recruiter-dashboard') }}' 
                    : '{{ url('/applicant-dashboard') }}';

                // Simulate network request delay for demo
                setTimeout(() => {
                    Swal.fire({
                        icon: 'success',
                        title: 'Login Successful',
                        text: 'Welcome back!',
                        showConfirmButton: false,
                        timer: 1500,
                        position: 'center'
                    }).then(() => {
                        window.location.href = redirectUrl;
                    });
                }, 800);
            });
        });
    </script>
@endsection
