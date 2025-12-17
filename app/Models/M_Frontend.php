<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Frontend extends Model
{

    public function getLastId()
    {
        return $this->selectMax('')->first()[''];
    }
    public function generateId()
    {
        $lastId = $this->getLastId();
        $newIdNumber = $lastId ? (int)substr($lastId, 2) + 1 : 1;
        return 'FA' . str_pad($newIdNumber, 3, '0', STR_PAD_LEFT);
    }
}
