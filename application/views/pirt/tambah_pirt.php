<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Input Data PIRT</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <form class="card-body card-block" action="<?php echo base_url('pirt/pirt/simpan_pirt') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class="form-control-label">Kode Produk</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="kode" placeholder="Masukkan Kode Produk" class="form-control">
                        </div>
                    </div>

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
                            <label for="text-input" class="form-control-label">Produk</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="produk" placeholder="Masukkan Produk" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class="form-control-label">Kemasan</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="kemasan" placeholder="Masukkan Kemasan" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class="form-control-label">Merk</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="merk" placeholder="Masukkan Merk" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class="form-control-label">No. PIRT</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="pirt" placeholder="Masukkan No.PIRT" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class="form-control-label">Tanggal Cetak PIRT</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="date" id="text-input" name="tgl_pirt" placeholder="Masukkan Tanggal Cetak PIRT" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class="form-control-label">Masa Berlaku</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="date" id="text-input" name="masa_pirt" placeholder="Masukkan Masa Berlaku" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class="form-control-label">IRT</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="irt" placeholder="Masukkan IRT" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class="form-control-label">Pre Test</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="pre_test" placeholder="Masukkan Hasil Pre Test" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class="form-control-label">Post Test</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="post_test" placeholder="Masukkan Hasil Post Test" class="form-control">
                        </div>
                    </div>

                    <br>

                    <div>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-plus"></i>Tambah
                        </button>
                        <button type="reset" class="btn btn-danger">
                            <i class="fas fa-ban"></i>Reset
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->