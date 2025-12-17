<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Produtu extends Model
{
    protected $table                = 'tbl_produtu';
    protected $primaryKey           = 'id_produtu';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['id_produtu', 'naran_produtu', 'id_kategoria', 'presu'];

    public function getLastId()
    {
        return $this->selectMax('id_produtu')->first()['id_produtu'];
    }
    public function insertProdutu($data)
    {
        return $this->db->table('tbl_produtu')->insert($data);
    }
    public function generateId()
    {
        $lastId = $this->getLastId();
        $newIdNumber = $lastId ? (int)substr($lastId, 2) + 1 : 1;
        return 'PR' . str_pad($newIdNumber, 3, '0', STR_PAD_LEFT);
    }
}
