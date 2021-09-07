<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Edit Data Toko Obat</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <form class="card-body card-block" action="<?php echo base_url('ia/obat/update_obat') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <input type="hidden" name="id_obat" value="<?php echo $id_obat ?>">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class="form-control-label">Nama Toko Obat</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="toko_obat" placeholder="Masukkan Nama Toko Obat" class="form-control" value="<?php echo $toko_obat ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class="form-control-label">SI</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="si" placeholder="Masukkan SI" class="form-control" value="<?php echo $si ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class="form-control-label">NIB</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="nib" placeholder="Masukkan NIB" class="form-control" value="<?php echo $nib ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class="form-control-label">Tgl Daftar</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="date" id="text-input" name="tgl_daftar" placeholder="Masukkan Tgl Daftar" class="form-control" value="<?php echo $tgl_daftar ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class="form-control-label">Masa Berlaku Toko Obat</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="date" id="text-input" name="masa_toko" placeholder="Masukkan Masa Berlaku Toko Obat" class="form-control" value="<?php echo $masa_toko ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class="form-control-label">Alamat Toko Obat</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="alamat" placeholder="Masukkan Alamat Toko Obat" class="form-control" value="<?php echo $alamat ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class="form-control-label">Penanggungjawab</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="ap" placeholder="Masukkan Penanggungjawab" class="form-control" value="<?php echo $ap ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class="form-control-label">Telp Penanggungjawab</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="telp_ap" placeholder="Masukkan Telp Penanggungjawab" class="form-control" value="<?php echo $telp_ap ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class="form-control-label">Pemilik Sarana</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="ps" placeholder="Masukkan Pemilik Sarana" class="form-control" value="<?php echo $ps ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class="form-control-label">Telp Pemilik Sarana</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="telp_ps" placeholder="Masukkan Telp Pemilik Sarana" class="form-control" value="<?php echo $telp_ps ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class="form-control-label">Keterangan</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="keterangan" placeholder="Masukkan Keterangan" class="form-control" value="<?php echo $keterangan ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class="form-control-label">Status</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select class="form-control" name="status" id="text-input">
                                <?php echo $status ?>
                                <option value="<?php echo $status ?>"><?php echo $status ?></option>
                                <option value="A">Aktif</option>
                                <option value="L">Lama</option>
                                <option value="H">Habis</option>
                                <option value="T">Tutup</option>
                            </select>
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