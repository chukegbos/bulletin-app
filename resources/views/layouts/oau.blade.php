<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta name="keywords" content="">
		<meta name="author" content="">
		<meta name="description" content="">
		<title>@yield('pageTitle') - {{ $setting->sitename }} </title>


		<link href="{{ asset('oau/superfish.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('oau/style.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('oau/event_template.htm" rel="stylesheet" type="text/css">
		<link href="{{ asset('oau/responsive.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('oau/css.css') }}" rel="stylesheet" type="text/css">
		<script type="text/javascript" async="" src="{{ asset('oau/plugin-api-min.js') }}"></script><
		<script src="{{ asset('oau/k2.htm" type="text/javascript"></script>
		<script src="{{ asset('oau/jquery_003.js') }}" type="text/javascript"></script>
		<script src="{{ asset('oau/jquery-noconflict.js') }}" type="text/javascript"></script>
		<script src="{{ asset('oau/jquery-migrate.js') }}" type="text/javascript"></script>
		<script src="{{ asset('oau/jquery-migrate_002.js') }}" type="text/javascript"></script>
		<script src="{{ asset('oau/jquery.js') }}" type="text/javascript"></script>
		<script src="{{ asset('oau/jquery_002.htm" type="text/javascript"></script>
		<script src="{{ asset('oau/jquery.htm" type="text/javascript"></script>
		<script src="{{ asset('oau/jquery_002.js') }}" type="text/javascript"></script>
		<script src="{{ asset('oau/timetable.htm" type="text/javascript"></script>
		<script src="{{ asset('oau/bootstrap.htm" type="text/javascript"></script>
		<script src="{{ asset('oau/core.js') }}" type="text/javascript"></script>
		<script src="{{ asset('oau/keepalive.js') }}" type="text/javascript"></script>
		<script src="{{ asset('oau/uikit2-2215fc87.js') }}" type="text/javascript"></script>
		<script src="{{ asset('oau/wk-scripts-01367ead.js') }}" type="text/javascript"></script>
		<link rel="stylesheet" href="{{ asset('oau/bootstrap.css') }}">
		<link rel="stylesheet" href="{{ asset('oau/plyr.css') }}">
		<link rel="stylesheet" href="{{ asset('oau/theme.css') }}">
		<link rel="stylesheet" href="{{ asset('oau/custom.htm">
		<script src="{{ asset('oau/uikit.htm"></script>
		<script src="{{ asset('oau/uikit-core-components.js') }}"></script>
		<script src="{{ asset('oau/social.htm"></script>
		<script src="{{ asset('oau/plyr.js') }}"></script>
		<script src="{{ asset('oau/theme.js') }}"></script>
		<style type="text/css">
			.fb_hidden{
				position:absolute;top:-10000px;z-index:10001}.fb_reposition{overflow:hidden;position:relative}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:"lucida grande", tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>div{overflow:hidden}@keyframes fb_transform{from{opacity:0;transform:scale(.95)}to{opacity:1;transform:scale(1)}}.fb_animate{animation:fb_transform .3s forwards
				}
			.fb_dialog{background:rgba(82, 82, 82, .7);position:absolute;top:-10000px;z-index:10001}.fb_dialog_advanced{border-radius:8px;padding:10px}.fb_dialog_content{background:#fff;color:#373737}.fb_dialog_close_icon{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;cursor:pointer;display:block;height:15px;position:absolute;right:18px;top:17px;width:15px}.fb_dialog_mobile .fb_dialog_close_icon{left:5px;right:auto;top:5px}.fb_dialog_padding{background-color:transparent;position:absolute;width:1px;z-index:-1}.fb_dialog_close_icon:hover{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent}.fb_dialog_close_icon:active{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent}.fb_dialog_iframe{line-height:0}.fb_dialog_content .dialog_title{background:#6d84b4;border:1px solid #365899;color:#fff;font-size:14px;font-weight:bold;margin:0}.fb_dialog_content .dialog_title>span{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;float:left;padding:5px 0 7px 26px}body.fb_hidden{height:100%;left:0;margin:0;overflow:visible;position:absolute;top:-10000px;transform:none;width:100%}.fb_dialog.fb_dialog_mobile.loading{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;min-height:100%;min-width:100%;overflow:hidden;position:absolute;top:0;z-index:10001}.fb_dialog.fb_dialog_mobile.loading.centered{background:none;height:auto;min-height:initial;min-width:initial;width:auto}.fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner{width:100%}.fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content{background:none}.loading.centered #fb_dialog_loader_close{clear:both;color:#fff;display:block;font-size:18px;padding-top:20px}#fb-root #fb_dialog_ipad_overlay{background:rgba(0, 0, 0, .4);bottom:0;left:0;min-height:100%;position:absolute;right:0;top:0;width:100%;z-index:10000}#fb-root #fb_dialog_ipad_overlay.hidden{display:none}.fb_dialog.fb_dialog_mobile.loading iframe{visibility:hidden}.fb_dialog_mobile .fb_dialog_iframe{position:sticky;top:0}.fb_dialog_content .dialog_header{background:linear-gradient(from(#738aba), to(#2c4987));border-bottom:1px solid;border-color:#043b87;box-shadow:white 0 1px 1px -1px inset;color:#fff;font:bold 14px Helvetica, sans-serif;text-overflow:ellipsis;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;vertical-align:middle;white-space:nowrap}.fb_dialog_content .dialog_header table{height:43px;width:100%}.fb_dialog_content .dialog_header td.header_left{font-size:12px;padding-left:5px;vertical-align:middle;width:60px}.fb_dialog_content .dialog_header td.header_right{font-size:12px;padding-right:5px;vertical-align:middle;width:60px}.fb_dialog_content .touchable_button{background:linear-gradient(from(#4267B2), to(#2a4887));background-clip:padding-box;border:1px solid #29487d;border-radius:3px;display:inline-block;line-height:18px;margin-top:3px;max-width:85px;padding:4px 12px;position:relative}.fb_dialog_content .dialog_header .touchable_button input{background:none;border:none;color:#fff;font:bold 12px Helvetica, sans-serif;margin:2px -12px;padding:2px 6px 3px 6px;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog_content .dialog_header .header_center{color:#fff;font-size:16px;font-weight:bold;line-height:18px;text-align:center;vertical-align:middle}.fb_dialog_content .dialog_content{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;border:1px solid #4a4a4a;border-bottom:0;border-top:0;height:150px}.fb_dialog_content .dialog_footer{background:#f5f6f7;border:1px solid #4a4a4a;border-top-color:#ccc;height:40px}#fb_dialog_loader_close{float:left}.fb_dialog.fb_dialog_mobile .fb_dialog_close_button{text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{visibility:hidden}#fb_dialog_loader_spinner{animation:rotateSpinner 1.2s linear infinite;background-color:transparent;background-image:url(https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);background-position:50% 50%;background-repeat:no-repeat;height:24px;width:24px}@keyframes rotateSpinner{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}
			.fb_iframe_widget{display:inline-block;position:relative}.fb_iframe_widget span{display:inline-block;position:relative;text-align:justify}.fb_iframe_widget iframe{position:absolute}.fb_iframe_widget_fluid_desktop,.fb_iframe_widget_fluid_desktop span,.fb_iframe_widget_fluid_desktop iframe{max-width:100%}.fb_iframe_widget_fluid_desktop iframe{min-width:220px;position:relative}.fb_iframe_widget_lift{z-index:1}.fb_iframe_widget_fluid{display:inline}.fb_iframe_widget_fluid span{width:100%}
		</style>
	</head>

	<body id="tm-container" class="tm-sidebar-a-left tm-sidebars-1 tm-isblog">
  		<div class="tm-header-bg"></div>

		<div class="tm-inner-container uk-container uk-container-center">
    		<div class="uk-sticky-placeholder uk-hidden-small uk-hidden-touch">
      			<div class="uk-sticky-placeholder" style="height: 0px; margin: 0px;">
      				<div data-uk-smooth-scroll="" data-uk-sticky="{top:-500}" style="margin: 0px;" class="">
      					<a class="tm-totop-scroller uk-animation-slide-bottom" href="#"></a>
      				</div>
      			</div>
    		</div>
    
        	<div id="tm-toolbar" class="tm-toolbar">
  				<div class="uk-container uk-container-center uk-clearfix">
					<div class="uk-float-left">
						<div class="uk-panel">
							<a href="" class="fa fa-facebook" target="_blank"></a>
							<a href="" class="fa fa-twitter" target="_blank"></a>
							<a href="" class="fa fa-instagram" target="_blank"></a>
							<a href="" class="fa fa-youtube" target="_blank"></a>
						</div>
					</div>
    
        			<div class="uk-float-right uk-hidden-small">
						<form id="" class="uk-search" action="" method="post">
							<input class="uk-search-field" type="text" name="searchword" placeholder="search...">
							<input type="hidden" name="task" value="search">
							<input type="hidden" name="option" value="com_search">
							<input type="hidden" name="Itemid" value="502">
						</form>
					</div>
    
        			<div class="uk-float-right">
        				<div class="uk-panel">
							<div class="uk-button-dropdown" data-uk-dropdown="" aria-haspopup="true" aria-expanded="false">
								<a class="uk-button-link uk-button" href="#" target="_self">
									Documents<i class="uk-icon-angle-down"></i>
								</a>
								<div class="uk-dropdown uk-dropdown-small uk-color uk-dropdown-bottom" style="top: 32px; left: 0px;" aria-hidden="true" tabindex="">
									<ul class="uk-nav uk-nav-dropdown">
										<li><a href="https://oauife.edu.ng/documents/file/46-anti-sexual-harassment-policy" target="_blank">Anti Sexual Harassment Policy</a></li>
										<li><a href="https://oauife.edu.ng/documents/category/2-administrative-manual" target="_blank" rel="noopener noreferrer"> Administrative Manuals </a></li> 
										<li><a href="https://oauife.edu.ng/documents/category/3-code-of-conduct" target="_blank" rel="noopener noreferrer">Code of Conduct</a></li> 
										<li><a href="https://oauife.edu.ng/documents/">More Documents...</a></li> 
									</ul>
								</div>
							</div>
						</div>
						<div class="uk-panel hidden-phone">
							<ul class="uk-subnav uk-subnav-line">
								<li><a href="http://eportal.oauife.edu.ng/" target="_blank" rel="noopener noreferrer">E-portal</a></li>
								<li><a href="http://netque.oauife.edu.ng/" target="_blank" rel="noopener noreferrer"> NetQue</a></li>
								<li><a href="https://www.etx-ng.com/oau" target="_blank" rel="noopener noreferrer">Transcript</a></li>
								<li><a href="http://mail.google.com/a/oauife.edu.ng/" target="_blank" rel="noopener noreferrer">Staff Mail</a></li>
								<li><a href="http://ir.oauife.edu.ng/" target="_blank" rel="noopener noreferrer">OAU IR</a></li>
							</ul>
						</div>
						<div class="uk-panel">
							<div class="uk-button-dropdown" data-uk-dropdown="" aria-haspopup="true" aria-expanded="false">
								<a class="uk-button-link uk-button" href="#" target="_self">
									Quick Links <i class="uk-icon-angle-down"></i>
								</a>
								<div class="uk-dropdown uk-dropdown-small uk-color uk-dropdown-bottom" style="top: 32px; left: 0px;" aria-hidden="true" tabindex="">
									<ul class="uk-nav uk-nav-dropdown">
										<li><a href="https://mail.google.com/" target="_blank">Student Mail</a></li>
										<li><a href="http://onlinecounsellors.oauife.edu.ng/" target="_blank" rel="noopener noreferrer"> Online Counseling</a></li> 
									</ul>
								</div>
							</div>
						</div>
					</div>

  				</div>
			</div>

			<div class="uk-sticky-placeholder" style="height: 133px; margin: 0px;">
				<div class="tm-header-container" data-uk-sticky="{showup: true, animation: 'uk-animation-slide-top'}" style="margin: 0px;">
					<div class="tm-header-call">
					  	<div class="tm-header uk-flex uk-flex-middle uk-flex-space-between">
	            			<a class="tm-logo uk-hidden-small" href="https://oauife.edu.ng/">
								<img class="" src="{{ asset('oau/logo-oau.png') }}" alt="school and education" width="250" height="50">
							</a>
	      
	            			<a class="tm-logo-small uk-visible-small" href="https://oauife.edu.ng/">
								<img class="" src="{{ asset('oau/logo-oau.png') }}" alt="Obafemi Awolowo University" width="150" height="40">
							</a>
	       
	      					<div class="uk-flex uk-flex-middle uk-flex-space-between">
	                			<div class="uk-hidden-small">
	            					<nav class="tm-navbar uk-navbar">
	                        			<div class="icemegamenu">
	                        				<div class="ice-megamenu-toggle">Menu</div>
	                        				<div class="icemegamenu">
	                        					<ul id="icemegamenu" class="meganizr mzr-slide mzr-responsive">
	                        						<li id="iceMenu_781" class="iceMenuLiLevel_1">
	                        							<a href="https://oauife.edu.ng/" class=" iceMenuTitle ">
	                        								<span class="icemega_title icemega_nosubtitle">Home</span>
	                        							</a>
	                        						</li>
	                        						<li id="iceMenu_1047" class="iceMenuLiLevel_1 mzr-drop parent">
	                        							<a href="#" class=" iceMenuTitle ">
	                        								<span class="icemega_title icemega_nosubtitle">About Us</span>
	                        							</a>
	                        							<ul class="icesubMenu icemodules sub_level_1" style="width:220px">
	                        								<li>
	                        									<div style="float:left;width:220px" class="iceCols">
	                        										<ul>
	                        											<li id="iceMenu_1050" class="iceMenuLiLevel_2">
	                        												<a href="https://oauife.edu.ng/about-oau/history" class=" iceMenuTitle ">
	                        													<span class="icemega_title icemega_nosubtitle">About OAU</span>
	                        												</a>
	                        											</li>
	                        											<li id="iceMenu_1051" class="iceMenuLiLevel_2">
	                        												<a href="https://oauife.edu.ng/about-oau/vission-mission" class=" iceMenuTitle ">
	                        													<span class="icemega_title icemega_nosubtitle">Vision &amp; Mission</span>
	                        												</a>
	                        											</li>
	                        											<li id="iceMenu_1049" class="iceMenuLiLevel_2">
	                        												<a href="https://oauife.edu.ng/about-oau/the-foundation" class=" iceMenuTitle ">
	                        													<span class="icemega_title icemega_nosubtitle">The Foundation</span>
	                        												</a>
	                        											</li>
	                        											<li id="iceMenu_1052" class="iceMenuLiLevel_2">
	                        												<a href="https://oauife.edu.ng/about-oau/principal-officers" class=" iceMenuTitle ">
	                        													<span class="icemega_title icemega_nosubtitle">Principal Officers</span>
	                        												</a>
	                    												</li>
	                    												<li id="iceMenu_1053" class="iceMenuLiLevel_2">
	                    													<a href="https://oauife.edu.ng/about-oau/university-council" class=" iceMenuTitle ">
	                    														<span class="icemega_title icemega_nosubtitle">University Officials
	                    														</span>
	                    													</a>
	                    												</li>
	                    												<li id="iceMenu_1055" class="iceMenuLiLevel_2">
	                    													<a href="https://oauife.edu.ng/about-oau/council" class=" iceMenuTitle ">
	                    														<span class="icemega_title icemega_nosubtitle">University Council
	                    														</span>
	                    													</a>
	                    												</li>
	                    											</ul>
	                    										</div>
	                    									</li>
	                    								</ul>
	                    							</li>
	                    						</ul>
	                    					</div>
	                    				</div>
										<script type="text/javascript">
											jQuery(document).ready(function(){
												var browser_width1 = jQuery(window).width();
												jQuery("#icemegamenu").find(".icesubMenu").each(function(index){
													var offset1 = jQuery(this).offset();
													var xwidth1 = offset1.left + jQuery(this).width();
													if(xwidth1 >= browser_width1){
														jQuery(this).addClass("ice_righttoleft");
													}
												});
												
											})
											jQuery(window).resize(function() {
												var browser_width = jQuery(window).width();
												jQuery("#icemegamenu").find(".icesubMenu").removeClass("ice_righttoleft");
												jQuery("#icemegamenu").find(".icesubMenu").each(function(index){
													var offset = jQuery(this).offset();
													var xwidth = offset.left + jQuery(this).width();
													
													if(xwidth >= browser_width){
														jQuery(this).addClass("ice_righttoleft");
													}
												});
											});
										</script>
			                        </nav>
			        			</div>
	                			<a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas=""></a>
	        
	                			<div class="tm-call-action uk-hidden-small uk-flex uk-flex-middle">
	            					<div class="">
										<h4>Talk to us</h4>
										<p>
											<span id="cloak3737351978a859ef0ed9044b3e2ac2dc">
												<a href="mailto:info@oauife.edu.ng">info@oauife.edu.ng</a>
											</span>
										</p>
									</div>        
								</div> 
	      					</div>
				        </div>
				  	</div>

				    <div class="tm-minibar">
				      	<div class="">
							<p>Information about OAU Certificate and Academic Transcript...<a href="https://oauife.edu.ng/faq" target="_blank" rel="noopener">Read More</a></p>
						</div>  
					</div>
				</div>
			</div>    
			    
			<div class="tm-container">
			    <div id="tm-middle" class="tm-middle uk-grid" data-uk-grid-match="" data-uk-grid-margin="">
					<div class="tm-main uk-width-medium-3-4 uk-push-1-4" style="min-height:708px;">
						<main id="tm-content" class="tm-content">
                        	<div id="system-message-container">
							</div>
							<article class="uk-article tm-article">
								<div class="tm-article-wrapper">
									<div class="tm-article-content uk-margin-top-remove">
										<div class="tm-article">
											<img src="{{ asset('oau/main-top.htm') }}" alt="">
											<div class="tm-toggle uk-accordion" data-uk-accordion="{showfirst:false,duration:300}">
												<h3 class="uk-accordion-title">
													<i class="tm-toggle-button uk-float-right"></i>Dean's Welcome Address
												</h3>
												<div data-wrapper="true" style="height: 0px; position: relative; overflow: hidden;" aria-expanded="false">
													<div class="uk-accordion-content">
														<p>
															I welcome all the local and international stakeholders to the webpage
														 of the Faculty of Law, Obafemi Awolowo University, Ile-Ife, Osun State,
														 Nigeria. This is a fascinating centre of excellence where your lofty 
														aspirations and yearnings for legal knowledge are catered for.</p>
														<p>The Faculty of Law is one of the Foundation Faculties of this 
														University since 1962. In 1960, the Committee on Legal Education for 
														Students from Africa had been set up under the legendary Lord Denning. 
														The Report of the Committee stressed the need for the training of 
														lawyers within Africa. In Nigeria, however, things had moved faster than
														 the Denning Committee. The Unworths Committee on the Future of the 
														Nigerian legal profession, which was set up in April 1959, had submitted
														 its Report in October 1959. The Committee recommended, inter alia that:</p>
														<p>Nigeria should establish its own system of legal education, and</p>
														<p>A Faculty of law be established in the first instance at University 
														College, Ibadan, though, it was hoped that Faculties of Law would be 
														established at other Nigerian Universities.</p>
														<p>This development gave impetus to the establishment of Law Faculties 
														in Nigeria Universities. By October 1962 when the Faculty of Law of the 
														University of Ife took off, the necessary professional institutions and 
														legislation were in place, i.e., the Council of legal Education and the 
														legal Education Act of 1962. Following the demise of one of the foremost
														 Nigerian politicians of the old Western Region, Chief Obafemi Awolowo, 
														the name “University of Ife” was changed to “Obafemi Awolowo University,
														 Ile-Ife” in 1987.</p>
														<p>Professor&nbsp; S.B. Odunsi</p>
														<p>Dean of Faculty</p>
													</div>
												</div>
											</div>

											<div class="tm-toggle uk-accordion" data-uk-accordion="{showfirst:false,duration:300}">
												<h3 class="uk-accordion-title">
													<i class="tm-toggle-button uk-float-right"></i>Departments
												</h3>
												<div data-wrapper="true" style="overflow:hidden;height:0;position:relative;" aria-expanded="false">
													<div class="uk-accordion-content">
														<p>The following departments presently constitute the Faculty. </p>
														<ul>
															<li><a href="#" target="_blank">International Law</a></li>
															<li><a href="#" target="_blank">Jurisprudence and Private Law</a></li>
															<li><a href="#" target="_blank">Public Law</a></li>
															<li><a href="#" target="_blank">Business Law</a></li>
														</ul>
													</div>
												</div>
											</div>
   										</div>
   									</div>
   								</div>
   							</article>          
   						</main>
   					</div>
        
                    <aside class="tm-sidebar-a uk-width-medium-1-4 uk-pull-3-4 uk-row-first" style="min-height: 708px;">
                    	<div class="uk-panel uk-panel-box uk-padding-remove">
							<div class="uk-panel uk-panel-box tm-panel-teaser">
								<div class="uk-panel-teaser">
									<img src="{{ asset('oau/dean-welcome.htm') }}" alt="Dean's welcome" width="450" height="300">
								</div>
								<div class="tm-teaser-content">
									<h3 class="uk-module-title">Dean's welcome</h3>
									I welcome all the local and international stakeholders to the webpage of the Faculty of Law.
									<div class="tm-social-icons ">
										<a href="#" class="uk-icon-button uk-icon-facebook" target="_blank"></a>
										<a href="#" class="uk-icon-button uk-icon-twitter" target="_blank"></a>
										<a href="#" class="uk-icon-button uk-icon-linkedin" target="_blank"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="uk-panel uk-panel-box uk-panel-box-primary">
							<h3 class="uk-module-title">Handbook</h3>
							<ul class="uk-list list-icons">
								<li><i class="uk-icon-file-pdf-o"></i><a href="#">Handbook</a></li>
							</ul>
						</div>
					</aside>
				</div>
			</div>
  		</div>

    	<div id="tm-block-footer">
		    <div class="uk-container uk-container-center">
		      	<section class=" tm-block-footer uk-grid uk-grid-match uk-grid-collapse" data-uk-grid-match="{target:'&gt; div &gt; .uk-panel'}" data-uk-grid-margin="">
					<div class="uk-width-1-1 uk-width-medium-1-5 uk-row-first">
						<div class="uk-panel uk-panel-box" style="min-height: 314px;">
							<h3 class="uk-h4 uk-module-title uk-margin-bottom ">About Us</h3>
							<ul class="uk-list ">
								<li><a href="https://oauife.edu.ng/about-oau/history">About OAU</a></li>
								<li><a href="https://oauife.edu.ng/about-oau/vission-mission">Vision &amp; Mission </a></li>
								<li><a href="https://oauife.edu.ng/about-oau/the-foundation">The Foundation</a></li>
								<li><a href="https://oauife.edu.ng/about-oau/principal-officers">Principal Officers</a></li>
								<li><a href="https://oauife.edu.ng/about-oau/university-council">University Officials</a></li>
								<li><a href="https://oauife.edu.ng/about-oau/council">University Council</a></li>
							</ul>
						</div>
					</div>
					<div class="uk-width-1-1 uk-width-medium-1-5">
						<div class="uk-panel uk-panel-box" style="min-height: 314px;">
							<h3 class="uk-h4 uk-module-title uk-margin-bottom ">Admissions</h3>
							<ul class="uk-list ">
								<li><a href="https://oauife.edu.ng/admission/undergraduate">Undergraduate</a></li>
								<li><a href="https://oauife.edu.ng/admission/postgraduate">Postgraduate</a></li>
								<li><a href="http://oaucdl.edu.ng/">Distance Learning</a></li>
								<li><a href="https://oauife.edu.ng/academics/colleges">Colleges</a></li>
								<li><a href="https://oauife.edu.ng/academics/departments">Departments</a></li>
							</ul>
						</div>
					</div>
					<div class="uk-width-1-1 uk-width-medium-1-5">
						<div class="uk-panel uk-panel-box" style="min-height: 314px;">
							<h3 class="uk-h4 uk-module-title uk-margin-bottom ">Units</h3>
							<ul class="uk-list ">
								<li><a href="http://intecu.oauife.edu.ng/" target="_blank">INTECU</a></li>
								<li><a href="http://computercentre.oauife.edu.ng/" target="_blank">Computer Centre</a></li>
								<li><a href="https://oauife.edu.ng/administration/registry">Registry</a></li>
								<li><a href="#">Bursary</a></li>
							</ul>
						</div>
					</div>
					<div class="uk-width-1-1 uk-width-medium-2-5">
						<div class="uk-panel uk-panel-box" style="min-height: 314px;">
							<h2 class="uk-margin-bottom tm-quote tm-thin-font">Great Ife, the Citadel of Wisdom, the place of Arts and Science where men and women seek knowledge.</h2>
						</div>
					</div>
				</section>
	    	</div>
	  	</div>
  
	    <footer id="tm-footer" class="tm-footer uk-position-relative">
	    	<div class="uk-container uk-container-center">
	      		<div class="uk-flex uk-flex-middle uk-flex-space-between uk-text-center-small">
	        		<div class="tm-footer-left">
	        			<div class="uk-panel">
	        				© 2019 Obafemi Awolowo University | Powered by <a href="http://intecu.oauife.edu.ng/" target="_blank" rel="noopener">INTECU</a>
	        			</div>        
	        		</div>

			        <div class="tm-footer-right">
			        	<div class="uk-panel">
							<div class="uk-text-right">
								<a href="https://www.facebook.com/OAUniversity" class="uk-icon-button uk-icon-facebook" target="_blank"></a>
								<a href="https://twitter.com/OAUniversity" class="uk-icon-button uk-icon-twitter" target="_blank"></a>
								<a href="https://www.instagram.com/OAUniversity/" class="uk-icon-button uk-icon-instagram" target="_blank"></a>
								<a href="http://youtube.com/channel/UCGRJq_dnirj1OjEiSamcoDA" class="uk-icon-button uk-icon-youtube" target="_blank"></a>
							</div>
						</div>        
					</div>
				</div>
		    </div>
		</footer>
	</body>
</html>