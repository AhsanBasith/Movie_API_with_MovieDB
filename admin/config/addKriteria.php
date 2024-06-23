<?php
include '../../koneksi.php';

$kode_kriteria = $_POST['kode_kriteria'];
$kriteria = $_POST['kriteria'];
$bobot = $_POST['bobot'];
$status = $_POST['status'];

$query = "INSERT INTO kriteria (kode_kriteria,kriteria,bobot,status) 
          VALUES ('$kode_kriteria','$kriteria','$bobot','$status')";

$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query Error :" . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
} else {
    header('location:../kriteria.php');;
}
