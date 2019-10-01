@extends('layouts.app')
@section('pageTitle', 'Events')
@section('content')

<div class="auth-breadcrumb-wrap" style="margin-top: 115px">
  <div class="container">
    <ol class="sabbi-breadcrumb breadcrumb">
      <li><a href="{{ url('/') }}">Home</a></li>
      <li class="active">{{ $event->title}}</li>
    </ol>
  </div>
</div>

<main class="sabbi-page-wrap">
  <div class="container">
    <section class="sabbi-section stage-samevide mb_0">
      <div class="row">
        <div class="col-md-4">
          <ul>
            <li>
              <h4>Title:</h4>
              <p>{{ $event->title}}</p>
            </li>

            <li>
              <h4>Theme:</h4>
              <p>{{ $event->theme}}</p>
            </li>
           
            <li>
              <h4>Location:</h4>
              <p>{{ $event->venue }}</p>
            </li>
            <li>
              <h4>Date:</h4>
              <p>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($event->date_event))->toFormattedDateString() }} to {{ \Carbon\Carbon::createFromTimeStamp(strtotime($event->end_event))->toFormattedDateString() }}</p>
            </li>
          </ul>
        </div>
        <div class="col-md-8">
          <h3>{{ ucfirst($event->type) }} Description</h3>
          <p style="text-align:justify">
            {!!html_entity_decode($event->description )!!}
          </p>
        </div>
      </div>
    </section>
  </div>
</main>
@endsection
