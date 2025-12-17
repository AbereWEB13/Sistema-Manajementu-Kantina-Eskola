<?php

namespace App\Models;

use CodeIgniter\Model;

class M_kategoria extends Model
{
    protected $table                = 'tbl_kategoria';
    protected $primaryKey           = 'id_kategoria';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['naran_kategoria', 'deskrisaun'];

    public function getLastId()
    {
        return $this->selectMax('id_kategoria')->first()['id_kategoria'];
    }

    public function generateId()
    {
        $lastId = $this->getLastId();
        $newIdNumber = $lastId ? (int)substr($lastId, 2) + 1 : 1;
        return 'DE' . str_pad($newIdNumber, 3, '0', STR_PAD_LEFT);
    }
    public function insertkategoria($data)
    {
        return $this->db->table('tbl_kategoria')->insert($data);
    }
}
