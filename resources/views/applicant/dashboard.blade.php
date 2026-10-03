<div class="main-content bg-white">
    <div class="page-content">
        <div class="container-fluid mx-auto px-4">
            <h3 class="text-2xl font-semibold text-black mb-6">{{ $title }}</h3>

            <div class="lg:grid lg:grid-cols-12 lg:gap-8 flex flex-col gap-6">
                <!-- Kolom Kiri -->
                <div class="lg:col-span-8">
                    <div class="w-full bg-white rounded-2xl shadow-sm border border-gray-200 p-6">
                        <div class="flex justify-between items-center w-full">
                            <div class="max-w-[65%]">
                                <h3 class="text-lg font-semibold text-gray-800">Profile Completion</h3>
                                <p class="text-gray-600 text-sm">Complete your profile to get better job matches</p>
                            </div>
                            <div class="flex-shrink-0 flex items-center space-x-3 w-40">
                                <p class="text-gray-700 font-medium whitespace-nowrap">Rating</p>
                                <p>65%</p>
                                <div class="w-full bg-gray-200 rounded-full h-4 overflow-hidden">
                                    <div class="bg-blue-500 h-4 rounded-full" style="width: 75%;"></div>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-3 gap-4 mt-6 border-t border-gray-100 pt-4">
                            <div class="block">
                                <p class="text-gray-500 text-xs uppercase tracking-wide">Applications</p>
                                <p class="font-medium text-lg text-gray-900">0</p>
                            </div>
                            <div class="block">
                                <p class="text-gray-500 text-xs uppercase tracking-wide">Interviews</p>
                                <p class="font-medium text-lg text-gray-900">0</p>
                            </div>
                            <div class="block">
                                <p class="text-gray-500 text-xs uppercase tracking-wide">Profile Views</p>
                                <p class="font-medium text-lg text-gray-900">0</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-between items-center mt-6 mb-4">
                        <h2 class="text-xl font-semibold text-gray-900">Recommended Jobs</h2>
                        <a href="#" class="text-blue-600 hover:underline text-sm">View All</a>
                    </div>

                    @foreach ($job as $j)
                        <div class="w-full bg-white rounded-2xl shadow-sm border border-gray-200 p-6 mb-4">
                            <div class="flex justify-between items-center w-full">
                                <div class="max-w-[65%]">
                                    <h3 class="text-lg font-semibold text-gray-800 mb-1">{{ $j->JOB_TITLE }}</h3>
                                    <div class="flex flex-row space-x-2">
                                        <div class="flex items-center space-x-1">
                                            <img src="{{ asset('images/homepage/icon_company.png') }}" alt="">
                                            <p class="text-gray-600 text-sm">{{ $j->NAME_COMP }}</p>
                                        </div>
                                        <div class="flex items-center space-x-1">
                                            <img src="{{ asset('images/homepage/icon_location.png') }}" alt="">
                                            <p class="text-gray-600 text-sm">{{ $j->CITY }}, {{ $j->COUNTRY }}
                                            </p>
                                        </div>
                                        <div class="flex items-center space-x-1">
                                            <img src="{{ asset('images/homepage/icon_money.png') }}" alt="">
                                            <p class="text-gray-600 text-sm">
                                                Rp{{ number_format($j->MIN_SALARY, 0, ',', '.') }} -
                                                Rp{{ number_format($j->MAX_SALARY, 0, ',', '.') }}
                                            </p>
                                        </div>
                                    </div>

                                    {{-- Skills --}}
                                    <div class="flex items-center justify-start space-x-2 mt-2">
                                        @foreach (explode(',', $j->JOB_SKILL) as $skill)
                                            <span
                                                class="inline-block bg-blue-200 text-blue-700 font-semibold border border-dark text-black text-xs px-3 py-1 rounded-2xl text-center cursor-default">
                                                {{ trim($skill) }}
                                            </span>
                                        @endforeach
                                    </div>
                                </div>

                                {{-- Action Buttons --}}
                                <div class="flex flex-col gap-2 w-32 shrink-0">
                                    <button onclick="toggleModal(true, {{ $j->ID_JOB }})"
                                        class="bg-blue-600 text-sm text-white font-semibold py-2 px-3 rounded-md hover:bg-blue-700 w-full transition">
                                        Apply Now
                                    </button>

                                    <button
                                        class="bg-gray-100 text-sm text-gray-700 font-semibold py-2 px-3 rounded-md hover:bg-gray-200 w-full transition">
                                        Save
                                    </button>
                                </div>
                            </div>

                            {{-- Job Description --}}
                            <div class="mt-4 border-t border-gray-100 pt-3">
                                <p class="text-sm text-gray-600 leading-relaxed">{{ Str::limit($j->JOB_DESC, 120) }}</p>
                            </div>
                        </div>
                    @endforeach

                </div>


                <!-- Sidebar Kanan -->
                <div class="lg:col-span-4">
                    <div class="w-full bg-white rounded-2xl shadow-sm border border-gray-200">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg text-gray-800">Your Profile</h3>
                            <p class="text-sm text-gray-600">CV and personal information</p>
                        </div>
                        <div class="p-4 text-center">
                            <img src="{{ asset('images/homepage/icon_profile_default.png') }}" alt=""
                                class="w-20 h-20 rounded-full mx-auto mb-1">
                            <h2 class="text-md font-semibold text-gray-900">{{ session('user')['first_name'] ?? session('user')['username'] ?? 'User' }}</h2>
                            <p class="text-gray-500 text-sm mb-4">Applicant</p>

                            <!-- Tag Display (Non-Klikable) -->
                            <div class="flex items-center justify-center space-x-2">
                                <span
                                    class="inline-block bg-blue-200 text-blue-700 font-semibold border border-dark text-black text-xs px-3 py-1 rounded-2xl text-center cursor-default">
                                    React
                                </span>
                                <span
                                    class="inline-block bg-blue-200 text-blue-700 font-semibold border border-dark text-black text-xs px-3 py-1 rounded-2xl text-center cursor-default">
                                    Javascript
                                </span>
                                <span
                                    class="inline-block bg-blue-200 text-blue-700 font-semibold border border-dark text-black text-xs px-3 py-1 rounded-2xl text-center cursor-default">
                                    Kotlin
                                </span>
                            </div>


                            <!-- Tombol interaktif -->
                            <a href="#"
                                class="inline-block bg-white border border-dark hover:bg-black hover:text-white text-black text-sm px-4 py-2 rounded-lg w-full text-center mt-4">
                                Edit Profile
                            </a>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Modal -->
            @foreach ($job as $j)
                <div id="applyModal-{{ $j->ID_JOB }}"
                    class="fixed inset-0 z-50 hidden bg-black bg-opacity-50 flex items-center justify-center">
                    <div class="bg-white w-full max-w-4xl rounded-lg overflow-hidden shadow-lg">

                        <!-- Header -->
                        <div class="flex justify-between items-center px-6 py-4 border-b">
                            <div class="flex items-center space-x-3">
                                <img src="{{ asset('images/homepage/icon_company.png') }}" class="w-6 h-6"
                                    alt="Company Logo">
                                <div>
                                    <h2 class="text-xl font-bold text-black">{{ $j->JOB_TITLE }}</h2>
                                    <p class="text-sm text-gray-600">{{ $j->INDUSTRY_COMP }}</p>
                                </div>
                            </div>
                            <button onclick="toggleModal(false, {{ $j->ID_JOB }})"
                                class="text-gray-500 hover:text-black text-2xl leading-none">&times;</button>

                        </div>

                        <div id="cvAlert-{{ $j->ID_JOB }}"
                            class="bg-green-100 text-green-800 text-sm px-4 py-2 mx-6 mt-2 rounded-md border border-green-300 hidden">
                            Your CV is Eligible
                        </div>

                        <!-- Body -->
                        <div class="px-6 py-4">
                            <h3 class="text-lg font-semibold text-black mb-4 mt-4">Company Overview</h3>
                            <div class="flex flex-col md:flex-row md:space-x-6">
                                <div class="w-full md:w-2/4">
                                    <p class="text-sm text-gray-700 mb-2">
                                        {{ $j->DESC_COMP }}
                                    </p>

                                    <div class="mt-4 text-sm text-gray-700 space-y-2">
                                        <div class="flex items-center">
                                            <img src="{{ asset('images/homepage/icon_location.png') }}"
                                                class="w-5 h-5 mr-2">
                                            <p>{{ $j->CITY }}, {{ $j->PROVINCE }}, {{ $j->COUNTRY }}</p>
                                        </div>
                                        <div class="flex items-center">
                                            <img src="{{ asset('images/homepage/icon_money.png') }}"
                                                class="w-5 h-5 mr-2">
                                            <p>Rp{{ number_format($j->MIN_SALARY, 0, ',', '.') }} -
                                                Rp{{ number_format($j->MAX_SALARY, 0, ',', '.') }}</p>
                                        </div>
                                        <div class="flex items-center">
                                            <img src="{{ asset('images/homepage/icon_company.png') }}"
                                                class="w-5 h-5 mr-2">
                                            <p>{{ $j->CATEGORY_NAME }}</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Kanan -->
                                <div class="w-full md:w-2/4 mt-4 md:mt-0">
                                    <div class="rounded-2xl p-4 h-auto mb-2 bg-green-100">
                                        <p class="text-black font-semibold mb-2">Company Rating</p>
                                        <div class="flex items-center space-x-2">
                                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.561-.954L10 0l2.951 5.956 6.561.954-4.756 4.635 1.122 6.545z" />
                                            </svg>
                                            <span class="text-sm text-gray-600">4.5 / 5.0</span>
                                        </div>
                                    </div>

                                    <div class="rounded-2xl p-4 h-auto mt-2 bg-green-50">
                                        <p class="font-bold mb-2 text-green-700">Benefits</p>
                                        <ul class="text-sm text-gray-600 list-disc pl-5">
                                            <li>Flexible Schedule</li>
                                            <li>Remote Work</li>
                                            <li>Annual Bonus</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Job Description -->
                            <p class="text-lg font-bold text-black mt-6 mb-3">Job Description</p>
                            <p class="text-sm text-gray-700 mb-4">{{ $j->JOB_DESC }}</p>

                            <!-- CV Upload -->
                            <label for="cv_screening_{{ $j->ID_JOB }}"
                                class="block text-sm font-medium text-gray-700 mb-2">
                                Check Your Eligibility
                            </label>
                            <div class="flex w-full gap-2 items-center">
                                {{-- <form onsubmit="submitCV(event, {{ $j->ID_JOB }})" enctype="multipart/form-data"class="flex w-full gap-2 items-center"> --}}
                                    <form action="{{ route('check.cv') }}" method="POST" enctype="multipart/form-data" class="flex w-full gap-2 items-center">
                                    @csrf
                                    <!-- Hidden input untuk kategori job -->
                                    <input type="hidden" name="job_category" value="{{ $j->CATEGORY_NAME }}">

                                    <!-- Upload field -->
                                    <label for="cv_file_{{ $j->ID_JOB }}"
                                        class="flex-1 cursor-pointer bg-gray-200 border-2 border-dashed border-gray-600 rounded-md min-h-[70px] flex items-center justify-center text-sm text-gray-700 text-center">
                                        Drop Your CV
                                        <input type="file" name="cv_file" id="cv_file_{{ $j->ID_JOB }}"
                                            class="hidden" accept=".pdf" required />
                                    </label>

                                    <button type="submit" id="submitCvBtn"
                                        class="min-w-[180px] min-h-[70px] bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium px-4 py-3 rounded-md">
                                        Check CV
                                    </button>

                                    <div id="cvResult-{{ $j->ID_JOB }}" class="mt-4 text-sm text-gray-700 hidden">
                                        <p class="font-semibold">Result:</p>
                                        <pre class="bg-gray-100 p-2 rounded" id="cvResultContent-{{ $j->ID_JOB }}"></pre>
                                    </div>

                                </form>

                            </div>
                        </div>

                        <!-- Footer -->
                        <div class="px-6 py-4 border-t flex justify-between items-center">
                            <button class="p-2 rounded hover:bg-gray-200 text-gray-600" aria-label="Bookmark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
                                    <path
                                        d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z" />
                                </svg>
                            </button>

                            <button
                                class="bg-blue-600 text-sm text-white px-6 py-2 rounded hover:bg-blue-700 w-full ml-3">
                                Apply
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
</div>

<script>
    function validateCV(input, jobId) {
        const file = input.files[0];

        if (!file) return;

        const maxSize = 1 * 1024 * 1024; // 1 MB

        const allowedType = 'application/pdf';

        if (file.type !== allowedType) {
            alert('Hanya file PDF yang diperbolehkan.');
            input.value = ''; // Reset file input
            return;
        }

        if (file.size > maxSize) {
            alert('Ukuran file tidak boleh lebih dari 1 MB.');
            input.value = '';
            return;
        }

        // Optional: Kalau kamu mau munculkan alert validasi sukses:
        const alertBox = document.getElementById('cvAlert-' + jobId);
        if (alertBox) {
            alertBox.textContent = "Your CV is Eligible ✅";
            alertBox.classList.remove('hidden');
            alertBox.classList.add('block');
        }
    }

    function toggleModal(show = true, jobId = null) {
        if (!jobId) return;
        const modal = document.getElementById('applyModal-' + jobId);
        if (!modal) return;

        if (show) {
            modal.classList.remove('hidden');
        } else {
            modal.classList.add('hidden');
        }
    }

    function showCVAlert(jobId = null) {
        if (!jobId) return;
        const alertBox = document.getElementById('cvAlert-' + jobId);
        if (!alertBox) return;

        alertBox.classList.remove('hidden');
        alertBox.classList.add('block');

        // Optional: hide alert after 3 seconds
        setTimeout(() => {
            alertBox.classList.add('hidden');
        }, 3000);
    }
</script>
