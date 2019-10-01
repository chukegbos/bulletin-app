@extends('layouts.app')
@section('pageTitle', 'Gallery')
@section('content')
<div class="auth-breadcrumb-wrap" style="margin-top: 115px">
  <div class="container">
    <ol class="sabbi-breadcrumb breadcrumb">
      <li><a href="{{ url('/') }}">Home</a></li>
      <li class="active">Gallery</li>
    </ol>
  </div>
</div>
<main class="sabbi-page-wrap">
  <div class="container">
    <section class="sabbi-section stage-samevide mb_0">
      <div class="row">
        <div class="col-sm-12">
          <div class="page_piky-title" style="padding: 10px">
            <h2 class="page-title font-md lil-line">Gallery</h2>
          </div>
        </div>
        @forelse($galleries as $gallery)
          <div class="col-md-4 col-sm-6">
            <div class="portfolio-item">
              <a href="{{ asset('storage') }}/{{ $gallery->image }}"><img  class="img-responsive portfolio-image" src="{{ asset('storage') }}/{{ $gallery->image }}" style="height:250px"></a>
              <div class="overlay-shade"></div>
            </div>
        @empty
          <p><h2>No Photo Found!</h2></p><br>
        @endforelse

        <div class="col-md-12">
          <ul class="pagination theme-colored">
            {{ $galleries->links() }}
          </ul>
        </div>
      </div>
    </section>
  </div>
</main>
@endsection
