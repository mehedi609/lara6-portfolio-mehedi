<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Niko - Free Bootstrap 4 Template by Colorlib</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link rel="icon" type="image/jpg" href="{{asset('portfolio.jpg')}}">

        <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">

        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

        <link rel="stylesheet" href="{{asset('vendors/linericon/style.css')}}">
        <link rel="stylesheet" href="{{asset('meetme/css/font-awesome.min.css')}}">

        <link rel="stylesheet" href="{{asset('css/aos.css')}}">

        <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">

        <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        {{--Meet CSS--}}
        <link rel="stylesheet" href="{{asset('meetme/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('meetme/css/responsive.css')}}">
    </head>

    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

        @include('include.nav')

        @include('include.top-slider')

        @include('include.about')

        <section class="ftco-section bg-light" id="skills-section">
            <div class="container">
                <div class="row justify-content-center pb-5">
                    <div class="col-md-12 heading-section text-center ftco-animate">
                        <span class="subheading">Skills</span>
                        <h2 class="mb-4">My Skills</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>Photoshop</h3>
                            <div class="progress">
                                <div class="progress-bar color-1" role="progressbar" aria-valuenow="75"
                                     aria-valuemin="0" aria-valuemax="100" style="width:75%">
                                    <span>75%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>jQuery</h3>
                            <div class="progress">
                                <div class="progress-bar color-2" role="progressbar" aria-valuenow="60"
                                     aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                    <span>60%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>HTML5</h3>
                            <div class="progress">
                                <div class="progress-bar color-3" role="progressbar" aria-valuenow="85"
                                     aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                    <span>85%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>CSS3</h3>
                            <div class="progress">
                                <div class="progress-bar color-4" role="progressbar" aria-valuenow="90"
                                     aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                    <span>90%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>WordPress</h3>
                            <div class="progress">
                                <div class="progress-bar color-5" role="progressbar" aria-valuenow="70"
                                     aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                    <span>70%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>SEO</h3>
                            <div class="progress">
                                <div class="progress-bar color-6" role="progressbar" aria-valuenow="80"
                                     aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                    <span>80%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center py-5 mt-5">
                    <div class="col-md-12 heading-section text-center ftco-animate">
                        <span class="subheading">What I Do</span>
                        <h2 class="mb-4">Strategy, design and a bit of magic</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 text-center d-flex ftco-animate">
                        <div class="services-1">
							<span class="icon">
								<i class="flaticon-analysis"></i>
							</span>
                            <div class="desc">
                                <h3 class="mb-5"><a href="#">Explore</a></h3>
                                <h4>Design Sprints</h4>
                                <h4>Product Strategy</h4>
                                <h4>UX Strategy</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center d-flex ftco-animate">
                        <div class="services-1">
							<span class="icon">
								<i class="flaticon-flasks"></i>
							</span>
                            <div class="desc">
                                <h3 class="mb-5"><a href="#">Create</a></h3>
                                <h4>Information</h4>
                                <h4>UX/UI Design</h4>
                                <h4>Branding</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center d-flex ftco-animate">
                        <div class="services-1">
							<span class="icon">
								<i class="flaticon-ideas"></i>
							</span>
                            <div class="desc">
                                <h3 class="mb-5"><a href="#">Learn</a></h3>
                                <h4>Prototyping</h4>
                                <h4>User Testing</h4>
                                <h4>UI Testing</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section ftco-hireme">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-9 d-flex align-items-center ftco-animate">
                        <h2>I'm <span>Available</span> For Freelancing</h2>
                    </div>
                    <div class="col-md-4 col-lg-3 d-flex align-items-center ftco-animate">
                        <p class="mb-0"><a href="#" class="btn btn-white py-4 px-5">Hire me</a></p>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section ftco-project" id="projects-section">
            <div class="container">
                <div class="row justify-content-center pb-5">
                    <div class="col-md-12 heading-section text-center ftco-animate">
                        <span class="subheading">Accomplishments</span>
                        <h2 class="mb-4">Our Projects</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="project img ftco-animate img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/project-1.jpg);">
                            <div class="overlay"></div>
                            <div class="text text-center p-4">
                                <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                                <span>Web Design</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-2.jpg);">
                                    <div class="overlay"></div>
                                    <div class="text text-center p-4">
                                        <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                                        <span>Web Design</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-3.jpg);">
                                    <div class="overlay"></div>
                                    <div class="text text-center p-4">
                                        <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                                        <span>Web Design</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-4.jpg);">
                            <div class="overlay"></div>
                            <div class="text text-center p-4">
                                <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                                <span>Web Design</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-5.jpg);">
                            <div class="overlay"></div>
                            <div class="text text-center p-4">
                                <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                                <span>Web Design</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section bg-light" id="blog-section">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-5">
                    <div class="col-md-7 heading-section text-center ftco-animate">
                        <span class="subheading">Blog</span>
                        <h2 class="mb-4">Our Blog</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                    </div>
                </div>
                <div class="row d-flex">
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry justify-content-end">
                            <a href="single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
                            </a>
                            <div class="text mt-3 float-right d-block">
                                <div class="d-flex align-items-center mb-3 meta">
                                    <p class="mb-0">
                                        <span class="mr-2">March 23, 2019</span>
                                        <a href="#" class="mr-2">Admin</a>
                                        <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                    </p>
                                </div>
                                <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry justify-content-end">
                            <a href="single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
                            </a>
                            <div class="text mt-3 float-right d-block">
                                <div class="d-flex align-items-center mb-3 meta">
                                    <p class="mb-0">
                                        <span class="mr-2">March 23, 2019</span>
                                        <a href="#" class="mr-2">Admin</a>
                                        <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                    </p>
                                </div>
                                <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry">
                            <a href="single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
                            </a>
                            <div class="text mt-3 float-right d-block">
                                <div class="d-flex align-items-center mb-3 meta">
                                    <p class="mb-0">
                                        <span class="mr-2">March 23, 2019</span>
                                        <a href="#" class="mr-2">Admin</a>
                                        <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                    </p>
                                </div>
                                <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('include.footer')

        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen">
            <svg class="circular" width="48px" height="48px">
                <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
                <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
            </svg>
        </div>


        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
        <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('js/aos.js')}}"></script>
        <script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
        <script src="{{asset('js/scrollax.min.js')}}"></script>

        <script src="{{asset('js/main.js')}}"></script>

    </body>
</html>
