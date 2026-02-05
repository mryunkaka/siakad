<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // 1. VALIDASI
        $credentials = $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ], [
            'email.required' => 'Email wajib diisi',
            'email.email'    => 'Format email tidak valid',
            'password.required' => 'Kata sandi wajib diisi',
        ]);

        // 2. ATTEMPT LOGIN
        if (Auth::attempt($credentials, $request->boolean('remember'))) {

            // regenerate session (WAJIB)
            $request->session()->regenerate();

            // kirim flash untuk toast
            return redirect()->route('signin')
                ->with('toast_success', 'Berhasil masuk. Selamat datang!')
                ->with('redirect_after_success', route('dashboard'));
        }

        // 3. GAGAL LOGIN
        return back()
            ->withInput($request->only('email'))
            ->with('toast_error', 'Email atau kata sandi salah.');
    }
}
