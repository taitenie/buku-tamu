<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Survey;
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

        // Simpan data pengunjung di tabel Survey
        $survey = Survey::create([
            'nama' => $request->input('nama'),
            'umur' => $request->input('umur'),
            'no_hp' => $request->input('no_hp'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
        ]);

        // Simpan ID survei ke session untuk melacak survei saat ini
        session(['survey_id' => $survey->id]);

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

        // Ambil ID survei dari session
        $surveyId = session('survey_id');
        if (!$surveyId) {
            return redirect()->route('survey.welcome')->with('error', 'Silakan mulai survei terlebih dahulu.');
        }

        // Ambil jawaban sebelumnya dari SurveyAnswer berdasarkan survey_id
        $prevAnswer = SurveyAnswer::where('survey_id', $surveyId)
            ->where('question_number', $step)
            ->value('answer');

        return view('survey', [
            'question' => $questions[$step],
            'step' => $step,
            'prevAnswer' => $prevAnswer,
            'questions' => $questions,
        ]);
    }

    public function storeAnswer(Request $request)
    {
        try {
            $step = $request->input('step');
            $action = $request->input('action'); // next, back, submit

            // Validasi hanya jika action adalah "next" atau "submit"
            if ($action !== 'back') {
                $request->validate([
                    'jawaban' => 'required',
                ]);
            }

            // Ambil ID survei dari session
            $surveyId = session('survey_id');
            if (!$surveyId) {
                throw new \Exception('Silakan mulai survei terlebih dahulu.');
            }

            // Simpan jawaban ke tabel SurveyAnswer jika action bukan "back"
            if ($action !== 'back') {
                SurveyAnswer::updateOrCreate(
                    [
                        'survey_id' => $surveyId,
                        'question_number' => $step,
                    ],
                    [
                        'answer' => $request->input('jawaban'),
                    ]
                );
            }

            // Navigasi ke step berikutnya atau sebelumnya
            if ($action === 'back') {
                $nextStep = max(1, $step - 1); // Pastikan tidak kurang dari 1
            } else {
                $nextStep = $step + 1;
            }

            if ($action === 'submit') {
                return redirect()->route('survey.thankyou');
            }

            return redirect()->route('survey.question', ['step' => $nextStep]);
        } catch (\Exception $e) {
            return redirect()->route('survey.welcome')->with('error', $e->getMessage());
        }
    }
}
