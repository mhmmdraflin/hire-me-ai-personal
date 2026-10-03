@extends('homepage.home')

@section('content')
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 bg-gray-50">
        <div class="max-w-lg w-full bg-white p-8 rounded-2xl shadow-sm border border-gray-100">
            
            <div class="text-center mb-8">
                <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight">Create your account</h2>
                <p class="mt-2 text-sm text-gray-600">
                    Or <a href="{{ url('/login') }}" class="font-medium text-blue-600 hover:text-blue-500 transition-colors">log in to an existing account</a>
                </p>
            </div>

            @if (session('success'))
                <div class="mb-4 p-3 rounded-lg bg-green-50 text-green-700 text-sm font-medium border border-green-200">{{ session('success') }}</div>
            @endif
            @if ($errors->any())
                <div class="mb-4 p-3 rounded-lg bg-red-50 text-red-700 text-sm font-medium border border-red-200">
                    <ul class="list-disc pl-5 space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('register') }}" method="POST" class="space-y-5">
                @csrf

                <!-- Role Selection -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Register as</label>
                    <div class="flex space-x-6">
                        <label class="flex items-center space-x-2 cursor-pointer group">
                            <input type="radio" name="role" value="APPLICANT" required
                                class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500 cursor-pointer">
                            <span class="text-sm font-medium text-gray-700 group-hover:text-gray-900 transition-colors">Applicant</span>
                        </label>
                        <label class="flex items-center space-x-2 cursor-pointer group">
                            <input type="radio" name="role" value="RECRUITER" required
                                class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500 cursor-pointer">
                            <span class="text-sm font-medium text-gray-700 group-hover:text-gray-900 transition-colors">Recruiter</span>
                        </label>
                    </div>
                </div>

                <!-- First & Last Name -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div>
                        <label for="first_name" class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
                        <input type="text" name="first_name" placeholder="John" id="first_name" required
                            class="appearance-none block w-full px-4 py-2 border border-gray-300 rounded-lg text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
                    </div>
                    <div>
                        <label for="last_name" class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
                        <input type="text" name="last_name" placeholder="Doe" id="last_name" required
                            class="appearance-none block w-full px-4 py-2 border border-gray-300 rounded-lg text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
                    </div>
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                    <input type="email" name="email" id="email" placeholder="you@example.com" required
                        class="appearance-none block w-full px-4 py-2 border border-gray-300 rounded-lg text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
                </div>

                <!-- Username -->
                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700 mb-1">Username</label>
                    <input type="text" name="username" id="username" placeholder="johndoe123" required
                        class="appearance-none block w-full px-4 py-2 border border-gray-300 rounded-lg text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password" name="password" id="password" placeholder="••••••••" required
                        class="appearance-none block w-full px-4 py-2 border border-gray-300 rounded-lg text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
                </div>

                <!-- Confirm Password -->
                <div>
                    <label for="confirm_password" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="confirm_password" placeholder="••••••••" required
                        class="appearance-none block w-full px-4 py-2 border border-gray-300 rounded-lg text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
                </div>

                <!-- Terms Checkbox -->
                <div class="flex items-start pt-2">
                    <div class="flex items-center h-5">
                        <input type="checkbox" name="terms" id="terms" required 
                            class="w-4 h-4 bg-white border-gray-300 rounded text-blue-600 focus:ring-blue-500 cursor-pointer transition-colors">
                    </div>
                    <label for="terms" class="ml-3 block text-sm text-gray-600 cursor-pointer">
                        I agree to the <a href="#" class="font-medium text-blue-600 hover:text-blue-500 transition-colors">Terms of Service</a>
                        and <a href="#" class="font-medium text-blue-600 hover:text-blue-500 transition-colors">Privacy Policy</a>
                    </label>
                </div>

                <!-- Submit Button -->
                <div class="pt-2">
                    <button type="submit"
                        class="w-full flex justify-center py-2.5 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                        Create account
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const form = document.querySelector('form');
            form.addEventListener('submit', function(e) {
                e.preventDefault();

                const formData = new FormData(form);
                const submitBtn = form.querySelector('button[type="submit"]');
                const originalText = submitBtn.innerText;
                
                submitBtn.disabled = true;
                submitBtn.innerText = 'Processing...';

                fetch(form.action, {
                        method: 'POST',
                        headers: {
                            'Accept': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        credentials: 'same-origin',
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success!',
                                text: data.message,
                                timer: 2000,
                                showConfirmButton: false,
                                position: 'center'
                            }).then(() => {
                                window.location.href = '{{ route('login') }}';
                            });
                        } else {
                            submitBtn.disabled = false;
                            submitBtn.innerText = originalText;
                            Swal.fire({
                                icon: 'error',
                                title: 'Registration Failed!',
                                text: data.message,
                                showConfirmButton: true
                            });
                        }
                    })
                    .catch(err => {
                        submitBtn.disabled = false;
                        submitBtn.innerText = originalText;
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: 'An error occurred. Please try again.'
                        });
                    });
            });
        });
    </script>
@endsection
