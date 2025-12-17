<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Fatin extends Model
{
    protected $table                = 'tbl_fatin';
    protected $primaryKey           = 'id_fatin';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = [
        'kode_fatin',
        'naran_fatin',
        'id_kategoria',
        'oras_loke',
        'oras_taka',
        'image'
    ];
    public function getLastId()
    {
        return $this->selectMax('id_fatin')->first()['id_fatin'];
    }
    public function generateId()
    {
        $lastId = $this->getLastId();
        $newIdNumber = $lastId ? (int)substr($lastId, 2) + 1 : 1;
        return 'FA' . str_pad($newIdNumber, 3, '0', STR_PAD_LEFT);
    }
    public function insertFatin($data)
    {
        return $this->db->table('tbl_fatin')->insert($data);
    }
}
