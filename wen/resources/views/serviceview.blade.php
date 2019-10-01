@extends('layouts.live')
@section('pageTitle', 'Service')
@section('content')
 <div class="breadcrumb-wrap">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h4>Our Services</h4>
            </div>
        </div>
    </div>
</div>
<div class="divide60"></div>
<div class="container">
    <div class="row special-feature">
        @forelse($services1 as $service)
            <div class="col-md-3 col-sm-6 margin20">
                <a href="{{ url('/service')}}/?service={{ $service->slug}}"><div class="s-feature-box text-center wow animated fadeIn" data-wow-duration="700ms" data-wow-delay="200ms">
                    <div class="mask-top">
                        <!-- Icon -->
                        <img src="{{ asset('storage') }}/{{ $service->image }}" height="100px" width="250px">
                        <!-- Title -->
                        <h4>{{$service->name}}</h4>
                    </div>
                    <div class="mask-bottom">
                        <!-- Icon -->
                        <i class="pe-7s-like2"></i>
                        <!-- Title -->
                        <h4>{{$service->name}}</h4>
                        <!-- Text -->
                        <p>{{ substr(strip_tags($service->description) , 0, 150) }} ...</p>
                    </div>
                </div></a>
            </div><!--services col-->
        @empty
        @endforelse
        
    </div><!--features-box container end-->
    <div class="divide50"></div>

</div><!--services container--> 
@endsection
