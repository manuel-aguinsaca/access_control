<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador  extends CI_Controller {	
	public function __construct(){
		parent::__construct();
		$this->load->model("Modelo_Controlador");		
	}
	public function index(){
		$data = $this->Modelo_Controlador->consultar_administrador('manuel');
		$_SESSION['datosUsuario'] = $data;
		$this->load->view('frm_principal');		
	}
	public function docente(){
		if ($_SESSION['datosUsuario'] != NULL){
			$this->config->set_item('tituloPagina', 'Formulario Docente Manuel');
			$data['modulo'] = $this->Modelo_Controlador->seleccion_general('modulo');
			$this->load->view('docente/frm_principal_docente', $data);
		}
		else{
			redirect('controlador/', 'refresh');
		}
	}
	public function prueba(){
		/*if ($_SESSION['datosUsuario'] != NULL) {
			$data['modulo'] = $this->Modelo_Controlador->seleccion_general('modulo');
			$this->load->view('prueba', $data);
		}else{
			redirect('controlador/', 'refresh');
		}*/

		$this->enviar_email('hoal', 'asdsadsa');
		
		//echo "<script>console.log(notificaciones('fdggfdg', 'gfdg', 'http://google.com'));</script>";
	}
	
   public function enviar_email($mensaje, $direccion){
		//$mensaje = 'Mensaje de Prueba';
		//$direccion = 'mostrar_tw_alertas';
 	//cargamos la libreria email de ci
 	//
		$this->load->library("email");
	 //configuracion para gmail

		$configGmail = array(
			
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'newline' => "\r\n"
			);    

	 //cargamos la configuración para enviar con gmail
		$this->email->initialize($configGmail); 

		$this->email->from('Lucas');
		$this->email->to("maaguinsacam@unl.edu.ec");
		$this->email->subject('Nuevas Alertas en Twitter');
		$this->email->message('<h2>'.$mensaje.'</h2><br><a href="localhost/tweett/index.php/Welcome/'.$direccion.'">Ver Aquí..!!</a>"<hr><br> Bienvenido t-monitory');
		$this->email->send();
	 //con esto podemos ver el resultado
		
	}


	public function logout(){
		session_destroy();
		unset($_SESSION['datosUsuario']);
		redirect('');
	}

}