<?php

namespace App\Controllers;

//Recursos do miniframework
use MF\Controller\Action;


use App\Connection;
use App\Models\Produto;
use App\Models\Info;

class IndexController extends Action
{
   
    public function index()
    {
        //instância de Conexão
        $conn = Connection::getDb();

        //instânciar Modelo
        $produto = new Produto($conn);

        //$produtos = array de produtos
        $produtos = $produto->getProdutos();
        $this->view->dados = $produtos;

        $this->render('index', 'layout1');
    }


    public function sobreNos()
    {
        //instância de Conexão
        $conn = Connection::getDb();

        //instânciar Modelo
        $info = new Info($conn);

        //$produtos = array de produtos
        $informacoes = $info->getInfo();
        $this->view->dados = $informacoes;

        $this->render('sobreNos', 'layout1');
    }

    
}