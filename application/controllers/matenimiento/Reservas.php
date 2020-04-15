<?php
defined('BASEPATH') or exit('No direct script acces alloweb');
/**
 *
 */
class Reservas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); //para llamar a un constructor de la clase padre
        $this->load->model('Reserva_model');

        // $this->load->model("Usuarios_model");
        // $this->load->model('DatosUser_model');
    }
    public function index()
    {
        $car = array(
            // "daUsuario" => $this->Usuarios_model->getUsuarios(),
            // "datosUser" => $this->DatosUser_model->getUsers(),
        );

        $lista = array(
            "salidas" => $this->Reserva_model->getSalidas(),
        );

        $this->load->view('layouts/header', $car);
        $this->load->view('layouts/aside');
        $this->load->view('admin/reservas/vista_reservas', $lista);
        $this->load->view('layouts/footer');
    }

    // public function reservas_usuarios()
    // {
    //     $NombreEmpresa = $this->input->post('empresa');

    //     $clientes = array(
    //         "salidas" => $this->Reserva_model->getClientes($NombreEmpresa),
    //     );

    //     $this->load->view('layouts/header', $car);
    //     $this->load->view('layouts/aside');
    //     $this->load->view('admin/reservas/vista_reservas', $lista);
    //     $this->load->view('layouts/footer');
    // }

    public function updateAsiento()
    {
        $nombreTabla = $this->input->post('tabla');
        $numero      = $this->input->post('numero');
        $estado      = $this->input->post('estado_real');
        $Nestado     = $this->input->post('estado');

        if ($estado == "off") {
            redirect(base_url() . "matenimiento/reservas");
        } else {

            if ($Nestado == "estado1") {
                $reservador = "reservado1";
            }
            if ($Nestado == "estado2") {
                $reservador = "reservado2";
            }
            if ($Nestado == "estado3") {
                $reservador = "reservado3";
            }
            if ($Nestado == "estado4") {
                $reservador = "reservado4";
            }

            // $this->Reserva_model->change_data($nombre_tabla, $numero, $Nestado, $reservador);

            $data = array(
                'numero'    => $numero,
                $Nestado    => 'off',
                $reservador => '',
            );

            if ($this->Reserva_model->change_data($nombreTabla, $numero, $data)) {
                // $this->session->set_flashdata("mensaje", "se edito un registro");
                redirect(base_url() . "matenimiento/reservas");
            } else {
                // $this->session->set_flasthdata("error", "no de pudo editar");
                redirect(base_url() . "matenimiento/reservas");
            }

        }

    }

    public function showTables()
    {
        $destino = $this->input->post('destino');

        if (empty($destino)) {

            $empresa = $this->input->post('empresa');

            if (!$this->session->userdata('logged_in')) {
                redirect('usuarios');
            }

            if ($empresa == "CIVA") {
                $nombre_tabla = "busciva";
            }
            if ($empresa == "CHANCAS") {
                $nombre_tabla = "buschancas";
            }
            if ($empresa == "PALOMINO") {
                $nombre_tabla = "buspalomino";
            }

            // echo $nombre_tabla;

            $datos = array(
                "asientos" => $this->Reserva_model->getDisponibilidad($nombre_tabla),
                // "datosUser" => $this->DatosUser_model->getUsers(),
            );

            $this->load->view('layouts/header');
            $this->load->view('layouts/aside');
            $this->load->view('admin/reservas/resultado_reservas', $datos);
            $this->load->view('layouts/footer');

        } else {

            $empresa = $this->input->post('empresa');

            $numeroDestino = $this->Reserva_model->goBackid($destino);

            foreach ($numeroDestino as $key) {
                $numeroDestino_d = $key->id;
            }

            if ($empresa == "CIVA") {
                switch ($numeroDestino_d) {
                    case 1:
                        $nombre_tabla = "busciva";
                        $tipoEstado   = "estado1";
                        break;
                    case 2:
                        $nombre_tabla = "busciva";
                        $tipoEstado   = "estado2";
                        break;
                    case 3:
                        $nombre_tabla = "busciva";
                        $tipoEstado   = "estado3";
                        break;
                    case 4:
                        $nombre_tabla = "busciva";
                        $tipoEstado   = "estado4";
                        break;
                    default:
                        $nombre_tabla = "busciva";
                        $tipoEstado   = "estado1";
                        break;
                }

            }

            if ($empresa == "CHANCAS") {
                switch ($numeroDestino) {
                    case 1:
                        $nombre_tabla = "buschancas";
                        $tipoEstado   = "estado1";
                        break;
                    case 2:
                        $nombre_tabla = "buschancas";
                        $tipoEstado   = "estado2";
                        break;
                    case 3:
                        $nombre_tabla = "buschancas";
                        $tipoEstado   = "estado3";
                        break;
                    case 4:
                        $nombre_tabla = "buschancas";
                        $tipoEstado   = "estado4";
                        break;
                    default:
                        $nombre_tabla = "buschancas";
                        $tipoEstado   = "estado1";
                        break;
                }
            }

            if ($empresa == "PALOMINO") {
                switch ($numeroDestino) {
                    case 1:
                        $nombre_tabla = "buspalomino";
                        $tipoEstado   = "estado1";
                        break;
                    case 2:
                        $nombre_tabla = "buspalomino";
                        $tipoEstado   = "estado2";
                        break;
                    case 3:
                        $nombre_tabla = "buspalomino";
                        $tipoEstado   = "estado3";
                        break;
                    case 4:
                        $nombre_tabla = "buspalomino";
                        $tipoEstado   = "estado4";
                        break;
                    default:
                        $nombre_tabla = "buspalomino";
                        $tipoEstado   = "estado1";
                        break;
                }
            }

            $datosextra = array(
                "asientos_extra" => $this->Reserva_model->getDisponibilidad_extra($tipoEstado, $nombre_tabla),
                "status"         => $tipoEstado,
                "tabla"          => $nombre_tabla,
            );

            $this->load->view('layouts/header');
            $this->load->view('layouts/aside');
            $this->load->view('admin/reservas/resultado_reservas_extra', $datosextra);
            $this->load->view('layouts/footer');

        }

    }

}
