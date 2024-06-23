<?php

$curl1 = curl_init();

curl_setopt_array($curl1, [
    CURLOPT_URL => "https://api.themoviedb.org/3/trending/movie/day?language=en-US",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
        "Authorization: Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIwMTVmNzRiMWViODA4ZjdmMzkzMGNiNDM1NjUwMDliNCIsInN1YiI6IjY2NmEzOTY2YWJmYWY2MjEzNGVhNDJiNSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.UInepGwmrQm0hx4eddK3k3bW6vBkdMec4k93A4FtbLc",
        "accept: application/json"
    ],
]);

$response11 = curl_exec($curl1);
$err = curl_error($curl1);

curl_close($curl1);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    $trending_day = json_decode($response11);
}

// Trending WEEK//
$curl2 = curl_init();

curl_setopt_array($curl2, [
    CURLOPT_URL => "https://api.themoviedb.org/3/trending/movie/week?language=en-US&api_key=015f74b1eb808f7f3930cb43565009b4",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
        "Authorization: Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIwMTVmNzRiMWViODA4ZjdmMzkzMGNiNDM1NjUwMDliNCIsInN1YiI6IjY2NmEzOTY2YWJmYWY2MjEzNGVhNDJiNSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.UInepGwmrQm0hx4eddK3k3bW6vBkdMec4k93A4FtbLc",
        "accept: application/json"
    ],
]);

$response12 = curl_exec($curl2);
$err = curl_error($curl2);

curl_close($curl2);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    $trending_week = json_decode($response12);
}
