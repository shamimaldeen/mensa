<!doctype html>
<html lang="zxx">


<!-- Mirrored from kiswa.net/themes/cortex/demo/demos-rtl/cortex-resume-demo-sidebar-particle-background-rtl/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Nov 2020 11:48:57 GMT -->
<head>
    <title>Blog Details</title>
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
                                <h1 class="display-4 fw-semi-bold animated fadeInDownBig delay-1s">Blog Details</h1>

                                <div class="custom-border sh-above">
                                    <div class="line-border"></div>
                                </div>

                                <p class="dash line text-white-persist-e fw-regular animated fadeInDownBig delay-2s">Home / Blog
                                    Details</p>

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
            <ul class="list-unstyled mb-0 lsp1 text-black sidenav-active">
                <li class="nav-item"><a href="index.html" class="nav-link bg-primary-colorh bg-active">Home
                        <i class="fa fa-home"></i>
                    </a></li>
                <li class="nav-item"><a href="index.html" class="nav-link bg-primary-colorh">About
                        <i class="fa fa-info"></i>
                    </a></li>
                <li class="nav-item"><a href="index.html" class="nav-link bg-primary-colorh">Resume
                        <i class="fa fa-file-text"></i>
                    </a></li>
                <li class="nav-item"><a href="index.html" class="nav-link bg-primary-colorh">Skills
                        <i class="fa fa-list-ul"></i>
                    </a></li>
                <li class="nav-item"><a href="index.html" class="nav-link bg-primary-colorh">Services
                        <i class="fa fa-tasks"></i>
                    </a></li>
                <li class="nav-item"><a href="index.html" class="nav-link bg-primary-colorh">Portfolio
                        <i class="fa fa-photo"></i>
                    </a></li>
                <li class="nav-item"><a href="index.html" class="nav-link bg-primary-colorh">Team
                        <i class="fa fa-users"></i>
                    </a></li>
                <li class="nav-item"><a href="{{route('blogpost')}}" class="nav-link bg-primary-colorh">Blog
                        <i class="fa fa-newspaper-o"></i>
                    </a></li>
                <li class="nav-item"><a href="index.html" class="nav-link bg-primary-colorh">Pricing
                        <i class="fa fa-dollar"></i>
                    </a></li>
                <li class="nav-item"><a href="index.html" class="nav-link bg-primary-colorh">Contact
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

                @foreach($postdetails as $row)
                <div class="col-12">
                    <div class="blog-content p-0">
                        <div class="img-styled mb-4 px-2 px-sm-0 d-flex">
                            <div class="border-styled primary-border">
                                <img src="{{ asset($row->image)}}" alt="blog-details-img" class="img-fluid">
                            </div><!-- end border-styled -->
                        </div><!-- end img-styled -->
                        <div class="blog-text mr-sm-1">
                            <h3 class="text-uppercase text-black-5 mb-4">{{ $row->title}}</h3>

                            <div class="date mr-n1">
                                <div class="custom-border sh-above">
                                    <div class="line-border"></div>
                                </div><!-- end custom-border -->

                                <div class="dash line text-black-7 fw-lite">
                                    <ul class="list-inline my-3 ml-2">
                                       <!--  <li class="list-inline-item ml-sm-5">
                                            <p><i class="fa fa-calendar ml-sm-2 ml-1"></i> 12 May 2019</p>
                                        </li> -->
                                        <li class="list-inline-item ml-sm-5">
                                            <p><i class="fa fa-pencil ml-sm-2 ml-1"></i>  {{ $profile[0]->name }}</p>
                                        </li>
                                        <li class="list-inline-item ml-sm-5">
                                            <p><i class="fa fa-folder ml-sm-2 ml-1"></i>{{ $profile[0]->designation }}</p>
                                        </li>
                                    </ul>
                                </div><!-- end dash -->

                                <div class="custom-border sh-above">
                                    <div class="line-border"></div>
                                </div><!-- end custom-border -->
                            </div><!-- end date -->

                            <p class="text-black-5 my-4">{!! $row->description !!}


                            </p>

                       

                         

                         


                        </div><!-- end blog-text -->
                    </div><!-- end blog-content -->
                </div><!-- end column -->
                @endforeach

            </div><!-- end row -->
        </div><!-- end container -->
    </section>
    <!-- Blog Ends-->

  <!-- Blogger Details Starts-->
    <section class="blogger bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-8">
                    <img src="{{ asset($profile[0]->image)}}" alt="blogger-name" class="img-fluid">
                </div><!-- end column -->
                <div class="col-lg pt-4 pt-lg-0">
                    <div class="blogger-text">
                        <h1 class="fw-semi-bold text-black-5">{{ $profile[0]->name }}</h1>
                        <h5 class="text-black-5">{{ $profile[0]->designation }}</h5>
                        <p class="text-black-5 mt-3">{{ $about[0]->description }}</p>
                        <ul class="list-inline mt-4 mb-0 blogger-icons primary-colorh text-white">
                            <li class="list-inline-item"><a href="#"><i
                                        class="fa fa-facebook-f bg-black-9 bg-primary-colorhb"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i
                                        class="fa fa-twitter bg-black-9 bg-primary-colorhb"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i
                                        class="fa fa-linkedin bg-black-9 bg-primary-colorhb"></i></a></li>
                        </ul>
                    </div><!-- end blogger-text -->
                </div><!-- end column -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
    <!-- Blogger Details Ends-->

    <!-- Comments Starts-->
    <section class="comments section-padding pb-0 bg-white">
        <div class="container">
            <h1 class="text-black-5 fw-semi-bold text-uppercase mt-n2">Comments</h1>
            <div class="custom-border sh-above my-sm-5 my-4">
                <div class="line-border"></div>
            </div><!-- end custom-border -->
            <div class="row">
                <div class="col-lg-2 col-sm-5 col-7">
                    <img src="images/commenter1.jpg" alt="commenter-image" class="img-fluid">
                </div><!-- end column -->
                <div class="col-lg pt-4 pt-lg-0">
                    <div class="comment-text">
                        <h2 class="fw-semi-bold text-black-5">John doe</h2>
                        <h6 class="text-black-5 mt-lg-1">December 05, 2018 5:15pm</h6>
                        <p class="text-black-5 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                            anim id est laborum.</p>

                        <a href="#"
                            class="btn bg-gray bg-primary-colorhb px-4 text-uppercase fw-semi-bold border-0 br0 mt-4">Reply</a>
                    </div><!-- end comment-text -->
                </div><!-- end column -->
            </div><!-- end row -->
            <div class="custom-border sh-above my-sm-5 my-4">
                <div class="line-border"></div>
            </div><!-- end custom-border -->
            <div class="row">
                <div class="col-lg-2 col-sm-5 col-7">
                    <img src="images/commenter1.jpg" alt="commenter-image" class="img-fluid">
                </div><!-- end column -->
                <div class="col-lg pt-4 pt-lg-0">
                    <div class="comment-text">
                        <h2 class="fw-semi-bold text-black-5">John doe</h2>
                        <h6 class="text-black-5 mt-lg-1">December 05, 2018 5:15pm</h6>
                        <p class="text-black-5 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                            anim id est laborum.</p>

                        <a href="#"
                            class="btn bg-gray bg-primary-colorhb px-4 text-uppercase fw-semi-bold border-0 br0 mt-4">Reply</a>
                    </div><!-- end comment-text -->
                </div><!-- end column -->
            </div><!-- end row -->
            <div class="custom-border sh-above my-sm-5 my-4">
                <div class="line-border"></div>
            </div><!-- end custom-border -->
            <div class="row">
                <div class="col-lg-2 col-sm-5 col-7">
                    <img src="images/commenter1.jpg" alt="commenter-image" class="img-fluid">
                </div><!-- end column -->
                <div class="col-lg pt-4 pt-lg-0">
                    <div class="comment-text">
                        <h2 class="fw-semi-bold text-black-5">John doe</h2>
                        <h6 class="text-black-5 mt-lg-1">December 05, 2018 5:15pm</h6>
                        <p class="text-black-5 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                            anim id est laborum.</p>

                        <a href="#"
                            class="btn bg-gray bg-primary-colorhb px-4 text-uppercase fw-semi-bold border-0 br0 mt-4">Reply</a>
                    </div><!-- end comment-text -->
                </div><!-- end column -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
    <!-- Comments Ends-->

    <!-- Comment-Form Starts-->
    <section class="section-padding comment-form bg-white">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 mx-auto">
                    <h1 class="text-black-5 mb-sm-5 mb-3 fw-semi-bold">Leave your Comment</h1>
                    <form  method="post" action="#" enctype="multipart/form-data" class="needs-validation" novalidate>
                         @csrf
                        <div class="form-row">
                            <div class="col-md-6">
                                <input type="text" class="form-control primary-border-e primary-border-eh bg-white-e"
                                    placeholder="First name" name="fastname" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control primary-border-e primary-border-eh bg-white-e"
                                    placeholder="Last name" name="lastname" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <input type="email" class="form-control primary-border-e primary-border-eh bg-white-e"
                                    placeholder="Email" name="email" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control primary-border-e primary-border-eh bg-white-e"
                                    placeholder="Subject" name="subject" required>
                            </div>
                        </div>
                        <textarea class="form-control primary-border-e primary-border-eh bg-white-e" rows="7"
                            placeholder="Your comment here" name="comment" required></textarea>

                        <button class="btn bg-primary-color bg-primary-colorh br0 py-2 btn-block" type="submit">Submit
                            Comment</button>
                    </form>
                </div><!-- end column -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
    <!-- Comment-Form Ends-->

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