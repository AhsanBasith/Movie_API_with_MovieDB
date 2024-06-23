<?php
include 'assets/api/movie_populer.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Top Navigation</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="assets/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/adminlte/dist/css/adminlte.min.css">
    <!-- <link rel="stylesheet" href="assets/adminlte/dist/css/style.css"> -->
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/swiper@11.1.4/swiper-bundle.min.css" rel="stylesheet">
</head>

<body class="hold-transition layout-top-nav bg-light">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white fixed-top bg-light shadow">
            <div class="container">
                <a href="assets/adminlte/index3.html" class="navbar-brand">
                    <img src="assets/img/logo.png" alt="AdminLTE Logo" class="brand-image">
                    <!-- <span class="brand-text font-weight-light">MovieDB</span> -->
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="index3.html" class="nav-link">Movie</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">TV Show</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">More</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="#" class="dropdown-item">Some action </a></li>
                                <li><a href="#" class="dropdown-item">Some other action</a></li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                        <li class="nav-item">
                            <a href="index3.html" class="btn btn-danger ">
                                Login
                            </a>

                        </li>
                    </ul>
                </div>

                <!-- Right navbar links -->

            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container p-5">
                    <h1 class="mt-5 fw-bold text-danger text-center">
                        Welcome.
                    </h1>
                    <h5 class="text-center">
                        Millions of movies, TV shows and people to discover. Explore now.
                    </h5>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Slider -->
            <div class="container">
                <div class="trending-wrap">
                    <img src="assets/img/back.png" id="backBtn">

                    <div class="trending">
                        <div>
                            <a><img src="assets/img/hitman.jpg" alt=""></a>
                            <a><img src="assets/img/underparis.jpg" alt=""></a>
                            <a><img src="assets/img/badboys.jpg" alt=""></a>
                            <a><img src="assets/img/acilyte.jpg" alt=""></a>
                        </div>
                        <div>
                            <a><img src="assets/img/thestranger.jpg" alt=""></a>
                            <a><img src="assets/img/godzilaxkong.jpg" alt=""></a>
                            <a><img src="assets/img/thefallguy.jpg" alt=""></a>
                            <a><img src="assets/img/civilwar.jpg" alt=""></a>
                        </div>
                    </div>
                    <img src="assets/img/next.png" id="nextBtn">
                </div>
            </div>

            <section class="Pembatas mt-5 mb-5">
                <div class="container-fuild bg-danger">
                    <div class="row p-5">

                        <div class="col-md-12">
                            <div class="text-center">
                                <h3>Pupuler List</h3>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <div class=" content">
                <div class="container">
                    <div class="row">
                        <?php
                        foreach ($data['results'] as $row) {


                        ?>
                            <div class="col-lg-3">
                                <div class="card">
                                    <a href=""><img src="https://image.tmdb.org/t/p/original/<?= $row['poster_path'] ?>" class="card-img-top" alt="..."></a>
                                    <div class="text-card overlay position-absolute top-0 bottom-0 left-0 right-0 w-100 h-100">
                                        <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                                            <h5><?= $row['title'] ?></h5>
                                            <span><?= $row['vote_average'] ?></span>
                                            <h6>Action</h6>
                                            <a href="" class="btn btn-danger">Lihat Film</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer bg-dark">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All
            rights
            reserved.
        </footer>

    </div>





    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="assets/adminlte/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/adminlte/dist/js/adminlte.min.js"></script>

    <script>
        let scrollContainer = document.querySelector(".trending");
        let backBtn = document.getElementById("backBtn");
        let nextBtn = document.getElementById("nextBtn");

        scrollContainer.addEventListener("wheel", (evt) => {
            evt.preventDefault();
            scrollContainer.scrollLeft += evt.deltaY;
            scrollContainer.style.scrollBehavior = "auto";
        });

        nextBtn.addEventListener("click", () => {
            scrollContainer.style.scrollBehavior = "smooth";
            scrollContainer.scrollLeft += 900;
        });
        backBtn.addEventListener("click", () => {
            scrollContainer.style.scrollBehavior = "smooth";
            scrollContainer.scrollLeft -= 900;
        });
    </script>



</body>

</html>