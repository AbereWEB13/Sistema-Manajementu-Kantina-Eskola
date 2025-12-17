<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Kontraktu extends Model
{
    protected $table                = 'tbl_kontraktu';
    protected $primaryKey           = 'id_kontraktu';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['id_costumer', 'id_fatin', 'data_hahu', 'data_remata', 'total_osan'];

    public function getLastId()
    {
        return $this->selectMax('id_kontraktu')->first()['id_kontraktu'];
    }
    public function generateId()
    {
        $lastId = $this->getLastId();
        $newIdNumber = $lastId ? (int)substr($lastId, 2) + 1 : 1;
        return 'KT' . str_pad($newIdNumber, 3, '0', STR_PAD_LEFT);
    }
    public function insertKontraktu($data)
    {
        return $this->db->table('tbl_kontraktu')->insert($data);
    }
}
