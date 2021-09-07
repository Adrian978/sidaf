    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('pirt/dashboard') ?>">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Aplikasi PIRT <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('pirt/dashboard') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu Dashboard
            </div>

            <!-- Nav Item - Data Master -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages1" aria-expanded="true" aria-controls="collapsePages1">
                    <i class="fas fa-fw fa-database"></i>
                    <span>Data Master</span>
                </a>
                <div id="collapsePages1" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data Master</h6>
                        <a class="collapse-item" href="<?php echo base_url('pemohon') ?>"><i class="fas fa-fw fa-user"></i> Pemohon</a>
                        <a class="collapse-item" href="<?php echo base_url('pirt/pkp') ?>"><i class="far fa-sticky-note"></i> PKP</a>
                        <a class="collapse-item" href="<?php echo base_url('pirt/pirt') ?>"><i class="fas fa-sticky-note"></i> PIRT</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - REKAP -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('pirt/rekap') ?>">
                    <i class="fas fa-fw fa-book "></i>
                    <span>Rekap</span></a>
            </li>

            <!-- Nav Item - Data Cetak dan TTD -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages2" aria-expanded="true" aria-controls="collapsePages2">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Data Cetak dan TTD</span>
                </a>
                <div id="collapsePages2" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Cetak:</h6>
                        <a class="collapse-item" href="<?php echo base_url('pirt/pkpcetak') ?>"><i class="fas fa-print"></i> Cetak PKP</a>
                        <a class="collapse-item" href="<?php echo base_url('pirt/pirtcetak') ?>"><i class="fas fa-print"></i> Cetak PIRT</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">TTD:</h6>
                        <a class="collapse-item" href="<?php echo base_url('pkpttd') ?>"><i class="fas fa-id-card-alt"></i> TTD PKP</a>
                        <a class="collapse-item" href="<?php echo base_url('pirtttd') ?>"><i class="fas fa-id-card-alt"></i> TTD PIRT</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pengaturan -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages3" aria-expanded="true" aria-controls="collapsePages3">
                    <i class="fas fa-fw fa-cogs"></i>
                    <span>Pengaturan Cetak</span>
                </a>
                <div id="collapsePages3" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pengaturan Cetak</h6>
                        <a class="collapse-item" href="<?php echo base_url('pirt/kd') ?>"><i class="fas fa-user-tie"></i> Kepala Dinas</a>
                        <a class="collapse-item" href="<?php echo base_url('pirt/ket_pkp') ?>"><i class="fas fa-clipboard"></i> Keterangan Cetak PKP</a>
                        <a class="collapse-item" href="<?php echo base_url('pirt/ket_pirt') ?>"><i class="far fa-clipboard"></i> Keterangan Cetak PIRT</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->