<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Regulasi_model extends CI_Model
{

    function tampil_data()
    {
        return $this->db->get('regulasi');
    }
}