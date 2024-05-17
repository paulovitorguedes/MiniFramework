<?php

namespace MF\Controller;

abstract class Action
{

    protected $view;

    public function __construct()
    {
        //\stdClass é uma classe nativa do php onde podemos criar objetos padrões vazios
        $this->view = new \stdClass;
    }

    //reinderiza os layout das páginas
    protected function render($view, $layout)
    {
        $this->view->page = $view;
        if(file_exists("../App/Views/$layout.phtml")){
            require_once"../App/Views/$layout.phtml";
        }else{
            $this->content();
        }
    }

    // os conteúdos das páginas 
    protected function content()
    {
        $classAtual = get_class($this);
        $classAtual = str_replace('App\\Controllers\\', '', $classAtual);
        $classAtual = str_replace('Controller', '', $classAtual);
        require_once "../App/Views/$classAtual/{$this->view->page}.phtml";
    }
}