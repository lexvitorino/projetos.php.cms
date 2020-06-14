<?php

class Pagina extends model {

	public function __construct() {
		parent::__construct();
	} 

	public function get() {
		$array = array();

		$sql = "SELECT id, url, titulo FROM pagina";
		$sql = $this->db->query($sql);

		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function getById($id) {
		$array = array();

		$sql = "SELECT * FROM pagina WHERE id = '$id'";
		$sql = $this->db->query($sql);

		if ($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}

	public function adicionar($url, $titulo, $corpo) {
        $sql = "INSERT INTO pagina SET titulo = '$titulo', url = '$url', corpo = '$corpo'";
        $sql = $this->db->query($sql);
       	$menu = new Menu();
       	$menu->salvar(0, $url, $titulo);
    }

	public function editar($id, $url, $titulo, $corpo) {
        $sql = "UPDATE pagina SET titulo = '$titulo', url = '$url', corpo = '$corpo' WHERE id = '$id'";
        $sql = $this->db->query($sql);
        $id = $this->db->lastInsertId();
    }

    public function excluir($id) {
        $sql = "DELETE FROM pagina WHERE id = '$id'";
        $this->db->query($sql);
    }
	
}