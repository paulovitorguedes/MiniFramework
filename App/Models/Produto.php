<?php

namespace App\Models;

class Produto
{

    protected $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function getProdutos() :array
    {
        $query = "select id, descricao, preco from tb_produtos";
        return $this->db->query($query)->fetchAll();
    }
}