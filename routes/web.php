<?php

use App\Http\Controllers\Homepage;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RecruiterController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', [Homepage::class, 'index'])->name('home');
Route::get('/about', [Homepage::class, 'about'])->name('about');
Route::get('/services', [Homepage::class, 'services'])->name('services');
Route::get('/contact', [Homepage::class, 'contact'])->name('contact');

// Auth
// Route::get('/login', [AuthController::class, 'LoginForm']);
Route::get('/login', [AuthController::class, 'LoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/register', [AuthController::class, 'RegisterForm']);
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// Admin Routes (Currently still protected, or can be unprotected if needed)
Route::middleware(['usersession:ADMIN'])->group(function () {
    Route::get('/admin-dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

// Recruiter Routes (Middleware removed for Frontend Showcase)
Route::get('/recruiter-dashboard', [RecruiterController::class, 'index_dashboard'])->name('recruiter.dashboard');
Route::get('/jobs', [RecruiterController::class, 'index_jobs'])->name('recruiter.jobs');
Route::get('/candidates', [RecruiterController::class, 'index_candidates'])->name('recruiter.candidates');
Route::get('/analytic', [RecruiterController::class, 'index_analytic'])->name('recruiter.analytic');

// Applicant Routes (Middleware removed for Frontend Showcase)
Route::get('/applicant-dashboard', [ApplicantController::class, 'index_dashboard'])->name('applicant.dashboard');
Route::post('/check-cv', [ApplicantController::class, 'checkCv'])->name('check.cv');

Route::get('/interviewai', [ApplicantController::class, 'index_interview'])->name('applicant.interviewai');
Route::get('/personality', [ApplicantController::class, 'index_personality'])->name('applicant.personality');
Route::get('/gamification', [ApplicantController::class, 'index_gamification'])->name('applicant.gamification');