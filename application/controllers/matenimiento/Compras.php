<?php 
defined('BASEPATH') OR exit('No direct script acces alloweb');
/**
 * 
 */
class Compras extends CI_Controller
{	
	public function __construct()
	{
		parent::__construct(); //para llamar a un constructor de la clase padre
		//$this->load->model('Destino_model');
		
		$this->load->model("Usuarios_model");
		$this->load->model('DatosUser_model');
	}
	public function index(){	
		if(!$this->session->userdata('logged_in')){
			redirect('usuarios');
		}
		$car = array(
			"daUsuario" => $this->Usuarios_model->getUsuarios(),
			"datosUser" => $this->DatosUser_model->getUsers()
		);
	    $this->load->view('layouts/header',$car);
		$this->load->view('layouts/aside');
		$this->load->view('admin/compras/vista_compras');
        $this->load->view('layouts/footer');
	}
}
 ?>
