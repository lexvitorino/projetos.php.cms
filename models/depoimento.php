<?php

class Depoimento extends model {

	public function __construct() {
		parent::__construct();
	} 

	public function get($limite = 0) {
		$array = array();

		$sql = "SELECT * FROM depoimento ORDER BY RAND()";
		if ($limite > 0) {
			$sql .= " LIMIT ".$limite;
		}

		$sql = $this->db->query($sql);

		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}
	
}

?>