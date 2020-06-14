<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of controller
 *
 * @author AVITORINO
 */
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
        include 'views/templates/'.$this->config['site_template'].'.php';
    }

    public function loadViewInTamplate($viewName, $viewData) {
        extract($viewData);
        include 'views/'.$viewName.'.php';
    }        

    public function loadMenu() {
        $menu = new Menu();
        $m = array(
            "menu" => $menu->get()
        );

        $this->loadView("menu", $m);
    }
}
