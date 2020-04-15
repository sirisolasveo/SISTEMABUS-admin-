<?php
defined('BASEPATH') or exit('No direct script access alloweb');
/**
 *
 */
class Publicacion_model extends CI_Model
{

    public function Codes($empresa)
    {
        $this->db->where("empresa", $empresa);
        $result = $this->db->get('salidas');

        // $result = $this->db->get("salidas");
        return $result->result();
    }

    public function getPublicaciones()
    {

        $this->db->select('salidas.id as id,empresa,lugar as destino,hora,costo');
        $this->db->from('salidas,lugares');
        $this->db->where('salidas.destino=lugares.id');
        $result = $this->db->get();

        // $result = $this->db->get("salidas");
        return $result->result();
    }

    public function save($data)
    {
        return $this->db->insert("salidas", $data);
    }

    public function findID($destino)
    {
        $this->db->where("lugar", $destino);
        $result = $this->db->get('lugares');

        return $result->result();
    }

    public function getPublicacion($id)
    {
        $this->db->where("id", $id);
        $result = $this->db->get("publicacion");
        return $result->row();
    }
    public function update($id, $empresa, $hora, $precio, $data)
    {
        $this->db->where("id", $id);
        $this->db->where("empresa", $empresa);
        $this->db->where("costo", $precio);

        return $this->db->update("salidas", $data);
    }
    public function delete($id, $empresa, $hereis)
    {
        $this->db->where('id', $id);
        $this->db->where('empresa', $empresa);
        $this->db->where('destino', $hereis);

        return $this->db->delete('salidas');
    }
}
