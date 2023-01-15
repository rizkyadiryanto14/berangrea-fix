<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="n1codes" />
    <title><?php echo $title ?></title>
    <link rel="shortcut icon" href="<?php echo base_url('back_assets/img/logo1.png') ?>" type="image/x-icon">
    <!-- css -->
    <link href="<?php echo base_url('back_assets/css/dataTables.bootstrap4.min.css') ?>" rel="stylesheet"
        crossorigin="anonymous" />
    <link href="<?php echo base_url('back_assets/css/styles_sbadmin.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('back_assets/css/dropdown_nav.css') ?>" type="text/css" rel="stylesheet">
    <style>
    * {
        transition: all 0.5s;
    }

    .blur-ios-black {
        -webkit-backdrop-filter: saturate(180%) blur(20px);
        backdrop-filter: saturate(180%) blur(15px);
        background: rgba(0, 0, 0, 0.8);
    }
    </style>
</head>

<body class="sb-nav-fixed">
    <!-- NAVBAR ATAS -->
    <nav class="sb-topnav navbar navbar-expand navbar-dark blur-ios-black">
        <button class="btn btn-link ml-2 " id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <a class="navbar-brand" href="<?php echo site_url('auth') ?>">Sistem Informasi <?php echo $namasite ?></a>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group"> </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i>
                    <!-- <img src="<?php //echo base_url('upload/user/'); 
                                    ?><?php //echo $this->session->userdata('photoanda'); 
                                        ?>" class="img-circle-small" alt="User Image" />  -->
                    <?php echo $this->session->userdata('nama'); ?>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="<?php echo site_url('') ?> " target="_blank">Lihat Website</a>
                    <a class="dropdown-item" href="<?php echo site_url('profile') ?>">Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" data-toggle="modal" data-target="#logoutModal"
                        href="<?= site_url('keluar2') ?>">Keluar</a>
                </div>
            </li>
        </ul>
    </nav>

    <div id="layoutSidenav">
        <?php if ($this->session->userdata('akses_level') == 'superadmin') { ?>
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Utama</div>
                        <a class="nav-link" href="<?php echo site_url('admin') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dasbor
                        </a>
                        <div class="sb-sidenav-menu-heading">Data</div>
                        <a class="nav-link" href="<?php echo site_url('admin/berita') ?> ">
                            <div class="sb-nav-link-icon"><i class="fas fa-star"></i></div>
                            Berita
                        </a>
                        <a class="nav-link" href="<?php echo site_url('admin/proker') ?> ">
                            <div class="sb-nav-link-icon"><i class="fas fa-briefcase"></i></div>
                            Program Kerja
                        </a>
                        <a class="nav-link" href="<?php echo site_url('admin/keuangan') ?> ">
                            <div class="sb-nav-link-icon"><i class="fas fa-coins"></i></div>
                            Keuangan
                        </a>
                        <a class="nav-link" href="<?php echo site_url('admin/surat') ?> ">
                            <div class="sb-nav-link-icon"><i class="fas fa-paste"></i></div>
                            Surat
                        </a>
                        <a class="nav-link" href="<?php echo site_url('admin/laporan') ?> ">
                            <div class="sb-nav-link-icon"><i class="fas fa-file"></i></div>
                            Laporan
                        </a>
                        <a class="nav-link" href="<?php echo site_url('admin/Penduduk') ?> ">
                            <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                            Penduduk
                        </a>

                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#website"
                            aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-hashtag"></i></div>
                            Website
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="website" aria-labelledby="headingTree"
                            data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link" href="<?php echo site_url('admin/struktur') ?> ">
                                    <div class="sb-nav-link-icon"><i class="fas fa-folder-open"></i></div>Pengurus
                                </a>
                                <a class="nav-link" href="<?php echo site_url('admin/galeri') ?> ">
                                    <div class="sb-nav-link-icon"><i class="fas fa-image"></i></div>Galeri Foto
                                </a>
                                <a class="nav-link" href="<?php echo site_url('admin/quotes') ?> ">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tag"></i></div>Quotes
                                </a>
                                <a class="nav-link" href="<?php echo site_url('admin/sliders') ?> ">
                                    <div class="sb-nav-link-icon"><i class="fas fa-image"></i></div>Sliders
                                </a>
                                <a class="nav-link" href="<?php echo site_url('admin/masukan') ?> ">
                                    <div class="sb-nav-link-icon"><i class="fas fa-heart"></i></div>Pesan
                                </a>
                                <a class="nav-link" href="<?php echo site_url('admin/user') ?> ">
                                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>User
                                </a>
                                <a class="nav-link" href="<?php echo site_url('admin/konfig') ?> ">
                                    <div class="sb-nav-link-icon"><i class="fas fa-wrench"></i></div>Konfigurasi
                                </a>
                                <a class="nav-link" href="<?php echo site_url('admin/regulasi') ?> ">
                                    <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>Regulasi
                                </a>
                            </nav>
                        </div>
                        <div class="sb-sidenav-menu-heading">Akun</div>
                        <a class="nav-link" href="<?php echo site_url('profile') ?> ">
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                            Profile
                        </a>

                    </div>
                </div>
            </nav>
        </div>
        <?php
        } ?>

        <?php if ($this->session->userdata('akses_level') == 'sekret_pokja') { ?>
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Utama</div>
                        <a class="nav-link" href="<?php echo site_url('admin') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dasbor
                        </a>
                        <div class="sb-sidenav-menu-heading">Data</div>
                        <a class="nav-link" href="<?php echo site_url('admin/berita') ?> ">
                            <div class="sb-nav-link-icon"><i class="fas fa-star"></i></div>
                            Berita Pokja
                        </a>
                        <a class="nav-link" href="<?php echo site_url('admin/galeri') ?> ">
                            <div class="sb-nav-link-icon"><i class="fas fa-image"></i></div>
                            Galeri Pokja
                        </a>
                        <a class="nav-link" href="<?php echo site_url('admin/sliders') ?> ">
                            <div class="sb-nav-link-icon"><i class="fas fa-image"></i></div>
                            Slider
                        </a>

                        <div class="sb-sidenav-menu-heading">Akun</div>
                        <a class="nav-link" href="<?php echo site_url('profile') ?> ">
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                            Profile
                        </a>

                    </div>
                </div>
            </nav>
        </div>
        <?php
        } ?>

        <?php if ($this->session->userdata('akses_level') == 'kades') { ?>
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Utama</div>
                        <a class="nav-link" href="<?php echo site_url('admin') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dasbor
                        </a>
                        <a class="nav-link" href="<?php echo site_url('admin/laporan') ?> ">
                            <div class="sb-nav-link-icon"><i class="fas fa-file"></i></div>
                            Laporan
                        </a>

                        <div class="sb-sidenav-menu-heading">Akun</div>
                        <a class="nav-link" href="<?php echo site_url('profile') ?> ">
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                            Profile
                        </a>

                    </div>
                </div>
            </nav>
        </div>
        <?php
        } ?>

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
                            <a href="<?php echo site_url('admin/surat') ?>"><i class="fas fa-arrow-left"></i>
                                Kembali</a>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between lh-condensed">
                                <div class="d-flex">
                                    <p><a href="<?php echo site_url('admin') ?>" class="btn btn-success"
                                            data-toggle="modal" data-target="#tambahPenduduk">
                                            <i class="fa fa-plus"></i> Tambah Data Penduduk</a></p>
                                </div>
                                <div>
                                    <p><a href="#!" onclick="window.print()" class="btn btn-secondary">
                                            <i class="fa fa-print"></i> Cetak</a></p>
                                </div>
                            </div>
                            <div class="table-responsive">

                                <!-- masuk ke tabel -->
                                <table class="table table-striped table-bordered table-hover" id="dataTable"
                                    width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="25" class="text-center">No.</th>
                                            <th>Nik</th>
                                            <th>Nama</th>
                                            <th>TTL</th>
                                            <th>Files</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($penduduk as $item) :
                                        ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $item->nik ?></td>
                                            <td><?= $item->no_kk ?></td>
                                            <td><?= $item->nama ?></td>
                                            <td>
                                                <a href="<?php echo base_url('back_assets/upload/file_document/' . $item->file) ?>"
                                                    target="_blank">View</a>
                                            </td>
                                            <td>
                                                <button class="btn btn-primary btn-sm">Edit</button>
                                                <button class="btn btn-danger btn-sm">Hapus</button>
                                            </td>
                                        </tr>
                                        <?php
                                        endforeach
                                        ?>
                                    </tbody>
                                </table>
                            </div> <!-- akhir div tabel -->
                        </div> <!-- akhir div card body -->
                    </div> <!-- akhir div card -->

                </div> <!-- akhir container fluid -->
            </main>
        </div>

        <div class="modal fade" id="tambahPenduduk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content ">
                    <div class="modal-header">
                        <h3>Tambah Data Penduduk</h3>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <form action="<?php echo base_url('admin/penduduk/create') ?>" method="POST"
                            enctype="multipart/form-data">
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
                                <button class="btn btn-secondary mr-1" type="button" data-dismiss="modal">Batal</button>
                                <button type="submit" value="upload" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url('back_assets/js/all.min.js') ?>" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('back_assets/js/jquery-3.5.1.min.js') ?>"></script>
    <script src="<?php echo base_url('back_assets/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?php echo base_url('back_assets/js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?php echo base_url('back_assets/js/dataTables.bootstrap4.min.js') ?>"></script>
    <script src="<?php echo base_url('back_assets/js/panel.sidebar.js') ?>"></script>
    <script src="<?php echo base_url('back_assets/js/datatables-used.js') ?>"></script>
    <script>
    function deleteConfirm(url) {
        $('#btn-delete').attr('href', url);
        $('#deleteModal').modal();
    }
    </script>
    <script>
    function showME() {
        var x = document.getElementById("laporanku");
        var button = document.getElementById("btnku");
        if (x.style.display === "none") {
            x.style.display = "block";
            button.style.btn = "btn-danger";
        } else {
            x.style.display = "none";
        }
    }
    </script>
</body>

</html>