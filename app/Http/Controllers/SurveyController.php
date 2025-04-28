<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SurveyAnswer;

class SurveyController extends Controller
{

    public function startSurvey(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'umur' => 'required|integer|min:1|max:120',
            'no_hp' => 'required|string|max:20',
            'jenis_kelamin' => 'required|in:L,P',
        ]);

        session([
            'pengunjung_nama' => $request->input('nama'),
            'pengunjung_umur' => $request->input('umur'),
            'pengunjung_no_hp' => $request->input('no_hp'),
            'pengunjung_jenis_kelamin' => $request->input('jenis_kelamin'),
        ]);

        return redirect()->route('survey.question', ['step' => 1]);
    }

    public function showQuestion(Request $request)
    {
        $questions = [
            1 => 'Bagaimana pendapat Saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanannya?',
            2 => 'Bagaimana pemahaman Saudara tentang kemudahan prosedur pelayanan di unit ini?',
            3 => 'Bagaimana pendapat Saudara tentang kecepatan waktu dalam memberikan pelayanan?',
            4 => 'Bagaimana pendapat Saudara tentang kewajaran biaya/tarif dalam pelayanan?',
            5 => 'Bagaimana pendapat Saudara tentang kesesuaian produk pelayanan antara yang tercantum dalam standar pelayanan dengan hasil yang diberikan?',
            6 => 'Bagaimana pendapat Saudara tentang kompetensi/kemampuan petugas dalam pelayanan?',
            7 => 'Bagaimana pendapat saudara perilaku petugas dalam pelayanan terkait kesopanan dan keramahan?',
            8 => 'Bagaimana pendapat Saudara tentang penanganan pengaduan pengguna layanan?',
            9 => 'Bagaimana pendapat Saudara tentang kualitas sarana dan prasarana?',
            10 => 'Bagaimana pendapat anda tentang transparansi pelayanan yang diberikan?',
            11 => 'Bagaimana integritas petugas pelayanan dalam memberikan pelayanan?',
        ];

        $step = $request->get('step', 1);

        if (!array_key_exists($step, $questions)) {
            return redirect()->route('survey.thankyou');
        }

        return view('survey', [
            'question' => $questions[$step],
            'step' => $step
        ]);
    }

    public function storeAnswer(Request $request)
    {
        $request->validate([
            'jawaban' => 'required',
            'step' => 'required|integer'
        ]);

        $step = $request->input('step');
        $jawaban = $request->input('jawaban');
        $sessionId = session()->getId(); // user ID unik (tanpa login)

        // Nama kolom yang akan diisi
        $columnName = 'jawaban_' . $step;

        if ($step == 1) {
            $dataToUpdate['nama'] = session('pengunjung_nama');
            $dataToUpdate['umur'] = session('pengunjung_umur');
            $dataToUpdate['no_hp'] = session('pengunjung_no_hp');
            $dataToUpdate['jenis_kelamin'] = session('pengunjung_jenis_kelamin');
        }

        // Update atau insert data berdasarkan session_id
        \App\Models\SurveyAnswer::updateOrCreate(
            ['session_id' => $sessionId],
            [$columnName => $jawaban]
        );

        $nextStep = $step + 1;

        // Asumsikan ada 11 pertanyaan
        if ($nextStep > 11) {
            return redirect()->route('survey.thankyou');
        }

        return redirect()->route('survey.question', ['step' => $nextStep]);
    }
}
