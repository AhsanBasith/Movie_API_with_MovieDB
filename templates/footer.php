<!-- Main Footer -->
<!-- Site footer -->
<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h6>About</h6>
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, consequatur
                    possimus? Mollitia praesentium quisquam, vitae non distinctio beatae! Dolor molestias consequatur
                    quaerat reiciendis at quibusdam consectetur quia ea accusantium maiores.</p>
            </div>

            <div class="col-xs-6 col-md-3">
                <h6>Quick Menu</h6>
                <ul class="footer-links">
                    <li><a href="populer.php">Populer</a></li>
                    <li><a href="now_playing.php">Now Playing</a></li>
                    <li><a href="up_coming.php">UpComing</a></li>
                    <li><a href="top_rated.php">Top Rated</a></li>
                </ul>
            </div>

            <div class="col-xs-6 col-md-3">
                <h6>Our Website</h6>
                <ul class="footer-links">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
                <p class="copyright-text">Copyright &copy; 2024 All Rights Reserved by
                    <a href="#">Ahsan</a>.
                </p>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="social-icons">
                    <li><a class="facebook border" href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a class="instagram border" href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a class="linkedin border" href="#"><i class="fab fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

</div>
<!-- ./wrapper -->




<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="assets/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/adminlte/dist/js/adminlte.min.js"></script>

<!-- Swiper -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        centeredSlides: false,
        slidesPerGroupSkip: 0,
        grabCursor: true,
        keyboard: {
            enabled: true,
        },
        breakpoints: {
            769: {
                slidesPerView: 6,
                slidesPerGroup: 3,
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
<!-- SLider Trailer -->
<script>
    var swiper = new Swiper(".mySlider", {
        slidesPerView: 3,
        centeredSlides: false,
        slidesPerGroupSkip: 0,
        grabCursor: true,
        keyboard: {
            enabled: true,
        },
        breakpoints: {
            769: {
                slidesPerView: 4,
                slidesPerGroup: 3,
            },
        },
        scrollbar: {
            el: ".swiper-scrollbar",
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        // pagination: {
        //     el: ".swiper-pagination",
        //     clickable: true,
        // },
    });
</script>
<!-- Slider Cast -->
<script>
    var swiper = new Swiper(".mySliderCast", {
        slidesPerView: 3,
        centeredSlides: false,
        slidesPerGroupSkip: 0,
        grabCursor: true,
        keyboard: {
            enabled: true,
        },
        breakpoints: {
            769: {
                slidesPerView: 4,
                slidesPerGroup: 3,
            },
        },
        scrollbar: {
            el: ".swiper-scrollbar",
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        // pagination: {
        //     el: ".swiper-pagination",
        //     clickable: true,
        // },
    });
</script>


</body>

</html>