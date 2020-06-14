<?php

class core {
    
    public function run() {

        if(isset($_SERVER['PHP_SELF']) && !empty($_SERVER['PHP_SELF'])) {
          $url = explode('index.php', $_SERVER['PHP_SELF']);
          $url = end($url);
        } 
 
        if ($url == '') {
          $url = $_SERVER['REQUEST_URI'];
          if($url == '/painel/') {
            $url = '';
          }
        }

        $params = array();
        if (!empty($url)) {
            $url = str_replace('/painel/','',$url);
            $url = explode('/', $url);

            array_shift($url);    

            print_r($url);
            exit;

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

        $core = new $currentController();
        call_user_func_array(array($core, $currentAction), $params);
    }
    
}
