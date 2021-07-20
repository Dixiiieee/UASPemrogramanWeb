<?php namespace App\Models;
use CodeIgniter\Model;
 
class KasModels extends Model
{
     
    public function getLaporan()
    {
         return $this->db->table('iuran')
         ->join('warga','warga.id=iuran.warga_id')
         ->get()->getResultArray();  
    }
}