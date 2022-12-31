<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <!-- ini nama judul halaman -->
            <h1 class="mt-4"><?php echo $title ?></h1>
            <!-- sekarang masuk ke kolom isi konten -->
            <div class="card mb-4">
                <div class="card-header">
                    <a href="<?php echo site_url('admin/surat') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between lh-condensed">
                        <div class="d-flex">
                            <p><a href="<?php echo site_url('admin') ?>" class="btn btn-success" data-toggle="modal"
                                    data-target="#tambahMasuk">
                                    <i class="fa fa-plus"></i> Tambah Surat Masuk</a></p>
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
                                        <a href="#!" class="btn btn-light btn-sm"><i class="fas fa-trash"></i></a>
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