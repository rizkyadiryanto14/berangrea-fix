<?php

class Penduduk extends CI_Controller
{
    public function index()
    {

        $data['penduduk'] = $this->db->get('penduduk')->result();
        $this->load->view('back/penduduk/list', $data);
    }

    public function create()
    {
        $nik        = $this->input->post('nik');
        $no_kk      = $this->input->post('no_kk');
        $nama       = $this->input->post('nama');

        $data =  [
            'nik'   => $nik,
            'no_kk' => $no_kk,
            'nama'  => $nama
        ];

        $config['upload_path']          = './back_assets/upload/file_document';
        $config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file')) {
            $data = array(
                'title'             => 'Layanan Surat Desa',
                'keywords'          => "Layanan,Surat",
                'error'             => $this->upload->display_errors(),
            );
            $this->load->view('back/penduduk/list', $data);
        } else {
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];
            $data['file'] = $file_name;

            $query = $this->db->insert('penduduk', $data);

            if ($query) {
                $this->session->set_flashdata('sukses', 'Data Penduduk Berhasil Di Tambahkan');
                redirect(base_url('admin/penduduk'));
            } else {
                $this->session->set_flashdata('maaf', 'Data Penduduk Gagal Di Tambahkan');
                redirect(base_url('admin/penduduk'));
            }
        }
    }

    public function edit($id = null)
    {
    }
}