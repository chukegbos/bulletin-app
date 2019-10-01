@extends('layouts.app')
@section('pageTitle', 'Home')
@section('content')
    <section class="sabbbi-section home-info mt_35">
        <div class="container">
            <div class="row home-info-block-first">
                @forelse($posts as $post) 
                    <div class="col-md-3 col-sm-6">
                        <article class="sabbi-thumlinepost-card solitude-bg__x">
                            <figure class="sabbi-thumlinepost-card-figure">
                                @if(isset($post->video))
                                    <a class="video-play" href="{{ $post->video}}" data-toggle="lightbox">
                                        <img src="{{ asset('storage') }}/{{ $post->featured_image}}" alt="" class="img-responsive img-thumpost">
                                    </a>
                                @else
                                    <img src="{{ asset('storage') }}/{{ $post->featured_image}}" alt="" class="img-responsive img-thumpost" style="height: 250px">
                                @endif
                            </figure>
                            <div class="sabbi-thumlinepost-card-meta">
                                <h2 class="meta-title ht-5">{{ $post->title }}</h2>
                                <p class="meta-text">{{ substr(strip_tags($post->description) , 0, 100) }} ...</p>
                                <a href="{{ url('/') }}/{{ $post->slug}}" class="btn btn-info btn-xs pull-left">Read More</a> 
                                <a href="{{ asset('storage') }}/{{ $post->pdf}}" class="btn btn-success btn-xs pull-right">Download PDF</a>
                            </div>
                        </article>
                    </div>
                @empty
                @endforelse 
            </div>
            <!--<div class="row mt_30">
                <div class="col-sm-4">
                    <article class="sabbi-thumlinepost-card solitude-bg__x">
                        <h2 class="entry-title ht-4">About Research Group</h2>
                        <div class="sabbi-thumlinepost-card-meta">
                            <p class="entry-text">Lorem ipsum dolor sit amet, con adipiscing elit. Etiam convallis elit id impedie. Quisq commodo ornare tortor Quiue bibendum. magna vitae ex interdum cursus. Nullam lacinia pretium nibh, vitae imperdiet lacus tempor sit amet. Donec ultrices est nec tellus finibus facilisis. Nullam sodales justo id magna fringilla rutrum. Duis bibendum id eros congue bibendum.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam convallis elit</p>
                            <a href="#" class="btn btn-unsolemn btn-action read-more">Read More</a>
                        </div>
                    </article>
                </div>
                <div class="col-sm-4">
                    <article class="sabbi-thumlinepost-card card-video solitude-bg__x">
                        <figure class="sabbi-thumlinepost-card-figure">
                            <a class="video-play"  href="https://www.youtube.com/watch?v=qarc7AA4-wM" data-toggle="lightbox"><img src="{{ asset('assets/img/sabbi-post/card-img-5.jpg') }}" alt="" class="img-responsive img-thumpost"></a>
                            <figcaption>DR.Rushmore  Remarkable Journey</figcaption>
                        </figure>
                        <h3 class="entry-title"><a href="#">DR.Rushmore  Remarkable Journey</a></h3>
                        <p class="entry-text">Lorem ipsum dolor sit amet, con adipiscing elit. Etiam convallis elit id impedie. Quisq commodo ornare tortor Quiue bibendum.</p>
                    </article>
                </div>
                <div class="col-sm-4">
                    <article class="news-card sabbi-thumlinepost-card solitude-bg__x">
                        <h2 class="stage-title">Latest Events</h2>
                        <ul class="list-unstyled lst_news_list" tabindex="0">
                            @forelse($events as $event) 
                                <li class="lst_news_item">
                                    <h3 class="title mg_0"><a href="events_single.html">{{ $event->title }}</a></h3>
                                    <div>
                                        <span class="date">{{ \Carbon\Carbon::createFromTimeStamp(strtotime($event->date_event))->toFormattedDateString() }} - {{ \Carbon\Carbon::createFromTimeStamp(strtotime($event->end_event))->toFormattedDateString() }}</span>
                                    </div>
                                </li>
                            @empty
                            @endforelse 
                        </ul>
                        <a href="{{ url('/events') }}" class="btn btn-unsolemn btn-action read-more">VIEW ALL</a>
                    </article>
                </div>
            </div>-->
        </div>
    </section><!-- /.home-info -->

    <section class="sabbi-section section-selected_publication">
        <div class="container">
            <div class="selected_pulication-wrap">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="entry-meta">
                            <h2 class="stage-title">About Research Group</h2>
                            <p class="entry-meta-text">
                                {!!html_entity_decode($setting->about)!!}
                            </p>
                        </div>
                    </div>
                    <aside class="col-sm-8">
                        <div class="paper_cut">
                            <h2 class="stage-title" style="font-size: 20px; margin-top: -10px">Events</h2>

                            @forelse($events as $event) 
                                <div class="pub-item with-icon">
                                    <div class="elem-wrapper">
                                        <i class="ion-ios-paper-outline"></i>
                                    </div>
                                    <div class="content-wrapper">
                                        <div class="slc_des">
                                            <div class="authr">{{ $event->title }}</div>
                                        </div>
                                        <h3 class="title mb_0">{{ substr(strip_tags($post->description) , 0, 100) }} ...</h3>
                                        <div>
                                            <span class="date">{{ \Carbon\Carbon::createFromTimeStamp(strtotime($event->date_event))->toFormattedDateString() }} - {{ \Carbon\Carbon::createFromTimeStamp(strtotime($event->end_event))->toFormattedDateString() }}</span>
                                        </div>
                                        <div class="description">
                                            <a class="btn btn-info" href="{{ url('/event')}}/?slug={{ $event->slug}}" ><i class="ion-ios-browsers-outline"></i>View</a>
                                        </div>
                                    </div>
                                </div>
                            @empty
                            @endforelse 
                        </div><!-- /.paper_cut -->
                    </aside>
                </div>
            </div><!-- /.selected_pulication-wrap -->
        </div>
    </section><!-- /.section-selected_publication -->
@endsection