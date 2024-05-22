<?php

namespace App\Controllers;

//Recursos do miniframework
use MF\Controller\Action;


use App\Connection;
use App\Models\Produto;

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
        $this->view->dados = array('Notebook', 'Smartphone');
        $this->render('sobreNos', 'layout1');
    }

    
}