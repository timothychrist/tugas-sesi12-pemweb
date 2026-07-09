<?php

namespace App\Http\Controllers;

class SoalSatuController extends Controller
{
    private function cariMax($a, $b, $c) {
        $max = $a;
        if ($b > $max) {
            $max = $b;
        }
        if ($c > $max) {
            $max = $c;
        }
        return $max;
    }

    public function index()
    {
        $nilai1 = 15;
        $nilai2 = 42;
        $nilai3 = 27;

        $hasilMax = $this->cariMax($nilai1, $nilai2, $nilai3);

        return view('tugasno1', compact('nilai1', 'nilai2', 'nilai3', 'hasilMax'));
    }
}