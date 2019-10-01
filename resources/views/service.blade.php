@extends('layouts.live')
@section('pageTitle', $services->name)
@section('content')

<!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5">
      <div class="container">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-white">{{ $services->name }}</h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Causes -->
    <section>
      <div class="container">
        <div class="row mtli-row-clearfix">
          <div class="col-sm-6 col-md-9 col-lg-9">
            <div class="causes bg-white maxwidth500 mb-30">
              <div class="thumb">
                <img src="{{ asset('storage') }}/{{ $services->image }}" alt="{{ $services->name }}" class="img-fullwidth">              
              </div>
             
              <div class="causes-details clearfix  border-bottom-theme-color-1px p-15 pt-10 pb-10">               
                <p>{{ strip_tags($services->description) }}</p>               
              </div>
            </div>
            
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="sidebar sidebar-right mt-sm-30">
              <div class="widget">
                <h4 class="widget-title line-bottom">Our Programmes</h4>
                <ul class="list-divider list-border list check">
                    @forelse($services1 as $service)
                    <li><a href="{{ url('/service')}}/?service={{ $service->slug}}">{{ $service->name}}</a></li>
                    @empty
                    @endforelse
                </ul>
              </div>
              <div class="widget">

                <h4 class="widget-title line-bottom">Events</h4>
                 <div class="list-dashed">
                    <article class="post media-post clearfix pb-0 mb-10"> <a href="#" class="post-thumb"><img alt="" src="{{ asset('storage') }}/images/2.jpg" style="width:45px; height:45px"></a>
                      <div class="post-right">
                        <h5 class="post-title mt-0"><a href="#">Bankruptcy Rights Proceedings</a></h5>
                      </div>
                    </article>
                    <article class="post media-post clearfix pb-0 mb-10"> <a href="#" class="post-thumb"><img alt="" src="{{ asset('storage') }}/images/2.jpg" style="width:45px; height:45px"></a>
                      <div class="post-right">
                        <h5 class="post-title mt-0"><a href="#">Assertive and Persistent Advocacy</a></h5>
                       </div>
                    </article>
                    <article class="post media-post clearfix pb-0 mb-10"> <a href="#" class="post-thumb"><img alt="" src="{{ asset('storage') }}/images/2.jpg" style="width:45px; height:45px"></a>
                      <div class="post-right">
                        <h5 class="post-title mt-0"><a href="#">Bankruptcy Rights Proceedings</a></h5>
                      </div>
                    </article>
                    <article class="post media-post clearfix pb-0 mb-10"> <a href="#" class="post-thumb"><img alt="" src="{{ asset('storage') }}/images/2.jpg" style="width:45px; height:45px"></a>
                      <div class="post-right">
                        <h5 class="post-title mt-0"><a href="#">Assertive and Persistent Advocacy</a></h5>
                       </div>
                    </article>
                    <article class="post media-post clearfix pb-0 mb-10"> <a href="#" class="post-thumb"><img alt="" src="{{ asset('storage') }}/images/2.jpg" style="width:45px; height:45px"></a>
                      <div class="post-right">
                        <h5 class="post-title mt-0"><a href="#">Assertive and Persistent Advocacy</a></h5>
                       </div>
                    </article>
                  </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
