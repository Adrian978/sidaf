<!-- Begin Page Content -->
<div class="container-fluid">

    <a href="<?= site_url('export/pkpcetakexport/export') ?>" class="btn btn-success"><i class="fas fa-file-export"></i> Export</a><br><br>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Cetak PKP</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Tgl Penyuluhan PKP</th>
                            <th>Tgl Cetak PKP</th>
                            <th>No.Sertifikat PKP</th>
                            <th>No.Telepon</th>
                            <th>
                                <center>Aksi</center>
                            </th>
                        </tr>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($data_pkpcetak as $row) {
                            $no++;
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $row['nama'] ?></td>
                                <td><?php echo $row['alm_pkp'] ?></td>
                                <td><?php echo date_indo($row['tgl_penyuluhan']) ?></td>
                                <td><?php echo date_indo($row['tgl_cetak']) ?></td>
                                <td><?php echo $row['sertifikat'] ?></td>
                                <td><?php echo $row['telp'] ?></td>
                                <td>
                                    <center>
                                        <a class="btn btn-primary btn-sm" href="<?php echo base_url(''); ?>pdf/cetakpkp/cetak/<?php echo $row['nik']; ?>" target="_blank">
                                            <i class="fas fa-print"></i> cetak
                                        </a>
                                    </center>
                                </td>
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

<script>
    $(document).ready(function() {
        // ketika tombol detail ditekan
        $('.print_kartu').on("click", function() {
            // ambil nilai id dari link print
            var pkp_cetak = this.id;
            $("#MyModalBody").html('<iframe src="<?php echo base_url(); ?>pdf/laporanpdf/cetak/' + pkp_cetak + '" frameborder="no" width="570" height="400"></iframe>');
        });
    });
</script>