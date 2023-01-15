<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <!-- ini nama judul halaman -->
            <h1 class="mt-4"><?php echo $title ?></h1>
            <!-- sekarang masuk ke kolom isi konten -->
            <!-- ini nama bread crumb -->
            <ol class="breadcrumb">
                <?php foreach ($this->uri->segments as $segment) : ?>
                <?php $url = substr($this->uri->uri_string, 0, strpos($this->uri->uri_string, $segment)) . $segment;
                    $is_active =  $url == $this->uri->uri_string; ?>
                <li class="breadcrumb-item <?php echo $is_active ? 'active' : '' ?>">
                    <?php if ($is_active) : ?>
                    <?php echo ucfirst($segment) ?>
                    <?php else : ?>
                    <a href="<?php echo site_url($url) ?>"> <?php echo ucfirst($segment) ?></a>
                    <?php endif; ?>
                </li>
                <?php endforeach; ?>
            </ol>
            <?php
            // Notifikasi
            if ($this->session->flashdata('sukses')) {
                echo '<div class="alert alert-success">';
                echo '<button class="close" data-dismiss="alert">&times;</button>';
                echo $this->session->flashdata('sukses');
                echo '</div>';
            }
            // Notifikasi
            if ($this->session->flashdata('maaf')) {
                echo '<div class="alert alert-danger">';
                echo '<button class="close" data-dismiss="alert">&times;</button>';
                echo $this->session->flashdata('maaf');
                echo '</div>';
            }
            // Error
            echo validation_errors('<div class="alert alert-danger">', '<button class="close" data-dismiss="alert">&times;</button></div>');
            ?>


            <div class="card mb-4">
                <div class="card-header">
                    <a href="<?php echo site_url('admin/surat') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between lh-condensed">
                        <div class="d-flex">
                            <p><a href="<?php echo site_url('admin') ?>" class="btn btn-success" data-toggle="modal"
                                    data-target="#tambahMasuk">
                                    <i class="fa fa-plus"></i> Tambah Data Regulasi</a></p>
                        </div>
                        <div>
                            <p><a href="#!" onclick="window.print()" class="btn btn-secondary">
                                    <i class="fa fa-print"></i> Cetak</a></p>
                        </div>
                    </div>
                    <div class="table-responsive">

                        <!-- masuk ke tabel -->
                        <table class="table table-striped table-bordered table-hover" id="dataTable" width="100%"
                            cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="25" class="text-center">No.</th>
                                    <th>Judul Hukum</th>
                                    <th>Jenis</th>
                                    <th>Tahun</th>
                                    <th>File</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($result as $data) { ?>
                                <tr>
                                    <td class="text-center"><?php echo $i ?></td>
                                    <td><?php echo $data->judul_hukum ?></td>
                                    <td><?php echo $data->jenis ?></td>
                                    <td><?php echo $data->tahun ?></td>
                                    <td>
                                        <a href="<?php echo base_url('back_assets/upload/regulasi/' . $data->file) ?>"
                                            target="_blank">Lihat</a>
                                    </td>
                                    <td class="d-flex justify-content-center">
                                        <a href="#" class="btn btn-sm btn-light mr-1"><i class="fa fa-edit"></i></a>
                                        <a onclick="deleteConfirm('<?php echo site_url('admin/regulasi/deleteData/' . $data->id) ?>')"
                                            href="#!" class="btn btn-light btn-sm"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php $i++;
                                } ?>
                            </tbody>
                        </table>
                    </div> <!-- akhir div tabel -->
                </div> <!-- akhir div card body -->
            </div> <!-- akhir div card -->
        </div> <!-- akhir container fluid -->
    </main>
</div>

<!-- modal -->

<div class="modal fade" id="tambahMasuk">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Tambah Data Regulasi
            </div>
            <form action="<?php echo site_url('admin/regulasi/TambahRegulasi') ?>" method="POST"
                enctype="multipart/form-data">
                <div class="modal-body">
                    <label for="">Judul Hukum</label>
                    <input type="text" class="form-control" name="judul_hukum" required>
                </div>
                <div class="modal-body">
                    <label for="">Jenis</label>
                    <input type="text" class="form-control" name="jenis" required>
                </div>
                <div class="modal-body">
                    <label for="">Tahun</label>
                    <input type="text" class="form-control" name="tahun" required>
                </div>
                <div class="modal-body">
                    <label for="">File</label>
                    <input type="file" class="form-control" name="file" required>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>