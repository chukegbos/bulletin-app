@extends('layouts.live')
@section('pageTitle', 'Our Programmes And Projects')
@section('content')

    <section class="inner-header divider parallax layer-overlay overlay-dark-5">
      <div class="container">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-white">Our Programmes And Projects</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
<section id="causes" class="bg-silver-light">
  <div class="container">
    
    <div class="section-content">
      <div class="row">
        @forelse($services as $service)
        <div class="col-sm-6 col-md-6">
          <div class="causes bg-white border-1px border-bottom-theme-color-1px">
            <div class="col-md-5 col-lg-5">
              <div class="thumb">
                <img class="img-fullwidth" alt="" src="{{ asset('storage') }}/{{ $service->image }}" style="width:180px; height:180px">                   
              </div>
            </div>
            <div class="col-md-7 col-lg-7">
              <div class="causes">
                <h3 class="mt-0"><a class="text-theme-colored" href="{{ url('/service')}}/?service={{ $service->slug}}">{{ substr(($service->name) , 0, 20) }}</a></h3>
                <p class="pt-0">{{ substr(strip_tags($service->description) , 0, 150) }} ...</p>
                <p><a href="{{ url('/service')}}/?service={{ $service->slug}}" class="btn btn-success"> View</a></p>                  
              </div>
            </div>
          </div>
        </div>
        @empty
        @endforelse
      </div>

      <div class="pagination">
        {{ $services->links() }}
      </div>
    </div>

  </div>
</section>
@endsection
