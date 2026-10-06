<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function RegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $roleName = $request->role == 'APPLICANT' ? 'applicant' : 'recruiter';
        $roleId = $request->role == 'APPLICANT' ? 2 : 3;

        try {
            // Panggil API Supabase Signup
            $userData = [
                'first_name' => trim($request->first_name),
                'last_name' => trim($request->last_name),
                'username' => trim($request->username),
                'role_name' => strtoupper($roleName),
                'role_id' => $roleId
            ];

            $response = Http::withHeaders([
                'apikey' => env('SUPABASE_KEY'),
                'Authorization' => 'Bearer ' . env('SUPABASE_KEY'),
                'Content-Type' => 'application/json'
            ])->post(env('SUPABASE_URL') . '/auth/v1/signup', [
                'email' => trim($request->email),
                'password' => $request->password,
                'data' => $userData,
                'options' => [
                    'data' => $userData
                ]
            ]);

            $result = $response->json();

            if (!$response->successful()) {
                // Email mungkin sudah terdaftar atau error lain
                $errorMsg = $result['msg'] ?? 'Gagal mendaftar. Silakan coba email lain.';
                return response()->json([
                    'success' => false,
                    'message' => 'Supabase Auth Error: ' . $errorMsg
                ]);
            }

            return response()->json([
                'success' => true,
                'message' => "Successfully registered as " . ucfirst($roleName) . "."
            ]);

        } catch (\Exception $e) {
            Log::error('Registration Error: ' . $e->getMessage() . "\n" . $e->getTraceAsString());
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan sistem saat membuat akun.'
            ]);
        }
    }

    public function LoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|string',
        ]);

        try {
            // Panggil API Supabase Login
            $response = Http::withHeaders([
                'apikey' => env('SUPABASE_KEY'),
                'Authorization' => 'Bearer ' . env('SUPABASE_KEY'),
                'Content-Type' => 'application/json'
            ])->post(env('SUPABASE_URL') . '/auth/v1/token?grant_type=password', [
                'email' => trim($request->email),
                'password' => $request->password,
            ]);

            $result = $response->json();

            if (!$response->successful()) {
                return response()->json([
                    'success' => false, 
                    'message' => 'Email atau password salah.'
                ]);
            }

            // Dapatkan data user dari response Supabase
            $user = $result['user'];
            $metadata = $user['user_metadata'] ?? [];
            $roleName = $metadata['role_name'] ?? 'USER';
            $roleId = $metadata['role_id'] ?? null;

            // Simpan ke Session Laravel
            $request->session()->regenerate();
            $request->session()->put('user', [
                'email'     => $user['email'],
                'username'  => $metadata['username'] ?? 'User',
                'first_name'=> $metadata['first_name'] ?? '',
                'role'      => $roleId,
                'role_name' => $roleName,
                'id'        => $user['id'],
                'access_token' => $result['access_token']
            ]);
            $request->session()->save();

            $firstName = !empty($metadata['first_name']) ? $metadata['first_name'] : (!empty($metadata['username']) ? $metadata['username'] : '');
            $message = $firstName ? "Welcome back, {$firstName}!" : "Welcome back!";

            // Arahkan ke dashboard sesuai role
            if ($roleName == 'APPLICANT') {
                return response()->json(['success' => true, 'message' => $message, 'redirect' => '/applicant-dashboard']);
            } elseif ($roleName == 'RECRUITER') {
                return response()->json(['success' => true, 'message' => $message, 'redirect' => '/recruiter-dashboard']);
            } elseif ($roleName == 'ADMIN') {
                return response()->json(['success' => true, 'message' => $message, 'redirect' => '/admin-dashboard']);
            }

            return response()->json(['success' => true, 'message' => $message, 'redirect' => '/']);
            
        } catch (\Exception $e) {
            Log::error('Login Error: ' . $e->getMessage() . "\n" . $e->getTraceAsString());
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan sistem saat login.'
            ]);
        }
    }

    public function logout(Request $request)
    {
        // Opsional: Bisa memanggil endpoint logout Supabase jika token masih valid
        // Tapi menghancurkan session Laravel sudah cukup aman.
        $request->session()->forget('user');
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Berhasil logout.');
    }
}
