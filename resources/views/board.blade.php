@extends('layouts.live')
@section('pageTitle', 'The Board')
@section('content')
 <div class="breadcrumb-wrap">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h4>The Board</h4>
            </div>
        </div>
    </div>
</div>
<div class="divide60"></div>
<div class="container">
    <div class="row">
        @forelse($board1 as $board)
            <div class="col-md-3 margin20">
                <div class="team-wrap">
                    @if(isset($board->image))
                        <img class="img-responsive"src="{{ asset('storage') }}/{{ $board->image }}"  style="height:200px; width:300px">
                    @else
                        <img class="img-responsive" src="{ asset('live/images/avatar.png') }}"  style="height:200px; width:300px">
                    @endif
                    <img src="img/team-1.jpg" class="img-responsive" alt="">
                    <h4>{{ $board->name }}</h4>
                    <span>{{ $board->post }}</span>
                </div><!--team-wrap-->
            </div><!--team col-->
        @empty
        @endforelse
        
    </div><!--features-box container end-->
    <div class="divide50"></div>

</div><!--services container--> 
@endsection
