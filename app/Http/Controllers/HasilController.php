<?php

namespace App\Http\Controllers;

use App\Models\Alternative;
use App\Models\Criteria;
use Illuminate\Http\Request;

class HasilController extends Controller
{
    public function hasil()
    {
        // Ambil semua item dari database
        $alternatives = Alternative::all();
        $criterias = Criteria::all();

        // Hitung nilai maksimum untuk kriteria BENEFIT dan minimum untuk kriteria COST
        $minC1 = Alternative::min('C1');
        $maxC2 = Alternative::max('C2');
        $maxC3 = Alternative::max('C3');
        $maxC4 = Alternative::max('C4');
        $maxC5 = Alternative::max('C5');

        // Total bobot kriteria (pastikan totalnya adalah 1)
        $totalBobot = 0.30 + 0.15 + 0.25 + 0.25 + 0.05;

        // Hitung normalisasi SAW untuk setiap item
        foreach ($alternatives as $item) {

            // Hitung normalisasi untuk kriteria COST (C1)
            $item->normalisasiC1 = $minC1 / $item->C1;

            // Hitung normalisasi untuk kriteria BENEFIT (C2, C3, C4, C5)
            $item->normalisasiC2 = $item->C2 / $maxC2;
            $item->normalisasiC3 = $item->C3 / $maxC3;
            $item->normalisasiC4 = $item->C4 / $maxC4;
            $item->normalisasiC5 = $item->C5 / $maxC5;

            // Hitung nilai SAW (Simple Additive Weighting)
            $item->normalized_saw = 
                ($item->normalisasiC1 * 0.30) + // Bobot C1
                ($item->normalisasiC2 * 0.15) + // Bobot C2
                ($item->normalisasiC3 * 0.25) + // Bobot C3
                ($item->normalisasiC4 * 0.25) + // Bobot C4
                ($item->normalisasiC5 * 0.05); // Bobot C5
        }

        // Kembalikan data ke view perhitungan/index.blade.php
        return view('hasil', [
            'alternatives' => $alternatives,
            'title' => 'hasil'
        ],compact('alternatives'));
    }
}
