<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penduduk_model extends CI_Model
{

    function tampil_data($keyword = null)
    {
        $this->db->select('*');
        $this->db->from('penduduk');
        if (!empty($keyword)) {
            $this->db->like('nik', $keyword);
        }
        return $this->db->get()->result_array();
    }

    public function addPenduduk($data)
    {
        $query = $this->db->insert('penduduk', $data);
        return $query;
    }
}