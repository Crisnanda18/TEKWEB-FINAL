<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Bolt</title>
 
        <link rel="icon" type="image/x-icon" href="assets/icon.png" />
     
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />

        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
 
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top"><img src="assets/icon.png" alt="" width="100"></a>
                <a id="btn-join" class="btn btn-m" href="/login">Log in</a>
                
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end" data-aos="fade-in-up" data-aos-duration="3000">
                        <h1 class="text-white font-weight-bold" id="judul-brand" align="left">Watch <br> <span style="color: #bdf347;">Anywhere.</span>  <br> <span style="color: #bdf347;">Anytime.</span> </h1>
                        <hr class="landing" />
                    </div>
                    <div class="col-md-8 align-self-baseline mt-5" data-aos="fade-right"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                        <p id="textBrand" class="text-white" align="left">Stream movies and TV shows lightning-fast with <span style="color: #bdf347;">Bolt</span>! Enjoy HD quality and a huge selection of the latest releases and classics. Join <span style="color: #bdf347;">Bolt</span> now and start your binge-watching journey!</p>
                        <a id="btn-subscribe" class="btn btn-primary btn-xl mt-5" href="#about">Subscribe now</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bagian" id="about">
            <div class="container mt-5">
                <h2 class="text-center mt-0 textdvd" data-aos="fade-right" data-aos-duration="1000">pricing</h2>
                <hr class="divider" data-aos="fade-right" data-aos-duration="1000">
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center" align="center">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mt-5" data-aos="fade-right" data-aos-duration="2000">
                        <div class="mx-auto">
                            <img class="img-fluid price" src="{{ asset('assets/img/pricing/Freemium.png') }}" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mt-5" data-aos="fade-right" data-aos-duration="1500">
                        <div class="mx-auto">
                            <img class="img-fluid price" src="assets/img/pricing/Premier.png" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mt-5" data-aos="fade-right" data-aos-duration="1500">
                        <div class="mx-auto">
                            <img class="img-fluid price" src="assets/img/pricing/Royale.png" alt="..." />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Now Playing -->
        <section class="page-section bagian" id="nowplaying">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0 textdvd">now playing at</h2>
                <div align="center" data-aos="fade-zoom-in"
                data-aos-easing="ease-in-back"
                data-aos-delay="500"
                data-aos-offset="0">><img src="assets/icon.png" alt="" width="80"></div>
                <hr class="divider" />
               
        
        <!-- Portfolio-->
        <div id="portfolio">
            <div class="container-fluid p-1">
                <div class="row" data-aos="zoom-in">
                    <div class="col-lg-4 col-sm-6 pt-2">
                            <img class="img-fluid landingpic" src="assets/movie-landing/movie1.jpg" alt="..." /> 
                    </div>
                    <div class="col-lg-4 col-sm-6 pt-2">
                        <img class="img-fluid landingpic" src="assets/movie-landing/koding.jpg" alt="..." /> 
                    </div>
                    <div class="col-lg-4 col-sm-6 pt-2">
                        <img class="img-fluid landingpic" src="assets/movie-landing/heroes.jpg" alt="..." /> 
                    </div>
                    <div class="col-lg-4 col-sm-6 pt-2">
                        <img class="img-fluid landingpic" src="assets/movie-landing/nice-try.jpg" alt="..." /> 
                    </div>
                    <div class="col-lg-4 col-sm-6 pt-2">
                        <img class="img-fluid landingpic" src="assets/movie-landing/starboy.jpg" alt="..." /> 
                     </div>
                     <div class="col-lg-4 col-sm-6 pt-2">
                        <img class="img-fluid landingpic" src="assets/movie-landing/kiww.jpg" alt="..." /> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Compatible Page-->
    <section class="compatible">
        <div class="container h-100" align="center">
            <h2 data-aos="fade-right" data-aos-duration="1500" class="text-center mt-0 textdvd"> <span><img src="assets/icon.png" alt="" width="75" style="margin-right: 10px; margin-bottom: 6px;"></span>is everywhere.</h2>
            <h2 data-aos="fade-left" data-aos-duration="2700" class="text-center mt-4 textdvd" style="font-size: medium;">no devices left behind. </h2>
            <div class="row" data-aos="flip-left" data-aos-duration="1500">
                 <img src="assets/img/Devices.png" id="devices" alt="">
            </div>
            

            
           
        </div>
        <h2 class="text-center mt-4 textdvd" style="font-size: smaller;">download the app </h2>
        <hr class="divider">
        <div class="row container-fluid justify-content-center" align="center">
            <div class="col-lg-4 col-sm-6 pt-2">
                <a href="#"><img id="googleplay" class="img-fluid landingpic" src="https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png" alt="..." /> </a>
        </div>
        <div class="col-lg-4 col-sm-6 pt-3" style="margin-top: 5px;">
            <a href="#"><img id="appstore" class="img-fluid landingpic" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Download_on_the_App_Store_Badge.svg/800px-Download_on_the_App_Store_Badge.svg.png" alt="..." /> </a>
        </div>
            
        </div>

    </section>
      
        <!-- Footer-->
        <footer class="py-5" style="background-color: #bdf347;">
            <div class="container px-4 px-lg-5">
                <div class="small text-center text-muted">
                    <p>
                        Copyright © 2023 Bolt. All Rights Reserved. <br>

*Compatible 4K device/s required. <br>Minimum broadband speed of 25Mbps required. Selected content only.
                    </p>

                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
          </script>
    </body>
</html>
