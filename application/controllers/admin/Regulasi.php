<?php

class Regulasi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Regulasi_model');
    }

    public function index()
    {
        // $site     = $this->konfigurasi_model->listing();
        // $data = array(
        //     'title'         => 'Regulasi',
        //     'namasite'      => $site['namaweb'],
        //     'result'        => $this->Regulasi_model->tampil_data(),
        //     'isi'           => 'back/regulasi/list'
        // );

        $data['result'] = $this->Regulasi_model->tampil_data()->result();
        var_dump($data);
        die();
        $this->load->view('back/regulasi/list', $data);
    }
}