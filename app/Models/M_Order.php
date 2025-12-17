<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Order extends Model
{
    protected $table                = 'tbl_order';
    protected $primaryKey           = 'id_order';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['id_order', 'id_costumer', 'id_produtu', 'presu', 'kuantidade', 'total_presu'];

    public function getLastId()
    {
        return $this->selectMax('id_order')->first()['id_order'];
    }
    public function generateId()
    {
        $lastId = $this->getLastId();
        $newIdNumber = $lastId ? (int)substr($lastId, 2) + 1 : 1;
        return 'DO' . str_pad($newIdNumber, 3, '0', STR_PAD_LEFT);
    }

    public function insertOrder($data)
    {
        return $this->db->table('tbl_order')->insert($data);
    }
}
