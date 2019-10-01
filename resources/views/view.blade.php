@extends('layouts.app')
@if(isset($cat))
  @section('pageTitle', $cat)
@else
  @section('pageTitle', 'Publications')
@endif
@section('content')
<div class="auth-breadcrumb-wrap" style="margin-top: 115px">
  <div class="container">
    <ol class="sabbi-breadcrumb breadcrumb">
      <li><a href="{{ url('/') }}">Home</a></li>
      @if(isset($cat))
        <li class="active">{{ $cat }}</li>
      @else
        <li class="active">Publications</li>
      @endif
    </ol>
  </div>
</div>
<main class="sabbi-page-wrap">
  <div class="container">
    <section class="sabbi-section stage-samevide mb_0">
      <div class="row">
        <div class="col-sm-12">
          <div class="page_piky-title" style="padding: 10px">
            @if(isset($cat))
              <h2 class="page-title font-md lil-line">{{ $cat }}</h2>
            @else
              <h2 class="page-title font-md lil-line">Publications</h2>
            @endif
            
          </div>
        </div>
        @forelse($posts as $post)      
          <div class="col-md-4 col-sm-6">
            <div class="portfolio-item" style="height: 360px;">
              <img src="{{ asset('storage') }}/{{ $post->featured_image}}" alt="" class="img-responsive portfolio-image" style="height: 200px; width: 300px; float: none;">
         
                <h2 class="meta-title ht-5">{{ $post->title }}</h2>
                <p class="meta-text">{{ substr(strip_tags($post->description) , 0, 90) }} ...</p>
                <a href="{{ url('/') }}/{{ $post->slug}}" class="btn btn-info btn-xs pull-left">Read More</a> 
                <a href="{{ asset('storage') }}/{{ $post->pdf}}" class="btn btn-success btn-xs pull-right">Download PDF</a>
            </div>
          </div>
        @empty
          <h2>No news found, check back later</h2>
        @endforelse
        <div class="col-md-12">
          <ul class="pagination theme-colored">
            {{ $posts->links() }}
          </ul>
        </div>
      </div>
    </section>
  </div>
</main>
@endsection
