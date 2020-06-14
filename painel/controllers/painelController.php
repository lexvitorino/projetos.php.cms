<?php

class PainelController extends controller {
    
    public function index() {
    	$usuario = new Usuario();
    	$usuario->estaLogado();

        $dados = array();

        $this->loadTamplate("painel/home", $dados);
    }
    
}
