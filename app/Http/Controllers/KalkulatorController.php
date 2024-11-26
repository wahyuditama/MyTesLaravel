<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    //
    public function index()
    {
        return view("kalkulator/index");
    }
    //function Tambah
    public function tambah()
    {
        $title = "form-tambah";
        $jumlah = 0;
        return view("kalkulator/tambah", compact('title', 'jumlah'));
    }
    public function storeTambah(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;
        $jumlah = $angka1 + $angka2;
        $title = "Hasil dari" . $angka1 . "+" . $angka2 . "Adalah :" . $jumlah;
        return view('kalkulator.tambah', compact('jumlah', 'title'));
    }
    // end Function Tambah
    //function Kurang
    public function kurang()
    {
        $title = "form-kurang";
        $jumlah = 0;
        return view("kalkulator/kurang", compact('title', 'jumlah'));
    }
    public function storeKurang(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;
        $jumlah = $angka1 - $angka2;
        $title = "Hasil dari" . $angka1 . "-" . $angka2 . "Adalah :" . $jumlah;
        return view('kalkulator.kurang', compact('jumlah', 'title'));
    }
    //end Function Kurang
    //function Kali
    public function kali()
    {
        $title = "form-kali";
        $jumlah = 0;
        return view("kalkulator/kali", compact('title', 'jumlah'));
    }
    public function storeKali(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;
        $jumlah = $angka1 * $angka2;
        $title = "Hasil dari" . $angka1 . "x" . $angka2 . "Adalah :" . $jumlah;
        return view('kalkulator.kali', compact('jumlah', 'title'));
    }
    // end Function kali
    public function bagi()
    {
        $title = "form-bagi";
        $jumlah = 0;
        return view("kalkulator/bagi", compact('title', 'jumlah'));
    }
    public function storeBagi(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;
        $jumlah = $angka1 / $angka2;
        $title = "Hasil dari" . $angka1 . ":" . $angka2 . "Adalah :" . $jumlah;
        return view('kalkulator.bagi', compact('jumlah', 'title'));
    }
}
