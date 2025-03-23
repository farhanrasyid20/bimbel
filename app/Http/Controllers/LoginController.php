<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Pastikan model User sudah ada

class loginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'user' => 'required',
            'pass' => 'required',
        ]);

        $user = User::where('id', $request->user)->first();

        if ($user && Hash::check($request->pass, $user->password)) {
            Auth::login($user);

            $role = $user->role;

            switch ($role) {
                case 'admin':
                    $redirect_url = 'data_profil';
                    break;
                case 'guru':
                    $redirect_url = 'profil_guru';
                    break;
                case 'siswa':
                    $redirect_url = 'profil_siswa';
                    break;
                default:
                    return back()->withErrors(['error' => 'Role tidak dikenali. Hubungi administrator.']);
            }

            return redirect($redirect_url)->with('success', 'Login berhasil!');
        } else {
            return back()->withErrors(['error' => 'Username atau password salah.']);
        }
    }
}
