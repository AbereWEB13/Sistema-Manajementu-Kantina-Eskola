<?php

namespace App\Models;

use CodeIgniter\Model;

class M_User extends Model
{
    protected $table = 'tbl_user';
    protected $primaryKey = 'id_user';
    protected $useAutoIncrement = true;
    protected $insertID = 0;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = ['username', 'password', 'email', 'id_role'];
    public function getLastId()
    {
        return $this->selectMax('id_user')->first()['id_user'];
    }

    public function generateId()
    {
        $lastId = $this->getLastId();
        $newIdNumber = $lastId ? (int)substr($lastId, 2) + 1 : 1;
        return 'AUS' . str_pad($newIdNumber, 3, '0', STR_PAD_LEFT);
    }

    public function insertUser($data)
    {
        return $this->db->table('tbl_user')->insert($data);
    }
}
