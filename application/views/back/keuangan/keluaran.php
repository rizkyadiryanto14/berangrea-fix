<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <!-- ini nama judul halaman -->
            <h1 class="mt-4"><?php echo $title ?></h1>
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
            // Validasi
            echo validation_errors('<div class="alert alert-danger">', '<button class="close" data-dismiss="alert">&times;</button> </div>');
            ?>

            <!-- sekarang masuk ke kolom isi konten -->
            <div class="card mb-4">
                <div class="card-header">
                    <a href="<?php echo site_url('admin/keuangan') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between lh-condensed">
                        <div class="d-flex">
                            <p><a href="<?php echo site_url('admin') ?>" class="btn btn-danger" data-toggle="modal" data-target="#tambahKeluaran">
                                    <i class="fa fa-plus"></i> Tambah Pengeluaran</a></p>
                        </div>
                        <div>
                            <p><a href="#!" onclick="window.print()" class="btn btn-secondary">
                                    <i class="fa fa-print"></i> Cetak</a></p>
                        </div>
                    </div>
                    <div class="table-responsive">

                        <!-- masuk ke tabel -->
                        <table class="table table-striped table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="25" class="text-center">No.</th>
                                    <th width="30%">Keterangan</th>
                                    <th>Tanggal</th>
                                    <th>Bukti</th>
                                    <th>Jumlah</th>
                                    <th>Jenis</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($result as $data) { ?>
                                    <tr>
                                        <td class="text-center"><?php echo $i ?></td>
                                        <td><?php echo $data->keterangan ?></td>
                                        <td><?php echo date('d M Y', strtotime($data->tanggal)) ?></td>
                                        <td>
                                            <a href="<?php echo base_url('back_assets/upload/transaksi/' . $data->image) ?>" target="_blank">Lihat</a>
                                        </td>
                                        <td width="180" class="text-right">Rp <?= number_format($data->jumlah, 2, ',', '.'); ?></td>
                                        <td><?php if ($data->jenis == "masuk") { ?><span class="badge badge-pill badge-success" style="font-weight: unset;">Pemasukan</span> <?php }
                                                                                                                                                                            if ($data->jenis == "keluar") { ?><span class="badge badge-pill badge-danger" style="font-weight: unset;">Pengeluaran</span> <?php } ?></td>
                                        <td class="d-flex justify-content-center">
                                            <a href="<?php echo site_url('admin/keuangan/ubah_keluaran/' . $data->nomor) ?>" class="btn btn-sm btn-light mr-1"><i class="fa fa-edit"></i></a>
                                            <a onclick="deleteConfirm('<?php echo site_url('admin/keuangan/hapus_out/' . $data->nomor) ?>')" href="#!" class="btn btn-light btn-sm"><i class="fas fa-trash"></i></a>

                                        </td>
                                    </tr>
                                <?php $i++;
                                } ?>
                            </tbody>
                            <thead>
                                <?php
                                error_reporting(0);
                                foreach ($ttl as $total) {
                                    $jumlah += $total->jumlah;
                                }
                                ?>
                                <tr>
                                    <th colspan="4" scope="col">TOTAL <small>(Pengeluaran)</small></th>
                                    <th width="130" class="text-right" scope="col">Rp. <?= number_format($jumlah, 2, ',', '.'); ?></th>
                                    <th scope="col">&nbsp;</th>
                                    <th scope="col">&nbsp;</th>
                                </tr>
                            </thead>
                        </table>
                    </div> <!-- akhir div tabel -->
                </div> <!-- akhir div card body -->
            </div> <!-- akhir div card -->

            <div class="modal fade" id="tambahKeluaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Pengeluaran Kas</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo site_url('admin/keuangan/keluaran') ?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="col-form-label" for="nomor2">Nomor</label>
                                    <input type="number" class="form-control" name="nomor2" id="nomor2" value="<?= $nomor; ?>" readonly="">
                                </div>
                                <div class="form-group">
                                    <label for="image">Bukti Transaksi</label><small> (Max 2Mb)</small>
                                    <input class="form-control" required type="file" name="image" />
                                </div>

                                <div class="form-group">
                                    <label>Pokja *</label>
                                    <select name="id_pokja" class="form-control" required>
                                        <?php foreach ($pokja as $pokja) {
                                            if ($pokja->id_pokja != 74) { ?>
                                                <option value="<?php echo $pokja->id_pokja ?>">
                                                    <?php echo $pokja->nama_pokja ?></option>
                                        <?php }
                                        } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label" for="keterangan2">Keterangan Pengeluaran</label>
                                    <textarea class="form-control" name="keterangan2" id="keterangan2" placeholder="Keterangan" required=""></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label" for="tanggal2">Tanggal</label>
                                    <input type="date" class="form-control" name="tanggal2" id="tanggal2" value="<?= date('Y-m-d'); ?>" required="">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label" for="jumlah2">Jumlah</label>
                                    <input type="number" class="form-control" name="jumlah2" id="jumlah2" placeholder="Jumlah" required="">
                                </div>
                                <!-- end -->
                                <!-- end -->
                                <!-- end -->
                                <button class="btn btn-secondary mr-1" type="button" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-danger">Tambah</button>
                            </form>
                        </div> <!-- modal-body -->
                    </div> <!-- modal-content -->
                </div> <!-- modal-dialog -->
            </div> <!-- modal-fade -->


        </div> <!-- akhir container fluid -->
    </main>