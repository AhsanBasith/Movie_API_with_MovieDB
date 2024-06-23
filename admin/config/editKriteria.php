<?php
include '../../koneksi.php';

$id_kriteria = $_POST['id_kriteria'];
$kode_kriteria = $_POST['kode_kriteria'];
$kriteria = $_POST['kriteria'];
$bobot = $_POST['bobot'];
$status = $_POST['status'];


// query SQL untuk Update data
$query = "UPDATE kriteria SET kode_kriteria='$kode_kriteria',kriteria='$kriteria',bobot='$bobot',status='$status'
          WHERE id_kriteria='$id_kriteria'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header('location:../kriteria.php');;
