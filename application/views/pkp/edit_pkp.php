<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Edit Data PKP</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <form class="card-body card-block" action="<?php echo base_url('pirt/pkp/update_pkp') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <input type="hidden" name="id_pkp" value="<?php echo $id_pkp ?>">

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
                            <label for="text-input" class="form-control-label">Tanggal Penyuluhan</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="date" id="text-input" name="tgl_penyuluhan" placeholder="Masukkan Tanggal Penyuluhan PKP" class="form-control" value="<?php echo $tgl_penyuluhan ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class="form-control-label">Tanggal Cetak</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="date" id="text-input" name="tgl_cetak" placeholder="Masukkan Tanggal Cetak PKP" class="form-control" value="<?php echo $tgl_cetak ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class="form-control-label">Sertifikat</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="sertifikat" placeholder="Masukkan No. Sertifikat" class="form-control" value="<?php echo $sertifikat ?>">
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
                                <option value="Baru">Baru</option>
                                <option value="Perpanjangan">Perpanjangan</option>
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