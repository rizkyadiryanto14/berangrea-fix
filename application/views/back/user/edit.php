<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <!-- ini nama judul halaman -->
            <h1 class="mt-4"><?php echo $title?></h1>
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
            // Error
            if (isset($error)) {
                echo '<div class="alert alert-warning">';
                echo '<button class="close" data-dismiss="alert">&times;</button>';
                echo $error;
                echo '</div>';
            }
            // Validasi
            echo validation_errors('<div class="alert alert-danger">', '<button class="close" data-dismiss="alert">&times;</button> </div>');
            // Form
            echo form_open_multipart('admin/user/edit/' . $user->id_user);
            ?>
            <!-- sekarang masuk ke kolom isi konten -->
            <div class="card mb-4">
                <div class="card-header">
                    <a href="<?php echo site_url('admin/user') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
                </div>
                <div class="card-body">

                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input required type="text" name="nama" class="form-control" placeholder="Nama lengkap" value="<?php echo $user->nama ?>">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input required type="email" name="email" class="form-control" placeholder="email" value="<?php echo $user->email ?>">
                    </div>

                    <div class="form-group">
                        <label>Username</label>
                        <input required type="text" name="username" class="form-control" placeholder="username" value="<?php echo $user->username ?>">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input required type="password" name="password" class="form-control" placeholder="password" pattern=".{4,}" minlength="4" maxlength="32" title="Four characters is the minimum password"  value="<?php echo $user->password ?>">
                    </div>

                    <div class="form-group">
                        <label>Level Hak Akses</label>
                        <select name="akses_level" class="form-control">
                            <option value="superadmin" <?php if ($user->akses_level == "superadmin") { echo "selected"; } ?>>Admin PKK</option>
                            <option value="sekret_pokja" <?php if ($user->akses_level == "sekret_pokja") { echo "selected"; } ?>>Sekretaris Pokja</option>
                            <option value="kades" <?php if ($user->akses_level == "kades") { echo "selected"; } ?>>Kepala Desa</option>
                        </select>
                    </div>

                    <div class="form-group mb-2">
                        <input type="reset" name="reset" value="Reset" class="btn btn-secondary">
                        <input type="submit" name="submit" value="Ubah User" class="btn btn-success">
                    </div>
                    <?php echo form_close() ?>
                </div> <!-- akhir div card body -->
            </div> <!-- akhir div card -->
        </div> <!-- akhir container fluid -->
    </main>