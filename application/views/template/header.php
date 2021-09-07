<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Informasi PIRT</title>
    <link rel="shortcut icon" type="image/ico" href="assets/images/favicon.png" />

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">

    <!-- Custom styles for this page -->
    <link href="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                </form>

                <li class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <a type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
                        <i class="fas fa-cogs"></i> Control Panel
                    </a>
                </li>

                <!-- Modal -->

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-cogs"></i> Control Panel</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-3 text-info text-center">
                                        <a href="<?php echo base_url('pemohon') ?>">
                                            <p class="nav-link small text-info">PEMOHON</p>
                                            <i class="fas fa-3x fa-user text-info"></i>
                                        </a>
                                    </div>

                                    <div class="col-md-3 text-info text-center">
                                        <a href="<?php echo base_url('pirt/pkp') ?>">
                                            <p class="nav-link small text-info">PKP</p>
                                            <i class="far fa-3x fa-sticky-note text-info"></i>
                                        </a>
                                    </div>

                                    <div class="col-md-3 text-info text-center">
                                        <a href="<?php echo base_url('pirt/pirt') ?>">
                                            <p class="nav-link small text-info">PIRT</p>
                                            <i class="fas fa-3x fa-sticky-note text-info"></i>
                                        </a>
                                    </div>

                                    <div class="col-md-3 text-info text-center">
                                        <a href="<?php echo base_url('pirt/rekap') ?>">
                                            <p class="nav-link small text-info">REKAP</p>
                                            <i class="fas fa-3x fa-book text-info"></i>
                                        </a>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-3 text-info text-center">
                                        <a href="<?php echo base_url('pirt/pkpcetak') ?>">
                                            <p class="nav-link small text-info">CETAK PKP</p>
                                            <i class="fas fa-3x fa-print text-info"></i>
                                        </a>
                                    </div>

                                    <div class="col-md-3 text-info text-center">
                                        <a href="<?php echo base_url('pirt/pirtcetak') ?>">
                                            <p class="nav-link small text-info">CETAK PIRT</p>
                                            <i class="fas fa-3x fa-print text-info"></i>
                                        </a>
                                    </div>

                                    <div class="col-md-3 text-info text-center">
                                        <a href="<?php echo base_url('pkpttd') ?>">
                                            <p class="nav-link small text-info">TTD PKP</p>
                                            <i class="fas fa-3x fa-id-card-alt text-info"></i>
                                        </a>
                                    </div>

                                    <div class="col-md-3 text-info text-center">
                                        <a href="<?php echo base_url('pirtttd') ?>">
                                            <p class="nav-link small text-info">TTD PIRT</p>
                                            <i class="fas fa-3x fa-id-card-alt text-info"></i>
                                        </a>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-3 text-info text-center">
                                        <a href="<?php echo base_url('pirt/kd') ?>">
                                            <p class="nav-link small text-info">KEPALA DINAS</p>
                                            <i class="fas fa-3x fa-user-tie text-info"></i>
                                        </a>
                                    </div>

                                    <div class="col-md-3 text-info text-center">
                                        <a href="<?php echo base_url('pirt/ket_pkp') ?>">
                                            <p class="nav-link small text-info">KETERANGAN PKP</p>
                                            <i class="fas fa-3x fa-clipboard text-info"></i>
                                        </a>
                                    </div>

                                    <div class="col-md-3 text-info text-center">
                                        <a href="<?php echo base_url('pirt/ket_pirt') ?>">
                                            <p class="nav-link small text-info">KETERANGAN PIRT</p>
                                            <i class="far fa-3x fa-clipboard text-info"></i>
                                        </a>
                                    </div>
                                </div>
                                <hr>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Menu</span>
                            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="<?php echo base_url('menu') ?>">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Halaman Utama
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->