<?php

namespace App\Http\Controllers;

use Input;
use Illuminate\Http\Request;

class HitungController extends Controller
{
    //
    public function menuHitung(){
      return view('menu');

    }
    public function viewTambah(){
      return view('tambah');

    }
    public function viewKali(){
      return view('kali');

    }
    public function ProcessTambah()
    {
      # code...
      $data1 = Input::get('data1');
      $data2 = Input::get('data2');

      $hasil = $data1 + $data2;
      return 'Hasil dari operasi ' .$data1. '&' .$data2. ' penjumlahan adalah : '.$hasil;

    }


}
