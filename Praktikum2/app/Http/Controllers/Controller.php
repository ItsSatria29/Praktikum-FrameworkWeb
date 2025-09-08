<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        $data = [
            'name' => 'Satria Panca Nugroho',
            'ttl' => 'Karawang, 29 Oktober 2005',
            'foto' => 'MyFoto.jpg',
            'pendidikan' => [
            ['jenjang' => 'SD', 'nama' => 'SDN Tamelang 1', 'tahun' => '2011 - 2017'],
            ['jenjang' => 'SMP', 'nama' => 'SMPN 1 Klari', 'tahun' => '2017 - 2020'],
            ['jenjang' => 'SMA', 'nama' => 'SMK Texar Karawang', 'tahun' => '2020 - 2023'],
            ['jenjang' => 'Kuliah', 'nama' => 'Universitas Singaperbangsa', 'tahun' => '2023 - sekarang']
            ]
        ];

        return view('home', compact('data'));
    }
}