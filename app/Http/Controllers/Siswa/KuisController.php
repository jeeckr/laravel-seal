<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Soal;
use App\JawabanSiswa;
use App\Kuis;
use App\Nilai;
use App\Status;

class KuisController extends Controller
{
    public function index($id)
    {
        $title = 'Mata Pelajaran';
        $siswa = Auth::guard('siswa')->user();
        $soal = Soal::where('id_kuis', $id)->simplePaginate(1);
        if (!session()->has('nilai')) {
            //
            session(['nilai' => 0]);
        }
        return view('siswa.mapel.kuis.index_kuis', compact('title', 'siswa', 'soal'));
    }

    public function store(Request $request, $id)
    {

        $siswa = Auth::guard('siswa')->user();
        $soal = Soal::find($id);

        $jawaban = new JawabanSiswa();
        $jawaban->id_siswa = $siswa->id;
        $jawaban->id_soal = $id;
        $jawaban->jawaban = $request->pilihan;

        $soal = Soal::find($id);
        if ($soal->kunci == $request->pilihan) {
            $jawaban->hasil = 1;

            session(['nilai' => session('nilai') + 1]);
        }

        $jawaban->save();

        if (empty($request->next)) {

            $nilai = Nilai::create([
                'id_kuis' => $soal->id_kuis,
                'id_siswa' => $siswa->id,
                'nilai' => session('nilai')
            ]);

            $kuis = Kuis::find($soal->id_kuis);

            $request->validate([
                'status_siswa' => 'required'
            ]);
            $kuis->update($request->except('id_mapel'));

            session()->forget('nilai');

            return redirect()->route('nilai');
        }

        return redirect($request->next);
    }
}
