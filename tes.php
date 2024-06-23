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
    <link rel="stylesheet" href="assets/adminlte/dist/css/style.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style_tes.css">
    <!-- Swiper JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

    <!-- <link href="https://cdn.jsdelivr.net/npm/swiper@11.1.4/swiper-bundle.min.css" rel="stylesheet"> -->
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white fixed-top shadow">
            <div class="container">
                <a href="" class="navbar-brand">
                    <img src="assets/img/logo.png" alt="AdminLTE Logo" class="brand-image " style="opacity: .8">
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="index3.html" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contact</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="#" class="dropdown-item">Some action </a></li>
                                <li><a href="#" class="dropdown-item">Some other action</a></li>

                                <li class="dropdown-divider"></li>

                                <!-- Level two dropdown-->
                                <li class="dropdown-submenu dropdown-hover">
                                    <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Hover for action</a>
                                    <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                                        <li>
                                            <a tabindex="-1" href="#" class="dropdown-item">level 2</a>
                                        </li>

                                        <!-- Level three dropdown-->
                                        <li class="dropdown-submenu">
                                            <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                                            <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                                                <li><a href="#" class="dropdown-item">3rd level</a></li>
                                                <li><a href="#" class="dropdown-item">3rd level</a></li>
                                            </ul>
                                        </li>
                                        <!-- End Level three -->

                                        <li><a href="#" class="dropdown-item">level 2</a></li>
                                        <li><a href="#" class="dropdown-item">level 2</a></li>
                                    </ul>
                                </li>
                                <!-- End Level two -->
                            </ul>
                        </li>
                    </ul>

                </div>
        </nav>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container p-3">
                    <h1 class="mt-5 fw-bold text-danger text-center">
                        Welcome.
                    </h1>
                    <h5 class="text-center">
                        Millions of movies, TV shows and people to discover. Explore now.
                    </h5>
                </div>
                <div class="container">

                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card">
                                    <a href=""><img src="assets/img/acilyte.jpg" class="card-img-top" alt="..."></a>
                                    <div class="text-card overlay position-absolute top-0 bottom-0 left-0 right-0 w-100 h-100">
                                        <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                                            <h5>
                                                Judul
                                            </h5>
                                            <span>
                                                Genre
                                            </span>
                                            <h6>Action</h6>
                                            <a href="" class="btn btn-danger">Lihat Film</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <a href=""><img src="assets/img/badboys.jpg" class="card-img-top" alt="..."></a>
                                    <div class="text-card overlay position-absolute top-0 bottom-0 left-0 right-0 w-100 h-100">
                                        <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                                            <h5>
                                                Judul
                                            </h5>
                                            <span>
                                                Genre
                                            </span>
                                            <h6>Action</h6>
                                            <a href="" class="btn btn-danger">Lihat Film</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <a href=""><img src="assets/img/hitman.jpg" class="card-img-top" alt="..."></a>
                                    <div class="text-card overlay position-absolute top-0 bottom-0 left-0 right-0 w-100 h-100">
                                        <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                                            <h5>
                                                Judul
                                            </h5>
                                            <span>
                                                Genre
                                            </span>
                                            <h6>Action</h6>
                                            <a href="" class="btn btn-danger">Lihat Film</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <a href=""><img src="assets/img/acilyte.jpg" class="card-img-top" alt="..."></a>
                                    <div class="text-card overlay position-absolute top-0 bottom-0 left-0 right-0 w-100 h-100">
                                        <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                                            <h5>
                                                Judul
                                            </h5>
                                            <span>
                                                Genre
                                            </span>
                                            <h6>Action</h6>
                                            <a href="" class="btn btn-danger">Lihat Film</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <a href=""><img src="assets/img/hitman.jpg" class="card-img-top" alt="..."></a>
                                    <div class="text-card overlay position-absolute top-0 bottom-0 left-0 right-0 w-100 h-100">
                                        <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                                            <h5>
                                                Judul
                                            </h5>
                                            <span>
                                                Genre
                                            </span>
                                            <h6>Action</h6>
                                            <a href="" class="btn btn-danger">Lihat Film</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>
            </div>
            <!-- /.content-header -->

            <!--  -->
            <div class=" content">
                <section class="Pembatas mt-5 mb-5">
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
            </div>

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
                                            <h5>
                                                <?= $row['title'] ?>
                                            </h5>
                                            <span>
                                                <?= $row['vote_average'] ?>
                                            </span>
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
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="assets/adminlte/"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- AdminLTE App -->
    <script src="assets/adminlte/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="assets/adminlte/dist/js/demo.js"></script>
    <!-- Swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            centeredSlides: false,
            slidesPerGroupSkip: 1,
            grabCursor: true,
            keyboard: {
                enabled: true,
            },
            breakpoints: {
                769: {
                    slidesPerView: 4,
                    slidesPerGroup: 4,
                },
            },
            scrollbar: {
                el: ".swiper-scrollbar",
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
</body>

</html>