<?php

class Usuario extends model {

	public function __construct() {
		parent::__construct();
	} 

    public function getByEmail($email) {
        $array = array();
        $email = addslashes($email);
        
        $sql = "SELECT id, email FROM usuario WHERE email = '$email'";
        $sql = $this->db->query($sql);
        if ($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }
        
        return $array;
    }

	public function estaLogado() {
		if (!isset($_SESSION['lgpanel']) || empty($_SESSION['lgpanel'])) {
			header("Location: ".BASE."login");
			exit;
		}
	}

	public function isExists($email, $senha) {
        $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
	
}

