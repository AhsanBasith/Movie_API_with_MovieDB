<?php
include '../../koneksi.php';

$kode_alternatif = $_POST['kode_alternatif'];
$alternatif = $_POST['alternatif'];

$query = "INSERT INTO alternatif (kode_alternatif,alternatif) 
          VALUES ('$kode_alternatif','$alternatif')";

$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query Error :" . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
} else {
    header('location:../alternative.php');;
}
