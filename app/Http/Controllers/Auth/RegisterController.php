<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        // 1. VALIDASI
        $request->validate([
            'fname'    => 'required|string|max:100',
            'lname'    => 'required|string|max:100',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ], [
            'fname.required'    => 'Nama depan wajib diisi',
            'lname.required'    => 'Nama belakang wajib diisi',
            'email.required'    => 'Email wajib diisi',
            'email.unique'      => 'Email sudah terdaftar',
            'password.required' => 'Kata sandi wajib diisi',
        ]);

        // 2. SIMPAN USER
        $user = User::create([
            'name'     => $request->fname . ' ' . $request->lname,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // 3. AUTO LOGIN
        Auth::login($user);

        // 4. REDIRECT + FLAG TOAST
        return redirect()->route('signup')
            ->with('toast_success', 'Pendaftaran berhasil. Mengalihkan ke dashboard...')
            ->with('redirect_after_success', route('dashboard'));
    }
}
