<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BukuTamu; // pastikan modelnya ada
use Illuminate\Support\Facades\Storage;

class BukuTamuController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'nik' => 'required|string',
            'phone' => 'required|string',
            'pekerjaan' => 'required|string',
            'keperluan' => 'required|string',
            'alamat' => 'required|string',
            'gender' => 'required|string',
            'identitas' => 'required|string',
            'bidang' => 'required|exists:bidangs,id',
            'rekomendasi' => 'nullable|exists:rekomendasi,id',
            'foto' => 'required|string',
        ]);

        // Handle save to DB only if validation passes
        try {
            // Simpan gambar
            // Simpan gambar sebagai file
            $image = $request->foto;
            $image_parts = explode(";base64,", $image);
            $image_base64 = base64_decode($image_parts[1]);

            // Nama file gambar
            $image_name = uniqid() . '.png';

            // Menyimpan file ke disk 'public'
            Storage::disk('public')->put('identitas/' . $image_name, $image_base64);

            // Simpan path gambar ke database
            BukuTamu::create([
                'name' => $request->name,
                'nik' => $request->nik,
                'phone' => $request->phone,
                'pekerjaan' => $request->pekerjaan,
                'keperluan' => $request->keperluan,
                'alamat' => $request->alamat,
                'gender' => $request->gender,
                'identitas' => $request->identitas,
                'bidang_id' => $request->bidang,
                'rekomendasi_id' => $request->rekomendasi,
                'foto' => 'identitas/' . $image_name,  // Hanya simpan path, bukan base64
            ]);

            return redirect()->route('home')->with('success', 'Data berhasil disimpan.');
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
