<?php
defined('BASEPATH') or exit('No direct script acces alloweb');
/**
 *
 */
class Publicaciones extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); //para llamar a un constructor de la clase padre
        $this->load->model('Publicacion_model');
        $this->load->model('Destino_model');
        $this->load->model("Usuarios_model");
        $this->load->model('DatosUser_model');
    }
    public function index()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('usuarios');
        }
        $car = array(
            "usuario" => $this->session->userdata('username'),
            // "daUsuario" => $this->Usuarios_model->getUsuarios(),
            // "datosUser" => $this->DatosUser_model->getUsers()
        );
        $dataPbn = array(
            "publicacion" => $this->Publicacion_model->getPublicaciones(),
            "lugares"     => $this->Destino_model->getDestinos(),
        );
        $this->load->view('layouts/header', $car);
        $this->load->view('layouts/aside');
        $this->load->view('admin/publicaciones/vista_publicaciones', $dataPbn);
        $this->load->view('layouts/footer');
    }
    public function store()
    {
        // $user    = $this->input->post("usuarioA");
        $empresa = $this->input->post("empresa");
        $destino = $this->input->post("destino");

        $hora_s = $this->input->post("hora_s");
        $option = $this->input->post("option");

        $join = $hora_s . " " . $option;

        $precio = $this->input->post("precioa");

        $codeDestino = $this->Publicacion_model->Codes($empresa);

        $flat = "off";

        foreach ($codeDestino as $key) {
            if ($key->destino == $destino) {
                $flat = "on";
            }
        }

        if ($flat == "off") {

            $data = array(
                'id'      => '1',
                'empresa' => $empresa,
                'destino' => $destino,
                'hora'    => $join,
                'costo'   => $precio,
            );

            if ($this->Publicacion_model->save($data)) {
                // $this->session->set_flashdata("mensaje", "SE REALIZÓ CON ÉXITO");
                redirect(base_url() . "matenimiento/publicaciones");
            } else {
                // $this->session->set_flasthdata("error", "no se pudo guardar");
                redirect(base_url() . "matenimiento/publicaciones");
            }

        } else {
            redirect(base_url() . "matenimiento/publicaciones");
        }

    }

    public function editar($id)
    {

        $dataDestino = array(
            'destino' => $this->Publicacion_model->getDestino($id),
        );

        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/registros/editar', $dataDestino);
        $this->load->view('layouts/footer');
    }

    public function update()
    {
        $id      = $this->input->post("id_e");
        $empresa = $this->input->post("empresa_e");
        $destino = $this->input->post("destino_e");
        $hora    = $this->input->post("hora_e");
        $precio  = $this->input->post("precio_e");

        $codeDestino = $this->Publicacion_model->Codes($empresa);

        $flat = "off";

        foreach ($codeDestino as $key) {
            if ($key->destino == $destino) {

                $flat = "on";
            }
        }

        if ($flat == "off") {
            # code...

            $data = array(
                'id'      => $id,
                'empresa' => $empresa,
                'destino' => $destino,
                'hora'    => $hora,
                'costo'   => $precio,
            );

            if ($this->Publicacion_model->update($id, $empresa, $hora, $precio, $data)) {
                // $this->session->set_flashdata("mensaje", "se edito un registro");
                redirect(base_url() . "matenimiento/publicaciones");
            } else {
                // $this->session->set_flasthdata("error", "no de pudo editar");
                redirect(base_url() . "matenimiento/publicaciones");
            }

        } else {
            redirect(base_url() . "matenimiento/publicaciones");
        }

    }
    public function eliminar()
    {
        $id      = $this->input->post("id_delete");
        $empresa = $this->input->post("empresa_delete");
        $destino = $this->input->post("destino_delete");

        $findID = $this->Publicacion_model->findID($destino);

        // var_dump($findID);

        foreach ($findID as $key) {
            $hereis = $key->id;
        }

        $this->Publicacion_model->delete($id, $empresa, $hereis);

        // $this->db->delete('publicacion', $id, $empresa, $hereis);
        // $this->session->set_flashdata("mensaje", "se elimino");
        redirect(base_url() . "matenimiento/publicaciones/");
    }
}
