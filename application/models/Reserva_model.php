<?php
defined('BASEPATH') or exit('No direct script access alloweb');
/**
 *
 */
class Reserva_model extends CI_Model
{
    public function change_data($nombreTabla, $numero, $data)
    {

        $this->db->where("numero", $numero);
        return $this->db->update($nombreTabla, $data);

    }

    public function getDisponibilidad($nombre_tabla)
    {
        $result = $this->db->get($nombre_tabla);

        return $result->result();
    }

    public function getDisponibilidad_extra($tipoEstado, $nombre_tabla)
    {
        $this->db->select('numero,' . $tipoEstado . ' as estado');

        $result = $this->db->get($nombre_tabla);

        return $result->result();
    }

    public function goBackid($destino)
    {
        $this->db->where('lugar', $destino);
        $result = $this->db->get('lugares');

        return $result->result();
    }

    public function getSalidas()
    {
        $this->db->select('empresa,lugar');
        $this->db->from('salidas,lugares');
        $this->db->where('salidas.destino = lugares.id');
        $result = $this->db->get();
        // $result = $this->db->get("salidas");

        return $result->result();
    }
}
