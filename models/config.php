<?php

class Config extends model {

	public function __construct() {
		parent::__construct();
	} 

	public function get() {
		$array = array();

		$sql = "SELECT * FROM config";
		$sql = $this->db->query($sql);

		if ($sql->rowCount() > 0) {
			foreach ($sql->fetchAll() as $c) {
				$array[$c['nome']] = $c['valor'];
			}
		}

		return $array;
	}
	
}

?>