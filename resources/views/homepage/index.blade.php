@extends('homepage.home')

@section('content')
    {{-- Section Hero --}}
    <section class="py-8 text-left" style="background: linear-gradient(to bottom, #dde7f8, #ffffff);">

        <div class="container mx-auto px-8 py-10">
            <div class="flex flex-col md:flex-row gap-8">
                <!-- Kolom kiri (lebih kecil) -->
                <div class="w-full md:w-5/12 p-6">
                    <!-- Label -->
                    <h1 class="inline-block px-4 py-2 rounded-lg font-bold text-blue-500 cursor-default select-none mb-2"
                        style="background: #d3dde9">
                        AI-Powered Job Platform
                    </h1>

                    <!-- Judul Besar -->
                    <h1 class="text-black text-5xl font-bold mt-4 mb-6 leading-tight">
                        A Smarter Way to <span class="text-blue-600">Hire and Get Hired</span>
                    </h1>

                    <!-- Deskripsi -->
                    <p class="leading-relaxed text-gray-700 mb-6 text-lg">
                        We analyze skills, experience, and working styles to connect the right people with the right roles, reducing the time spent on manual screening.
                    </p>

                    <!-- Tombol Aksi -->
                    <div class="flex gap-4 mb-6">
                        <a href="#about"
                            class="font-bold inline-block bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
                            Find a Job
                        </a>
                        <a href="#about"
                            class="font-bold inline-block bg-white border border-blue-600 text-blue-600 px-6 py-3 rounded-lg hover:bg-blue-700 hover:text-white transition">
                            Hire Talent
                        </a>
                    </div>

                    <!-- Fitur List -->
                    <div class="inline-flex gap-4 mt-2">
                        <div class="flex items-center gap-1">
                            <img src="{{ asset('images/homepage/icon_check_mark.png') }}" alt="" class="w-6 h-6">
                            <p class="text-gray-700">AI Matching</p>
                        </div>
                        <div class="flex items-center gap-1">
                            <img src="{{ asset('images/homepage/icon_user_checked.png') }}" alt="" class="w-5 h-5">
                            <p class="text-gray-700">Personality Test</p>
                        </div>
                        <div class="flex items-center gap-1">
                            <img src="{{ asset('images/homepage/icon_bag.png') }}" alt="" class="w-5 h-5">
                            <p class="text-gray-700">Interview Simulation</p>
                        </div>
                    </div>
                </div>


                <!-- Kolom kanan (lebih besar) -->
                <div class="w-full md:w-6/12 p-6">
                    <img src="{{ asset('images/homepage/hero_images_1.png') }}" alt="Hero Image"
                        class="w-full h-auto rounded-md">
                </div>
            </div>
        </div>
    </section>

    {{-- Section Tentang Kami --}}
    <section id="about" class="bg-gray-100 py-16">
        <div class="container mx-auto px-4 text-center">
            <p class="text-blue-600 text-xl font-semibold mb-2">INNOVATION AT WORK</p>
            <h1 class="text-3xl font-bold mt-3 mb-6">Why Choose HireMe.AI?</h1>
            <p class="text-xl text-gray-800 max-w-3xl mx-auto mb-6">
                Our platform harnesses the power of cutting-edge AI to create perfect matches between talent and opportunity
            </p>
        </div>
        <div class="flex gap-6 w-full px-0 md:px-2 justify-center mb-12">

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 justify-items-center mt-8">
                <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm w-[350px]">
                    <div>
                        <img src="{{ asset('images/homepage/img_brain.png') }}" alt="" class="w-10 h-auto">
                    </div>
                    <h2 class="mt-5 text-lg font-semibold text-gray-900">Skill-Based Matching</h2>
                    <p class="text-gray-600 mt-2 text-sm leading-relaxed">
                        Our system evaluates experience and core competencies to recommend roles that fit your actual capabilities.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm w-[350px]">
                    <div>
                        <img src="{{ asset('images/homepage/img_msg.png') }}" alt="" class="w-10 h-auto">
                    </div>
                    <h2 class="mt-5 text-lg font-semibold text-gray-900">Interview Practice</h2>
                    <p class="text-gray-600 mt-2 text-sm leading-relaxed">
                        Prepare for real interviews using our automated simulation, which provides immediate feedback on your responses.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm w-[350px]">
                    <div>
                        <img src="{{ asset('images/homepage/img_circle.png') }}" alt="" class="w-10 h-auto">
                    </div>
                    <h2 class="mt-5 text-lg font-semibold text-gray-900">Work Culture Fit</h2>
                    <p class="text-gray-600 mt-2 text-sm leading-relaxed">
                        Assess your working style to find teams and environments where you are most likely to thrive.
                    </p>
                </div>
            </div>
        </div>

        <div class="px-4 mt-16">
            <div
                class="bg-white shadow-xl p-8 rounded-lg w-full max-w-[1098px] mx-auto grid grid-cols-1 md:grid-cols-2 gap-6 items-center">

                <!-- Kolom Teks -->
                <div>
                    <h2 class="text-xl font-bold mb-4">Powerful tools for<br>every career stage</h2>

                    <p class="text-gray-600 mt-2 mb-8 text-justify">
                        Whether you're just starting your career journey or looking to take your next big leap, our
                        comprehensive suite of tools is designed to support professionals at every stage.
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">

                        <!-- Kolom 1 -->
                        <div class="flex bg-white p-3 rounded-lg">
                            <img src="{{ asset('images/homepage/img_brain.png') }}" alt="" class="w-7 h-7 mr-3">
                            <div>
                                <p class="font-semibold text-sm mb-1">Gamified Learning</p>
                                <p class="text-gray-500 text-sm">
                                    Earn XP and badges while improving your skills
                                </p>
                            </div>
                        </div>

                        <!-- Kolom 2 -->
                        <div class="flex bg-white p-3 rounded-lg">
                            <img src="{{ asset('images/homepage/img_circle.png') }}" alt="" class="w-7 h-7 mr-3">
                            <div>
                                <p class="font-semibold text-sm mb-1">Smart Job Alerts</p>
                                <p class="text-gray-500 text-sm">
                                    Get notified when perfect opportunities arise
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                        <!-- Kolom 1 -->
                        <div class="flex bg-white p-3 rounded-lg">
                            <img src="{{ asset('images/homepage/img_brain.png') }}" alt="" class="w-7 h-7 mr-3">
                            <div>
                                <p class="font-semibold text-sm mb-1">Candidate Tracking</p>
                                <p class="text-gray-500 text-sm">
                                    Streamlined recruitment workflow for teams
                                </p>
                            </div>
                        </div>

                        <!-- Kolom 2 -->
                        <div class="flex bg-white p-3 rounded-lg">
                            <img src="{{ asset('images/homepage/img_circle.png') }}" alt="" class="w-7 h-7 mr-3">
                            <div>
                                <p class="font-semibold text-sm mb-1">Skill Certification</p>
                                <p class="text-gray-500 text-sm">
                                    Validate your expertise with AI assessments
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                        <!-- Kolom 1 -->
                        <div class="flex bg-white p-3 rounded-lg">
                            <img src="{{ asset('images/homepage/img_brain.png') }}" alt="" class="w-7 h-7 mr-3">
                            <div>
                                <p class="font-semibold text-sm mb-1">Career Trajectory</p>
                                <p class="text-gray-500 text-sm">
                                    Visualize and plan your professional growth
                                </p>
                            </div>
                        </div>

                        <!-- Kolom 2 -->
                        <div class="flex bg-white p-3 rounded-lg">
                            <img src="{{ asset('images/homepage/img_circle.png') }}" alt=""
                                class="w-7 h-7 mr-3">
                            <div>
                                <p class="font-semibold text-sm mb-1">Recruitment Analytics</p>
                                <p class="text-gray-500 text-sm">
                                    Data-driven insights for hiring optimization
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Kolom Gambar (padding dikurangi) -->
                <div class="flex justify-center md:justify-center relative md:p-0">
                    <!-- Layer gambar utama -->
                    <div
                        class="w-[25rem] h-[18rem] border-2 border-blue-500 rounded-lg flex items-center justify-center relative z-10 bg-white">
                        <img src="{{ asset('images/homepage/img_msg.png') }}" alt=""
                            class="w-20 h-auto z-10 relative">
                    </div>

                    <!-- Layer gambar tumpukan -->
                    <img src="{{ asset('images/homepage/hero_images_1.png') }}" alt=""
                        class="w-[26rem] h-auto absolute bottom-2 left-0 translate-x-3 z-20">
                </div>
            </div>
        </div>

    </section>



    <section class="bg-primary">
        <div class="container mx-auto px-4 py-16">
            <div class="flex flex-col md:flex-row gap-8">

                <!-- Kolom Kiri -->
                <div class="w-full md:w-1/2 text-start space-y-4 content-center">
                    <h3 class="text-5xl font-semibold text-white">
                        Ready to Transform Your Career Journey?
                    </h3>
                    <p class="font-semibold text-white" style="margin-top: 30px; margin-bottom: 30px">
                        Join thousands of professionals finding their perfect match every day. Start your journey to career
                        success with HireMe.AI today.
                    </p>

                    <div class="flex items-start gap-3">
                        <img src="{{ asset('images/homepage/icon_check_mark_2.png') }}" alt=""
                            class="w-5 h-5 mt-1">
                        <p class="text-white">
                            Get matched with jobs that fit your skills, personality, and career goals
                        </p>
                    </div>

                    <div class="flex items-start gap-3">
                        <img src="{{ asset('images/homepage/icon_check_mark_2.png') }}" alt=""
                            class="w-5 h-5 mt-1">
                        <p class="text-white">
                            Practice interviews with our AI and receive personalized feedback
                        </p>
                    </div>

                    <div class="flex items-start gap-3">
                        <img src="{{ asset('images/homepage/icon_check_mark_2.png') }}" alt=""
                            class="w-5 h-5 mt-1">
                        <p class="text-white">
                            No more wasted time on jobs that don't match your profile
                        </p>
                    </div>
                </div>

                <!-- Kolom Kanan -->
                <div class="w-[400px] bg-white shadow-lg rounded-xl p-6 text-start space-y-4">

                    <h2 class="text-xl font-bold">Get started in minutes</h2>

                    <div class="flex items-start space-x-3">
                        <img src="{{ asset('images/homepage/icon_number_one.png') }}" alt=""
                            class="w-8 h-8 mt-1">
                        <div>
                            <p class="font-semibold text-black">Get started in minutes</p>
                            <p class="text-md text-gray-500">Sign up in under 2 minutes</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3">
                        <img src="{{ asset('images/homepage/icon_number_two.png') }}" alt=""
                            class="w-8 h-8 mt-1">
                        <div>
                            <p class="font-semibold text-black">Complete your profile</p>
                            <p class="text-md text-gray-500">Take our personality assesment</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3">
                        <img src="{{ asset('images/homepage/icon_number_three.png') }}" alt=""
                            class="w-8 h-8 mt-1">
                        <div>
                            <p class="font-semibold text-black">Get matched</p>
                            <p class="text-md text-gray-500">Our AI finds perfect opportunities</p>
                        </div>
                    </div>

                    <button
                        class="w-full bg-blue-600 text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none flex items-center justify-center">
                        Create an Account
                    </button>

                    <button
                        class="w-full bg-white text-blue-600 font-semibold py-2 px-4 rounded-md hover:bg-gray-200 outline outline-1 outline-blue-600">
                        I'm Hiring Talent
                    </button>

                </div>

            </div>
        </div>
    </section>
@endsection
