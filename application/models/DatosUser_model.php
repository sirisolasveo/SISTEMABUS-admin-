<?php
defined('BASEPATH') or exit('No direct script access alloweb');
/**
 *
 */
class DatosUser_model extends CI_Model
{
    public function getUsers()
    {
        $result = $this->db->get("usuarios_administrador");
        return $result->result();
    }
    public function save($data)
    {
        return $this->db->insert("datosusuarios", $data);
    }
    public function getUser($id)
    {
        $this->db->where("iddatosUsuarios", $id);
        $result = $this->db->get("datosusuarios");
        return $result->row();
    }
    public function update($idPais, $data)
    {
        $this->db->where("iddatosUsuarios", $idPais);
        return $this->db->update("datosusuarios", $data);
    }
    public function delete($id)
    {
        $this->db->where('iddatosUsuarios', $id);
        return $this->db->delete('datosusuarios');
    }
}
