<?php

namespace App\Http\Controllers\KabayanId;

use App\Http\Controllers\Controller;

class DashboardKabayanController extends Controller
{
    public function index()
    {
        $konten = [
            [
                'gambar' => 'cv-putih.png',
                'link' =>  env('LINK_CV',null),
            ],
            [
                'gambar' => 'pt-putih.png',
                'link' => env('LINK_PT',null),
            ],
            [
                'gambar' => 'kurasi-putih.png',
                'link' => env('LINK_KURASI',null),

            ],
            [
                'gambar' => 'kii-putih.png',
                'link' => env('LINK_KII',null),
            ],
        ];
        return view('main.main-page', compact('konten'));
    }
}
