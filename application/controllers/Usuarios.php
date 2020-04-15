<?php
defined('BASEPATH') or exit('No direct script acces alloweb');
/**
 *
 */
class Usuarios extends CI_Controller
{

    public function __construct()
    {
        parent::__construct(); //para llamar a un constructor de la clase padre
        $this->load->model('Usuarios_model');
    }
    public function check()
    {
        $username = $this->input->post("username");
        $pass     = $this->input->post("password");

        $getName = $this->Usuarios_model->givemeName($username);

        foreach ($getName as $key) {
            $fake = $key->nombre;
        }

        if ($this->Usuarios_model->validado($username, md5($pass))) {
            $sess_arr = array(
                // "username"  => $this->Usuarios_model->sla($username, md5($pass)),
                'empresa'   => $fake,

                'logged_in' => true,
            );

            $this->session->set_userdata($sess_arr);

            redirect('Dashboard_controller');
            //return true;
        } else {
            redirect(base_url() . "usuarios");
            //return false;
        }
    }
    public function index()
    {
        /*
        if($this->session->userdata('username'))
        redirect('Dashboard_controller');
        if(isset($_POST['password'])){
        $username=$this->input->post("username");
        $pass=$this->input->post("password");
        if($this->Usuarios_model->validado($username, md5($pass))){
        $this->session->set_userdata('username', $username);
        redirect('Dashboard_controller');
        }
        else
        redirect('usuarios');
        }
        $this->load->view('admin/usuarios/vista_usuarios');        */
        if (!$this->session->userdata('logged_in')) {
            $this->load->view('admin/usuarios/vista_usuarios');
        } else {
            redirect('Dashboard_controller');
        }

    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('usuarios');
    }
//CRUD DE USUARIOS....///

    public function agregar()
    {
        $dataEmpresas = array(
            'empresas' => $this->Usuarios_model->getEmpresas(),
        );

        $this->load->view('admin/registros/vista_usuarioR', $dataEmpresas);
    }

    public function store()
    {

        $nombreEmpresa = $this->input->post("empresa");
        $nombre        = $this->input->post("nombre");
        $apellidos     = $this->input->post("apellidos");
        $dni           = $this->input->post("dni");
        $numero        = $this->input->post("numero");
        $email         = $this->input->post("email");
        $usuario       = $this->input->post("usuario");
        $password      = $this->input->post("password");
        // $p = md5($this->input->post("password"));

        $data = array(
            'id'            => "",
            'nombreEmpresa' => $nombreEmpresa,
            'nombre'        => $nombre,
            'apellido'      => $apellidos,
            'dni'           => $dni,
            'numero'        => $numero,
            'email'         => $email,
            'usuario'       => $usuario,
            'password'      => md5($password),
        );

        if ($this->Usuarios_model->save($data)) {
            $this->session->set_flashdata("mensaje", "SE REALIZÓ CON ÉXITO");
            redirect(base_url() . "matenimiento/datosUser");
        } else {
            $this->session->set_flasthdata("erroe", "no se pudo guardar");
            redirect(base_url() . "usuarios/agregar");
        }
    }

    public function editar($id)
    {

        $dataPais = array(
            'usuarios' => $this->Usuarios_model->getUsuario($id),
        );

        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/registros/editar', $dataPais);
        $this->load->view('layouts/footer');
    }

    public function update()
    {
        $id   = $this->input->post("id");
        $u    = $this->input->post("user");
        $p    = $this->input->post("pass");
        $data = array(
            'id'   => $id,
            'user' => $u,
            'pass' => $p,
        );

        if ($this->Usuarios_model->update($id, $data)) {
            $this->session->set_flashdata("mensaje", "se edito un registro");
            redirect(base_url() . "usuarios");
        } else {
            $this->session->set_flasthdata("error", "no de pudo editar");
            redirect(base_url() . "usuarios/edit");
        }

    }

    public function eliminar($id)
    {
        $this->db->delete('pais', array('idPais' => $id));
        $this->session->set_flashdata("mensaje", "se elimino");
        redirect(base_url() . "usuarios");
    }
}
