<?php
include '../../koneksi.php';


$id_bobot = $_GET['id_bobot'];


$query = "DELETE from pembobotan where id_bobot = '$id_bobot' ";

$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query Error :" . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
} else {
    header('location:../pembobotan.php');;
}
