<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Eventre - Event &amp; Conference Html5 Template</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Event and Conference Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Eventre HTML Template v1.0">

    <link href="plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="plugins/font-awsome/css/font-awesome.min.css" rel="stylesheet">
    <link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="plugins/slick/slick.css" rel="stylesheet">
    <link href="plugins/slick/slick-theme.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href="images/favicon.png" rel="shortcut icon">
</head>

<body class="body-wrapper">
<?php
include('partials/header.php');
?>
<!--================================
=            Page Title            =
=================================-->


<section class="page-title bg-title overlay-dark">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="title">
                    <h3>Beams</h3>
                </div>
                <ol class="breadcrumb justify-content-center p-0 m-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Beams</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!--====  End of Page Title  ====-->


<!--================================
=            News Posts            =
=================================-->

<section class="news section">
    <div class="container">
        <div class="row mt-30">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="block">
                    <!-- Article -->
                    <article class="blog-post single">
                        <div class="post-thumb autoplay-slick">
                            <img src="images/products/sliders/beam-1.jpg" class="img-fluid" alt="speaker">
                            <img src="images/products/sliders/beam-2.jpg" class="img-fluid" alt="speaker">
                        </div>
                        <!--                        <div class="post-content">-->
                        <!--                            <div class="post-details">-->
                        <!---->
                        <!--                            </div>-->
                        <!--                        </div>-->
                    </article>

                </div>
            </div>
            <div class="col-lg-4 col-md-10 mx-auto">
                <div class="sidebar">
                    <div class="widget category">
                        <?php
                        include('partials/other_categories.php')
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--================================
=            Google Map            =
=================================-->
<section class="map">
    <!-- Google Map -->
    <div id="map" data-latitude="40.712776" data-longitude="-74.005974" data-marker="images/icon/marker.png"
         data-marker-name="Eventre"></div>
    <div class="address-block">
        <h4>Docklands Convention</h4>
        <ul class="address-list p-0 m-0">
            <li><i class="fa fa-home"></i><span>Street Address, Location, <br>City, Country.</span></li>
            <li><i class="fa fa-phone"></i><span>[00] 000 000 000</span></li>
        </ul>
        <a href="#" class="btn btn-white-md">Get Direction</a>
    </div>
</section>
<!--====  End of Google Map  ====-->

<!--============================
=            Footer            =
=============================-->

<footer class="footer-main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <div class="footer-logo">
                        <img src="images/footer-logo.png" alt="logo" class="img-fluid">
                    </div>
                    <ul class="social-links-footer list-inline">
                        <li class="list-inline-item">
                            <a href="https://themefisher.com/"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://themefisher.com/"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://themefisher.com/"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://themefisher.com/"><i class="fa fa-rss"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://themefisher.com/"><i class="fa fa-vimeo"></i></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</footer>
<!-- Subfooter -->
<footer class="subfooter">
    <div class="container">
        <div class="row">
            <div class="col-md-6 align-self-center">
                <div class="copyright-text">
                    <p><a href="index.html">Eventre</a> &copy; 2021, Designed &amp; Developed by <a
                            href="https://themefisher.com/">Themefisher</a></p>
                </div>
            </div>
            <div class="col-md-6">
                <a href="#" class="to-top"><i class="fa fa-angle-up"></i></a>
            </div>
        </div>
    </div>
</footer>


<!-- JAVASCRIPTS -->
<!-- jQuey -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- Shuffle -->
<script src="plugins/shuffle/shuffle.min.js"></script>
<!-- Magnific Popup -->
<script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<!-- Slick Carousel -->
<script src="plugins/slick/slick.min.js"></script>
<!-- SyoTimer -->
<script src="plugins/syotimer/jquery.syotimer.min.js"></script>
<!-- Google Mapl -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script>
<script src="plugins/google-map/gmap.js"></script>
<!-- Custom Script -->
<script src="js/script.js"></script>
<script>
    $(function () {
        $('.navbar-nav').find('.nav-item').removeClass('active');
        $('.products-li').closest('li').addClass('active');
        $('.beams-sidebar-li').closest('li').addClass('d-none');

        $('.autoplay-slick').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
        });
    })
</script>
</body>

</html>