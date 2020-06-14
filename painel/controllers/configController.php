<?php

class ConfigController extends controller {

    public function index() {
    	$usuario = new Usuario();
    	$usuario->estaLogado();

    	$dados = array();
    	
    	$c = new Config();
        
        if (isset($_POST['site_title']) && !empty($_POST['site_title'])) {
        	$c->setConfig('site_title', addslashes($_POST['site_title']));
        	$c->setConfig('home_banner', addslashes($_POST['home_banner']));
        	$c->setConfig('home_welcome', addslashes($_POST['home_welcome']));
            $c->setConfig('site_template', addslashes($_POST['site_template']));
        	header("Location: ".BASE."config");
        	exit;
        }

        $this->loadTamplate('config', $dados);
    }
}
