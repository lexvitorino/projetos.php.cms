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
	
}

