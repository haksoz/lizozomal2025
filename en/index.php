<!DOCTYPE html>
<html lang="en">
<?php $page = 'index'; ?>
<head>
    <title>IX. International Lysosomal Diseases Congress | Home</title>
    <?php include("head.php") ?>
</head>
<body data-spy="scroll" data-target=".navbar-custom" id="page-top">
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div><!-- /Preloader ends -->
    <div id="page-width">
        <?php include ("header.php") ?>
        <!-- Home Page -->
        <div class="home" id="main">
            <div class="relative">
                <img class="banner-img banner-desktop" src="../doc/lizozomal-webbanner-en.jpg" alt="">
                <img class="banner-img banner-mobil" src="../doc/lizozomal-webbanner-en.jpg" alt="">
                <div class="px-0 py-0 md-absolute bottom-0 w-100">
                <div class="container">
                    <div class="flex-row justify-content-center">
                        <div class="col-lg-1 col-md-1 col-sm-3 px-0">
                            <div class="single-fun-fact">
                                <div id="timer" class="flex-wrap d-flex justify-content-center">
                                    <h3>
                                        <span id="days-en" class="align-items-center flex-column d-flex justify-content-center">0</span>
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-sm-3 px-0">
                            <div class="single-fun-fact bg-1">
                                <div id="timer" class="flex-wrap d-flex justify-content-center">
                                    <h3>
                                        <span id="hours-en" class="align-items-center flex-column d-flex justify-content-center">0</span>
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-sm-3 px-0">
                            <div class="single-fun-fact bg-2">
                                <div id="timer" class="flex-wrap d-flex justify-content-center">
                                    <h3>
                                        <span id="minutes-en" class="align-items-center flex-column d-flex justify-content-center">0</span>
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-sm-3 px-0">
                            <div class="single-fun-fact bg-3">
                                <div id="timer" class="flex-wrap d-flex justify-content-center">
                                    <h3>
                                        <span id="seconds-en" class="align-items-center flex-column d-flex justify-content-center">0</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!-- Section Services -->
            <section class="container" style="padding: 0px 0px;">
                <!-- Services Boxes -->
                <div class="owl-carousel margin1 col-lg-12" id="services-slider">
                    <a href="registration-accommodation.php">
                        <div class="serviceBox bg-color2">
                            <div class="service-content text-light">
                                <h4 class="title">Registration & Accommodation</h4>
                            </div>
                        </div>
                    </a>
                    <a href="program.php">
                        <div class="serviceBox bg-color1">
                            <div class="service-content text-light">
                                <h4 class="title">Scientific <br> Program</h4>
                            </div>
                        </div>
                    </a>
                    <a href="abstract-submission.php">
                        <div class="serviceBox bg-color3">
                            <div class="service-content text-light">
                                <h4 class="title">Abstract Submission</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- /service box -->
            </section>

            <section class="container">
                <!-- Section heading -->
                <div class="section-heading">
                    <h2>Invitation</h2>
                    <div class="hr"></div>
                </div>
                <?php include("invitation-text.php") ?>
            </section>

            <!-- Section Testimonials -->
            <section class="container-fluid small-section" id="testimonials">
                <div class="section-heading">
                    <h2 class="text-light">General Information</h2>
                    <div class="hr"></div>
                </div>
                <div class="container">
                    <div class="owl-carousel" id="testimonial-slider">
                        <!-- Testimonial 1 -->
                        <div class="testimonial">
                            <div class="description">
                                <p><b>Congress Name:<br>IX. International Lysosomal Diseases Congress</b></p>
                            </div>
                        </div>
                        <!-- Testimonial 2 -->
                        <div class="testimonial">
                            <div class="description">
                                <p><b>Venue:<br>Concorde Luxury Hotel TRNC</b></p>
                            </div>
                        </div>
                        <!-- Testimonial 3 -->
                        <div class="testimonial">
                            <div class="description">
                                <p><b>Congress Date:<br>April 28 - May 02, 2025</b></p>
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="description">
                                <p><b>Congress Topic:<br>Innovative Approaches in Lysosomal Storage Diseases</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div><!-- /main-->

        <?php include("footer.php") ?>

    </div><!-- /page-width -->
    <?php include("script.php") ?>
</body>
</html>