<body>

    <div class="gtco-loader"></div>

    <div id="page">


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
                            <li><a href="<?php echo base_url('menu') ?>">Menu</a></li>
                            <li class="has-dropdown active">
                                <a href="<?php echo base_url('menu_profile') ?>">Profile</a>
                                <ul class="dropdown">
                                    <li><a href="<?php echo base_url('menu_profile/visi_misi') ?>">Visi Misi</a></li>
                                    <li><a href="<?php echo base_url('menu_profile/tugas') ?>">Tugas Pokok dan Fungsi</a></li>
                                    <li><a href="<?php echo base_url('menu_profile/struktur') ?>">Struktur Organisasi</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url('contact') ?>">Contact</a></li>
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
                                <span class="intro-text-small">Selamat Datang Di <a href="<?php echo base_url('menu_profile/struktur') ?>" target="_blank">SIDAF</a></span>
                                <h1 class="cursive-font">STRUKTUR ORGANISASI</h1>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </header>

        <div class="gtco-cover gtco-cover-sm" style="background-image: url(images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="gtco-container text-center">
                <div class="display-t">
                    <div class="display-tc">
                        <h1 class="cursive-font">STRUKTUR ORGANISASI DINAS KESEHATAN KOTA SEMARANG</h1>
                        <p><img src="<?php echo base_url('assets_login/images/SOTK_DKK.jpg') ?>" style="height:362px; width:618px" /></p>
                    </div>
                </div>
            </div>
        </div>
    </div>