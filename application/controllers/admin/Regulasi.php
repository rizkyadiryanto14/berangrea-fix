<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Regulasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->simple_login->terotentikasi();
        $this->load->library('form_validation');
        $this->load->model('Regulasi_model');
        if ($this->session->userdata('akses_level') != 'superadmin')
            show_404();
    }

    public function index()
    {
        $site     = $this->konfigurasi_model->listing();
        $data = array(
            'title'         => 'Regulasi',
            'namasite'      => $site['namaweb'],
            'result'        => $this->Regulasi_model->tampil_data(),
            'isi'           => 'back/regulasi/list'
        );
        $this->load->view('back/wrapper', $data);
    }

    function TambahRegulasi()
    {
        $site       = $this->konfigurasi_model->listing();
        $v          = $this->form_validation;
        $v->set_rules(
            'judul_hukum',
            'jenis',
            'required',
            array('required'    => 'harus diisi')
        );
        if ($v->run()) {
            $config['upload_path']          = './back_assets/upload/regulasi/';
            $config['allowed_types']        = 'gif|jpg|jpeg|png|svg|pdf|docx|doc|rtf|txt';
            $config['max_size']             = '6048'; // KB
            $config['file_name']            = uniqid('REGULASI', FALSE);
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                $data = array(
                    'title'        => 'regulasi',
                    'namasite'    => $site['namaweb'],
                    'error'        => $this->upload->display_errors(),
                    'result'     => $this->Regulasi_model->tampil_data(),
                    'isi'        => 'back/regulasi/list'
                );
                $this->load->view('back/wrapper', $data);
            } else { //kalau berhasil diupload ke sistem
                $upload_data = array('uploads' => $this->upload->data());
                $data = array(
                    'judul_hukum'        => $this->input->post('judul_hukum'),
                    'file'               => $upload_data['uploads']['file_name'],
                    'jenis'              => $this->input->post('jenis'),
                    'tahun'              => $this->input->post('tahun'),
                );
                $input = $this->Regulasi_model->addRegulasi($data);
                if ($input) {
                    $this->session->set_flashdata('sukses', 'Data Regulasi berhasil ditambahkan');
                    redirect(site_url('admin/regulasi'));
                } else {
                    $this->session->set_flashdata('maaf', 'Maaf, Data Regulasi gagal ditambahkan');
                    redirect(site_url('admin/regulasi'));
                }
            }
        }
        if (!$v->run()) { // kalo gak run
            $data = array(
                'title'        => 'Regulasi',
                'namasite'    => $site['namaweb'],
                'result'     => $this->Regulasi_model->tampil_data(),
                'isi'        => 'back/regulasi/list'
            );
            $this->load->view('back/wrapper', $data);
        }
    }

    function deleteData($id)
    {
        $hapus = $this->Regulasi_model->hapus($id);
        if ($hapus) {
            $this->session->set_flashdata('maaf', 'Data Regulasi berhasil dihapus');
            redirect(site_url('admin/regulasi'));
        } else {
            $this->session->set_flashdata('maaf', 'Data Regulasi gagal dihapus');
            redirect(site_url('admin/regulasi'));
        }
    }
}