<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Costumer extends Model
{
    protected $table                = 'tbl_costumer';
    protected $primaryKey           = 'id_costumer';
    protected $useAutoIncrement     = false;
    protected $allowedFields        = ['naran', 'seksu', 'numeru_telemovel', 'enderesu', 'email', 'image'];
    public function getLastId()
    {
        return $this->selectMax('id_costumer')->first()['id_costumer'];
    }
    public function generateId()
    {
        $lastId = $this->getLastId();
        $newIdNumber = $lastId ? (int)substr($lastId, 2) + 1 : 1;
        return 'CO' . str_pad($newIdNumber, 3, '0', STR_PAD_LEFT);
    }
    public function insertCostumer($data)
    {
        return $this->db->table('tbl_costumer')->insert($data);
    }
}
