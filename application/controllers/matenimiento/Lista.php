<?php
defined('BASEPATH') or exit('No direct script acces alloweb');
/**
 *
 */
class Lista extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); //para llamar a un constructor de la clase padre
        $this->load->model('Lista_model');
    }
    public function index()
    {
        $data = array(
            "informacion" => $this->Lista_model->getInformacion(),
        );

        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/lista/vista_lista', $data);
        $this->load->view('layouts/footer');
    }

    public function infoModal()
    {
        $reservador = $this->input->post("reservador");

        $data_info = array(
            "informacionPersona" => $this->Lista_model->getInformacionPersona($reservador),
        );

        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/lista/vista_lista_usuario', $data_info);
        $this->load->view('layouts/footer');
    }

    public function eliminar_todo()
    {

        if ($this->Lista_model->eliminar_todo()) {
            // $this->session->set_flashdata("mensaje", "se elimino");
            redirect(base_url() . "matenimiento/lista/");
        } else {
            // $this->session->set_flashdata("mensaje", "se elimino");
            redirect(base_url() . "matenimiento/lista/");

        }
    }

    public function eliminar()
    {
        $reservador = $this->input->get("reservador");

        if ($this->Lista_model->eliminar_usuario($reservador)) {
            // $this->session->set_flashdata("mensaje", "se elimino");
            redirect(base_url() . "matenimiento/lista/");
        } else {
            // $this->session->set_flashdata("mensaje", "se elimino");
            redirect(base_url() . "matenimiento/lista/");

        }
    }

}
