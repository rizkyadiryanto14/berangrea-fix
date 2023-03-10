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
            <!-- flash sedikit -->
            <?php
            // Validasi
            echo validation_errors('<div class="alert alert-danger">', '<button class="close" data-dismiss="alert">&times;</button> </div>');

            // Form
            echo form_open(base_url('admin/pokja/edit/' . $pokja->id_pokja));
            ?>

            <!-- sekarang masuk ke kolom isi konten -->
            <div class="card mb-4">
                <div class="card-header">
                    <a href="<?php echo site_url('admin/pokja') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
                </div>
                <div class="card-body">

                    <div class="form-group">
                        <label>Nama Lemabaga</label>
                        <input type="text" name="nama_pokja" placeholder="Nama pokja"
                            value="<?php echo $pokja->nama_pokja ?>" required class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea name="keterangan" class="form-control"
                            placeholder="Keterangan"><?php echo $pokja->keterangan ?></textarea>
                    </div>

                    <div class="form-group">
                        <label>Urutan tampil</label>
                        <input type="number" name="urutan" placeholder="Urutan tampil"
                            value="<?php echo $pokja->urutan ?>" required class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="reset" name="reset" value="Reset" class="btn btn-secondary">
                        <input type="submit" name="submit" value="Simpan Perubahan" class="btn btn-primary">
                    </div>

                    <?php echo form_close() ?>

                </div> <!-- akhir div card body -->
            </div> <!-- akhir div card -->
        </div> <!-- akhir container fluid -->
    </main>