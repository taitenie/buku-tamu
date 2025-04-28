<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurveyWelcomeController extends Controller
{
    // Menampilkan halaman awal welcome
    public function welcome()
    {
        return view('surveywelcome');
    }

    // Menangani form submit dari welcome
    public function start(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'umur' => 'required|integer|min:1|max:120',
            'no_hp' => 'required|string|max:20',
            'jenis_kelamin' => 'required|in:L,P',
        ]);

        // Simpan data ke session untuk sementara
        session(['visitor' => $validated]);

        // Redirect ke halaman survey
        return redirect()->route('survey.form');
    }

    // Menampilkan halaman survey form
    public function form()
    {
        // Cek apakah data visitor ada di session
        if (!session()->has('visitor')) {
            return redirect()->route('survey.welcome');
        }

        return view('survey.survey');
    }
}
