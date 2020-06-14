<?php

class Pagina extends model {

	public function __construct() {
		parent::__construct();
	} 

	public function getByUrl($url) {
		$array = array();

		$sql = "SELECT * FROM pagina WHERE url = '$url'";
		$sql = $this->db->query($sql);

		if ($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}
	
}