@extends('layouts.live')
@section('pageTitle', 'Start Ups')
@section('content')

    <section class="inner-header divider parallax layer-overlay overlay-dark-5">
      <div class="container">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-white">Our Start Ups</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
<section id="causes" class="bg-silver-light">
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
          <div class="causes bg-white border-1px border-bottom-theme-color-1px">
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

      <div class="pagination">
        {{ $products->links() }}
      </div>
    </div>

  </div>
</section>
@endsection
