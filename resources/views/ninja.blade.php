@extends('layouts.live')
@section('pageTitle', 'Home')

@section('content')
<section id="home" class="hidden-xs">
      <div class="container-fluid p-0">
        
        <!-- Slider Revolution Start -->
        <div class="rev_slider_wrapper">
          <div class="rev_slider rev_slider_default" data-version="5.0">
            <ul>

              <!-- SLIDE 1 -->
              <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ asset('storage') }}/images/1.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 2" data-description="">
                <!-- MAIN IMAGE -->
                <img src="{{ asset('storage') }}/images/1.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
                  id="rs-1-layer-1"

                  data-x="['left']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['-110']" 
                  data-fontsize="['110']"
                  data-lineheight="['120']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:700;">Business
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent pl-20 pr-20"
                  id="rs-1-layer-2"

                  data-x="['left']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['-25']" 
                  data-fontsize="['35']"
                  data-lineheight="['54']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:600;">Start-ups for women 
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white" 
                  id="rs-1-layer-3"

                  data-x="['left']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['35','35','40']"
                  data-fontsize="['16','18',24']"
                  data-lineheight="['28']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">Empowering and encouraging business start-ups<br>  for women, offering mentorship and  incubations
                </div>
              </li>
              <!-- SLIDE 2 -->
              <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ asset('storage') }}/images/2.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 1" data-description="">
                <!-- MAIN IMAGE -->
                <img src="{{ asset('storage') }}/images/2.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-uppercase bg-theme-colored-transparent text-white font-raleway pl-30 pr-30"
                  id="rs-2-layer-2"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['-20']"
                  data-fontsize="['48']"
                  data-lineheight="['70']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:700; border-radius: 30px;">Skill Acquision 
                </div>

                <div class="tp-caption tp-resizeme text-uppercase  bg-dark-transparent-6 text-white font-raleway pl-30 pr-30"
                  id="rs-2-layer-1"
                
                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['-90']" 
                  data-fontsize="['28']"
                  data-lineheight="['54']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:400; border-radius: 30px;">Offering training and retraining of women in skill acquision 
                </div>
                <!-- LAYER NR. 3 
                <div class="tp-caption tp-resizeme text-white text-center" 
                  id="rs-2-layer-3"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['50']"
                  data-fontsize="['16','18',24']"
                  data-lineheight="['28']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">Every day we bring hope to millions of children in the world's<br>  hardest places as a sign of God's unconditional love.
                </div>-->

                <!-- LAYER NR. 4 -->
              </li>

              <!-- SLIDE 3 -->
              <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/bg/bg17.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 3" data-description="">
                <!-- MAIN IMAGE -->
                <img src="{{ asset('storage') }}/images/3.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent pr-20 pl-20"
                  id="rs-3-layer-1"

                  data-x="['right']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['-90']" 
                  data-fontsize="['64']"
                  data-lineheight="['72']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:600;"><span class="">Women &Leaders</span>
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white text-right" 
                  id="rs-3-layer-3"

                  data-x="['right']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['30']"
                  data-fontsize="['16','18',24']"
                  data-lineheight="['28']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">Raising the next generational leaders <br>to power every sector of the world's economy.
                </div>
              </li>

            </ul>
          </div>
          <!-- end .rev_slider -->
        </div>
        <!--  Revolution slider scriopt -->
        <script>
          $(document).ready(function(e) {
            $(".rev_slider_default").revolution({
              sliderType:"standard",
              sliderLayout: "auto",
              dottedOverlay: "none",
              delay: 5000,
              navigation: {
                keyboardNavigation: "off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                onHoverStop: "off",
                touch: {
                  touchenabled: "on",
                  swipe_threshold: 75,
                  swipe_min_touches: 1,
                  swipe_direction: "horizontal",
                  drag_block_vertical: false
                },
                arrows: {
                  style:"zeus",
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                  left: {
                    h_align:"left",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  },
                  right: {
                    h_align:"right",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  }
                },
                bullets: {
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  style:"metis",
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  direction:"horizontal",
                  h_align:"center",
                  v_align:"bottom",
                  h_offset:0,
                  v_offset:30,
                  space:5,
                  tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title"></span>'
                }
              },
              responsiveLevels: [1240, 1024, 778],
              visibilityLevels: [1240, 1024, 778],
              gridwidth: [1170, 1024, 778, 480],
              gridheight: [700, 768, 960, 720],
              lazyType: "none",
              parallax: {
                origo: "slidercenter",
                speed: 1000,
                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                type: "scroll"
              },
              shadow: 0,
              spinner: "off",
              stopLoop: "on",
              stopAfterLoops: 0,
              stopAtSlide: -1,
              shuffle: "off",
              autoHeight: "off",
              fullScreenAutoWidth: "off",
              fullScreenAlignForce: "off",
              fullScreenOffsetContainer: "",
              fullScreenOffset: "0",
              hideThumbsOnMobile: "off",
              hideSliderAtLimit: 0,
              hideCaptionAtLimit: 0,
              hideAllCaptionAtLilmit: 0,
              debugMode: false,
              fallbacks: {
                simplifyAll: "off",
                nextSlideOnWindowFocus: "off",
                disableFocusListener: false,
              }
            });
          });
        </script>
        <!-- Slider Revolution Ends -->
      </div>
</section>

<!--<section class="hidden-xs">
  <div class="container pt-0 pb-0">
    <div class="section-content">
      <div class="row equal-height-inner home-boxes" data-margin-top="-100px">
        <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay1">
          <div class="sm-height-auto">
            <div class="card effect__hover">
              <div class="card__front bg-theme-colored">
                <div class="card__text">
                  <div class="display-table-parent">
                    <div class="display-table">
                      <div class="display-table-cell">
                        <div class="text-center pt-30">
                          <i class="flaticon-charity-shaking-hands-inside-a-heart text-white font-64"></i>
                          <h4 class="text-uppercase"><a href="{{ url('/program') }}" class="text-white">Programmes</a></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card__back" data-bg-color="#e0e0e0">
                <div class="card__text">
                  <div class="display-table-parent">
                    <div class="display-table">
                      <div class="display-table-cell">
                        <h4 class="text-uppercase text-theme-colored">Our Programmes and Projects</h4>
                        <p>Lorem ipsum dolor sit amet soluta saepe odit error, maxime praesentium sunt udiandae</p>
                        <a href="{{ url('/program') }}" class="btn btn-default btn-theme-colored mt-10"> Read More </a>
                       </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
          <div class="sm-height-auto">
            <div class="card effect__hover">
              <div class="card__front  bg-theme-colored-darker2">
                <div class="card__text">
                  <div class="display-table-parent">
                    <div class="display-table">
                      <div class="display-table-cell">
                        <div class="text-center pt-30">
                          <i class="flaticon-charity-make-a-donation text-white font-64"></i>
                          <h4 class="text-uppercase"><a href="{{ url('/startup') }}" class="text-white">Mentorship</a></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card__back" data-bg-color="#e0e0e0">
                <div class="card__text">
                  <div class="display-table-parent">
                    <div class="display-table">
                      <div class="display-table-cell">
                        <h4 class="text-uppercase text-theme-colored">Mentorship</h4>
                        <p>Lorem ipsum dolor sit amet soluta saepe odit error, maxime praesentium sunt udiandae</p>
                        <a href="{{ url('/startup') }}" class="btn btn-default btn-theme-colored mt-10"> Read More </a>
                       </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay3">
          <div class="sm-height-auto">
            <div class="card effect__hover">
              <div class="card__front bg-theme-colored-darker3">
                <div class="card__text">
                  <div class="display-table-parent">
                    <div class="display-table">
                      <div class="display-table-cell">
                        <div class="text-center pt-30">
                          <i class="flaticon-charity-hands-with-hearts text-white font-64"></i>
                          <h4 class="text-uppercase"><a href="#" class="text-white">Become a Volunteer</a></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card__back" data-bg-color="#e0e0e0">
                <div class="card__text">
                  <div class="display-table-parent">
                    <div class="display-table">
                      <div class="display-table-cell">
                        <h4 class="text-uppercase text-theme-colored">Become a Volunteer</h4>
                        <p>Lorem ipsum dolor sit amet soluta saepe odit error, maxime praesentium sunt udiandae</p>
                        <a href="#" class="btn btn-default btn-theme-colored mt-10"> Read More </a>
                       </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay4">
          <div class="sm-height-auto">
            <div class="card effect__hover">
              <div class="card__front bg-theme-colored-darker4">
                <div class="card__text">
                  <div class="display-table-parent">
                    <div class="display-table">
                      <div class="display-table-cell">
                        <div class="text-center pt-30">
                          <i class="flaticon-charity-health-insurance text-white font-64"></i>
                          <h4 class="text-uppercase"><a href="#" class="text-white">Empowerment</a></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card__back" data-bg-color="#e0e0e0">
                <div class="card__text">
                  <div class="display-table-parent">
                    <div class="display-table">
                      <div class="display-table-cell">
                        <h4 class="text-uppercase text-theme-colored">Leadership Empoverment</h4>
                        <p>Lorem ipsum dolor sit amet soluta saepe odit error, maxime praesentium sunt udiandae</p>
                        <a href="#" class="btn btn-default btn-theme-colored mt-10"> Read More </a>
                       </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>-->

<section>
    <div class="container">
      <div class="section-content">
        <div class="row">
          <div class="col-md-12">
            <h3 class="text-uppercase font-28 letter-space-3">About <span class="text-theme-colored">{{ $setting->sitename}}</span></h3>
           
            <div class="row">
              <div class="col-md-4">
                <p style="text-align:justify">Business and Professional Women Nigeria is an affiliate of the International Federation of Business and Professional Women Nigeria which was found in 1961 and currently has clubs in several states of Nigeria including Enugu. </p>
                <p style="text-align:justify">Like all other Business and Professional clubs worldwide, Business and Professional Women Enugu carries out projects and activities which are geared towards the attainment of the  goals of BPW International . </p>
              </div>
              <div class="col-md-4">
                <p style="text-align:justify">In fact BPW Enugu has been adjudged to be the best club in Nigeria over the years based on the quantum and quality of her programmes and projects for which she has received numerous awards.</p>
                <p style="text-align:justify">{{ $setting->mission }}</p>
              </div>

              <div class="col-md-4">
                <div class="thumb">
                  <img alt="" src="{{ asset('storage') }}/images/1.jpg" class="img-fullwidth">
                </div>
              </div>
            </div>
          </div>
          
        </div>         
      </div>
    </div>
</section>

<section class="divider parallax layer-overlay overlay-theme-colored-8" data-bg-img="{{ asset('storage') }}/images/1.jpg">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-6">
        <h2 class="text-white">Our Vision</h2>
        <p class="text-white">{{ $setting->vision }}</p>
      </div>
      <div class="col-md-6">
        <h2 class="text-white">Mission Statement</h2>
        <p class="text-white">{{ $setting->mission }} </p>
      </div>
    </div>
  </div>
</section>

<section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <h2 class="line-bottom border-bottom mt-0">Upcoming Events</h2>
              @forelse($event3 as $event) 
              <div class="event media sm-maxwidth400 border-bottom mt-5 mb-0 pt-10 pb-15">
                <div class="row">
                  <div class="col-xs-2 col-md-3 pr-0">
                    <div class="event-date text-center border-theme-color-1px p-0 pt-10 pb-10 sm-custom-style">
                      <ul>
                        <li class="font-28 text-theme-colored font-weight-700">{{ $event->date_event->day }}/{{ $event->date_event->month}}</li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-xs-9 pr-10 pl-10">
                    <div class="event-content mt-10 p-5 pb-0 pt-0">
                      <h5 class="media-heading font-16 font-weight-600"><a href="{{ url('/event')}}/?slug={{ $event->slug}}">{{ $event->title }}</a></h5>
                      <ul class="list-inline font-weight-600 text-gray-dimgray">
                        <li><i class="fa fa-clock-o text-theme-colored"></i>  {{ \Carbon\Carbon::createFromTimeStamp(strtotime($event->date_event))->toFormattedDateString() }} -  {{ \Carbon\Carbon::createFromTimeStamp(strtotime($event->end_event))->toFormattedDateString() }}</li>
                        <li> <i class="fa fa-map-marker text-theme-colored"></i> {{ $event->venue }}</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              @empty
              @endforelse 
            </div>
            
            <!--
            <div class="col-xs-12 col-sm-6 col-md-4 pb-sm-20">
              <div class="image-box-thum">
                <img class="img-fullwidth" alt="" src="{{ asset('storage') }}/images/1.jpg" style="width:180px; height:180px">
              </div>
              <div class="image-box-details pt-20 pb-sm-20">
                <h3 class="title mt-0 line-bottom">Empowerment</h3>
                <p class="desc mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis ipsa ullam dicta suscipit ipsum</p>
                <a href="#" class="btn btn-default btn-sm btn-theme-colored">Read more</a>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 pb-sm-20">
              <div class="image-box-thum">
                <img class="img-fullwidth" alt="" src="{{ asset('storage') }}/images/2.jpg"   style="width:180px; height:180px">
              </div>
              <div class="image-box-details pt-20 pb-sm-20">
                <h3 class="title mt-0 line-bottom">Trainings</h3>
                <p class="desc mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis ipsa ullam dicta suscipit ipsum</p>
                <a href="#" class="btn btn-default btn-sm btn-theme-colored">Read more</a>
              </div>
            </div>
            -->
          </div>
        </div>
      </div>
</section>

  <!-- Section: Causes <section id="causes" class="bg-silver-light">
  <div class="container">
    <div class="section-title text-center">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <h2 class="text-uppercase line-bottom-center mt-0">Our <span class="text-theme-colored font-weight-600">Start Ups</span></h2>
          <div class="title-icon">
            <i class="flaticon-charity-hand-holding-a-heart"></i>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem voluptatem obcaecati! <br>ipsum dolor sit Rem autem voluptatem obcaecati</p>
        </div>
      </div>
    </div>
    <div class="section-content">
      <div class="row">
        @forelse($products as $product)
        <div class="col-sm-6 col-md-6">
          <div class="causes bg-white border-1px border-bottom-theme-color-1px clearfix mb-30">
            <div class="col-md-5 col-lg-5 p-0">
              <div class="thumb">
                <img class="img-fullwidth" alt="" src="{{ asset('storage') }}/{{ $product->image }}" style="width:180px; height:180px">                   
              </div>
            </div>
            <div class="col-md-7 col-lg-7 p-0">
              <div class="causes clearfix p-20 pt-15">
                <h3 class="mt-0"><a class="text-theme-colored" href="{{ url('/startups')}}/?startup={{ $product->slug}}">{{ substr(($product->name) , 0, 25) }}</a></h3>
                <p class="pt-0">{{ substr(strip_tags($product->description) , 0, 150) }} ...</p>
                <p><a href="{{ url('/startups')}}/?startup={{ $product->slug}}" class="btn btn-success"> View</a></p>                  
              </div>
            </div>
          </div>
        </div>
        @empty
        @endforelse
      </div>
    </div>
  </div>
</section>
-->

@endsection
