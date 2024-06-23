<?php include 'layouts/header.php' ?>
<?php include 'layouts/sidebar.php' ?>
<?php include '../koneksi.php' ?>
<?php

$data = mysqli_query($koneksi, "SELECT * FROM pembobotan");
$banding1 = mysqli_query($koneksi, "SELECT * FROM alternatif order by id_alternatif ASC");
$banding2 = mysqli_query($koneksi, "SELECT * FROM kriteria order by id_kriteria ASC");

$alternatif = mysqli_query($koneksi, "SELECT * FROM alternatif order by id_alternatif ASC");
$kriteria = mysqli_query($koneksi, "SELECT * FROM kriteria order by id_kriteria ASC");

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pembobotan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Pembobotan</li>
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
                    <a class="btn btn-primary" id="tombolTambahPembobotan" data-toggle="modal" data-target="#tambahPembobotan">Tambah Data</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr class="text-center">
                                <!-- <th>No</th> -->
                                <th>alternatif</th>
                                <th>Kriteria</th>
                                <th>Nilai</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1  ?>
                            <?php foreach ($data as $row) : ?>
                                <tr class="text-center">
                                    <!-- <th><?= $i ?></th> -->
                                    <td>
                                        <?php foreach ($banding1 as $result) : ?>
                                            <?php if ($row["id_alternatif"] == $result["id_alternatif"]) : ?>
                                                <?= $result["alternatif"] ?>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    </td>
                                    <td>
                                        <?php foreach ($banding2 as $hasil) : ?>
                                            <?php if ($row["id_kriteria"] == $hasil["id_kriteria"]) : ?>
                                                <?= $hasil["kriteria"] ?></sub>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    </td>
                                    <td>
                                        <?php if ($row["nilai"] > 1000000) : ?>
                                            <?= "Rp " . number_format($row["nilai"], 2, ',', '.'); ?></td>
                                <?php else : ?>
                                    <?= $row["nilai"] ?>
                                <?php endif ?>
                                <td>
                                    <a class="btn btn-success btn-sm" id="tombolEditPembobotan" data-toggle="modal" data-target="#editPembobotan" data-idb="<?php echo $row['id_bobot']; ?>" data-ida="<?php echo $row['id_alternatif']; ?>" data-idk="<?php echo $row['id_kriteria']; ?>" data-nilai="<?php echo $row['nilai']; ?>">
                                        Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="config/deletePembobotan.php?id_bobot=<?php echo $row['id_bobot']; ?>">
                                        Delete
                                    </a>
                                </td>
                                </tr>
                                <?php $i++ ?>
                            <?php endforeach ?>
                        </tbody>
                        <tfoot>
                            <tr class="text-center">
                                <th>alternatif</th>
                                <th>Kriteria</th>
                                <th>Nilai</th>
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

<!-- Moda Tambah Pembobotan -->
<div class="modal fade" id="tambahPembobotan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="config/addBobot.php" method="post" enctype="multipart/form-data">
                    <!-- <input type="hidden" name="id_admin" class="form-control form-control-user" id="id_admin"> -->
                    <div class="form-group">
                        <span>alternatif</span>
                        <select class="form-control " name="id_alternatif" id="bagian">
                            <option selected disabled>Pilih alternatif</option>
                            <?php foreach ($alternatif as $row) : ?>
                                <option value="<?= $row["id_alternatif"] ?>"><?= $row["alternatif"] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <span>Kriteria</span>
                        <select class="form-control " name="id_kriteria" id="id_kriteria">
                            <option selected disabled>Pilih Kriteria</option>
                            <?php foreach ($kriteria as $row) : ?>
                                <option value="<?= $row["id_kriteria"] ?>"><?= $row["kriteria"] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <span>Nilai</span>
                        <input type="text" name="nilai" class="form-control form-control-user" id="nilai" required>
                    </div>
                    <div class="modal-footer"></div>
                    <input class="btn btn-primary btn-user btn-block" type="submit" name="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit Pembobotan -->
<div class="modal fade" id="editPembobotan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="config/editPembobotan.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_bobot" class="form-control form-control-user" id="id_bobot">
                    <div class="form-group">
                        <span>alternatif</span>
                        <select class="form-control " name="id_alternatif" id="bagian">
                            <!-- <option selected disabled>Pilih alternatif</option> -->
                            <?php foreach ($alternatif as $row) : ?>
                                <option value="<?= $row["id_alternatif"] ?>"><?= $row["alternatif"] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <span>Kriteria</span>
                        <select class="form-control " name="id_kriteria" id="id_kriteria">
                            <!-- <option selected disabled>Pilih Kriteria</option> -->
                            <?php foreach ($kriteria as $row) : ?>
                                <option value="<?= $row["id_kriteria"] ?>"><?= $row["kriteria"] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <span>Nilai</span>
                        <input type="text" name="nilai" class="form-control form-control-user" id="nilai" required>
                    </div>
                    <div class="modal-footer"></div>
                    <input class="btn btn-primary btn-user btn-block" type="submit" name="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</div>