<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Tabib HTML5 Health Directory Template</title>
    <meta name="author" content="Nile-Theme">
    <meta name="robots" content="index follow">
    <meta name="googlebot" content="index follow">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="keywords" content="directory, doctor, doctor directory, Health directory, listing, map, medical, medical directory, professional directory, reservation, reviews">
    <meta name="description" content="Health Care & Medical Services Directory">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800%7CPoppins:300i,300,400,700,400i,500%7CDancing+Script:700%7CDancing+Script:700" rel="stylesheet">
    <!-- animate -->
    <link rel="stylesheet" href="assets/css/animate.css" />
    <!-- owl Carousel assets -->
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- hover anmation -->
    <link rel="stylesheet" href="assets/css/hover-min.css">
    <!-- flag icon -->
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <!-- main style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- colors -->
    <link rel="stylesheet" href="assets/css/colors/main.css">
    <!-- elegant icon -->
    <link rel="stylesheet" href="assets/css/elegant_icon.css">

    <!-- jquery library  -->
    <script  src="assets/js/jquery-3.2.1.min.js"></script>

    <!-- Maps library  -->
    <script  src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script  src="assets/js/jquery.gomap-1.3.3.min.js"></script>

    <!-- fontawesome  -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>


</head>

<body>

    <header class="background-white box-shadow">
        <div class="container header-in">

                <div class="row">
                    <div class="col-lg-2 col-md-12">
                        <a id="logo" href="index.html" class="d-inline-block margin-tb-15px"><img src="assets/img/logo-1.png" alt=""></a>
                        <a class="mobile-toggle padding-13px background-main-color" href="#"><i class="fas fa-bars"></i></a>
                    </div>
                    <div class="col-lg-7 col-md-12 position-inherit">
                        
                        
                        <ul id="menu-main" class="nav-menu float-lg-right link-padding-tb-20px">
                            <li><a href="index.php">Beranda</a>
                                
                            </li>
                            
                            
                            <li ><a href="blog.php">Artikel</a>
                                
                            </li>
                            <li><a href="tentang.php">Tentang Kami</a>
                                
                            </li>
                             <li><a href="hubungi.php">Hubungi Kami</a></li>
                        </ul>
                    
                    
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <hr class="margin-bottom-0px d-block d-sm-none">
                        <a href="dashboard-add-listing.html" class="btn btn-sm border-radius-30 margin-tb-15px text-white background-second-color  box-shadow float-right padding-lr-20px margin-left-30px">
                          <i class="fas fa-plus-circle"></i>  Add list
                        </a>
                        <a href="page-login.html" class="margin-tb-20px d-inline-block text-up-small float-left float-lg-right"><i class="far fa-user"></i>  Login</a>
                    </div>
                </div>
        
        </div>
    </header>
    <!-- // Header  -->

    <div id="page-title" class="padding-tb-30px gradient-white">
        <div class="container text-center">
            <ol class="breadcrumb opacity-5">
                <li><a href="#">Home</a></li>
                <li class="active">Contact Us</li>
            </ol>
            <h1 class="font-weight-300">Contact Us</h1>
        </div>
    </div>


    <div class="container margin-top-50px margin-bottom-100px">
        <div class="row">
            <div class="col-lg-6">

                <div class="map-distributors-in">
                    <div id="map-distributors">

                        <script >
                            $(function() {
                                $("#map-distributors").goMap({
                                    zoom: 6,
                                    maptype: 'ROADMAP',
                                    markers: [

                                        {
                                            address: '37.822350, -113.558284',
                                            icon: 'assets/img/icon_marker_1.png',
                                            html: '<div class="background-white width-250px"><div class="padding-top-50px padding-lr-20px"> <div class="z-index-2 position-relative"> <h5 class="margin-bottom-20px"><a class="text-dark" href="#">Alrayan Eye Clinic</a></h5> <div class="rating clearfix"> <span class="float-left text-grey-2"><i class="far fa-map"></i> California</span> <ul class="float-right"> <li class="active"></li> <li class="active"></li> <li class="active"></li> <li class="active"></li> <li></li> </ul> </div> </div> </div> </div> </div>'
                                        },



                                    ],
                                    hideByClick: true
                                });
                                $("#default").click(function() {
                                    $("#dump").html($.dump($.goMap.getMarkers()));
                                });
                                $("#clearall").click(function() {
                                    $.goMap.clearMarkers();
                                });
                                $("#json").click(function() {
                                    $("#dump").html($.goMap.getMarkers("json"));
                                });
                                $("#data").click(function() {
                                    $("#dump").html($.goMap.getMarkers("data"));
                                });

                                $('.gm-style-iw').parent().css('width', 'auto');


                            });

                        </script>

                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="row">
                    <div class="col-12">
                        <p class="text-grey-2">Mauris fermentum porta sem, non hendrerit enim bibendum consectetur. Fusce diam est, porttitor vehicula gravida at, accumsan bibendum tincidunt imperdiet. Maecenas quis magna faucibus, varius ante sit amet, varius augue. </p>
                    </div>
                    <div class="col-lg-6 col-md-6 margin-bottom-45px">
                        <div class="background-white text-center padding-30px box-shadow border-radius-10">
                            <i class="icon_mail_alt icon-large text-grey-2"></i>
                            <h6 class="font-weight-300 margin-top-15px">Email</h6>
                            <h5 class="font-2 ">info@site-name.com</h5>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 margin-bottom-45px">
                        <div class="background-white text-center padding-30px box-shadow border-radius-10">
                            <i class="icon_map_alt icon-large text-grey-2"></i>
                            <h6 class="font-weight-300 margin-top-15px">Address</h6>
                            <h5 class="font-2 ">Marmora Road, Glasgow</h5>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 sm-mb-30px">
                        <div class="background-white text-center padding-30px box-shadow border-radius-10">
                            <i class="icon_link icon-large text-grey-2"></i>
                            <h6 class="font-weight-300 margin-top-15px">Website</h6>
                            <h5 class="font-2">www.site-name.com</h5>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="background-white text-center padding-30px box-shadow border-radius-10">
                            <i class="icon_phone icon-large text-grey-2"></i>
                            <h6 class="font-weight-300 margin-top-15px">Telphone</h6>
                            <h5 class="font-2">+222 123 3019</h5>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="clearfix"></div>
    </div>

    <footer class="padding-tb-100px background-main-color">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <a class="d-inline-block margin-tb-15px"><img src="assets/img/logo-2.png" alt=""></a>
                </div>
                <div class="col-lg-4">
                    <p class="text-white opacity-7">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                </div>
                <div class="col-lg-6">
                    <ul class="footer-menu margin-tb-15px margin-lr-0px padding-0px list-unstyled float-lg-right">
                        <li><a href="#" class="text-white">Featured</a></li>
                        <li><a href="#" class="text-white">Feedback</a></li>
                        <li><a href="#" class="text-white">Ask a Question</a></li>
                        <li><a href="#" class="text-white">Team</a></li>
                    </ul>
                </div>
            </div>
            <hr class="border-white opacity-4 margin-tb-45px">
            <div class="row">
                <div class="col-lg-6">
                    <p class="margin-0px text-white opacity-7 sm-mb-15px">© 2018 tabib Health Directory | All Right Reserved. </p>
                </div>
                <div class="col-lg-6">
                    <ul class="social-icon style-2 float-lg-right">
                        <li class="list-inline-item"><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a class="youtube" href="#"><i class="fab fa-youtube"></i></a></li>
                        <li class="list-inline-item"><a class="linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
                        <li class="list-inline-item"><a class="google" href="#"><i class="fab fa-google-plus"></i></a></li>
                        <li class="list-inline-item"><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a class="rss" href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script  src="assets/js/sticky-sidebar.js"></script>
    <script  src="assets/js/YouTubePopUp.jquery.js"></script>
    <script  src="assets/js/owl.carousel.min.js"></script>
    <script  src="assets/js/imagesloaded.min.js"></script>
    <script  src="assets/js/wow.min.js"></script>
    <script  src="assets/js/custom.js"></script>
    <script  src="assets/js/popper.min.js"></script>
    <script  src="assets/js/bootstrap.min.js"></script>
</body>

</html>
