<?php

class PaginaController extends controller {

    public function index() {
    	$usuario = new Usuario();
    	$usuario->estaLogado();
    	
        $dados = array();

        $pagina = new Pagina();
        $dados['paginas'] = $pagina->get();

        $this->loadTamplate('pagina', $dados);
    }

    function adicionar() {
        $dados = array();

        $pagina = new Pagina();
        if (isset($_POST['titulo']) && !empty($_POST['titulo'])) {
            $url = addslashes($_POST['url']);
            $titulo = addslashes($_POST['titulo']);
	        $corpo = addslashes($_POST['corpo']);
            $pagina->adicionar($url, $titulo, $corpo);

            header("Location: ".BASE."pagina");
        }

        $this->loadTamplate("pagina/adicionar", $dados);
    }

    function editar($id) {
        $dados = array();
        if ($id > 0) {

            $pagina = new Pagina();
            if (isset($_POST['titulo']) && !empty($_POST['titulo'])) {
                $url = addslashes($_POST['url']);
	            $titulo = addslashes($_POST['titulo']);
	            $corpo = addslashes($_POST['corpo']);
	            $pagina->editar($id, $url, $titulo, $corpo);

                header("Location: ".BASE."pagina");
            }

            $dados['pagina'] = $pagina->getById($id);
            $this->loadTamplate('pagina/editar', $dados);
        } else {
            header("Location: ".BASE."pagina");
        }
    	
    }

    function excluir($id) {
        if ($id > 0) {
            $id = addslashes($id);
            $pagina = new Pagina();
            $pagina->excluir($id);

            header("Location: ".BASE."/pagina");
        }
    }
    
}
