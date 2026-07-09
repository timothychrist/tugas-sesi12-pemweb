<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function index()
    {
        return view('tugasno3', [
            'angka1' => '', 'angka2' => '', 'operator' => '', 'hasil' => ''
        ]);
    }

    public function hitung(Request $request)
    {
        $angka1 = $request->input('angka1');
        $angka2 = $request->input('angka2');
        $operator = $request->input('operator');
        $hasil = "";

        if (is_numeric($angka1) && is_numeric($angka2)) {
            $angka1 = floatval($angka1);
            $angka2 = floatval($angka2);

            switch ($operator) {
                case "tambah": $hasil = $angka1 + $angka2; break;
                case "kurang": $hasil = $angka1 - $angka2; break;
                case "kali": $hasil = $angka1 * $angka2; break;
                case "bagi":
                    $hasil = ($angka2 == 0) ? "Error: Tidak bisa dibagi dengan 0" : $angka1 / $angka2;
                    break;
                default: $hasil = "Operator tidak valid";
            }
        } else {
            $hasil = "Input harus berupa angka!";
        }

        return view('tugasno3', compact('angka1', 'angka2', 'operator', 'hasil'));
    }
}