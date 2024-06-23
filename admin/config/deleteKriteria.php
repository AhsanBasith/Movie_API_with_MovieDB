<?php
include '../../koneksi.php';


$id_kriteria = $_GET['id_kriteria'];


$query = "DELETE from kriteria where id_kriteria = '$id_kriteria' ";

$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query Error :" . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
} else {
    header('location:../kriteria.php');;
}
