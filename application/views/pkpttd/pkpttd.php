<!-- Begin Page Content -->
<div class="container-fluid">

    <a href="<?= site_url('export/pkpttdexport/export') ?>" class="btn btn-success"><i class="fas fa-file-export"></i> Export</a><br><br>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">TTD PKP</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Gambar</th>
                            <th>Alamat</th>
                            <th>No.Sertifikat PKP</th>
                            <th>Status</th>
                        </tr>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($data_pkpttd as $row) {
                            $no++;
                            $gambar = $row['berkas'];
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $row['nama_pj'] ?></td>
                                <td>
                                    <center><img src="<?php echo $row['berkas'] ?>" width="75"></center>
                                </td>
                                <td><?php echo $row['alm_pkp'] ?></td>
                                <td><?php echo $row['sertifikat'] ?></td>
                                <td><?php echo $row['status'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row">

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->