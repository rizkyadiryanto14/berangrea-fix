    <section class="employee-area mt-3 section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top text-center">
                        <h2><?= $title; ?></h2>
                        <p><?= $title . " " . $site['namaweb'] . ' ' . $site['tagline']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blog-posts-area section-padding3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php
                    // Notifikasi
                    if ($this->session->flashdata('sukses')) {
                        echo '<div class="alert alert-success alert-dismissible fade show">';
                        echo '<button class="close" data-dismiss="alert">&times;</button>';
                        echo $this->session->flashdata('sukses');
                        echo '</div>';
                    }
                    // Notifikasi
                    if ($this->session->flashdata('maaf')) {
                        echo '<div class="alert alert-danger alert-dismissible fade show">';
                        echo '<button class="close" data-dismiss="alert">&times;</button>';
                        echo $this->session->flashdata('maaf');
                        echo '</div>';
                    }
                    // Error
                    echo validation_errors('<div class="alert alert-danger">', '<button class="close" data-dismiss="alert">&times;</button></div>');
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Surat</th>
                            <th scope="col">Jenis Surat</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Surat Keterangan</td>
                            <td>Perdes</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-warning dropdown-toggle" type="button"
                                        id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Action
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#tambahdata" data-bs-toggle="modal"
                                                data-bs-target="#ceknik">Cek Nik</a></li>
                                        <li><a class="dropdown-item" href="#panduan" data-bs-toggle="modal"
                                                data-bs-target="#panduan">Panduan Cetak Surat</a></li>
                                        <li><a class="dropdown-item" href="#ketentuan" data-bs-toggle="modal"
                                                data-bs-target="#ketentuan">Ketentuan Cetak Surat</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>


    <div class="modal fade" id="panduan">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Panduan Cetak Surat</h3>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <ol>
                            <li>Masuk Layanan Surat</li>
                            <li>Masukan NIK untuk validasi bahwa anda benar - benar dari desa tersebut</li>
                            <li>Setelah memasukan nik dan nik anda terdaftar maka akan muncul halaman berisikan
                                informasi data diri anda</li>
                            <li>Klik cetak surat</li>
                        </ol>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-warning" type="button" data-bs-dismiss="modal">close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scrollable modal -->
    <div class="modal fade" id="ketentuan">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Ketentuan Cetak Surat</h3>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <ol>
                            <li>Nik warga harus terdaftar di dalam data website (Jika Tidak Terdata bisa langsung
                                mengirimkan pesan melalui fitur <strong>Hubungi Kami</strong> dengan melengkaoi data
                                diri serta memasukan
                                beberapa dokumen untuk validasi data</li>
                        </ol>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-warning" type="button" data-bs-dismiss="modal">close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ceknik">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Cek Nik</h3>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('penduduk/search') ?>" method="GET">
                        <div class="form-group">
                            <label for="">Masukan NIK</label>
                            <input type="text" name="keyword" class="form-control">
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="modal fade" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content ">
                <div class="modal-header">
                    <h3>Tambah Data Penduduk</h3>
                    <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form action="<?php echo base_url('penduduk') ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-form-label" for="nik">Nik</label>
                            <input type="text" name="nik" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Nomor Kartu Keluarga</label>
                            <input type="text" name="no_kk" required id="no_kk" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Foto KK</label>
                            <input type="file" name="file" id="file" class="form-control">
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary mr-1" type="button" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" value="upload" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->