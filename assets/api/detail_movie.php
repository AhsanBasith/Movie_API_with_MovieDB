<?php


$sumber = "https://api.themoviedb.org/3/movie/popular?api_key=015f74b1eb808f7f3930cb43565009b4";
$konten = file_get_contents($sumber);
$data = json_decode($konten, true);
// var_dump($konten);
