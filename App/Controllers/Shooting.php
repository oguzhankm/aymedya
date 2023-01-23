<?php

namespace Kodlazim\App\Controllers;

class Shooting
{
    public function index()
    {
        //$cekimMekanlari = CekimMekanlariModel::all();
        return view('shooting',[
            'cekimMekanlari' => ''//$cekimMekanlari
        ]);
    }

    public function detay($shootingId)
    {

    }
}