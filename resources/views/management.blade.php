@extends('layouts.live')
@section('pageTitle', 'The Management')
@section('content')
 <div class="breadcrumb-wrap">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h4>The Mangement</h4>
            </div>
        </div>
    </div>
</div>
<div class="divide60"></div>
<div class="container">
    <div class="row">
        @forelse($management1 as $management)
            <div class="col-md-3 margin20">
                <div class="team-wrap">
                    @if(isset($management->image))
                        <img class="img-responsive"src="{{ asset('storage') }}/{{ $management->image }}" style="height:200px; width:300px">
                    @else
                        <img class="img-responsive" src="{{ asset('live/images/avatar.png') }}" style="height:200px; width:300px">
                    @endif
                    <img src="img/team-1.jpg" class="img-responsive" alt="">
                    <h4>{{ $management->name }}</h4>
                    <span>{{ $management->post }}</span>
                </div><!--team-wrap-->
            </div><!--team col-->
        @empty
        @endforelse
        
    </div><!--features-box container end-->
    <div class="divide50"></div>

</div><!--services container--> 
@endsection
