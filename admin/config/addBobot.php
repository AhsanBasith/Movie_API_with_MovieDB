<?php
include '../../koneksi.php';

$idalternatif = $_POST['id_alternatif'];
$idkriteria = $_POST['id_kriteria'];
$nilai = $_POST['nilai'];


$query = "INSERT INTO pembobotan (id_alternatif,id_kriteria,nilai) 
          VALUES ('$idalternatif','$idkriteria','$nilai')";

$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query Error :" . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
} else {
    header('location:../pembobotan.php');;
}
