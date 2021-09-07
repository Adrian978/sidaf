<!-- Begin Page Content -->
<div class="container-fluid">

    <?php if ($this->session->flashdata('success')) { ?>
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php } else if ($this->session->flashdata('error')) { ?>
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
        </div>
    <?php } else if ($this->session->flashdata('warning')) { ?>
        <div class="alert alert-warning">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Warning!</strong> <?php echo $this->session->flashdata('warning'); ?>
        </div>
    <?php } else if ($this->session->flashdata('info')) { ?>
        <div class="alert alert-info">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Info!</strong> <?php echo $this->session->flashdata('info'); ?>
        </div>
    <?php } ?>

    <div class="col-md-12">
        <a href="<?php echo base_url('admin/admin/tambah_user'); ?>">
            <button type="button" class="btn btn-primary">Tambah Data</button> <br><br>
        </a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Level</th>
                            <th>
                                <center>Aksi</center>
                            </th>
                        </tr>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($data_admin as $row) {
                            $no++;
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $row['nama'] ?></td>
                                <td><?php echo $row['username'] ?></td>
                                <td><?php echo $row['password'] ?></td>
                                <td><?php echo $row['level'] ?></td>
                                <td>
                                    <center>
                                        <a class="btn btn-primary btn-sm" href="<?php echo base_url(''); ?>admin/admin/edit_user/<?php echo $row['id']; ?>">
                                            <i class="fas fa-edit"></i> edit
                                        </a>
                                        <a href="<?php echo base_url(''); ?>admin/admin/hapus_user/<?php echo $row['id']; ?>" onclick="return confirm('Apakah anda ingin menghapus data ?')" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i> hapus
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