<?php
defined('BASEPATH') or exit('No direct script access alloweb');
/**
 *
 */
class Usuarios_model extends CI_Model
{

    public function getEmpresas()
    {
        $result = $this->db->get("empresas");
        return $result->result();
    }

    public function givemeName($username)
    {

        $this->db->select('empresas.nombre');
        $this->db->from('usuarios_administrador,empresas');
        $this->db->where('usuarios_administrador.nombreEmpresa = empresas.id');
        $result = $this->db->get();

        // $this->db->where('usuario', $username);
        // $result = $this->db->get("usuarios_administrador");

        return $result->result();
    }

    public function validado($username, $pass)
    {
        $this->db->where('usuario', $username);
        $this->db->where('password', $pass);
        $resultado = $this->db->get('usuarios_administrador');
        if ($resultado->num_rows() > 0) {
            return true;
        } else {
            return false;
        }

    }
    public function sla($username, $pass)
    {
        $this->db->where('usuario', $username);
        $this->db->where('password', $pass);
        $r = $this->db->get('usuarios_administrador');
        return $r->result();
    }
    public function getUsuarios()
    {
        $result = $this->db->get("  usuarios_administrador");
        return $result->result();
    }
    public function save($data)
    {
        return $this->db->insert("usuarios_administrador", $data);
    }
    public function getUsuario($id)
    {
        $this->db->where("id", $id);
        $result = $this->db->get("usuarios");
        return $result->row();
    }
    public function update($idPais, $data)
    {
        $this->db->where("id", $idPais);
        return $this->db->update("usuarios", $data);
    }
    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('usuarios');
    }

    public function ultimoId()
    {
        return $this->db->insert_id();
    }
}
