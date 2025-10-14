<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class temanController extends Controller
{
    public function index(){
        $dt = [
            [
                'idbuku'=>1,
                'namateman'=>'Jaka Kopling',
                'alamat'=>'JL. Lurus Terus Belok Ke Atas',
                'kota'=>'Denpasar',
                'telp'=>'036112345',
                'wa'=>'0892341244',
            ],
            [
                'idbuku'=>2,
                'namateman'=>'Ambatude',
                'alamat'=>'JL. Lurus Terus Belok Ke Atas',
                'kota'=>'Denpasar',
                'telp'=>'036112345',
                'wa'=>'0892341244',
            ],
        ];
        return view('teman',compact('dt') );
    }
}
