<?php

class PaginaController extends controller {
    
	public function __construct() {
		parent::__construct();
	}

	public function index($url) {
		$dados = array();

		$p = new Pagina();
		$dados = $p->getByUrl($url);

		$this->loadTamplate('pagina', $dados);		
	}
    
}
