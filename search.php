<?php

$input = $_GET['search'];
$search = $input;

include 'assets/api/search_api.php';
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
                    <h1 class="display-4 font-weight-bold">Search.</h1>
                    <p class="lead">Explore Millions of movies to discover. Search now.</p>
                    <form action="" method="get">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control form-control-lg text-secondary" value="<?php echo $input ?>">
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
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Search Result :
                                <?php echo $input ?>
                            </h3>
                        </div>
                        <div class="card-body">

                            <?php
                            foreach ($search_movie->results as $s) {
                                $title         = $s->title;
                                $overview = $s->overview;
                                $id         = $s->id;
                                $release    = $s->release_date;
                                if (!empty($release) && !is_null($release)) {
                                    $tempyear     = explode("-", $release);
                                    $year         = $tempyear[0];
                                    if (!is_null($year)) {
                                        $title = $title . ' (' . $year . ')';
                                    }
                                }
                                $backdrop     = $s->backdrop_path;
                                if (empty($backdrop) && is_null($backdrop)) {
                                    $backdrop =  dirname($_SERVER['PHP_SELF']) . '/assets/img/no-gambar.jpg';
                                } else {
                                    $backdrop = 'http://image.tmdb.org/t/p/w300' . $backdrop;
                                }
                                echo '<div class="list-group">
                                         <div class="list-group-item">
                                             <div class="row">
                                                <div class="col-auto">
                                                     <img class="img-fluid" src="' . $backdrop . '" alt="Photo" style="height: 100px;width:150px;">
                                                 </div>
                                                 <div class="col px-4">
                                                        <div>
                                                            <div class="float-right">' . $release . '</div>
                                                <a href="movie.php?id=' . $id . '"><h3 class="text-dark">' . $title . '</h3></a>
                                                <p class="mb-0">' . $overview . '.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>';
                            }
                            ?>

                            <!-- <div class="list-group">
                                <div class="list-group-item">
                                    <div class="row">
                                        <div class="col-auto">
                                            <img class="img-fluid" src="../../dist/img/photo1.png" alt="Photo" style="max-height: 160px;">
                                        </div>
                                        <div class="col px-4">
                                            <div>
                                                <div class="float-right">2021-04-20 10:14pm</div>
                                                <h3>Lorem ipsum dolor sit amet</h3>
                                                <p class="mb-0">consectetuer adipiscing elit. Aenean commodo ligula eget
                                                    dolor. Aenean massa. Cum
                                                    sociis natoque penatibus et magnis dis parturient montes, nascetur
                                                    ridiculus mus.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div> -->
                        </div>
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