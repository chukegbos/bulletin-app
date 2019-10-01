@extends('layouts.live')
@section('pageTitle', 'About Us')
@section('content')

    <section class="inner-header divider parallax layer-overlay overlay-dark-5">
      <div class="container">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-white">Our Impact</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section>
      <div class="container pb-20">
        <div class="section-content">
          <div class="row">
        <!-- <div class="col-md-5">
              <div class="owl-carousel-1col" data-nav="true">
                @forelse($galleries as $gallery)
                <div class="item">
                  <img src="{{ asset('storage') }}/{{ $gallery->image }}" alt="{{ $gallery->name }}" style="height:350px">
                </div>
                @empty
                @endforelse   
              </div>
            </div>-->
            <div class="col-md-12">
              <h2 class="text-theme-colored mt-0 mb-20">Who We Are</h2>
              <p style="text-align:justify">Business and Professional Women Nigeria is an affiliate of the International Federation of Business and Professional Women Nigeria which was found in 1961 and currently has clubs in several states of Nigeria including Enugu. </p>
              <p style="text-align:justify">Like all other Business and Professional clubs worldwide, Business and Professional Women Enugu carries out projects and activities which are geared towards the attainment of the  goals of BPW International . </p>
              <p style="text-align:justify">In fact BPW Enugu has been adjudged to be the best club in Nigeria over the years based on the quantum and quality of her programmes and projects for which she has received numerous awards.</p>                
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

<section id="team" class="bg-silver-light">
      <div class="container">
        <div class="section-title">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="text-uppercase line-bottom-center mt-0">The <span class="text-theme-colored font-weight-600">Executives</span></h2>
                <div style="">
                    <ul>
                       <li><span style="color:green; font-size:16px; margin-right:10px">=></span>Barrister Tessy Igwani - Immediate Past President</li>
                       <li><span style="color:green; font-size:16px; margin-right:10px">=></span>Moore Justina - President</li>
                       <li><span style="color:green; font-size:16px; margin-right:10px">=></span>Lady Chinwe Nzegwu - Treasurer</li>
                       <li><span style="color:green; font-size:16px; margin-right:10px">=></span>Chikeonyia Adaeze - VP11(acting 1)</li>
                       <li><span style="color:green; font-size:16px; margin-right:10px">=></span>Ngozi Egwuonwu - Financial Sec.</li>
                       <li><span style="color:green; font-size:16px; margin-right:10px">=></span>Amaka Nwanji - PRO</li>
                    </ul>
                </div>
            </div>
          </div>
        </div>

        <!--<div class="section-content">
          <div class="row">
            @forelse($board1 as $board)
              <div class="col-sm-6 col-md-4 col-lg-4 pb-sm-30">
                <div class="volunteer">
                  <img class="img-fullwidth img-responsive" src="{{ asset('storage') }}/{{ $board->image }}" alt="">                
                  <div class="volunteer-info bg-theme-colored">
                      <h3 class="mb-0 mt-0"><a class="text-white" href="#">{{ $board->name }}</a></h3>
                      <p class="text-white">{{ $board->post }}</p>
                      <div class="volunteer-more text-white">
                        <p style="text-align:justify">{{ substr(strip_tags($board->description) , 0, 120) }}</p>
                        <div class="social-media">
                          <ul class="styled-icons icon-circled pt-5">
                            <li><a  target="_blank" href="{{ $board->facebook }}"><i class="fa fa-facebook text-white"></i></a></li>
                            <li><a  target="_blank" href="{{ $board->twiiter }}"><i class="fa fa-twitter text-white"></i></a></li>
                            <li><a  target="_blank" href="{{ $board->linkedin }}"><i class="fa fa-linkedin text-white"></i></a></li>                           
                            <li><a  target="_blank" href="{{ $board->instagram }}"><i class="fa fa-instagram text-white"></i></a></li>
                            <li><a  target="_blank" href="{{ $board->googleplus }}"><i class="fa fa-google-plus text-white"></i></a></li>
                          </ul>
                        </div>
                      </div>                    
                  </div>
                </div>  
              </div>
            @empty
            @endforelse
          </div>
        </div>-->
      </div>
</section>
@endsection
