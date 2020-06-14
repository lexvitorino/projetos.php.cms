<?php

class LoginController extends controller {
    
    public function index() {
        $dados = array();
        
        if (isset($_POST['email']) && !empty($_POST['email'])) {
            if (isset($_POST['senha']) && !empty($_POST['senha'])) {
                $email = addslashes($_POST['email']);
                $senha = md5(addslashes($_POST['senha']));

                $usuario = new Usuario();
                if ($usuario->isExists($email, $senha)) {
                	$_SESSION['lgpanel'] = $usuario->getByEmail($email);
                    header("Location: ".BASE);
                } else {
                    $dados['erros'] = 'E-mail ou Senha não conferem!';
                }
            }
        }

        $this->loadView("/login", $dados);
    }
    
    public function logout() {
        unset($_SESSION['lgpanel']);
        header("Location: ".BASE."login");
    }
    
}
