<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function RegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // $request->validate([
        //     'email'      => 'required|email',
        //     'first_name' => 'required|string|max:50',
        //     'last_name'  => 'required|string|max:50',
        //     'username'   => 'required|string|max:255',
        //     'password'   => 'required|string|min:6|confirmed',
        //     'role'       => 'required|in:APPLICANT,RECRUITER',
        // ]);

        $roleId = $request->role == 'APPLICANT' ? 2 : 3;
        $roleName = $request->role == 'APPLICANT' ? 'applicant' : 'recruiter';

        // ✅ Cek email sudah ada atau belum
        $existingUser = DB::table('md_auth')->where('EMAIL_USER', $request->email)->first();
        if ($existingUser) {
            return response()->json([
                'success' => false,
                'message' => 'Akun yang Anda daftarkan sudah digunakan, silakan gunakan email yang berbeda.'
            ]);
        }

        try {
            DB::table('md_auth')->insert([
                'EMAIL_USER' => $request->email,
                'FIRST_NAME' => $request->first_name,
                'LAST_NAME'  => $request->last_name,
                'USERNAME'   => $request->username,
                'PASSWORD'   => Hash::make($request->password),
                'ROLE'       => $roleId,
                'CREATED_AT' => now(),
                'ID'         => (string) Str::uuid(),
            ]);

            return response()->json([
                'success' => true,
                'message' => "Berhasil mendaftar sebagai {$roleName}."
            ]);
        } catch (\Exception $e) {
            \Log::error('Registration Error: ' . $e->getMessage() . "\n" . $e->getTraceAsString());
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat membuat akun.'
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

        $user = DB::table('md_auth')->where('EMAIL_USER', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->PASSWORD)) {
            return response()->json(['success' => false, 'message' => 'Email atau password salah.']);
        }

        $role = DB::table('md_role')->where('ID_ROLE', $user->ROLE)->first();

        $request->session()->regenerate();
        $request->session()->put('user', [
            'email'     => $user->EMAIL_USER,
            'username'  => $user->USERNAME,
            'role'      => $user->ROLE,
            'role_name' => $role ? $role->ROLE : null,
            'id'        => $user->ID,
        ]);
        $request->session()->save();

        $roleName = strtolower($role->ROLE ?? 'user');
        $message = "Selamat datang {$roleName}!";

        if ($role && $role->ROLE == 'APPLICANT') {
            return response()->json(['success' => true, 'message' => $message, 'redirect' => '/applicant-dashboard']);
        } elseif ($role && $role->ROLE == 'RECRUITER') {
            return response()->json(['success' => true, 'message' => $message, 'redirect' => '/recruiter-dashboard']);
        } elseif ($role && $role->ROLE == 'ADMIN') {
            return response()->json(['success' => true, 'message' => $message, 'redirect' => '/admin-dashboard']);
        }

        return response()->json(['success' => true, 'message' => $message, 'redirect' => '/']);
    }

    public function logout(Request $request)
    {
        $request->session()->forget('user');
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Berhasil logout.');
    }
}
