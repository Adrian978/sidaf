<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Edit Data Pemohon</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <form class="card-body card-block" action="<?php echo base_url('pemohon/update_pemohon') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <input type="hidden" name="id_pemohon" value="<?php echo $id_pemohon ?>">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class="form-control-label">NIK</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="nik" placeholder="Masukkan NIK" class="form-control" value="<?php echo $nik ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class="form-control-label">Nama</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="nama" placeholder="Masukkan Nama" class="form-control" value="<?php echo $nama ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class="form-control-label">Telp</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="telp" placeholder="Masukkan No. Telp" class="form-control" value="<?php echo $telp ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class="form-control-label">Alamat PKP</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="alm_pkp" placeholder="Masukkan Alamat PKP" class="form-control" value="<?php echo $alm_pkp ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class="form-control-label">Alamat Produksi</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="alm_pr" placeholder="Masukkan Alamat Produksi" class="form-control" value="<?php echo $alm_pr ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class="form-control-label">Jabatan</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="jabatan" placeholder="Masukkan Jabatan" class="form-control" value="<?php echo $jabatan ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class="form-control-label">Jenis Kelamin</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select class="form-control" name="jenis_kelamin" id="text-input" value="<?php echo $jenis_kelamin ?>">
                                <?php echo $jenis_kelamin ?>
                                <option value="<?php echo $jenis_kelamin ?>"><?php echo $jenis_kelamin ?></option>
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-1 col-md-0">
                        </div>
                        <div class="col-1 col-md-2">
                            <img src="<?php echo base_url($berkas) ?>" width="150">
                        </div>
                        <div class="col-2 col-md-2"><br><br><br><br><br>
                            <label for="text-input" class="form-control-label">File Foto</label>
                            <input type="file" id="text-input" name="berkas" placeholder="Masukkan Judul" class="form-control">
                            <small>* ukuran foto minimal 2mb</small>
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-edit"></i> Edit
                        </button>
                        <a value="Go Back" onclick="history.back(-1)" class="btn btn-warning">
                            <i class="fas fa-undo"></i> Kembali
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->