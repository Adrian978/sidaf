<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Input Data PKP</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <form class="card-body card-block" action="<?php echo base_url('pirt/pkp/simpan_pkp') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class="form-control-label">NIK</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="nik" placeholder="Masukkan NIK" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class="form-control-label">Tanggal Penyuluhan</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="date" id="text-input" name="tgl_penyuluhan" placeholder="Masukkan Tanggal Penyuluhan PKP" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class="form-control-label">Tanggal Cetak PKP</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="date" id="text-input" name="tgl_cetak" placeholder="Masukkan Tanggal Cetak PKP" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class="form-control-label">Sertifikat</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="sertifikat" placeholder="Masukkan No. Sertifikat" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class="form-control-label">Status</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select class="form-control" name="status" id="text-input">
                                <option>--Pilih Status PKP--</option>
                                <option value="BARU">Baru</option>
                                <option value="PERPANJANGAN">Perpanjangan</option>
                            </select>
                        </div>
                    </div>

                    <br>

                    <div>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Tambah
                        </button>
                        <button type="reset" class="btn btn-danger">
                            <i class="fas fa-ban"></i> Reset
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