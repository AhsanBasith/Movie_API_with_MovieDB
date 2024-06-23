<?php
include '../../koneksi.php';

$id_alternatif = $_POST['id_alternatif'];
$kode_alternatif = $_POST['kode_alternatif'];
$alternatif = $_POST['alternatif'];


// query SQL untuk Update data
$query = "UPDATE alternatif SET kode_alternatif='$kode_alternatif',alternatif='$alternatif'  
          WHERE id_alternatif='$id_alternatif'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header('location:../alternative.php');;
