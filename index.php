<?php
include 'assets/api/now_playing_movie.php';
include 'assets/api/movie_video.php';
include 'assets/api/movie_trending.php';
include 'assets/api/movie_populer.php';


include 'templates/header.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container mb-3">
            <!-- Jumbotron -->
            <div class="jumbotron jumbotron-fluid bg-white shadow"
                style="background-image: url('https://img.freepik.com/free-vector/organic-white-backgroun_1199-324.jpg?w=740&t=st=1719008262~exp=1719008862~hmac=74a1abe47fc07f618d8aeea761ceb19e77fd65794492281bd6715ebc2b9f53bb');">
                <div class="container text-center">
                    <h1 class="display-4 font-weight-bold">Welcome.</h1>
                    <p class="lead mb-5">Millions of movies to discover. Explore now.</p>
                    <form action="search.php" method="get">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control form-control-lg rounded"
                                placeholder="Type your keywords here">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-lg btn-default">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Jumbotron -->
        </div>

        <!-- /.container -->

    </div>
    <!-- /.content-header -->


    <!-- Pembatas -->
    <!-- <div class="content">
        <section class="Pembatas mb-5">
            <div class="container-fuild bg-danger">
                <div class="row p-5">

                    <div class="col-md-12">
                        <div class="text-center">
                            <h3>Populer Movies</h3>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div> -->
    <!-- ./Pembatas -->
    <!-- Trending -->
    <div class="container">
        <div class="card">
            <!-- Trending -->
            <div class="content">
                <!-- Slider Trailer -->
                <div class="container" id="NowPlaying">


                    <div class="card-header">
                        <h3>Trending</h3>

                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#today" data-toggle="tab">Today</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#thisweek" data-toggle="tab">This Week</a>
                            </li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="today">
                                <div class="swiper mySwiper mb-5">
                                    <div class="swiper-wrapper">
                                        <?php
                                        foreach ($trending_day->results as $np) {
        
        
                                        ?>
                                        <div class="swiper-slide">
                                            <div class="card ml-2">
                                                <img src="https://image.tmdb.org/t/p/original/<?= $np->poster_path ?>"
                                                    class="card-img-top rounded-lg" alt="...">
                                                <div
                                                    class="text-card overlay position-absolute top-0 bottom-0 left-0 right-0 w-100 h-100">
                                                    <div
                                                        class="position-absolute top-50 start-50 translate-middle text-center w-100">
                                                        <h5>
                                                            <?= $np->title ?>
                                                        </h5>
                                                        <span class="badge badge-dark">
                                                            <?= date('d F Y', strtotime($np->release_date)); ?>
                                                        </span>
                                                        <h6>
                                                            <?= $np->adult ?>
                                                        </h6>
                                                        <a href="movie.php?id=<?= $np->id ?>"
                                                            class="btn btn-primary">Lihat
                                                            Film</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-scrollbar"></div>

                                </div>


                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="thisweek">
                                <div class="swiper mySwiper mb-5">
                                    <div class="swiper-wrapper">
                                        <?php
                                        foreach ($trending_week->results as $np) {
        
        
                                        ?>
                                        <div class="swiper-slide">
                                            <div class="card ml-2">
                                                <img src="https://image.tmdb.org/t/p/original/<?= $np->poster_path ?>"
                                                    class="card-img-top rounded-lg" alt="...">
                                                <div
                                                    class="text-card overlay position-absolute top-0 bottom-0 left-0 right-0 w-100 h-100">
                                                    <div
                                                        class="position-absolute top-50 start-50 translate-middle text-center w-100">
                                                        <h5>
                                                            <?= $np->title ?>
                                                        </h5>
                                                        <span class="badge badge-dark">
                                                            <?= date('d F Y', strtotime($np->release_date)); ?>
                                                        </span>
                                                        <h6>
                                                            <?= $np->adult ?>
                                                        </h6>
                                                        <a href="movie.php?id=<?= $np->id ?>"
                                                            class="btn btn-primary">Lihat
                                                            Film</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-scrollbar"></div>

                                </div>

                            </div>


                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->

                </div>
            </div>
        </div>
    </div>

    <!-- Trailer -->
    <div class="content">
        <div class="container">
            <div class="card p-3"
                style="background-image: url('https://img.freepik.com/free-vector/organic-white-backgroun_1199-324.jpg?w=740&t=st=1719008262~exp=1719008862~hmac=74a1abe47fc07f618d8aeea761ceb19e77fd65794492281bd6715ebc2b9f53bb');">
                <div class="container-fuild ">

                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h3>Latest Trailers</h3>
                        </div>
                    </div>
                    <div class="swiper mySlider">
                        <div class="swiper-wrapper">
                            <?php
                            foreach ($movie_video->results as $v) {


                            ?>
                            <div class="swiper-slide">
                                <div class="card ml-3">
                                    <img src="https://image.tmdb.org/t/p/original/<?= $v->backdrop_path ?>"
                                        class="card-img-top rounded-lg" alt="...">
                                    <div
                                        class="text-card overlay position-absolute top-0 bottom-0 left-0 right-0 w-100 h-100">
                                        <div
                                            class="position-absolute top-50 start-50 translate-middle text-center w-100">
                                            <button type="button" class="btn btn-dark" data-toggle="modal"
                                                data-target="#staticBackdrop"><i class="fas fa-play"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <a href="movie.php?id=<?= $v->id ?>">
                                        <p class="text-dark font-weight-bold text-center">
                                            <?= $v->title ?>
                                        </p>
                                    </a>
                                </div>
                            </div>
                            <?php } ?>

                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-scrollbar"></div>

                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9 mb-2">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/xSeavZfiO0s"
                                    frameborder="0" allowfullscreen>
                                </iframe>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Now Playing and Populer -->
    <div class="container">
        <div class="card">
            <div class="content">
                <!-- Slider Trailer -->
                <div class="container p-3" id="NowPlaying">

                    <div class="row">
                        <div class="col-sm-6 ml-2">
                            <h3>Now Playing</h3>
                        </div>
                        <!-- <div class="col-sm-6">
                        <ol class="float-sm-right">
                            <a href="" class="btn btn-primary">See All</a>
    
                        </ol>
                    </div> -->
                    </div>


                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <?php
                        foreach ($now_playing_movie->results as $np) {
    
    
                        ?>
                            <div class="swiper-slide">
                                <div class="card ml-2">
                                    <img src="https://image.tmdb.org/t/p/original/<?= $np->poster_path ?>"
                                        class="card-img-top rounded-lg" alt="...">
                                    <div
                                        class="text-card overlay position-absolute top-0 bottom-0 left-0 right-0 w-100 h-100">
                                        <div
                                            class="position-absolute top-50 start-50 translate-middle text-center w-100">
                                            <h5>
                                                <?= $np->title ?>
                                            </h5>
                                            <span class="badge badge-dark">
                                                <?= date('d F Y', strtotime($np->release_date)); ?>
                                            </span>
                                            <h6>
                                                <?= $np->adult ?>
                                            </h6>
                                            <a href="movie.php?id=<?= $np->id ?>" class="btn btn-primary">Lihat Film</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-scrollbar"></div>

                    </div>
                </div>
            </div>
            <!-- Populer -->
            <div class="content">
                <!-- Slider -->
                <div class="container p-3" id="populer">

                    <div class="row">
                        <div class="col-sm-6 ml-2">
                            <h3>Populer</h3>
                        </div>
                        <!-- <div class="col-sm-6">
                        <ol class="float-sm-right">
                            <a href="" class="btn btn-primary">See All</a>
    
                        </ol>
                    </div> -->
                    </div>


                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <?php
                        foreach ($movie_populer->results as $p) {
    
    
                        ?>
                            <div class="swiper-slide">
                                <div class="card ml-2">
                                    <img src="https://image.tmdb.org/t/p/original/<?= $p->poster_path ?>"
                                        class="card-img-top rounded-lg" alt="...">
                                    <div
                                        class="text-card overlay position-absolute top-0 bottom-0 left-0 right-0 w-100 h-100">
                                        <div
                                            class="position-absolute top-50 start-50 translate-middle text-center w-100">
                                            <h5>
                                                <?= $p->title?>
                                            </h5>
                                            <span class="badge badge-dark">
                                                <?= date('d F Y', strtotime($p->release_date)); ?>
                                            </span>
                                            <h6>
                                                <?= $p->adult ?>
                                            </h6>
                                            <a href="movie.php?id=<?= $p->id ?>" class="btn btn-primary">Lihat
                                                Film</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-scrollbar"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Pembatas -->
    <!-- <div class="content">
        <section class="mb-5">
            <div class="container-fuild bg-primary">
                <div class="row p-5">

                    <div class="col-md-12">
                        <div class="text-center">
                            <h3>Populer Movies</h3>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div> -->



    <!-- Konten -->

    <!-- /.content -->



    <!-- ./content wrapper -->


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <?php include 'templates/footer.php' ?>