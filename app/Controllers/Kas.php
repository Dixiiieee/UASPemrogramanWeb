<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\KasModels;
 
class Kas extends BaseController
{
    public function daftarkas()
    {
        $title = 'Daftar Kas Warga';
        $model = new KasModels();
        $iuran = $model->getLaporan();
        return view('kas/daftarkas', compact('iuran', 'title'));
    }

}