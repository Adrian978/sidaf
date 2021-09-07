<body>

    <div class="gtco-loader"></div>

    <div id="page">


        <!-- <div class="page-inner"> -->
        <nav class="gtco-nav" role="navigation">
            <div class="gtco-container">

                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div id="gtco-logo"><a href="<?php echo base_url('auth/login') ?>">DINKES KOTA SEMARANG <em>.</em></a></div>
                    </div>
                    <div class="col-xs-8 text-right menu-1">
                        <ul>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>

        <header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(assets_login/images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
            <div class="overlay" id="particles"></div>
            <div class="gtco-container">
                <div class="row">
                    <div class="col-md-12 col-md-offset-0 text-left">


                        <div class="row row-mt-15em">
                            <div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
                                <a href="<?php echo base_url('auth/login') ?>" target="_blank">SELAMAT DATANG DI</a></span>
                                <h1 class="cursive-font">SIDAF</h1>
                            </div>
                            <div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
                                <div class="form-wrap">
                                    <div class="tab">

                                        <div class="tab-content">
                                            <div class="tab-content-inner active" data-content="signup">
                                                <h3 class="cursive-font">Sign In
                                                    <img src="assets_login/images/favicon.png" width="45px" class="pull-right">
                                                </h3><br>
                                                <?php if ($this->session->flashdata('success')) { ?>
                                                    <div class="alert alert-success">
                                                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                                                        <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
                                                    </div>
                                                <?php } else if ($this->session->flashdata('error')) { ?>
                                                    <div class="alert alert-danger">
                                                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                                                        <strong></strong> <?php echo $this->session->flashdata('error'); ?>
                                                    </div>
                                                <?php } else if ($this->session->flashdata('warning')) { ?>
                                                    <div class="alert alert-warning">
                                                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                                                        <strong>Warning!</strong> <?php echo $this->session->flashdata('warning'); ?>
                                                    </div>
                                                <?php } else if ($this->session->flashdata('info')) { ?>
                                                    <div class="alert alert-info">
                                                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                                                        <strong>Info!</strong> <?php echo $this->session->flashdata('info'); ?>
                                                    </div>
                                                <?php } ?>

                                                <form action="<?php echo base_url('auth/login') ?>" method="post">
                                                    <div class="row">
                                                    </div>
                                                    <form action="#">
                                                        <div class="row form-group">
                                                            <div class="col-md-12">
                                                                <label for="date-start">Username</label>
                                                                <input type="text" name="username" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-md-12">
                                                                <label for="date-start">Password</label>
                                                                <input type="password" name="password" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="row form-group">
                                                            <div class="col-md-12">
                                                                <input type="submit" class="btn btn-primary btn-block" value="Login">
                                                            </div>
                                                        </div>
                                                    </form>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </header>