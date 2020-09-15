<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Medium</title>
    <link rel="icon" href="{{asset('storage/assets/images/favicon.png')}}" />
    <link rel="stylesheet" type="text/css" href="./css/app.css" />
    <script src="./js/app.js" type="text/javascript"></script>
</head>

<body>
<div class="container-scroller">
    <div class="main-panel">
        <header id="header">
            <div class="container">
                <!-- partial:partials/_navbar.html -->
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div
                        class="d-flex justify-content-between align-items-center navbar-top"
                    >
                        <ul class="navbar-left">
                            <li>{{date('D, F j, Y', time())}}</li>
                            <li>30°C, Ho Chi Minh</li>
                        </ul>
                        <div>
                            <a class="navbar-brand" href="{{route('home')}}"
                            ><img src="{{asset('storage/assets/images/logo.svg')}}" alt=""
                                /></a>
                        </div>
                        <div class="d-flex">
                            <ul class="navbar-right">
                                <li>
                                    <a href="#">SIGN IN</a>
                                </li>
                                <li>
                                    <a href="#">SIGN UP</a>
                                </li>
                            </ul>
                            <ul class="social-media">
                                <li>
                                    <a href="https://www.instagram.com" target="_blank">
                                        <i class="mdi mdi-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com" target="_blank">
                                        <i class="mdi mdi-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com" target="_blank">
                                        <i class="mdi mdi-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/feed/" target="_blank">
                                        <i class="mdi mdi-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com" target="_blank">
                                        <i class="mdi mdi-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="navbar-bottom-menu">
                        <button
                            class="navbar-toggler"
                            type="button"
                            data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent"
                            aria-expanded="false"
                            aria-label="Toggle navigation"
                        >
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div
                            class="navbar-collapse justify-content-center collapse"
                            id="navbarSupportedContent"
                        >
                            <ul
                                class="navbar-nav d-lg-flex justify-content-between align-items-center"
                            >
                                <li>
                                    <button class="navbar-close">
                                        <i class="mdi mdi-close"></i>
                                    </button>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link active" href="{{route('home')}}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/world.html">World</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/author.html">Magazine</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/news-post.html">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/business.html"
                                    >Business</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/sports.html">Sports</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/art.html">Art</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/politics.html"
                                    >Politics</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/real-estate.html"
                                    >Real estate</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/travel.html">Travel</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"
                                    ><i class="mdi mdi-magnify"></i
                                        ></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <!-- partial -->
            </div>
        </header>

        <div class="container">
            <x-top-thumbnail articles="{!! json_encode($topThumbnailArticles) !!}"/>
            <div class="row">
                <x-owl-carousel articles="{!! json_encode($owlCarouselArticles) !!}" />
                <x-top-side-bar articles="{!! json_encode($topSideBarArticles) !!}"/>
            </div>

            <x-world-news articles="{!! json_encode($worldNewsArticles) !!}"/>

            <x-editors-choice articles="{!! json_encode($editorsChoiceArticles) !!}" />

            <x-popular-news articles="{!! json_encode($popularNewsArticles) !!}" />

        </div>
        <!-- main-panel ends -->
        <!-- container-scroller ends -->

        <!-- partial:partials/_footer.html -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="border-top"></div>
                    </div>
                    <div class="col-sm-3 col-lg-3">
                        <ul class="footer-vertical-nav">
                            <li class="menu-title">
                                <a href="pages/news-post.html">News</a>
                            </li>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="pages/world.html">World</a></li>
                            <li><a href="pages/author.html">Magazine</a></li>
                            <li><a href="pages/business.html">Business</a></li>
                            <li><a href="pages/politics.html">Politics</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3 col-lg-3">
                        <ul class="footer-vertical-nav">
                            <li class="menu-title">
                                <a href="pages/world.html">World</a>
                            </li>
                            <li><a href="pages/sports.html">Sports</a></li>
                            <li><a href="pages/art.html">Art</a></li>
                            <li><a href="#">Magazine</a></li>
                            <li><a href="pages/real-estate.html">Real estate</a></li>
                            <li><a href="pages/travel.html">Travel</a></li>
                            <li><a href="pages/author.html">Author</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3 col-lg-3">
                        <ul class="footer-vertical-nav">
                            <li class="menu-title"><a href="#">Features</a></li>
                            <li><a href="#">Photography</a></li>
                            <li><a href="#">Video</a></li>
                            <li><a href="pages/news-post.html">Newsletters</a></li>
                            <li><a href="#">Live Events</a></li>
                            <li><a href="#">Stores</a></li>
                            <li><a href="#">Jobs</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3 col-lg-3">
                        <ul class="footer-vertical-nav">
                            <li class="menu-title"><a href="#">More</a></li>
                            <li><a href="#">RSS</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">User Agreement</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="pages/aboutus.html">About us</a></li>
                            <li><a href="pages/contactus.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="d-flex justify-content-between">
                            <img
                                src="{{asset('storage/assets/images/logo.svg')}}"
                                class="footer-logo"
                                alt=""
                            />

                            <div class="d-flex justify-content-end footer-social">
                                <h5 class="m-0 font-weight-600 mr-3 d-none d-lg-flex">
                                    Follow on
                                </h5>
                                <ul class="social-media">
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-youtube"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-twitter"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div
                            class="d-lg-flex justify-content-between align-items-center border-top mt-5 footer-bottom"
                        >
                            <ul class="footer-horizontal-menu">
                                <li><a href="#">Terms of Use.</a></li>
                                <li><a href="#">Privacy Policy.</a></li>
                                <li><a href="#">Accessibility & CC.</a></li>
                                <li><a href="#">AdChoices.</a></li>
                                <li><a href="#">Advertise with us Transcripts.</a></li>
                                <li><a href="#">License.</a></li>
                                <li><a href="#">Sitemap</a></li>
                            </ul>
                            <p class="font-weight-medium">
                                © 2020
                                <a
                                    href="https://www.bootstrapdash.com/"
                                    target="_blank"
                                    class="text-dark"
                                >@ BootstrapDash</a
                                >, Inc.All Rights Reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- partial -->
    </div>
</div>
</body>
</html>
