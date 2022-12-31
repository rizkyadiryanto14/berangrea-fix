<?php

class Cetak extends CI_Controller
{
    public function cetak($id)
    {
        $id     = $this->input->post('id');
        $surat  = $this->input->post('Kop_surat');
        $gambar = $this->input->post('gambar');
        $isi    = $this->input->post('isi');

        $data = [
            'surat'     => $surat, // no surat
            'gambar'    => $gambar, //gambar merupakan kop surat
            'isi'       => $isi, // isi surat berbentuk xml
        ];

        $kondisi = [
            'id' => $id //ngambil id user
        ];

        //insert to db surat
        if ($this->db->insert('surat', $data, $kondisi)) {
            $hasil = [
                'error'     => false,
                'message'   => 'Data Surat Berhasil Di cetak',
                'data'      => $kondisi,
            ];
        }
    }
}