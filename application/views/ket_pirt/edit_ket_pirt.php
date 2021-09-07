<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Edit Keterangan PIRT</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <form class="card-body card-block" action="<?php echo base_url('pirt/ket_pirt/update_ket_pirt') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <input type="hidden" name="id_ket_pirt" value="<?php echo $id_ket_pirt ?>">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class="form-control-label">Keterangan</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <textarea type="text" id="text-input" name="keterangan" placeholder="Masukkan Keterangan" class="form-control"><?php echo $keterangan ?>
</textarea>
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