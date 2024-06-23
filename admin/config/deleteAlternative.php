<?php
include '../../koneksi.php';


$id_alternatif = $_GET['id_alternatif'];


$query = "DELETE from alternatif where id_alternatif = '$id_alternatif' ";

$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query Error :" . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
} else {
    header('location:../alternative.php');;
}
