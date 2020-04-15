<?php
defined('BASEPATH') or exit('No direct script access alloweb');
/**
 *
 */
class Destino_model extends CI_Model
{

    public function getMaximo()
    {
        $this->db->select("max(id) as mayor");
        $result = $this->db->get("lugares");
        return $result->result();
    }

    public function getAllids()
    {
        $this->db->select("id");
        $result = $this->db->get("lugares");
        return $result->result();
    }

    public function getDestinos()
    {
        $result = $this->db->get("lugares");
        return $result->result();
    }
    public function save($data)
    {
        return $this->db->insert("lugares", $data);
    }
    public function getDestino($id)
    {
        $this->db->where("id", $id);
        $result = $this->db->get("destino");
        return $result->row();
    }
    public function update($id, $data)
    {
        $this->db->where("id", $id);
        return $this->db->update("lugares", $data);
    }

    public function eliminar_destino($id)
    {
        $this->db->where('id', $id);
        // $result = $this->db->delete('lugares');

        // return $result->result();

        return $this->db->delete('lugares');
    }

    public function getVerifica()
    {
        $this->db->select("destino");
        $result = $this->db->get("salidas");
        // $result->num_rows();
        return $result->num_rows();
    }

}
