@extends('layouts.userpage')
@section('pageTitle', 'All Events')
@section('content')
  <div class="content-wrapper">
   <section class="content">
      <div class="row">
        
        <div class="col-md-12">
          
          <div class="box">
            <div class="box-header" style="text-align:center">
              <h3 class="box-title">All Events & Conferences</h3>
            </div><!-- /.box-header -->

            <div class="box-body">
              <div class="table-responsive">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                      <tr>
                        <th>Title</th>
                        <th>Venue</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Delete</th>

                      </tr>
                    </thead>
                  <tbody>

                  @forelse($events as $event)
                    <tr>
                      <td>
                        {{ $event->title }} <br>
                        <a target="_blank" class="btn btn-primary btn-sm" href="{{ url('/event')}}/?slug={{ $event->slug}}">View</a> 
                        <a href="{{ url('admin/editevent') }}/?slug={{ $event->slug}}"><i class="fa fa-edit btn btn-info btn-sm">Edit</i></a></td>
                      </td>
                      <td>{{ $event->venue }}</td>
                      <td>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($event->date_event))->toFormattedDateString() }}<br>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($event->date_event))->diffForHumans() }}</td>
                      <td>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($event->end_event))->toFormattedDateString() }}<br>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($event->end_event))->diffForHumans() }}</td>
                      <td>
                        <form action="{{ url('/admin/deleteevent') }}/{{$event->id}}" method="POST">
                          {{ csrf_field() }}
                          {{ Method_field('DELETE') }}
                          <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        </form>
                      </td>
                    </tr>
                  @empty
                  @endforelse
                </table>
              </div>
            </div>
          </div><!-- /.box -->
        </div>
      </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
@endsection
