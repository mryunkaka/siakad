<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        // Logout user
        Auth::logout();

        // Hancurkan session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect ke login
        return redirect()->route('signin')
            ->with('success', 'Anda berhasil keluar.');
    }
}
