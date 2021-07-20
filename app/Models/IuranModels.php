<?php

namespace App\Models;
use CodeIgniter\Model;

class IuranModels extends Model
{
    protected $table = 'iuran';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id', 'keterangan', 'tanggal', 'bulan', 'tahun', 'jumlah', 'warga_id'];
} 
    