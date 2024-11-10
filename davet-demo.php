<!DOCTYPE html>
<html lang="TR">
<?php $page = 'davet'; ?>
<head>
	<title>Uluslararası Katılımlı 17. Çocuk Alerji ve Astım Kongresi</title>
	<?php include("head.php")?>
</head>
<body data-spy="scroll" data-target=".navbar-custom" id="page-top">
	<!-- Preloader  -->
	<div id="preloader">
		<div class="spinner">
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
	</div><!-- /Preloader ends -->
	<div id="page-width">
		<?php include("header.php") ?>
		<!-- Blog Page -->
		<!-- Blog Single Page  -->
		<div id="page-section">
			<section id="blog">
				<div class="container-fluid">
					<div class="jumbotron"></div><!-- /jumbotron-->
					<div class="jumbo-heading" style="background-color: transparent;">
						<!-- Heading -->
						<h1>Uluslararası Katılımlı <br>17. Çocuk Alerji ve Astım Kongresi</h1>
					</div><!-- /jumbo-heading -->
				</div><!-- /container-fluid-->
			</section><!--Section Blog ends -->
						<!-- Section Services -->
			<section class="container" id="services">
				<!-- Section heading -->
				<div class="section-heading">
					<h2>Davet</h2><!-- divider -->
					<div class="hr"></div>
				</div>
				<?php include("davet-metni.php") ?>

                <div class="row justify-content-md-center" style="padding-bottom: 50px;">
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <div class="our-team" style="padding-bottom: 30px;">
                            <div class="pic">
                                <!-- picture -->
                                <img alt="" class="img-responsive img-circle" src="doc/haluk-hoca2.jpg"
                                     style="max-width: 120px;
                                        border: 2px solid;
                                        height: auto;
                                        margin: 0 auto;
                                        border-radius: 20%;
                                        border-color: #fc8c76;">
                                <div class="" style="text-align: center;">
                                    <h6 style="text-transform: inherit;">Prof. Dr. Haluk Çokuğraş</h6><span class=""><b>Çocuk Alerji ve Astım Akademisi Derneği Başkanı</b></span>
                                </div><!-- /tem-info -->
                            </div>
                        </div><!-- /team member ends -->
                    </div>
                    <div class="col-md-4">
                        <div class="our-team" style="padding-bottom: 30px;">
                            <div class="pic">
                                <!-- picture -->
                                <img alt="" class="img-responsive img-circle" src="doc/metin-aydogan.jpg"
                                        style="max-width: 120px;
                                        border: 2px solid;
                                        height: auto;
                                        margin: 0 auto;
                                        border-radius: 20%;
                                        border-color: #fc8c76;">
                                <div class="" style="text-align: center;"> 
                                    <h6 style="text-transform: inherit;">Prof. Dr. Metin Aydoğan</h6><span class=""><b>Kongre Başkanı</b></span>
                                </div><!-- /tem-info -->
                            </div>
                        </div><!-- /team member ends -->
                    </div>
                    
                </div>


				
			</section><!-- /section  -->
			<!-- Section team -->
		</div><!--/page-section-->

		<?php include("footer.php") ?>
	</div><!-- /page-width -->
	
    <?php include("script.php") ?>
</body>
</html>