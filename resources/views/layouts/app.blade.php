<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        @if(isset($meta_description))
            <meta name="description" content="{{ $meta_description }}" />
            <meta name="keywords" content="{{ $setting->keyword}}" />
            <meta name="author" content="Divangle" />
            @endif
        <title>@yield('pageTitle') - {{ $setting->sitename }} </title>
     
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <link href="apple-touch-icon.png') }}" rel="apple-touch-icon">
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700|Open+Sans:300,400,400i,600,700" rel="stylesheet">

        <!-- Tools -->
        <link href="{{ asset('assets/tools/sequence/css/sequence-theme.basic.css') }}" rel="stylesheet" media="all">
        <link href="{{ asset('assets/tools/dropdownhover/css/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/tools/dropdownhover/css/bootstrap-dropdownhover.min.css') }}" rel="stylesheet">

        <!-- site spec -->
        <link href="{{ asset('assets/tools/lightbox/ekko-lightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
        <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
        <style type="text/css">
          .portfolio-item {
            position: relative;
            background: #FFF;
                background-clip: border-box;
            margin-bottom: 10px;
            border: 8px solid #FFF;
            -webkit-border-radius: 5px;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 5px;
            -moz-background-clip: padding;
            border-radius: 5px;
            background-clip: padding-box;
            -webkit-box-shadow: inset 0 1px #fff,0 0 8px #c8cfe6;
            -moz-box-shadow: inset 0 1px #fff,0 0 8px #c8cfe6;
            box-shadow: inset 0 1px #fff,0 0 8px #c8cfe6;
            color: inset 0 1px #fff,0 0 8px #c8cfe6;
            -webkit-transition: all .5s ease;
            -moz-transition: all .5s ease;
            -o-transition: all .5s ease;
            -ms-transition: all .5s ease;
            transition: all .5s ease;
          }
          
          .portfolio-item .portfolio-image {
            overflow: hidden;
            text-align: center;
            position: relative;
          }
        </style>
    </head>

<body class="auth-theme-rashmore">
    <header class="sabbi-site-head">
        <nav class="navbar navbar-white navbar-kawsa navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button aria-controls="navbar" aria-expanded="false" class="navbar-toggle collapsed" data-target="#navbar" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button> 
                    <a class="navbar-brand" href="{{ url('/') }}"><img alt="" class="img-responsive" src="{{ asset('assets/img/logo1.png') }}" style="height: 100px;width: 300px;"></a>
                </div>
                <div class="navbar-collapse collapse sabbi-navbar-collapse  navbar-nav-hov_underline" id="navbar">
                    <div class="nav-btn-wrap"><a href="#" class="btn btn-primary pull-right">Join Research</a></div>
                    <ul class="nav navbar-nav navbar-right" id="menu-main-nav">
                        <li class="active">
                            <a href="{{ url('/') }}" title="Home">Home</a>
                        </li>
                        
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" title="People"  data-hover="dropdown" data-animations="zoomIn">Group <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="#">About</a>
                                </li>
                                <li>
                                    <a href="#" title="Our Team">Our Team</a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown"  data-hover="dropdown" href="{{ url('/publications') }}" title="Publications" data-animations="zoomIn">Publications <span class="caret"></span></a>
                            <ul class=" dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/publications') }}/?cat=Books" title="Books">Books</a>
                                </li>
                                <li>
                                    <a href="{{ url('/publications') }}" title="Journal Articles">Journal Articles</a>
                                </li>
                                <li>
                                    <a href="{{ url('/publications') }}/?cat=Conference Talk" title="Conferences and Talks">Conferences and Talks</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="{{ url('/events') }}" title="All Events">Events</a>
                        </li>
                        <li>
                            <a href="{{ url('/gallery') }}" title="Gallery">Gallery</a>
                        </li>
                        <li>
                            <a href="{{ url('/contact') }}" title="Contact Us">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav><!-- /.navbar -->
        @if(isset($home))
            <div class="sabbi-site-header-meta">
                <div class="site-hmsl-content text-center" style="margin-top: 110px">
                    <div class="seq seq--kawsa" id="sequence">
                        <div class="seq-screen">
                            <ul class="seq-canvas">
                                <li class="seq-step1" id="step1" style="background:url(assets/img/5.jpg);background-repeat: no-repeat;background-size: cover;">
                                    <div class="bg-blend"></div>
                                    <div class="seq-content" >

                                        <h2 class="seq-title font-2 tt_up" data-seq="">Where it all began</h2>
                                        <div class="seq-meta" data-seq="">
                                            <p class="seq-meta-text">His research to develop a new detection strategy for cancer has received a new National Health and Medical Research Council </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="seq-step1" id="step2" style="background:url(assets/img/6.jpg);background-repeat: no-repeat;background-size: cover;">
                                    <div class="bg-blend"></div>
                                    <div class="seq-content" >

                                        <h2 class="seq-title font-2 tt_up" data-seq="">Polymeric microvalves</h2>
                                        <div class="seq-meta" data-seq="">
                                            <p class="seq-meta-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat est adipisci sapiente ab unde nam facilis rem atque deleniti dolor! </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="seq-step1" id="step2" style="background:url(assets/img/7.jpg);background-repeat: no-repeat;background-size: cover;">
                                    <div class="bg-blend"></div>
                                    <div class="seq-content" >

                                        <h2 class="seq-title font-2 tt_up" data-seq="">DR. Marki’s Research</h2>
                                        <div class="seq-meta" data-seq="">
                                            <p class="seq-meta-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat est adipisci sapiente ab unde nam facilis rem atque deleniti dolor! </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="sec-navigate-wrap pos-y_center">
                                <button type="button" class="seq-next"></button>
                                <button type="button" class="seq-prev"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </header><!-- /.sabbi-site-head -->
    
    @yield('content')
    <footer class="section-footer mt_25">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="footer-site-info">
                        <header>
                            <a class="footer-brand" href="{{ url('/') }}"><img alt="" class="img-responsive" src="{{ asset('assets/img/logo1.png') }}"></a>
                        </header>
                        <footer class="contact-info">
                            <h3 class="entry-title">Contact Information</h3>
                            <p class="__ci_num">Call: <span>+61(07)373 53921</span></p>
                            <p class="__ci_num">Email: <span>yourmail@custommail.com</span></p>
                        </footer>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="row">
                        <div class="col-sm-5 col-sm-offset-2">
                            <section class="widget widget_sec">
                                <div class="widget-main">
                                    <h2 class="widget-title">Publication</h2>
                                    <ul class="list list-unstyled list-footer-nav">
                                        <li>
                                            <a href="{{ url('/publications') }}/?cat=Books" title="Books">Books</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/publications') }}" title="Journal Articles">Journal Articles</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/publications') }}/?cat=Conference Talk" title="Conferences and Talks">Conferences and Talks</a>
                                        </li>
                                    </ul>
                                </div>
                            </section>
                        </div>
                        <div class="col-sm-5">
                            <section class="widget widget_sec">
                                <div class="widget-main">
                                    <h2 class="widget-title">About</h2>
                                    <ul class="list list-unstyled list-footer-nav">
                                        <li><a href="#">Who we are</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">Gallery</a></li>
                                    </ul>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="footer-site-info">
                        <address>
                            <h3 class="entry-title">Latest Events</h3>
                            <ul class="event-list list-unstyled">
                                @forelse($theevents as $event) 
                                    <li>
                                        <h4 class="title"><span style="color: green"> -> </span><a href="events_single.html">{{ $event->title }}</a></h4>
                                    </li>
                                @empty
                                @endforelse 
                            </ul> 
                        </address>
                    </div>
                </div>
            </div>
        </div>
        <div id="site-footer-bar" class="footer-bar mt_30">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="widget_black_studio_tinymce" id="black-studio-tinymce-4">
                            <div class="copyright">Copyright {{ date('Y') }} - <a href="https://wpmanageninja.com/">{{ $setting->sitename }}</a></div>
                        </div>
                    </div>
                    <div class="col-sm-4 ">
                        <div class="powredby">Developed and Managed by: <a href="#">Leaver group</a></div>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- /.section-footer -->
    
    <script src="{{ asset('assets/js/vendor/jquery-1.11.2.min.js') }}"></script>
    <script src="{{ asset('assets/tools/sequence/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/tools/sequence/js/hammer.min.js') }}"></script>
    <script src="{{ asset('assets/tools/sequence/js/sequence.min.js') }}"></script>
    <script src="{{ asset('assets/tools/lightbox/ekko-lightbox.min.js') }}"></script>
    <script src="{{ asset('assets/tools/dropdownhover/js/bootstrap-dropdownhover.min.js') }}"></script>

    <!-- site-spec -->
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script> 
    <script src="{{ asset('assets/js/plugins.js') }}"></script> 
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>