<?php


$curl = curl_init();

curl_setopt_array($curl, [
    // CURLOPT_URL => "https://api.themoviedb.org/3/discover/movie?language=en-US&page=1&with_release_type=2|3&release_date.gte=" . date('Y-m-d') . "&release_date.lte=2024-12-31&api_key=015f74b1eb808f7f3930cb43565009b4",
    CURLOPT_URL => "https://api.themoviedb.org/3/movie/top_rated?language=en-US&page=1",
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

$response15 = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    $toprated_movie = json_decode($response15);
}
