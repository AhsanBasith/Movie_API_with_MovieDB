<?php

include 'assets/api/movie_populer.php';

include 'templates/header.php';

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <!-- Jumbotron -->
            <div class="jumbotron jumbotron-fluid bg-white shadow" style="background-image: url('https://img.freepik.com/free-vector/organic-white-backgroun_1199-324.jpg?w=740&t=st=1719008262~exp=1719008862~hmac=74a1abe47fc07f618d8aeea761ceb19e77fd65794492281bd6715ebc2b9f53bb');">
                <div class="container">
                    <h1 class="display-4 font-weight-bold">Populer Movie.</h1>
                    <p class="lead mb-3">Explore Millions of movies to discover.</p>
                    <form action="search.php" method="get">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control form-control-lg rounded" placeholder="Type your keywords here">
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

    <!-- Konten -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Search Results</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <ul class="nav nav-pills flex-column">
                                <li class="nav-item active">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-film"></i> Movies
                                        <span class="badge bg-secondary float-right">20</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-user"></i> People
                                        <span class="badge bg-secondary float-right">0</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-file-alt"></i> Keywords
                                        <span class="badge bg-secondary float-right">0</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-network-wired"></i> Networks
                                        <span class="badge bg-secondary float-right">0</span> </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-building"></i> Company
                                        <span class="badge bg-secondary float-right">0</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <?php
                        foreach ($movie_populer->results as $p) {
                        ?>
                            <div class="col-md-4 col-lg-3 col-sm-4">
                                <div class="card ml-2">
                                    <img src="https://image.tmdb.org/t/p/original/<?= $p->poster_path ?>" class="card-img-top rounded-lg" alt="...">
                                    <div class="text-card overlay position-absolute top-0 bottom-0 left-0 right-0 w-100 h-100">
                                        <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                                            <h5>
                                                <?= $p->title ?>
                                            </h5>
                                            <span class="badge badge-dark">
                                                <?= date('d F Y', strtotime($p->release_date)); ?>
                                            </span>
                                            <h6>
                                                <?= $p->adult ?>
                                            </h6>
                                            <a href="movie.php?id=<?= $p->id ?>" class="btn btn-primary">Lihat Film</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>


                </div>


            </div>
        </div>
        <!-- /.content -->


    </div>
    <!-- ./content wrapper -->


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <?php include 'templates/footer.php' ?>