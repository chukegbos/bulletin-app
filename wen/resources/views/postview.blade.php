@extends('layouts.app')
@section('pageTitle', $post->title)
@section('content')
<div class="auth-breadcrumb-wrap" style="margin-top: 115px">
  <div class="container">
    <ol class="sabbi-breadcrumb breadcrumb">
      <li><a href="{{ url('/') }}">Home</a></li>
      <li class="active">{{ $post->title }}</li>
    </ol>
  </div>
</div>

<main class="sabbi-page-wrap">
  <div class="container">
    <section class="sabbi-section stage-samevide mb_0">
      <div class="row">
        <div class="col-sm-12">
          <div class="page_piky-title" style="padding: 50px">
            <h2 class="page-title font-md lil-line">{{ $post->title }}</h2>
          </div>
        </div>
        <div class="col-sm-7">
          <ul class="list-unstyled entry-meta-list list-style-round_item">
            {!!html_entity_decode($post->description )!!}
          </ul>
          <a href="{{ asset('storage') }}/{{ $post->pdf}}" class="btn btn-success">View/Download</a>
        </div>
        <div class="col-sm-5">
          <figure class="samevide-figure">
            <img src="{{ asset('storage') }}/{{ $post->featured_image}}" alt="" style="height: 400px" class="img-responsive">
          </figure>
        </div>
      </div>
    </section><!-- /.stage-samevide -->

    <section class="icon-card-segment">
      <div class="row">
        <div class="col-sm-12">
          <div class="page_piky-title">
            <h3 class="page-title font-md lil-line" style="padding: 50px">Recent Publication</h3>
          </div>
        </div>
        @forelse($posts as $post) 
          <div class="col-md-3 col-sm-6">
            <div class="icon-card text-center">
              <figure class="icon-card-limn">
                  <i class="ion-ios-flask-outline"></i>
              </figure>
              <h3 class="card-title">{{ $post->title }}</h3>
              <p class="card-meta">{{ substr(strip_tags($post->description) , 0, 100) }} ...</p>
              <a href="{{ url('/') }}/{{ $post->slug}}" class="btn btn-info btn-xs pull-left">Read More</a> 
              <a href="{{ asset('storage') }}/{{ $post->pdf}}" class="btn btn-success btn-xs pull-right">Download PDF</a>
            </div>
          </div>
        @empty
        @endforelse 
      </div>
    </section><!-- /.icon-card-segment -->  
  </div>
</main>
@endsection
