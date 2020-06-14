<?php

class Menu extends model {

	public function __construct() {
		parent::__construct();
	} 

	public function get() {
		$array = array();

		$sql = "SELECT * FROM menu";
		$sql = $this->db->query($sql);

		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	} 

	public function getById($id) {
		$array = array();

		$sql = "SELECT * FROM menu WHERE id = '$id'";
		$sql = $this->db->query($sql);

		if ($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}

	public function salvar($id, $url, $nome) {
        if ($id > 0) {
            $sql = "UPDATE menu SET nome = '$nome', url = '$url' WHERE Id = '$id'";
        } else {
            $sql = "INSERT INTO menu SET nome = '$nome', url = '$url'";
        }
        $sql = $this->db->query($sql);
        $id = $this->db->lastInsertId();
        return $id;
    }

    public function excluir($id) {
        $sql = "DELETE FROM menu WHERE id = '$id'";
        $this->db->query($sql);
    }
	
}

