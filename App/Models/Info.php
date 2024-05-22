<?php

namespace App\Models;

class Info
{

    protected $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function getInfo() :array
    {
        $query = "select titulo, descricao from tb_info";
        // return $this->db->query($query)->fetchAll();
        return $this->db->query($query)->fetchAll();
    }
}