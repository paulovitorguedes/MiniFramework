<?php

namespace App\Models;

use MF\Model\Model;

class Info extends Model
{
    public function getInfo() :array
    {
        $query = "select titulo, descricao from tb_info";
        return $this->db->query($query)->fetchAll();
    }
}