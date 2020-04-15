<?php
defined('BASEPATH') or exit('No direct script acces alloweb');
/**
 *
 */
class Destino extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); //para llamar a un constructor de la clase padre
        $this->load->model('Destino_model');
        $this->load->model("Usuarios_model");
        $this->load->model('DatosUser_model');
    }
    public function index()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('usuarios');
        }

        // $car = array(
        //     "daUsuario" => $this->Usuarios_model->getUsuarios(),
        //     "datosUser" => $this->DatosUser_model->getUsers(),
        // );

        $data = array(
            "destino" => $this->Destino_model->getDestinos(),
        );
        // $this->load->view('layouts/header', $car);
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/destinos/vista_destinos', $data);
        $this->load->view('layouts/footer');
    }

    public function store()
    {

        // $hora_d  = $this->input->post("hora_d");

        $lugar_d = $this->input->post("lugar_d");

        $maxino = $this->Destino_model->getMaximo();

        foreach ($maxino as $key) {
            $lastOne = $key->mayor;
        }

        // echo $que;

        if ($lastOne < 4) {
            # code...
            $nuevo_id = $lastOne + 1;

            $data = array(
                'id'    => $nuevo_id,
                'lugar' => $lugar_d,
            );

            if ($this->Destino_model->save($data)) {
                $this->session->set_flashdata("mensaje", "SE REALIZÓ CON ÉXITO");
                redirect(base_url() . "matenimiento/destino");
            } else {
                $this->session->set_flasthdata("erroe", "no se pudo guardar");
                redirect(base_url() . "matenimiento/destino");
            }

        } else {

            $allids = $this->Destino_model->getAllids();

            $uno    = "no";
            $dos    = "no";
            $tres   = "no";
            $cuatro = "no";

            foreach ($allids as $key) {
                if ($key->id == 1) {
                    $uno = "si";
                }
                if ($key->id == 2) {
                    $dos = "si";
                }
                if ($key->id == 3) {
                    $tres = "si";
                }
                if ($key->id == 4) {
                    $cuatro = "si";
                }
            }

            if ($uno == "no") {
                $data = array(

                    'id'    => '1',
                    'lugar' => $lugar_d,
                );

                if ($this->Destino_model->save($data)) {
                    $this->session->set_flashdata("mensaje", "SE REALIZÓ CON ÉXITO");
                    redirect(base_url() . "matenimiento/destino");
                } else {
                    redirect(base_url() . "matenimiento/destino");
                }
            }

            if ($dos == "no") {
                $data = array(

                    'id'    => '2',
                    'lugar' => $lugar_d,
                );

                if ($this->Destino_model->save($data)) {
                    $this->session->set_flashdata("mensaje", "SE REALIZÓ CON ÉXITO");
                    redirect(base_url() . "matenimiento/destino");
                } else {
                    redirect(base_url() . "matenimiento/destino");
                }
            }

            if ($tres == "no") {
                $data = array(

                    'id'    => '3',
                    'lugar' => $lugar_d,
                );

                if ($this->Destino_model->save($data)) {
                    $this->session->set_flashdata("mensaje", "SE REALIZÓ CON ÉXITO");
                    redirect(base_url() . "matenimiento/destino");
                } else {
                    redirect(base_url() . "matenimiento/destino");
                }
            }

            if ($cuatro == "no") {
                $data = array(

                    'id'    => '4',
                    'lugar' => $lugar_d,
                );

                if ($this->Destino_model->save($data)) {
                    $this->session->set_flashdata("mensaje", "SE REALIZÓ CON ÉXITO");
                    redirect(base_url() . "matenimiento/destino");
                } else {
                    redirect(base_url() . "matenimiento/destino");
                }
            }

            // $this->session->set_flasthdata("erroe", "no se pudo guardar");
            redirect(base_url() . "matenimiento/destino");
        }
    }

    // public function editar($id)
    // {

    //     $dataDestino = array(
    //         'destino' => $this->Destino_model->getDestino($id),
    //     );

    //     $this->load->view('layouts/header');
    //     $this->load->view('layouts/aside');
    //     $this->load->view('admin/registros/editar', $dataDestino);
    //     $this->load->view('layouts/footer');
    // }

    public function editar()
    {
        $id      = $this->input->post("idDestino");
        $lugar_d = $this->input->post("lugar_d");

        $data = array(
            'id'    => $id,
            'lugar' => $lugar_d,
        );

        if ($this->Destino_model->update($id, $data)) {
            $this->session->set_flashdata("mensaje", "se edito un registro");
            redirect(base_url() . "matenimiento/destino");
        } else {
            $this->session->set_flasthdata("error", "no de pudo editar");
            redirect(base_url() . "matenimiento/destino");
        }
    }
    public function eliminar($id)
    {
        $numero_result = $this->Destino_model->getVerifica($id);

        if ($numero_result == 1) {
            redirect(base_url() . "matenimiento/destino/");
        } else {

            // $this->Destino_model->update($id, $data)

            // $this->db->delete('lugares', array('id' => $id))

            if ($this->Destino_model->eliminar_destino($id)) {
                // $this->session->set_flashdata("mensaje", "se elimino");
                redirect(base_url() . "matenimiento/destino/");
            } else {
                // $this->session->set_flashdata("mensaje", "se elimino");
                redirect(base_url() . "matenimiento/destino/");

            }
            // $this->db->delete('lugares', array('id' => $id));

        }

    }
}
