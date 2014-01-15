<?php
class Data_model extends CI_Model {

    var $nombre   = '';
    var $email = '';
    var $telefono    = '';
	var $edad = '';
	var $ocupacion = '';
	var $fecha = '';
	
	function __construct() {
		parent :: __construct();
	}

	function insert() {
		$this->nombre = $_POST['nombre'];
		$this->email = $_POST['email'];
		$this->telefono = $_POST['telefono'];
		$this->edad = $_POST['edad'];
		$this->ocupacion = $_POST['ocupacion'];		
		$this->fecha = date('Y-m-d');

		$this->db->insert('data', $this);
	}
}