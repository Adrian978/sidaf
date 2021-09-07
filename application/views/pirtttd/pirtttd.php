<!-- Begin Page Content -->
<div class="container-fluid">

    <a href="<?= site_url('export/pirtttdexport/export') ?>" class="btn btn-success"><i class="fas fa-file-export"></i> Export</a><br><br>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">TTD PIRT</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>Alamat Produksi</th>
                            <th>Alamat KTP</th>
                            <th>Nomor Telp</th>
                            <th>No.Sertifikat PKP</th>
                            <th>Tanggal Penyuluhan</th>
                            <th>Masa Berlaku</th>
                            <th>No.PIRT</th>
                            <th>Produk</th>
                            <th>Kemasan</th>
                            <th>Merk</th>
                        </tr>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($data_pirtttd as $row) {
                            $no++;
                            $gambar = $row['berkas'];
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><img src="<?php echo $row['berkas'] ?>" width="75"></td>
                                <td><?php echo $row['nama'] ?></td>
                                <td><?php echo $row['alm_pr'] ?></td>
                                <td><?php echo $row['alm_pkp'] ?></td>
                                <td><?php echo $row['telp'] ?></td>
                                <td><?php echo $row['sertifikat'] ?></td>
                                <td><?php echo date_indo($row['tgl_penyuluhan']) ?></td>
                                <td><?php echo date_indo($row['masa_pirt']) ?></td>
                                <td><?php echo $row['pirt'] ?></td>
                                <td><?php echo $row['produk'] ?></td>
                                <td><?php echo $row['kemasan'] ?></td>
                                <td><?php echo $row['merk'] ?></td>
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