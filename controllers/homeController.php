<?php

class HomeController extends controller {
    
    public function index() {
        $dados = array(
        	'depoimento' => array()
        );

        $depoimento = new Depoimento();
        $dados['depoimento'] = $depoimento->get(2);
        
        $this->loadTamplate('home', $dados);
    }
    
}
