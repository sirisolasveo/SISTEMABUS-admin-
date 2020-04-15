<?php
defined('BASEPATH') or exit('No direct script acces alloweb');
/**
 *
 */
class Dashboard_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Usuarios_model');
        $this->load->model('DatosUser_model');
    }
    public function index()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('usuarios');
        } else {
            $cargado = array(
                "usuario"   => $this->session->userdata('username'),
                "daUsuario" => $this->Usuarios_model->getUsuarios(),
                // "datosUser"=>$this->DatosUser_model->getUsers(),
            );
            $this->load->view('layouts/header', $cargado);
            $this->load->view('layouts/aside');
            $this->load->view('admin/dashboard');
            $this->load->view('layouts/footer');
        }
    }
}
