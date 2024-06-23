<?php include 'layouts/header.php' ?>
<?php include 'layouts/sidebar.php' ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Kriteria</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Kriteria</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <a class="btn btn-primary" id="tombolTambahKriteria" data-toggle="modal" data-target="#tambahKriteria">Tambah Data</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr class="text-center">
                                <th>Kd_Kriteria</th>
                                <th>Kriteria</th>
                                <th>Bobot</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * from kriteria order by id_kriteria";
                            $result = mysqli_query($koneksi, $query);

                            if (!$result) {
                                die("Query Error :" . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
                            }

                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr class="text-center">
                                    <td><?php echo $row['kode_kriteria']; ?></td>
                                    <td><?php echo $row['kriteria']; ?></td>
                                    <td><?php echo $row['bobot']; ?></td>
                                    <td><?php echo $row['status']; ?></td>
                                    <td>
                                        <a class="btn btn-success btn-sm" id="tombolEditKriteria" data-toggle="modal" data-target="#editKriteria" data-idk="<?php echo $row['id_kriteria']; ?>" data-kdk="<?php echo $row['kode_kriteria']; ?>" data-kriteria="<?php echo $row['kriteria']; ?>" data-bobot="<?php echo $row['bobot']; ?>" data-status="<?php echo $row['status']; ?>">
                                            Edit
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="config/deleteKriteria.php?id_kriteria=<?php echo $row['id_kriteria']; ?>">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr class="text-center">
                                <th>kode Kriteria</th>
                                <th>Kriteria</th>
                                <th>Bobot</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include 'layouts/footer.php' ?>

<!-- Tambah Kriteria -->
<div class="modal fade" id="tambahKriteria" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="config/addKriteria.php" method="post" enctype="multipart/form-data">
                    <!-- <input type="hidden" name="id_admin" class="form-control form-control-user" id="id_admin"> -->
                    <div class="form-group">
                        <span>Koder Kriteria</span>
                        <input type="text" name="kode_kriteria" class="form-control form-control-user" id="kode_kriteria" required>
                    </div>
                    <div class="form-group">
                        <span>Kriteria</span>
                        <input type="text" name="kriteria" class="form-control form-control-user" id="kriteria" required>
                    </div>
                    <div class="form-group">
                        <span>Bobot</span>
                        <input type="text" name="bobot" class="form-control form-control-user" id="bobot" required>
                    </div>
                    <div class="form-group">
                        <span>Status</span>
                        <select class="form-control " name="status" id="status">
                            <option selected disabled>Pilih Satatus</option>
                            <option value="Keuntungan">Keuntungan</option>
                            <option value="Biaya">Biaya</option>
                        </select>
                    </div>

                    <div class="modal-footer"></div>
                    <input class="btn btn-primary btn-user btn-block" type="submit" name="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit Kriteria -->
<div class="modal fade" id="editKriteria" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="config/editKriteria.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_kriteria" class="form-control form-control-user" id="id_kriteria">
                    <div class="form-group">
                        <span>Koder Kriteria</span>
                        <input type="text" name="kode_kriteria" class="form-control form-control-user" id="kode_kriteria" required>
                    </div>
                    <div class="form-group">
                        <span>Kriteria</span>
                        <input type="text" name="kriteria" class="form-control form-control-user" id="kriteria" required>
                    </div>
                    <div class="form-group">
                        <span>Bobot</span>
                        <input type="text" name="bobot" class="form-control form-control-user" id="bobot" required>
                    </div>
                    <div class="form-group">
                        <span>Status</span>
                        <input type="text" name="status" class="form-control form-control-user" id="status" required>
                    </div>

                    <div class="modal-footer"></div>
                    <input class="btn btn-primary btn-user btn-block" type="submit" name="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</div>