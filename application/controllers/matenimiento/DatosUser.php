<?php 
defined('BASEPATH') OR exit('No direct script acces alloweb');
/**
 * 
 */
class DatosUser extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct(); //para llamar a un constructor de la clase padre
      $this->load->model('DatosUser_model');
      $this->load->model('Usuarios_model');
	}
	public function index(){	
      if(!$this->session->userdata('logged_in')){
			redirect('usuarios');
		}	
		$this->load->view('admin/usuarios/vista_registro');
    }
   public function perfil(){
      if(!$this->session->userdata('logged_in')){
			redirect('usuarios');
      }
      else{
         $cargado = array(
            "usuario" =>$this->session->userdata('username'),
            "daUsuario"=>$this->Usuarios_model->getUsuarios(),
            "datosUser"=>$this->DatosUser_model->getUsers(),
         );
         $this->load->view('layouts/header',$cargado);
         $this->load->view('layouts/aside');
         $this->load->view('admin/usuarios/vista_perfil');
         $this->load->view('layouts/footer');
      }
   }
   public function colaboradores(){
      if(!$this->session->userdata('logged_in')){
			redirect('usuarios');
		}
      $this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/usuarios/vista_colaboradores');
      $this->load->view('layouts/footer');
   }
    //CRUD DE USUARIOS....///

    public function store(){        
        //falta agregar el id del user
        $id= $this->Usuarios_model->ultimoId();
	     $name=$this->input->post("nombre");
        $last=$this->input->post("apellido");
        $nac=$this->input->post("nacimiento");
        $email=$this->input->post("email");   
        $estado = 1;     
        $data=array(
           'idUser'=>$id,
           'nombre'=>$name,
           'apellido'=>$last,
           'nacimiento'=>$nac,
           'email'=>$email,
           'estado'=>$estado

        );   

        if ($this->DatosUser_model->save($data)) {
        	$this->session->set_flashdata("mensaje","SE REALIZÓ CON ÉXITO");
         	redirect("usuarios");
        }else{
            //$this->session->set_flashdata("mensaje","se afrego un registro");         
            $this->session->set_flasthdata("erroe","no se pudo guardar");
            redirect(base_url()."usuarios/store");            
        }
    }
   
   public function editar($id){
     
     $dataPais=array(
       'usuarios'=>$this->Usuarios_model->getUsuario($id),
    );
     
	$this->load->view('layouts/header');
	$this->load->view('layouts/aside');
	$this->load->view('admin/registros/editar',$dataPais);
	$this->load->view('layouts/footer');
   }

   public function update(){
     $id=$this->input->post("id");
	 $u=$this->input->post("user");
	 $p=$this->input->post("pass");
     $data=array(
       'id'=>$id,
	   'user'=>$u,
	   'pass'=>$p
     );

     if ($this->Usuarios_model->update($id,$data)){
        $this->session->set_flashdata("mensaje","se edito un registro");
        redirect(base_url()."usuarios");
     }else{
        $this->session->set_flasthdata("error","no de pudo editar");
        redirect(base_url()."usuarios/edit");
     }
      
   }

   public function eliminar($id){
    $this->db->delete('pais', array('idPais' => $id));
		$this->session->set_flashdata("mensaje","se elimino"); 
		redirect(base_url()."usuarios");
   }
}

 ?>
