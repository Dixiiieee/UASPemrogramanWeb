<?php

namespace App\Models;

use CodeIgniter\Model;

class WargaModels extends Model
{
    protected $table = 'warga';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id', 'nama', 'kelamin', 'alamat', 'no_rumah', 'nik', 'status'];

    public function jumlah_warga()
    {
        return $this->db->table('warga')->countAll();
    }

} 
 