<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function warga()
    {
        return view('warga', [
            'title' => 'Halaman Warga',
            'content' => 'Ini adalah halaman yang menampilkan daftar warga.'
        ]);
    } 

    public function iuran()
    {
        echo "Ini halaman iuran";
    }

} 

