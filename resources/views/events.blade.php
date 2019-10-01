@extends('layouts.app')
@section('pageTitle', 'Events')
@section('content')
<div class="auth-breadcrumb-wrap" style="margin-top: 115px">
  <div class="container">
    <ol class="sabbi-breadcrumb breadcrumb">
      <li><a href="{{ url('/') }}">Home</a></li>
      <li class="active">Events</li>
    </ol>
  </div>
</div>


<main class="sabbi-page-wrap">
  <div class="container">

    <section class="deff-timeline-section">
        <div class="container">
          <div class="page_piky-title" style="padding: 50px">
            <h2 class="page-title font-md lil-line">All Events</h2>
          </div>
            <div class="auth-deff_timeline_timeline-segment">
                <ul class="auth-deff_timeline list-unstyled">
                  @forelse($events as $event)
                    <li>
                      <div class="timeline-meta">
                        <h3 class="staff-title">{{ $event->title }}</h3>
                        <div class="__time">
                          {{ \Carbon\Carbon::createFromTimeStamp(strtotime($event->date_event))->toFormattedDateString() }} - {{ \Carbon\Carbon::createFromTimeStamp(strtotime($event->end_event))->toFormattedDateString() }}
                        </div>
                        <div class="__loc"><span>Location:</span> {{ $event->venue }}</div>
                        <p class="meta-text">{{ substr(strip_tags($event->description) , 0, 200) }} ...</p>
                        <a href="{{ url('/event')}}/?slug={{ $event->slug}}" class="btn btn-default btn-theme-colored mt-10 font-16 btn-sm pull-right">View</a>
                      </div>
                    </li><!-- /timeline-item -->
                  @empty
                  @endforelse
                </ul><!-- /.auth-deff_timeline -->
            </div>
        </div>
    </section>
  </div>
</main>

@endsection
