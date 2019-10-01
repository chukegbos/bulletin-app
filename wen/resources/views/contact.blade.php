@extends('layouts.app')
@section('pageTitle', 'Contact')
@section('content')
<div class="auth-breadcrumb-wrap" style="margin-top: 115px">
  <div class="container">
    <ol class="sabbi-breadcrumb breadcrumb">
      <li><a href="{{ url('/') }}">Home</a></li>
      <li class="active">Contact</li>
    </ol>
  </div>
</div>


<main class="sabbi-page-wrap">
  <div class="container">
    <section class="sabbi-section stage-samevide mb_0">
      <div class="row">
        <div class="col-sm-12">
          <div class="page_piky-title" style="padding: 50px">
            <h2 class="page-title font-md lil-line">Contact Us</h2>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-12">
              <div class="contact-info text-center pt-60 pb-60 border-right">
                <i class="fa fa-phone font-36 mb-10 text-theme-colored"></i>
                <h4>Call Us</h4>
                <h6 class="text-gray">Phone: {{ $setting->phone }}</h6>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="contact-info text-center  pt-60 pb-60 border-right">
                <i class="fa fa-map-marker font-36 mb-10 text-theme-colored"></i>
                <h4>Address</h4>
                <h6 class="text-gray">{{ $setting->address }}</h6>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="contact-info text-center  pt-60 pb-60">
                <i class="fa fa-envelope font-36 mb-10 text-theme-colored"></i>
                <h4>Email</h4>
                <h6 class="text-gray">{{ $setting->email }}</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.0700354737791!2d7.498824849451355!3d6.486164443701157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1044a30c6e6b8db7%3A0x57a5fe3638c5267!2sUdoye+St%2C+Trans-Ekulu%2C+Enugu!5e0!3m2!1sen!2sng!4v1537369242598" width="580" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>

    </section>
  </div>
</main>
@endsection