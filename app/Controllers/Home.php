<?php

namespace App\Controllers;
use App\Models\WargaModels;

class Home extends BaseController
{
	public function homepage()
	{
		$title = 'Data Warga';
        $model = new WargaModels();
		$data = array(
			'title' => 'home',
			'jumlah_warga' => $this->model->jumlah_warga()
		);
		return view('home/homepage', compact('data', 'title'));
	}
}
