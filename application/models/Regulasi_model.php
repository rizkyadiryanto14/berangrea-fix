<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Regulasi_model extends CI_Model
{

    function tampil_data()
    {
        $this->db->select('*');
        $this->db->from('regulasi');
        $query = $this->db->get();
        return $query->result();
    }

    function addRegulasi($data)
    {
        $query = $this->db->insert('regulasi', $data);
        return $query;
    }

    function hapus($id)
    {
        $this->_deleteFile($id);
        $this->db->where('id', $id);
        $query = $this->db->delete('regulasi');
        return $query;
    }

    private function _deleteFile($id)
    {
        $uang = $this->getById($id);
        $filename = explode(".", $uang->file)[0];
        return array_map('unlink', glob(FCPATH . "back_assets/upload/regulasi/$filename.*"));
    }

    public function getById($id)
    {
        return $this->db->get_where('regulasi', ["id" => $id])->row();
    }
}