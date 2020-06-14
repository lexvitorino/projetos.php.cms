<?php

class controller {

    private $config;

    public function __construct() {
        $cfg = new Config();
        $this->config = $cfg->get();
    }

    public function loadView($viewName, $viewData = array()) {
        extract($viewData);
        include 'views/'.$viewName.'.php';
    }

    public function loadTamplate($viewName, $viewData = array()) {
        include 'views/template.php';
    }

    public function loadViewInTamplate($viewName, $viewData) {
        extract($viewData);
        include 'views/'.$viewName.'.php';
    }        
}
