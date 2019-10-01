@extends('layouts.live')
@section('pageTitle', 'Products')
@section('content')
 <div class="breadcrumb-wrap">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h4>Our Awesome Products</h4>
            </div>
        </div>
    </div>
</div><!--breadcrumbs-->


<div class="divide70"></div>
<div class="assan-features">
    <div class="container">
        <div class="row">
            @forelse($product1 as $product)
                <div class="col-md-4 col-sm-6 margin20 special-feature">
                    <div class="services-box wow animated fadeIn" data-wow-duration="700ms" data-wow-delay="100ms">
                        <div class="services-box-icon">
                            <img src="{{ asset('live/images/logo_2.png') }}" height="40px" width="40px" alt="ASSAN">
                        </div><!--services icon-->
                        <div class="services-box-info"style="text-align:justify">
                            <h4 style="color:#68AD6E; font-size:14px">{{$product->name}}</h4>
                            <p >{{ substr(strip_tags($product->description) , 0, 120) }} ...</p>
                            <a class="btn btn-success pull-left"  href="{{ url('/service')}}/?service={{ $product->slug}}"> View</a>
                        </div>
                    </div><!--services box-->
                </div><!--services col-->
            @empty
            @endforelse
        </div><!--services row-->
    </div>
</div><!--assan features-->
<div class="divide40"></div>

 
@endsection
