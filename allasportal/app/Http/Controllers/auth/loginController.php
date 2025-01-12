<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;  // Ha saját validáló osztályt használsz
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Bejelentkezési oldal megjelenítése
    public function login()
    {
        return view('auth.login');
    }

    // Bejelentkezési adatok feldolgozása
    public function store(LoginRequest $request) // Ha saját validáló osztályt használsz, ne felejtsd el a LoginRequest importálását
    {
        // Ha a bejelentkezés sikeres
        if (Auth::attempt($request->validated())) {
            $request->session()->regenerate(); // Session regenerálás a biztonság érdekében

            // Egyedi átirányítás adminisztrátorok számára (ha van admin logika)
            if (Auth::user()->isAdmin()) {
                return redirect()->route('admin.dashboard')->with('success', 'Üdvözöljük az admin oldalon!');
            }

            return redirect()->route('home')->with('success', 'Üdvözöljük az oldalon!');
        }

        // Ha a bejelentkezés sikertelen
        return back()->withErrors([
            'email' => 'Hibás email vagy jelszó.',
        ])->withInput();
    }

    // Kijelentkezés
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate(); // Session érvénytelenítése
        $request->session()->regenerateToken(); // Token regenerálás CSRF védelem miatt

        return redirect()->route('auth.login')->with('success', 'Sikeres kijelentkezés!');
    }
}
