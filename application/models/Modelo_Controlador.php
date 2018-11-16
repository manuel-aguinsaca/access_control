<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Modelo_Controlador
 *
 * @author 
 */
class Modelo_Controlador extends CI_Model {

	
	public function __construct() {
		parent::__construct();
	}
	
	public function crear($datos) {
		$this->db->insert("usuario", $datos);
		$ide = $this->db->insert_id();
		return $ide;
	}
	public function seleccion_general($tabla){
		$data = array();
		$this->db->select('*');
		$this->db->from(''.$tabla.'');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row) {
				$data[] = $row;
			}
		}
		return $data;
	}
	public function consultar_administrador($usuario){
		$this->db->select("*");
		$this->db->from("administrador");
		$this->db->where("administrador.usuario", $usuario);		
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row) {
				$data[] = $row;
			}
		}
		return $data;
	}

}
?>