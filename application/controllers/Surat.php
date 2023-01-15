<?php

class Surat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('konfigurasi_model');
        $this->load->model('produk_model');
        $this->load->model('berita_model');
        $this->load->model('kas_model');
        $this->load->model('sliders_model');
        $this->load->model('struktur_model');
        $this->load->model("masukan_model");
        $this->load->model('penduduk_model');
        $this->load->model('surat_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data        = array(
            'title'             => 'Layanan Surat Desa',
            'keywords'          => "Surat",
            'subscribe'         => false,
            'pakai_slide'       => false,
            'isi'               => 'front/isi/surat'
        );
        $this->load->view('front/landing', $data);
    }
}