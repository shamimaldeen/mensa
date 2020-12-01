<!doctype html>
<html lang="zxx">


<!-- Mirrored from kiswa.net/themes/cortex/demo/demos-rtl/cortex-resume-demo-sidebar-particle-background-rtl/blog-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Nov 2020 11:47:45 GMT -->
<head>
    <title>Blog Post</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Framework Stylesheets Start-->

   
    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/bootstrap-rtl-4.4.1.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/magnific-popup.css')}}">

    <!-- Framework Stylesheets End-->

    <!-- Slider Stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/swiper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/swiper-custom.css')}}">

    <!-- Owl Carousel -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/owl.theme.css')}}">


    <!-- Font Awsome Stylesheet -->
    <link rel="stylesheet" href="{{ asset('public/frontend/vendors/font-awesome-4.7.0/css/font-awesome.min.css')}}">

    <!-- Custom Stylesheet Start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/style-rtl.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/color-panel-rtl.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/responsive-rtl.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/colors/yellow.css')}}">

    <!-- Custom Stylesheet End-->


    <!-- Animation Stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/animate.css')}}">


</head>
@php
 $profile=DB::table('profiles')->get();
 $about=DB::table('abouts')->get();
 $experience =DB::table('resumes')->where(['type' => 'EXPERIENCE'])->get();
 $education =DB::table('resumes')->where(['type' => 'EDUCATION'])->get();
 $portfolio=DB::table('portfolios')->get();
 $post=DB::table('posts')->get();
 $service=DB::table('services')->get();
 $settings=DB::table('settings')->get();
 $skills=DB::table('skills')->get();
@endphp

<body>

    <!--====== Color-Panel =====-->
    <section class="colorRang">
        <div class="colorPicker text-center bg-primary-color">
            <i class="fa fa-gears mx-2"></i>
        </div> <!-- colorPicker -->
        <div class="colors text-center text-black bg-white">
            <h6>Light Version</h6>
            <span class="blue"></span>
            <span class="green"></span>
            <span class="mayablue"></span>
            <span class="red"></span>
            <div class="w-100 mb-2"></div>
            <span class="roman"></span>
            <span class="springgreen"></span>
            <span class="violet"></span>
            <span class="yellow"></span>

            <h6 class="mt-4">Dark Version</h6>
            <span class="dark-blue"></span>
            <span class="dark-cyan"></span>
            <span class="dark-green"></span>
            <span class="dark-indigo"></span>
            <div class="w-100 mb-2"></div>
            <span class="dark-orange"></span>
            <span class="dark-pink"></span>
            <span class="dark-purple"></span>
            <span class="dark-red"></span>
        </div> <!-- colors -->
    </section> <!-- colorRang -->

   <!-- Parallax Background Starts-->
   <div class="parallax-bg">
    <div class="meta vh-100 bg-overlay"
        style="background: url({{ asset($settings[0]->banner)}});background-size: cover;background-position: center;background-repeat: no-repeat;">
        <div id="particles-js"></div>
        <div class="container flex-centering text-center vh-100 ">
            <div class="row sh-above">
                <div class="col-12">
                    <div class="first-page-text text-white-persist">
                        <div class="first-page-text-headings">
                            <h1 class="fw-medium animated fadeInDownBig">Welcome</h1>
                            <h1 class="display-4 fw-semi-bold animated fadeInDownBig delay-1s">Blog Posts</h1>

                            <div class="custom-border sh-above">
                                <div class="line-border"></div>
                            </div>

                            <p class="dash line text-white-persist-e fw-regular animated fadeInDownBig delay-2s">Home / Blog Posts</p>

                            <div class="custom-border sh-above">
                                <div class="line-border"></div>
                            </div>

                        

                        </div><!-- end first-page-text-headings -->
                    </div><!-- end first-page-text -->
                </div><!-- end column -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end meta -->
</div><!-- end parallax-bg -->
<!-- Parallax Background Ends-->






    <!-- sidenav Starts -->
    <section>
        <div class="bg-overlay-nav"></div>
        <a href="#"><i class="fa fa-bars text-black bg-primary-color sidenav-open "></i></a>
        <div class="sidenav bg-white">
            <div class="sidenav-title bg-white-e">
                <h1 class="text-uppercase">Cortex</h1>
            </div><!-- end sidenav-title -->
            <ul class="list-unstyled mb-0 lsp1 text-black">
                <li class="nav-item"><a class="nav-link bg-primary-colorh bg-active" href="index.html">Home
                        <i class="fa fa-home"></i>
                    </a></li>
                <li class="nav-item"><a class="nav-link bg-primary-colorh" href="index.html">About
                        <i class="fa fa-info"></i>
                    </a></li>
                <li class="nav-item"><a class="nav-link bg-primary-colorh" href="index.html">Resume
                        <i class="fa fa-file-text"></i>
                    </a></li>
                <li class="nav-item"><a class="nav-link bg-primary-colorh" href="index.html">Skills
                        <i class="fa fa-list-ul"></i>
                    </a></li>
                <li class="nav-item"><a class="nav-link bg-primary-colorh" href="index.html">Services
                        <i class="fa fa-tasks"></i>
                    </a></li>
                <li class="nav-item"><a class="nav-link bg-primary-colorh" href="index.html">Portfolio
                        <i class="fa fa-photo"></i>
                    </a></li>
                <li class="nav-item"><a class="nav-link bg-primary-colorh" href="index.html">Team
                        <i class="fa fa-users"></i>
                    </a></li>
                <li class="nav-item"><a class="nav-link bg-primary-colorh" href="index.html">Blog
                        <i class="fa fa-newspaper-o"></i>
                    </a></li>
                <li class="nav-item"><a class="nav-link bg-primary-colorh" href="index.html">Pricing
                        <i class="fa fa-dollar"></i>
                    </a></li>
                <li class="nav-item"><a class="nav-link bg-primary-colorh" href="index.html">Contact
                        <i class="fa fa-phone"></i>
                    </a></li>
            </ul>
        </div><!-- end sidenav -->
    </section>
    <!-- sidenav Ends -->

    <!-- Blog Starts-->
    <section class="section-padding blog-details bg-white">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mx-auto">

          @foreach($post as $row)

                    <div class="blog-content pt-0">
                        <div class="img-styled mb-4 px-2 px-sm-0 d-flex">
                            <div class="border-styled primary-border">
                                <img src="{{ asset($row->image)}}" alt="blog-details-img" class="img-fluid">
                            </div><!-- end border-styled -->
                        </div><!-- end img-styled -->
                        <div class="blog-text mr-sm-1">
                            <h3 class="text-uppercase text-black-5 mb-sm-4 mb-3">{{ $row->title}}</h3>

                            <div class="date mr-n1">
                                <div class="custom-border sh-above">
                                    <div class="line-border"></div>
                                </div><!-- end custom-border -->

                                <div class="dash line text-black-7 fw-lite">
                                    <ul class="list-inline my-md-3 my-2 ml-2">
                                        <li class="list-inline-item ml-sm-5">
                                            <p><i class="fa fa-calendar ml-sm-2 ml-1"></i> 12 May 2019</p>
                                        </li>
                                        <li class="list-inline-item ml-sm-5">
                                            <p><i class="fa fa-pencil ml-sm-2 ml-1"></i> {{ $profile[0]->name }}</p>
                                        </li>
                                        <li class="list-inline-item ml-sm-5">
                                            <p><i class="fa fa-folder ml-sm-2 ml-1"></i> {{ $profile[0]->designation }}</p>
                                        </li>
                                    </ul>
                                </div><!-- end dash -->

                                <div class="custom-border sh-above">
                                    <div class="line-border"></div>
                                </div><!-- end custom-border -->
                            </div><!-- end date -->

                            <p class="text-black-5 my-sm-4 my-3">{!! substr($row->description,0,500) !!}
                            </p>

                            <a href="blog-details.html"
                                class="btn bg-gray bg-primary-colorhb px-5 text-uppercase border-0 br0">Read
                                More</a>
                        </div><!-- end blog-text -->
                    </div><!-- end blog-content -->
                    @endforeach


                



                </div><!-- end column -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
    <!-- Blog Ends-->

    <!-- Footer Starts  -->
    <footer class="py-5 bg-black">
        <div class="container">
            <div class="row">
                <div class="col text-center text-white">
                    <ul class="list-unstyled list-inline social primary-colorh">
                        <li class="list-inline-item mb-0"><a href="#" class="hover"><i class="fa fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item mb-0"><a href="#" class="hover"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item mb-0"><a href="#" class="hover"><i class="fa fa-behance"></i></a>
                        </li>
                        <li class="list-inline-item mb-0"><a href="#" class="hover"><i class="fa fa-globe"></i></a>
                        </li>
                        <li class="list-inline-item mb-0"><a href="#" class="hover"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                    <p class="text-capitalize lsp1">Copyright @ 2019 Cortex. All rights reserved</p>
                    <p class="text-capitalize lsp1">Designed by Kiswa Solutions</p>
                </div><!-- end column -->
            </div><!-- end row -->
        </div><!-- end container -->
    </footer>
    <!-- Footer Ends  -->






  <!-- Optional JavaScript, Not optional it's need too -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('public/frontend/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('public/frontend/js/popper.min.js')}}"></script>
    <script src="{{ asset('public/frontend/js/bootstrap.min4.3.1.js')}}"></script>
    <script src="{{ asset('public/frontend/js/swiper.min.js')}}"></script>
    <script src="{{ asset('public/frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('public/frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('public/frontend/js/custom-gallery.js')}}"></script>
    <script src="{{ asset('public/frontend/js/scrollreveal.min.js')}}"></script>

    <script src="{{ asset('public/frontend/js/particles.js')}}"></script>

    <!-- Custom Particle Backgrounds start -->

    <script src="{{ asset('public/frontend/js/particle-polygon.js')}}"></script>
    <!-- <script src="js/particle-nasa.js"></script> -->
    <!-- <script src="js/particle-bubble.js"></script> -->
    <!-- <script src="js/particle-snow.js"></script> -->
    <!-- <script src="js/particle-galaxy.js"></script> -->

    <!-- Custom Particle Backgrounds End -->

    <script src="{{ asset('public/frontend/js/custom-javascript.js')}}"></script>
    

    <!-- Page Scripts Ends -->


</body>


<!-- Mirrored from kiswa.net/themes/cortex/demo/demos-rtl/cortex-resume-demo-sidebar-particle-background-rtl/blog-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Nov 2020 11:48:32 GMT -->
</html>