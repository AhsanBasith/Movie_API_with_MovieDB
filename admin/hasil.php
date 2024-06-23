<?php include 'layouts/header.php' ?>
<?php include 'layouts/sidebar.php' ?>
<?php include '../koneksi.php';

$alternatif = "SELECT * FROM alternatif order by id_alternatif";
$result1 = mysqli_query($koneksi, $alternatif);
$kriteria = "SELECT * FROM kriteria";
$result2 = mysqli_query($koneksi, $kriteria);
$bobot = "SELECT * FROM pembobotan";
$result3 = mysqli_query($koneksi, $bobot);
$maxkriteria = "SELECT SUM(bobot) AS Total FROM kriteria";
$result4 = mysqli_query($koneksi, $maxkriteria);
$test = [];
$varV = [];
$totalS = 0;
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Hasil Penilaian</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Hasil Penilaian</li>
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
                    <h3 class="card-title">Table Penilaian</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="has-text-white">alternatif</th>
                                <?php foreach ($result2 as $header) : ?>
                                    <th class="has-text-white"><?= $header["kriteria"] ?></th>
                                <?php endforeach ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $a = 1 ?>
                            <?php foreach ($result1 as $row) : ?>
                                <tr>
                                    <td><?= $row["alternatif"] ?></td>
                                    <?php foreach ($result3 as $pembobot) : ?>
                                        <?php if ($pembobot["id_alternatif"] == $row["id_alternatif"]) : ?>
                                            <td><?= $pembobot["nilai"] ?></td>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th class="has-text-white">alternatif</th>
                                <?php foreach ($result2 as $header) : ?>
                                    <th class="has-text-white"><?= $header["kriteria"] ?></th>
                                <?php endforeach ?>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
        <div class="container-fluid">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-edit"></i>
                        Perhitungan
                    </h3>
                </div>
                <div class="card-body">

                    <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true">Nilai W</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">Nilai S</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-content-below-messages-tab" data-toggle="pill" href="#custom-content-below-messages" role="tab" aria-controls="custom-content-below-messages" aria-selected="false">Nilai V</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-content-below-settings-tab" data-toggle="pill" href="#custom-content-below-settings" role="tab" aria-controls="custom-content-below-settings" aria-selected="false">Hasil</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="custom-content-below-tabContent">
                        <div class="tab-pane fade show active" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
                            <p>Bobot Tiap Kriteria :</p>
                            <p>W = [
                                <?php foreach ($result2 as $tampildoang) : ?>
                                    <?= $tampildoang["bobot"] . "," ?>
                                <?php endforeach ?>
                                ]
                            </p>
                            <br>
                            <p>Pembobotan :</p>
                            <?php $b = 1 ?>
                            <?php foreach ($result2 as $bagibobot) : ?>
                                <?php foreach ($result4 as $TotalLah) : ?>
                                    <p>W<?= $b++ ?> =
                                        <?= $bagibobot["bobot"] . "/" . $TotalLah["Total"] ?> = <?= round($bagibobot["bobot"] / $TotalLah["Total"], 3) ?>
                                    </p>
                                <?php endforeach ?>
                            <?php endforeach ?>
                            <br>
                            <p>Normalisasi Berdasarkan Pembobotan :</p>
                            <?php $c = 1 ?>
                            <?php foreach ($result2 as $bagibobot) : ?>
                                <?php foreach ($result4 as $TotalLah) : ?>
                                    <p>W<?= $c++ ?> =
                                        <?php if ($bagibobot["status"] == "BIAYA") : ?>
                                            <?= round($bagibobot["bobot"] / $TotalLah["Total"], 3) * -1 ?></p>
                                <?php else : ?>
                                    <?= round($bagibobot["bobot"] / $TotalLah["Total"], 3) ?></p>
                                <?php endif ?>
                            <?php endforeach ?>
                        <?php endforeach ?>
                        </div>
                        <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
                            <p>Pembobotan :</p>
                            <?php $d = 1 ?>
                            <?php $e = 0 ?>
                            <?php foreach ($result1 as $altrntv) : ?>
                                <?php $idalternatif = $altrntv["id_alternatif"] ?>
                                <?php $bobot = "SELECT * FROM pembobotan WHERE id_alternatif = $idalternatif order by nilai asc";
                                $result5 = mysqli_query($koneksi, $bobot);
                                ?>
                                <?php $test[$e] = 1 ?>
                                S<?= $d++ ?> =
                                <?php foreach ($result5 as $pembobot) : ?>
                                    <?php $idbobot = $pembobot["id_kriteria"] ?>
                                    <?php $kriteria = "SELECT * FROM kriteria WHERE id_kriteria = $idbobot ";
                                    $result6 = mysqli_query($koneksi, $kriteria);
                                    ?>
                                    <?php foreach ($result6 as $bagibobot) : ?>
                                        <?php $result4 = "SELECT SUM(bobot) AS Total FROM kriteria";
                                        $result7 = mysqli_query($koneksi, $result4);
                                        ?>
                                        <?php foreach ($result7 as $TotalLah) : ?>
                                            <?php if ($bagibobot["status"] == "Biaya") : ?>
                                                (<?= $pembobot["nilai"] . "<sup>" . round($bagibobot["bobot"] / $TotalLah["Total"], 3) * -1 . "</sup>" ?>)
                                                <?php $test[$e] = $test[$e] * pow($pembobot["nilai"], round($bagibobot["bobot"] / $TotalLah["Total"], 3) * -1) ?>
                                            <?php else : ?>
                                                (<?= $pembobot["nilai"] . "<sup>" . round($bagibobot["bobot"] / $TotalLah["Total"], 3) . "</sup>" ?>)
                                                <?php $test[$e] = $test[$e] * pow($pembobot["nilai"], round($bagibobot["bobot"] / $TotalLah["Total"], 3)) ?>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    <?php endforeach ?>
                                <?php endforeach ?>
                                =
                                <?= round($test[$e], 3) ?>
                                <?php $totalS = $totalS + $test[$e] ?>
                                <?php $e++ ?>
                                <br>
                            <?php endforeach ?>
                        </div>
                        <div class="tab-pane fade" id="custom-content-below-messages" role="tabpanel" aria-labelledby="custom-content-below-messages-tab">
                            <?php $f = 1 ?>
                            <?php $g = 0 ?>
                            <?php foreach ($test as $row) : ?>
                                <p>V<?= $f++ ?> = <?= round($test[$g], 3) . "/" . round($totalS, 3) ?>
                                    = <?= round(round($test[$g], 3) / round($totalS, 3), 3) ?></p>
                                <?php $g++ ?>
                            <?php endforeach ?>
                        </div>
                        <div class="tab-pane fade" id="custom-content-below-settings" role="tabpanel" aria-labelledby="custom-content-below-settings-tab">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Kode Alternatif</th>
                                        <th>Produk</th>
                                        <th>Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $h = 1 ?>
                                    <?php $i = 0 ?>
                                    <?php $j = 0 ?>
                                    <?php foreach ($result1 as $row) : ?>
                                        <?php $varV[$j] = 1 ?>
                                        <?php $varV[$j] = $test[$i] / $totalS ?>
                                        <tr>
                                            <td><?= $row["kode_alternatif"] ?></td>
                                            <td><?= $row["alternatif"] ?></td>
                                            <td><?= round(round($test[$i], 3) / round($totalS, 3), 3) ?></td>
                                        </tr>
                                        <?php $i++ ?>
                                        <?php $j++ ?>
                                    <?php endforeach ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Kode Alternatif</th>
                                        <th>Produk</th>
                                        <th>Nilai</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.card -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include 'layouts/footer.php' ?>