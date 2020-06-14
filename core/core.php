<?php

class core {
    
    public function run() {

        if(isset($_SERVER['PHP_SELF']) && !empty($_SERVER['PHP_SELF'])) {
          $url = explode('index.php', $_SERVER['PHP_SELF']);
          $url = end($url);
        }

        if ($url == '') {
          $url = $_SERVER['REQUEST_URI'];
          if($url == '/') {
            $url = '';
          }
        }

        $params = array();
        if (!empty($url)) {
            $url = explode('/', $url);
            array_shift($url);    

            $currentController = $url[0].'Controller';    
            array_shift($url);

            if (isset($url[0])) {
                $currentAction = $url[0];
                array_shift($url);

            } else {
                $currentAction = 'index';
            }

            if (count($url) > 0) {
                $params = $url;
            }
                    
        } else {
            $currentController = 'homeController';
            $currentAction = 'index';
        }

        if (file_exists('controllers/'.$currentController.'.php')) {
            $core = new $currentController();
        } else {
            $core = new PaginaController();
            $currentAction = 'index';
            $url = explode('Controller', $currentController);
            $params = array('url' => $url[0]);
        }        
        
        call_user_func_array(array($core, $currentAction), $params);
    }
    
}
