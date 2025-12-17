<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Pagamentu extends Model
{
    protected $table                = 'tbl_pagamentu';
    protected $primaryKey           = 'id_pagamentu';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['id_pagamentu', 'id_costumer', 'osan', 'data_pagamentu','estatutu', 'data_atualiza'];

    public function getLastId()
    {
        $result = $this->selectMax('id_pagamentu')->first();
        return $result ? $result['id_pagamentu'] : null;
    }

    public function generateId()
    {
        $lastId = $this->getLastId();
        $newIdNumber = $lastId ? (int)substr($lastId, 2) + 1 : 1;
        return 'PA' . str_pad($newIdNumber, 3, '0', STR_PAD_LEFT);
    }

    public function insertPagamentu($data)
    {
        return $this->db->table('tbl_pagamentu')->insert($data);
    }
}
