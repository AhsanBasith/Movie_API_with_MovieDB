<?php include 'layouts/header.php' ?>
<?php include 'layouts/sidebar.php' ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Alternative</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Alternative</li>
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
                    <a class="btn btn-primary" id="tombolTambahAdmin" data-toggle="modal" data-target="#tambahAlternative">Tambah Data</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr class="text-center">
                                <th>Kode Alternative</th>
                                <th>Alternative</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * from alternatif order by id_alternatif";
                            $result = mysqli_query($koneksi, $query);

                            if (!$result) {
                                die("Query Error :" . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
                            }

                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr class="text-center">
                                    <td><?php echo $row['kode_alternatif']; ?></td>
                                    <td><?php echo $row['alternatif']; ?></td>
                                    <td>
                                        <a class="btn btn-success btn-sm" id="tombolEditalternative" data-toggle="modal" data-target="#editalternative" data-ida="<?php echo $row['id_alternatif']; ?>" data-kda="<?php echo $row['kode_alternatif']; ?>" data-alternatif="<?php echo $row['alternatif']; ?>">
                                            Edit
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="config/deletealternative.php?id_alternatif=<?php echo $row['id_alternatif']; ?>">
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
                                <th>Kode Alternative</th>
                                <th>Alternative</th>
                                <!-- <th>Bagian</th> -->
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

<!-- Modal Tambah Alternative -->
<div class="modal fade" id="tambahAlternative" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="config/addAlternative.php" method="post" enctype="multipart/form-data">
                    <!-- <input type="hidden" name="id_admin" class="form-control form-control-user" id="id_admin"> -->
                    <div class="form-group">
                        <span>Kode Alternatif</span>
                        <input type="text" name="kode_alternatif" class="form-control form-control-user" id="kode_alternatif" required>
                    </div>
                    <div class="form-group">
                        <span>Alternatif</span>
                        <input type="text" name="alternatif" class="form-control form-control-user" id="alternatif" required>
                    </div>
                    <div class="modal-footer"></div>
                    <input class="btn btn-primary btn-user btn-block" type="submit" name="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal edit Alternative -->
<div class="modal fade" id="editAlternative" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="config/editAlternative.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_alternatif" class="form-control form-control-user" id="id_alternatif">
                    <div class="form-group">
                        <span>Kode Alternatif</span>
                        <input type="text" name="kode_alternatif" class="form-control form-control-user" id="kode_alternatif" required>
                    </div>
                    <div class="form-group">
                        <span>Alternatif</span>
                        <input type="text" name="alternatif" class="form-control form-control-user" id="alternatif" required>
                    </div>
                    <div class="modal-footer"></div>
                    <input class="btn btn-primary btn-user btn-block" type="submit" name="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</div>