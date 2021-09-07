<body>

    <div class="gtco-loader"></div>

    <div id="page">

        <!-- Page Heading -->

        <!-- <div class="page-inner"> -->
        <nav class="gtco-nav" role="navigation">
            <div class="gtco-container">

                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div id="gtco-logo"><a href="<?php echo base_url('menu') ?>">DINKES KOTA SEMARANG <em>.</em></a></div>
                    </div>
                    <div class="col-xs-8 text-right menu-1">
                        <ul>
                            <li class="active btn-cta"><a href="#"><span><?php echo $nama; ?></span></a></li>
                            <li class="active"><a href="<?php echo base_url('menu') ?>">Menu</a></li>
                            <li class="has-dropdown">
                                <a href="<?php echo base_url('menu_profile') ?>">Profile</a>
                                <ul class="dropdown">
                                    <li><a href="<?php echo base_url('menu_profile/visi_misi') ?>">Visi Misi</a></li>
                                    <li><a href="<?php echo base_url('menu_profile/tugas') ?>">Tugas Pokok dan Fungsi</a></li>
                                    <li><a href="<?php echo base_url('menu_profile/struktur') ?>">Struktur Organisasi</a></li>
                                </ul>
                            </li>
                            <li><a href=<?php echo base_url('contact') ?>>Contact</a></li>
                            <li class="btn-cta"><a href=<?php echo base_url('auth/logout') ?> onclick="return confirm('Apakah anda yakin ingin keluar ?')"><span>Logout</span></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>

        <header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(assets_login/images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
            <div class="overlay" id="particles2"></div>
            <div class="gtco-container">
                <div class="row">
                    <div class="col-md-12 col-md-offset-0 text-center">


                        <div class="row row-mt-15em">
                            <div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
                                <span class="intro-text-small">Selamat Datang Di <a href="<?php echo base_url('menu') ?>" target="_blank">SIDAF</a></span>
                                <h1 class="cursive-font">HALAMAN UTAMA</h1>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </header>



        <div class="gtco-section">
            <div class="gtco-container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                        <h2 class="cursive-font primary-color">Menu Sistem Informasi</h2>
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-8">
                        <a href="<?php echo base_url('pirt/dashboard/index') ?>" class="fh5co-card-item">
                            <figure>
                                <div class="overlay"></div>
                                <img src="assets_login/images/img_1.jpg" alt="Image" class="img-responsive">
                            </figure>
                            <div class="fh5co-text">
                                <h2>SI-PIRT</h2>
                                <p>Sistem Informasi PIRT</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-8">
                        <a href="<?php echo base_url('IA/dash_ia/index') ?>" class="fh5co-card-item">
                            <figure>
                                <div class="overlay"></div>
                                <img src="assets_login/images/img_2.jpg" alt="Image" class="img-responsive">
                            </figure>
                            <div class="fh5co-text">
                                <h2>SI-IA</h2>
                                <p>Sistem Informasi Izin Usaha Apotek</p>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>