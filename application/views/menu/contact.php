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
                            <li><a href="<?php echo base_url('menu') ?>">Menu</a></li>
                            <li class="has-dropdown">
                                <a href="<?php echo base_url('menu_profile') ?>">Profile</a>
                                <ul class="dropdown">
                                    <li><a href="<?php echo base_url('menu_profile/visi_misi') ?>">Visi Misi</a></li>
                                    <li><a href="<?php echo base_url('menu_profile/tugas') ?>">Tugas Pokok dan Fungsi</a></li>
                                    <li><a href="<?php echo base_url('menu_profile/struktur') ?>">Struktur Organisasi</a></li>
                                </ul>
                            </li>
                            <li class="active"><a href="<?php echo base_url('contact') ?>">Contact</a></li>
                            <li class="btn-cta"><a href=<?php echo base_url('auth/logout') ?> onclick="return confirm('Apakah anda yakin ingin keluar ?')"><span>Logout</span></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>

        <header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(assets_login/images/img_bg_1.jpg)">
            <div class="overlay" id="particles2"></div>
            <div class="gtco-container">
                <div class="row">
                    <div class="col-md-12 col-md-offset-0 text-center">

                        <div class="row row-mt-15em">
                            <div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
                                <span class="intro-text-small">Selamat Datang Di <a href="<?php echo base_url('menu') ?>" target="_blank">SIDAF</a></span>
                                <h1 class="cursive-font">HALAMAN KONTAK</h1>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </header>


        <div class="gtco-section">
            <div class="gtco-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6 animate-box">
                            <h3>Lokasi</h3>

                            <head>
                                <?php echo $map['js']; ?>
                            </head>

                            <body>
                                <?php echo $map['html']; ?>
                            </body>
                        </div>
                        <div class="col-md-5 col-md-push-1 animate-box">

                            <div class="gtco-contact-info">
                                <h3>Informasi Kontak</h3>
                                <ul>
                                    <li class="address">Jl. Pandanaran No.79, Mugassari, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50249</li>
                                    <li class="phone"><a href="tel://0248318070">(024) 8318070</a></li>
                                    <li class="email"><a href="mailto:dinkes@semarangkota.go.id">dinkes@semarangkota.go.id</a></li>
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>