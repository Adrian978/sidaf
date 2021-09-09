<!-- Begin Page Content -->
<div class="container-fluid">

    <a href="<?= site_url('export/rekapexport/export') ?>" class="btn btn-success"><i class="fas fa-file-export"></i> Export</a><br><br>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Rekap</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="example" width="200%" cellspacing="0">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nama Penanggungjawab</th>
                            <th>Alamat Produksi</th>
                            <th>Alamat PKP</th>
                            <th>No.Telepon</th>
                            <th>Jenis-Kelamin</th>
                            <th>Tanggal Penyuluhan PKP</th>
                            <th>Tanggal Cetak PKP</th>
                            <th>Sertifikat</th>
                            <th>Cetak PIRT</th>
                            <th>Jenis Produk</th>
                            <th>Kemasan</th>
                            <th>Nomor PIRT</th>
                            <th>Masa Berlaku</th>
                            <th>Nama IRT</th>
                            <th>Merk</th>
                            <th>Pre Test</th>
                            <th>Post Test</th>
                        </tr>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($data_rekap as $row) {
                            $no++;
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $row['nama'] ?></td>
                                <td><?php echo $row['nama_pj'] ?></td>
                                <td><?php echo $row['alm_pr'] ?></td>
                                <td><?php echo $row['alm_pkp'] ?></td>
                                <td><?php echo $row['telp'] ?></td>
                                <td><?php echo $row['jenis_kelamin'] ?></td>
                                <td><?php echo date_indo($row['tgl_penyuluhan']) ?></td>
                                <td><?php echo date_indo($row['tgl_cetak']) ?></td>
                                <td><?php echo $row['sertifikat'] ?></td>
                                <td><?php echo date_indo($row['tgl_pirt']) ?></td>
                                <td><?php echo $row['produk'] ?></td>
                                <td><?php echo $row['kemasan'] ?></td>
                                <td><?php echo $row['pirt'] ?></td>
                                <td><?php echo date_indo($row['masa_pirt']) ?></td>
                                <td><?php echo $row['irt'] ?></td>
                                <td><?php echo $row['merk'] ?></td>
                                <td><?php echo $row['pre_test'] ?></td>
                                <td><?php echo $row['post_test'] ?></td>
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