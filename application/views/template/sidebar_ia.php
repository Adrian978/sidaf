    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('ia/dash_ia') ?>">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <div class="sidebar-brand-text mx-1">Aplikasi Izin Apotek & Toko Obat <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('ia/dash_ia') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu Dashboard
            </div>

            <!-- Nav Item - Data Apotek -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('ia/apotek') ?>">
                    <i class="fas fa-fw fa-clinic-medical "></i>
                    <span>Data Apotek</span></a>
            </li>

            <!-- Nav Item - Data Toko Obat -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('ia/obat') ?>">
                    <i class="fas fa-fw fa-prescription-bottle-alt "></i>
                    <span>Data Toko Obat</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->