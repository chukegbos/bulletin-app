@extends('layouts.userpage')
@section('pageTitle', 'Edit Event')
@section('content')
  <div class="content-wrapper">
   <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-solid">
            <div class="box-header">
              <h3 class="box-title">Edit Event</h3>
            </div><!-- /.box-header -->

            <div class="box-body">
              @if(isset($status))
                <div class="alert alert-success alert-dismissable" style="margin:20px">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4>  <i class="icon fa fa-check"></i> Success!</h4>
                    {{ $status}}
                </div>
              @endif
              
              <form role="form" enctype="multipart/form-data" action="{{ url('admin/editevent') }}/{{ $event->id }}" method="post" >
                  {{ csrf_field() }}
                  {{ method_field('PUT') }}
                  <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-12">
                    
                        <div class="form-group">
                            <label for="disabledSelect">Enter Title</label>
                            <input class="form-control" type="text"  name="title" id="myInput" value="{{ $event->title }}"  Required=""/>                         
                        </div>

                        <div class="form-group">
                            <label for="disabledSelect">Enter Theme</label>
                            <input class="form-control" type="text"  name="theme" id="myInput" value="{{ $event->theme }}"  Required=""/>                         
                        </div>

                        <div class="form-group">
                            <label for="your-label" class="form-label">Enter Content</label>
                            <textarea  class="form-control" id="editor1" rows="10" cols="110" name="description">{{ $event->description }}
                            </textarea>
                            <script>
                                // Replace the <textarea id="editor1"> with a CKEditor
                                // instance, using default configuration.
                                CKEDITOR.replace( 'editor1' );
                            </script>
                        </div>  
                    </div>

                    <div class="col-md-3 col-sm-3 col-xs-12"> 
                      <div style="margin-top:10px; margin-right:5px">                                                                           
                                                 
                          <div class="form-group">
                            <label>Start Date of Ocassion</label>
                            <input class="form-control" type="date" value="{{ \Carbon\Carbon::createFromTimeStamp(strtotime($event->date_event))->format('Y-m-d') }}"  Required name="date_event"/>                          
                          </div>

                          <div class="form-group">
                            <label>End Date of Occasion</label>
                            <input class="form-control" type="date" value="{{ \Carbon\Carbon::createFromTimeStamp(strtotime($event->end_event))->format('Y-m-d') }}"  name="end_event"/>                          
                          </div>

                          <div class="form-group">
                            <label>Venue of Occation</label>
                            <textarea  class="form-control" name="venue" Required>{{ $event->venue }}  </textarea>                       
                          </div>
                         
                       </div>                                    
                    </div> 
                  </div>
                  <button type="submit" name="publish" value="Published" class="btn btn-primary">Publish</button>
              </form>
             
            </div>
          </div><!-- /.box -->
        </div>       
      </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
@endsection
