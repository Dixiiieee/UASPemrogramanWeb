<?php
namespace App\Controllers;

use App\Models\IuranModels;

class Iuran extends BaseController
{
    public function admin_index()
    {
        $title = 'Daftar Iuran Warga';
        $model = new IuranModels();
        $iuran = $model->findAll();
        return view('iuran/admin_index', compact('iuran', 'title'));
    }

    public function add()
    {
        // validasi data.
        $validation = \Config\Services::validation();
        $validation->setRules(['warga_id' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();
    
        if ($isDataValid)
        {
            $iuran = new IuranModels();
            $iuran->insert([
                'keterangan' => $this->request->getPost('keterangan'),
                'tanggal' => $this->request->getPost('tanggal'),
                'bulan' => $this->request->getPost('bulan'),
                'tahun' => $this->request->getPost('tahun'),
                'jumlah' => $this->request->getPost('jumlah'),
                'warga_id' => $this->request->getPost('warga_id')
            ]);
            return redirect('admin/iuran');
        }
        $title = "Tambah Iuran Warga";
        return view('iuran/form_add', compact('title'));
    }

    public function edit($id)
    {
        $iuran = new IuranModels();
        // validasi data.
        $validation = \Config\Services::validation();
        $validation->setRules(['warga_id' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();
        
        if ($isDataValid)
        {
            $iuran->update($id, [
                'keterangan' => $this->request->getPost('keterangan'),
                'tanggal' => $this->request->getPost('tanggal'),
                'bulan' => $this->request->getPost('bulan'),
                'tahun' => $this->request->getPost('tahun'),
                'jumlah' => $this->request->getPost('jumlah'),
                'warga_id' => $this->request->getPost('warga_id'),
            ]);
            return redirect('admin/iuran');
        }
        
        // ambil data lama
        $data = $iuran->where('id', $id)->first();
        $title = "Edit Data Iuran Warga";
        return view('iuran/form_edit', compact('title', 'data'));
    }

    public function delete($id)
    {
        $iuran = new IuranModels();
        $iuran->delete($id);
        return redirect('admin/iuran');
    }
}