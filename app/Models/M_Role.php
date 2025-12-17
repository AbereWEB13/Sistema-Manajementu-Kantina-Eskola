<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Role extends Model
{
    protected $table = 'tbl_role';
    protected $primaryKey = 'id_role';
    protected $useAutoIncrement = true;
    protected $insertID = 0;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = ['naran_role'];
    public function getLastId()
    {
        return $this->selectMax('id_role')->first()['id_role'];
    }
    public function insertrole($data)
    {
        return $this->db->table('tbl_role')->insert($data);
    }
    public function generateId()
    {
        $lastId = $this->getLastId();
        $newIdNumber = $lastId ? (int)substr($lastId, 2) + 1 : 1;
        return 'RO' . str_pad($newIdNumber, 3, '0', STR_PAD_LEFT);
    }
}
