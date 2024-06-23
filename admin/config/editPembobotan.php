<?php
include '../../koneksi.php';

$id_bobot = $_POST['id_bobot'];
$id_alternatif = $_POST['id_alternatif'];
$id_kriteria = $_POST['id_kriteria'];
$nilai = $_POST['nilai'];

// query SQL untuk Update data
$query = "UPDATE pembobotan SET id_alternatif='$id_alternatif',id_kriteria='$id_kriteria',nilai='$nilai' 
          WHERE id_bobot='$id_bobot'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header('location:../pembobotan.php');;
