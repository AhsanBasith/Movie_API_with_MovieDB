<?php
$id_movie = $_GET['id'];
include 'assets/api/movie_id.php';
include 'assets/api/movie_video_id.php';
include 'assets/api/review_movie_id.php';
include 'assets/api/image_movie_id.php';
include 'assets/api/movie_cast.php';
include 'assets/api/similar_movie.php';

include 'templates/header.php';
?>

<div class="content-wrapper">
    <section class="content">
        <?php
        if (isset($_GET['id'])) {
            $id_movie = $_GET['id'];
            $poster_img  = $movie_id->poster_path;
            if (
                empty($poster_img) && is_null($poster_img)
            ) {
                $poster_img =  dirname($_SERVER['PHP_SELF']) . '/assets/img/no-gambar.jpg';
            } else {
                $poster_img = 'http://image.tmdb.org/t/p/w300' . $poster_img;
            }

        ?>
            <section class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6 mt-3">
                            <h1><?= $movie_id->title ?></h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <div class="container">
                <div class="row">
                    <div class="col-md-4">

                        <!-- Movie Image -->

                        <div class="card card-primary card-outline">
                            <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">

                                <div class="card-body box-profile">
                                    <img src="<?= $poster_img ?>" class="card-img-top" alt="Photo">
                                </div>
                            </div>
                        </div>
                        <!-- About Me Box -->
                        <div class="card card-outline card-primary">
                            <div class="card-header">
                                <h3 class="card-title">About Film</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <!-- Judul -->
                                <strong><i class="fas fa-book mr-1"></i> Original Title</strong>

                                <p class="text-muted">
                                    <?= $movie_id->original_title ?>
                                </p>

                                <hr>
                                <!-- Status -->
                                <strong><i class="fas fa-map-marker-alt mr-1"></i> Status</strong>

                                <p class="text-muted"><?= $movie_id->status ?></p>

                                <hr>
                                <!-- Popularity -->
                                <strong><i class="fas fa-map-marker-alt mr-1"></i> Popularity</strong>

                                <p class="text-muted"><?= $format_number = number_format($movie_id->popularity) ?></p>

                                <hr>
                                <!-- Production Countries -->
                                <strong><i class="fas fa-map-marker-alt mr-1"></i> Production Countries</strong>

                                <p class="text-muted">
                                    <?php
                                    foreach ($movie_id->production_countries as $pco) {
                                        echo $pco->name . "&nbsp;&nbsp;";
                                    }
                                    ?>
                                </p>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-8">
                        <div class="card card-primary card-outline">
                            <div class="card-header p-2">
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link active" href="#overview" data-toggle="tab">Overview</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#review" data-toggle="tab">Review</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#video" data-toggle="tab">Video</a></li>
                                </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="active tab-pane" id="overview">
                                        <h1 class="font-weight-bold">
                                            <?= $movie_id->title ?>(<?= date("Y", strtotime($movie_id->release_date)) ?>)
                                        </h1>

                                        <p class="text-muted">
                                            <?php
                                            foreach ($movie_id->genres as $g) {
                                                echo '<span class="badge badge-primary">' . $g->name . '</span> ';
                                            }
                                            ?></p>
                                        <h5 class="text-muted font-italic">~ <?= $movie_id->tagline; ?> ~</h5>
                                        <h2>Overview</h2>
                                        <p>
                                            <?= $movie_id->overview ?>
                                        </p>
                                        <h2>Top Billed Cast</h2>
                                        <div class="swiper mySliderCast">
                                            <div class="swiper-wrapper">
                                                <?php
                                                foreach ($movie_cast->cast as $c) {
                                                    $profile  = $c->profile_path;
                                                    if (
                                                        empty($profile) && is_null($profile)
                                                    ) {
                                                        $profile =  dirname($_SERVER['PHP_SELF']) . '/assets/img/no-gambar.jpg';
                                                    } else {
                                                        $profile = 'http://image.tmdb.org/t/p/w300' . $profile;
                                                    }
                                                ?>
                                                    <div class="swiper-slide">
                                                        <div class="card ml-2 card-primary card-outline">
                                                            <img src="<?= $profile ?>" class="card-img-top" alt="Photo" style="height: 200px;">

                                                        </div>
                                                        <div class="mb-3">
                                                            <p class="card-text font-weight-bold ml-2"><?= $c->name ?></p>
                                                            <p class="font-italic ml-2"><?= $c->character ?></p>
                                                        </div>

                                                    </div>
                                                <?php } ?>
                                            </div>
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                            <div class="swiper-scrollbar"></div>
                                        </div>
                                        <!-- ./Swiper Cast -->

                                    </div>
                                    <!-- /.tab-pane -->
                                    <div class="tab-pane" id="review">
                                        <?php
                                        foreach ($review_movie_id->results as $r) {
                                            echo ' <div class="card p-3">
                                            
                                                <div class="user-block mb-2">
                                                    <img class="img-circle img-bordered-sm" src="assets/img/avatar5.png" alt="user image">
                                                    <span class="username">
                                                        <a href="#">' . $r->author . '.</a>
                                                    </span>
                                                    <span class="description">Written on ' . date("F j, Y", strtotime($movie_id->release_date)) . '</span>
                                                </div>
                                              
                                                <div class="timeline-body">
                                                    ' . $r->content . '
                                                </div>
                                            
                                        </div>';
                                        }
                                        ?>

                                    </div>
                                    <!-- /.tab-pane -->
                                    <div class="tab-pane" id="video">
                                        <?php

                                        foreach ($movie_video_id->results as $v) {
                                            echo '
                                                <div class="embed-responsive embed-responsive-16by9 mb-2">
                                                    <iframe class="embed-responsive-item" src="' . "https://www.youtube.com/embed/" . $v->key . '" frameborder="0" allowfullscreen></iframe>
                                                </div>
                                                ';
                                        }
                                        ?>

                                    </div>

                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h1 class="card-title">Similar Movie</h1>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <?php
                            $count = 4;
                            $output = "";
                            foreach ($similar_movie->results as $sim) {
                                $poster  = $sim->poster_path;
                                if (
                                    empty($poster) && is_null($poster)
                                ) {
                                    $poster =  dirname($_SERVER['PHP_SELF']) . '/assets/img/no-gambar.jpg';
                                } else {
                                    $poster = 'http://image.tmdb.org/t/p/w300' . $poster;
                                }
                                $output .= '
                            
                                <div class="col-lg-3"> 
                                    <div class="card">
                                        <img src="' . $poster . '" class="card-img-top" alt="Photo" style="height: 400px;">
                                        <div class="text-card overlay position-absolute top-0 bottom-0 left-0 right-0 w-100 h-100">
                                            <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                                                    <h5>
                                                        ' . $sim->title . '
                                                    </h5>                                            
                                                <a href="movie.php?id=' . $sim->id . '" class="btn btn-primary">Lihat Film</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                            ';
                                if ($count <= 0) {
                                    break;
                                    $count--;
                                }
                            }
                            echo $output;
                            ?>
                        </div>
                    </div>
                </div>
            </div><!-- /.container -->
        <?php
        } else {
            echo '
            <div class="card card-outline card-danger">
                <div class="card-body">
                    <h5>Movie tidak ditemukan.</h5>
                 </div>
            </div>
            ';
        }
        ?>
    </section>
    <!-- /.content -->



    <?php include 'templates/footer.php' ?>