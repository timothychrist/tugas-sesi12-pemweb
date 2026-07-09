<?php

namespace App\Http\Controllers;

class SoalDuaController extends Controller
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
        $nilai1 = 88;
        $nilai2 = 34;
        $nilai3 = 91;

        $hasilMax = $this->cariMax($nilai1, $nilai2, $nilai3);

        return view('tugasno2', compact('nilai1', 'nilai2', 'nilai3', 'hasilMax'));
    }
}