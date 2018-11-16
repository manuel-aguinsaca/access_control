<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Controlador_Docente  extends CI_Controller {	
	public function index(){
		$this->load->view('docente/frm_registro_docente');
	}
	public function registro_nuevo_docente(){
		$this->load->view('docente/frm_formulario_nuevo_docente');
	}

}

