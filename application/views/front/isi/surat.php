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

    <section class="blog-posts-area section-padding3">
        <div class="container">
            <div class="card">
                <form action="">
                    <div class="card-body">
                        <label for="">NIK</label>
                        <input type="text" class="form-control" name="nik" placeholder="Masukan Nik">
                    </div>
                    <div class="card-body">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukan Nama">
                    </div>
                    <div class="card-body">
                        <label for="">RT/RW</label>
                        <input type="text" class="form-control" name="rt_rw" placeholder="Masukan RT/RW">
                    </div>
                    <div class="card-body">
                        <label for="">Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="10"></textarea>
                    </div>
                    <div class="card-body">
                        <label for="">Jenis Surat</label>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                            <option selected>Pilih Jenis Surat</option>
                            <option value="keterangan">Surat Keterangan</option>
                            <option value="permohonan">Surat Permohonan</option>
                            <option value="pernyataan">Surat Pernyataan</option>
                            <option value="rekomendasi">Surat Rekomendasi</option>
                        </select>
                    </div>

                    <div class="d-grid gap-2 col-6 mx-auto mb-4">
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                            data-bs-target="#alert">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <div class="modal fade" id="alert">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Konfirmasi</h3>
                </div>
                <div class="modal-title text-center">
                    <div class="col-md-12">
                        <h4 class="alert alert-info">Harap ke kantor desa untuk medapatkan tanda tangan serta cap dari
                            desa</h4>
                    </div>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin data diri anda sudah diisi dengan benar</p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Lanjutkan</button>
                </div>
            </div>
        </div>
    </div>

</section>

<div class="modal fade" id="masukann" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hubungi Kami</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo site_url('kontak/add') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap *</label>
                        <input class="form-control" required type="text" name="nama_lengkap" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input required type="email" name="email" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="keperluan">Keperluan *</label>
                        <input class="form-control" required type="text" name="keperluan" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label for="description">Pesan *</label><small> (10-250 Karakter)</small>
                        <textarea class="form-control" rows="4" minlength="10" maxlength="250" name="description"
                            required placeholder=""></textarea>
                        <div class="small text-muted">
                            * harus diisi
                        </div>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary" type="submit">Button</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>