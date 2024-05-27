<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user(){
    return view('folderbaru.produk');
    }

    public function cek_plat($angka){
        if ($angka%2==0) $hasil = "Bilangan Genap";
            else $hasil = "Bilangan Ganjil";
            echo $hasil;
    }

    public function form_angka(){
        return view('folderbaru.produk');
    }

    public function form_action(Request $request){
        $angka = $request->angka;
        if ($angka%2==0) $hasil = "Bilangan Genap";
            else $hasil = "Bilangan Ganjil";
            echo $hasil;
    }

    public function tagihan(){
        return view('folderbaru.tagihan');
    }

public function hitungTagihan(Request $request){
    $pemakaian = $request -> input ('pemakaian');
    $tagihan = 0;

    if ($pemakaian <= 25){
        $tagihan = $pemakaian * 150;
    } 
    elseif ($pemakaian <= 50){
        $tagihan = 25* 170;
    }
    elseif ($pemakaian <= 75){
        $tagihan = 25*210;
    }
    else {
        $tagihan = (25*150) + (25*170) + (25*210) + (($pemakaian - 75)*250);
    }
    return view('folderbaru.tagihan', ['pemakaian'=>$pemakaian,'tagihan'=>$tagihan]);
}
}
