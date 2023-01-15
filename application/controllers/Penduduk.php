<?php

class Penduduk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('konfigurasi_model');
        $this->load->model('struktur_model');
        $this->load->model("masukan_model");
    }

    public function index()
    {
        $this->load->model('Penduduk_model');
        $keyword = $this->input->get('keyword');
        $data = $this->Penduduk_model->tampil_data($keyword);
    }

    public function search()
    {

        $this->load->model('Penduduk_model');
        $keyword = $this->input->get('keyword');
        $data = $this->Penduduk_model->tampil_data($keyword);
        $data = array(
            'keyword'           => $keyword,
            'data'              => $data,
        );

        // var_dump($data);
        // die();
        $this->load->view('cetak_surat', $data);
    }
}