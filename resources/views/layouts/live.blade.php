<!DOCTYPE html>
<html dir="ltr" lang="en">
	<head>

		<!-- Meta Tags -->
		<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
		@if(isset($meta_description))
        <meta name="description" content="{{ $meta_description }}" />
    		<meta name="keywords" content="{{ $setting->keyword}}" />
    		<meta name="author" content="Divangle" />
    @endif
		<title>@yield('pageTitle') - {{ $setting->sitename }} </title>
            
           <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5bc490aa0c55ed0011c02022&product=sticky-share-buttons' async='async'></script>
           
		<!-- Favicon and Touch Icons
		<link href="{{ asset('live/images/favicon.png') }}" rel="shortcut icon" type="image/png">
		<link href="{{ asset('live/images/apple-touch-icon.png') }}" rel="apple-touch-icon">
		<link href="{{ asset('live/images/apple-touch-icon-72x72.png') }}" rel="apple-touch-icon" sizes="72x72">
		<link href="{{ asset('live/images/apple-touch-icon-114x114.png') }}" rel="apple-touch-icon" sizes="114x114">
		<link href="{{ asset('live/images/apple-touch-icon-144x144.png') }}" rel="apple-touch-icon" sizes="144x144"> -->

		<!-- Stylesheet -->
		<link href="{{ asset('live/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('live/css/jquery-ui.min.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('live/css/animate.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('live/css/css-plugin-collections.css') }}" rel="stylesheet"/>
		<!-- CSS | menuzord megamenu skins -->
		<link id="menuzord-menu-skins" href="{{ asset('live/css/menuzord-skins/menuzord-rounded-boxed.css') }}" rel="stylesheet"/>
		<!-- CSS | Main style file -->
		<link href="{{ asset('live/css/style-main.css') }}" rel="stylesheet" type="text/css">
		<!-- CSS | Preloader Styles -->
		<link href="{{ asset('live/css/preloader.css') }}" rel="stylesheet" type="text/css">
		<!-- CSS | Custom Margin Padding Collection -->
		<link href="{{ asset('live/css/custom-bootstrap-margin-padding.css') }}" rel="stylesheet" type="text/css">
		<!-- CSS | Responsive media queries -->
		<link href="{{ asset('live/css/responsive.css') }}" rel="stylesheet" type="text/css">
		<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
		<!-- <link href="{{ asset('live/css/style.css') }}" rel="stylesheet" type="text/css"> -->

		<!-- Revolution Slider 5.x CSS settings -->
		<link  href="{{ asset('live/js/revolution-slider/css/settings.css') }}" rel="stylesheet" type="text/css"/>
		<link  href="{{ asset('live/js/revolution-slider/css/layers.css') }}" rel="stylesheet" type="text/css"/>
		<link  href="{{ asset('live/js/revolution-slider/css/navigation.css') }}" rel="stylesheet" type="text/css"/>

		<!-- CSS | Theme Color -->
		<link href="{{ asset('live/css/colors/theme-skin-orange.css') }}" rel="stylesheet" type="text/css">
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127518931-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-127518931-1');
        </script>


		<!-- external javascripts -->
		<script src="{{ asset('live/js/jquery-2.2.4.min.js') }}"></script>
		<script src="{{ asset('live/js/jquery-ui.min.js') }}"></script>
		<script src="{{ asset('live/js/bootstrap.min.js') }}"></script>
		<!-- JS | jquery plugin collection for this theme -->
		<script src="{{ asset('live/js/jquery-plugin-collection.js') }}"></script>

		<!-- Revolution Slider 5.x SCRIPTS -->
		<script src="{{ asset('live/js/revolution-slider/js/jquery.themepunch.tools.min.js') }}"></script>
		<script src="{{ asset('live/js/revolution-slider/js/jquery.themepunch.revolution.min.js') }}"></script>
	</head>
	<body class="">
		<div id="wrapper" class="clearfix">
		  <!-- preloader -->
		  <div id="preloader">
		    <div id="spinner">
		      <div class="preloader-dot-loading">
		        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
		      </div>
		    </div>
		  </div> 
		  
		  <!-- Header -->
		<header class="header">
		    <div class="header-top bg-theme-colored sm-text-center">
		      <div class="container">
		        <div class="row">
		          <div class="col-md-4">
		            <div class="widget no-border m-0">
		              <ul class="styled-icons icon-dark icon-theme-colored icon-sm sm-text-center">
		                <li><a href="{{ $setting->facebook }}"><i class="fa fa-facebook"></i></a></li>
		                <li><a href="{{ $setting->twitter }}"><i class="fa fa-twitter"></i></a></li>
		                <li><a href="{{ $setting->instagram }}"><i class="fa fa-instagram"></i></a></li>
		                <li><a href="{{ $setting->googleplus }}"><i class="fa fa-google-plus"></i></a></li>
		                <li><a href="{{ $setting->youtube }}"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="{{ $setting->linkedin }}"><i class="fa fa-linkedin"></i></a></li>
		              </ul>
		            </div>
		          </div>
		          <div class="col-md-8">
		            <div class="widget no-border m-0">
		              <ul class="list-inline pull-right flip sm-pull-none sm-text-center mt-5">
		                <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-white"></i> <a class="text-white" href="#">{{ $setting->phone }}</a> </li>
		                <li class="text-white m-0 pl-10 pr-10"> <i class="fa fa-clock-o text-white"></i> Mon-Sat 8:00am to 6:00pm </li>
		                <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-white"></i> <a class="text-white" href="{{ $setting->email }}">{{ $setting->email }}</a> </li>
		              </ul>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>

		    <div class="header-nav">
		      <div class="header-nav-wrapper navbar-scrolltofixed bg-silver-light">
		        <div class="container">
		          <nav id="menuzord-right" class="menuzord default no-bg">
		             <a class="pull-left flip" href="{{ url('/') }}"><img src="{{ asset('storage') }}/logo.jpg" style="height: 65px;margin: 5px;" alt="BPWE"></a>
		            <ul class="menuzord-menu">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        
                        <li><a href="">About Us</a>
                            <ul class="dropdown">
                                <li><a href="{{ url('/about') }}">Who We Are</a></li>

                                <li><a href="{{ url('/activity') }}">Our Activities</a></li>
                            </ul>
                        </li>
                        
                        
                        <!--<li><a href="{{ url('/about') }}">Who We Are</a></li>
                        -->
                        <li><a href="{{ url('/program') }}">Our Projects</a>
                            <ul class="dropdown">
                                @forelse($services1 as $service)
                                <li><a href="{{ url('/service')}}/?service={{ $service->slug}}">{{ $service->name}}</a></li>
                                @empty
                                @endforelse
                            </ul>
                        </li>
                    
                        <!--<li><a href="{{ url('/startup') }}">Mentorship</a></li>-->
                        <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                
                        <li><a href="">Media</a>
                            <ul class="dropdown">
                                <!--<li><a href="index-mp-layout3.html">Publication</a></li>
                                <li><a href="index-mp-layout4.html">Press Release</a></li>-->
                                <li><a href="{{ url('/news') }}">Blog</a></li>

                                <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Events & Conferences</a>
                            <div class="megamenu">
                              <div class="megamenu-row">
                                <div class="col3">
                                  <h2 class=""><strong>Conferences</strong></h2>
                                  <article class="post clearfix">
                                    <div class="entry-header">
                                      <div class="post-thumb"> 
                                        <img class="img-fullwidth" src="{{ asset('storage') }}/images/1.jpg"   style="width:180px; height:180px" alt=""> </div>
                                    </div>
                                    <div class="post-details">                        
                                      <p class="" style="text-align:justify">Connect with your community -- a global network of advocates for women's economic empowerment
                                        <br><a class="btn btn-success" href="{{ url('/events') }}/?type=Conference"> View All →</a> </p>
                                    </div>
                                  </article>
                                </div>

                                <div class="col3">
                                  <h4 class=""><strong>Upcoming Conferences:</strong></h4>
                                  <div class="list-dashed">
                                    @forelse($conference1 as $event)
                                
                                      <article class="post media-post clearfix pb-0 mb-10"> 
                                        <a href="{{ url('/event')}}/?slug={{ $event->slug}}" class="post-thumb">
                                          <img alt="{{ $event->title}}" src="{{ asset('storage') }}/{{ $event->featured_image}}" style="width:45px; height:45px">
                                        </a>
                                          <div class="post-right">
                                            <h5 class="post-title mt-0"><a href="{{ url('/event')}}/?slug={{ $event->slug}}">{{ $event->title}}</a></h5>
                                          </div>
                                        </article>
                                        @empty
                                        @endforelse
                                  </div>
                                </div>

                                <div class="col3">
                                  <h2 class=""><strong>Events</strong></h2>
                                  <article class="post clearfix">
                                    <div class="entry-header">
                                      <div class="post-thumb"> <img class="img-fullwidth" src="{{ asset('storage') }}/images/2.jpg"  style="width:180px; height:180px" alt=""> </div>
                                    </div>
                                    <div class="post-details">                       
                                      <p class="" style="text-align:justify">Explore online and offline opportunities and events that can enrich and advance your career
                                        <br><a class="btn btn-success" href="{{ url('/events') }}/?type=Event"> View All →</a> </p>
                                    </div>
                                  </article>
                                </div>

                                <div class="col3">
                                  <h4 class=""><strong>Upcoming Event:</strong></h4>
                                   @forelse($event1 as $event)
                                
                                  <article class="post media-post clearfix pb-0 mb-10"> 
                                    <a href="{{ url('/event')}}/?slug={{ $event->slug}}" class="post-thumb">
                                      <img alt="{{ $event->title}}" src="{{ asset('storage') }}/{{ $event->featured_image}}" style="width:45px; height:45px">
                                    </a>
                                      <div class="post-right">
                                        <h5 class="post-title mt-0"><a href="{{ url('/event')}}/?slug={{ $event->slug}}">{{ $event->title}}</a></h5>
                                      </div>
                                    </article>
                                    @empty
                                    @endforelse
                                  </div>
                                </div>

                              </div>
                            </div>
                        </li>
                        
                    </ul>
		          </nav>
		        </div>
		      </div>
		    </div>
		</header>
		  
		  <!-- Start main-content -->
		  <div class="main-content">

		    @yield('content')
            <!--<section class="clients bg-theme-colored">
                  <div class="container pt-0 pb-0">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="owl-carousel-6col clients-logo transparent text-center">
                          <div class="item"> <a href="#"><img src="{{ asset('storage') }}/clients/w1.png" alt=""></a></div>
                          <div class="item"> <a href="#"><img src="{{ asset('storage') }}/clients/w2.png" alt=""></a></div>
                          <div class="item"> <a href="#"><img src="{{ asset('storage') }}/clients/w3.png" alt=""></a></div>
                          <div class="item"> <a href="#"><img src="{{ asset('storage') }}/clients/w4.png" alt=""></a></div>
                          <div class="item"> <a href="#"><img src="{{ asset('storage') }}/clients/w5.png" alt=""></a></div>
                          <div class="item"> <a href="#"><img src="{{ asset('storage') }}/clients/w6.png" alt=""></a></div>
                          <div class="item"> <a href="#"><img src="{{ asset('storage') }}/clients/w3.png" alt=""></a></div>
                          <div class="item"> <a href="#"><img src="{{ asset('storage') }}/clients/w4.png" alt=""></a></div>
                          <div class="item"> <a href="#"><img src="{{ asset('storage') }}/clients/w5.png" alt=""></a></div>
                          <div class="item"> <a href="#"><img src="{{ asset('storage') }}/clients/w6.png" alt=""></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
            </section>-->
		  </div>
		  <!-- end main-content -->
		   
		  <!-- Footer -->
		  <footer id="footer" class="footer pb-0 bg-black-111">
            <div class="container pt-70 pb-40">
              <div class="row multi-row-clearfix">
                <div class="col-sm-6 col-md-4">
                  <div class="widget dark"> 
                    <h5 class="widget-title line-bottom">Who We Are</h5>
                    <p class="font-12 mt-20 mb-10">Business and Professional Women Nigeria is an affiliate of the International Federation of Business and Professional Women Nigeria which was found in 1961 and currently has clubs in several states of Nigeria including Enugu. </p>
                    <a class="text-gray font-12" href="{{ url('/about') }}"><i class="fa fa-angle-double-right text-theme-colored"></i> Read more</a>
                    <ul class="styled-icons icon-dark mt-20">
                      <li><a target="_blank" href="{{ $setting->facebook }}" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>
                      <li><a target="_blank"  href="{{ $setting->twitter }}" data-bg-color="#02B0E8"><i class="fa fa-twitter"></i></a></li>
                      <li><a target="_blank"  href="{{ $setting->linkedin }}" data-bg-color="#05A7E3"><i class="fa fa-linkedin"></i></a></li>
                      <li><a target="_blank"  href="{{ $setting->googleplus }}" data-bg-color="#A11312"><i class="fa fa-google-plus"></i></a></li>
                      <li><a target="_blank"  href="{{ $setting->youtube }}" data-bg-color="#C22E2A"><i class="fa fa-youtube"></i></a></li>
                      <li><a target="_blank"  href="{{ $setting->instagram }}" data-bg-color="#C22E2A"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-sm-6 col-md-2">
                  <div class="widget dark">
                    <h5 class="widget-title line-bottom">Pages</h5>
                    <ul class="list list-border">
                      <li><a href="{{ url('/about') }}">About Us</a></li>
                      <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                      <li><a href="{{ url('/news') }}">Blog</a></li>
                      <li><a href="{{ url('/contact') }}">Contact</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-sm-6 col-md-2">
                  <div class="widget dark">
                    <h5 class="widget-title line-bottom">Quick Links</h5>
                    <ul class="list-border list theme-colored angle-double-right">
                      <li><a href="#">Privacy Policy</a></li>
                      <li><a href="#">Disclaimer</a></li>
                      <li><a href="#">Terms of Use</a></li>
                      <li><a href="#">Copyright Notice</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4">
                  <div class="widget dark">
                    <h5 class="widget-title line-bottom">Quick Contact</h5>
                    <ul class="list list-border">
                      <li><a href="#"> <i class="fa fa-phone"></i> {{ $setting->phone }}</a></li>
                      <li><a href="#"><i class="fa fa-envelope-o "></i> {{ $setting->email }}</a></li>
                      <li><a href="#" class="lineheight-20"><i class="fa fa-address-o"></i> {{ $setting->address }}</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="footer-nav bg-black-222 p-20">
              <div class="row text-center">
                <div class="col-md-6">
                  <p class="text-white font-11 m-0">Copyright &copy;{{ date('Y') }} Business and Professional Women Enugu. All Rights Reserved</p>
                </div>
                <div class="col-md-6">
                  <p class="text-white font-11 m-0">Powered By <a style="color:white; font-weight:900px"  target="_blank" href="http://jexelmedia.com.ng/"> Jexel Media</a></p>
                </div>
              </div>
            </div>
          </footer>
		  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
		</div>
		<!-- end wrapper -->

		<!-- Footer Scripts -->
		<!-- JS | Custom script for all pages -->
		<script src="{{ asset('live/js/custom.js') }}"></script>

		<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
		      (Load Extensions only on Local File Systems ! 
		       The following part can be removed on Server for On Demand Loading) -->
		<script type="text/javascript" src="{{ asset('live/js/revolution-slider/js/extensions/revolution.extension.actions.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('live/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('live/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('live/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('live/js/revolution-slider/js/extensions/revolution.extension.migration.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('live/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('live/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('live/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('live/js/revolution-slider/js/extensions/revolution.extension.video.min.js') }}"></script>

	</body>
</html>