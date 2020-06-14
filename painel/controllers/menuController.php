<?php

class MenuController extends controller {

     function index() {
    	$usuario = new Usuario();
    	$usuario->estaLogado();
    	
        $dados = array();

        $menu = new Menu();
        $dados['menus'] = $menu->get();

        $this->loadTamplate('menu', $dados);
    }   

    function adicionar() {
        $dados = array();

        $menu = new Menu();
        if (isset($_POST['nome']) && !empty($_POST['nome'])) {
            $url = addslashes($_POST['url']);
            $nome = addslashes($_POST['nome']);
            $menu->salvar(0, $url, $nome);

            header("Location: ".BASE."menu");
        }

        $this->loadTamplate("menu/adicionar", $dados);
    }

    function editar($id) {
        $dados = array();
        if ($id > 0) {

            $menu = new Menu();
            if (isset($_POST['nome']) && !empty($_POST['nome'])) {
                $url = addslashes($_POST['url']);
	            $nome = addslashes($_POST['nome']);
	            $menu->salvar($id, $url, $nome);

                header("Location: ".BASE."menu");
            }

            $dados['menu'] = $menu->getById($id);
            $this->loadTamplate('menu/editar', $dados);
        } else {
            header("Location: ".BASE."menu");
        }
    }

    function excluir($id) {
        if ($id > 0) {
            $id = addslashes($id);
            $menu = new Menu();
            $menu->excluir($id);

            header("Location: ".BASE."/menu");
        }
    }
}
