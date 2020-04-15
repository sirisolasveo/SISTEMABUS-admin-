<?php
defined('BASEPATH') or exit('No direct script access alloweb');
/**
 *
 */
class Lista_model extends CI_Model
{

    public function getInformacion()
    {
        // $this->db->select("id");
        $result = $this->db->get("lista_reservas");
        return $result->result();
    }

    public function getInformacionPersona($email)
    {
        // $this->db->select("id");
        $this->db->where("correo", $email);
        $result = $this->db->get("usuarios");
        return $result->result();
    }

    public function eliminar_usuario($reservador)
    {
        $this->db->where('reservador', $reservador);
        // $result = $this->db->delete('lugares');

        // return $result->result();

        return $this->db->delete('lista_reservas');
    }

    public function eliminar_todo()
    {
        $this->db->where(1, 1);
        return $this->db->delete('lista_reservas');
    }
}
