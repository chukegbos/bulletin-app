@extends('layouts.userpage')
@section('pageTitle', 'Gallery')
@section('content')
<!-- Content Wrapper. Contains page content -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <span style="font-size:20px">All Galleries</span> 
      <!-- <a class="btn btn-primary pull-right"  href="{{ url('/admin/addgallery') }}">Add gallery</a>-->
     <a class="btn btn-primary pull-right" href="" data-toggle="modal" data-target="#addfacultymodal" >Add Gallery</a>
    </section>


      <!-- Main content -->
      <!-- Main content -->
    <section class="content">
      @if(isset($status))
          <div class="alert alert-success alert-dismissable" style="margin:20px">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4>  <i class="icon fa fa-check"></i> Success!</h4>
              {{ $status}}
          </div>
        @endif
        @if(isset($error))
          <div class="alert alert-danger alert-dismissable" style="margin:20px">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4>  <i class="icon fa fa-times"></i> Error!</h4>
              {{ $error}}
          </div>
        @endif
      <div class="row">
        <div class="col-12">
          <div class="box box-solid">
            <div class="box-body">
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="example2" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Featured Image</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse($galleries as $gallery)
                        <tr>
                          <td>{{ $gallery->name }}</td>
                          <th><img class="img-thumbnail" src="{{ asset('storage') }}/{{ $gallery->image }}" width="70px"></th>
                          <td>
                            <form action="{{ url('/admin/destroygallery') }}/{{$gallery->id}}" method="POST">
                              {{ csrf_field() }}
                              {{ Method_field('DELETE') }}
                               <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                            </form>
                          </td>
                        </tr>
                        @empty
                        @endforelse
                      </tbody>                     
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>        
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <div class="modal fade" id="addfacultymodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog" style="background:white">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"> Add gallery</h4>
            </div>
            <div class="modal-body">
              <form method="post" class="profile-wrapper" enctype="multipart/form-data" action="{{ url('admin/gallery') }}" >
                 {{ csrf_field() }}
                  
                  <!--<div class="form-group">
                      <label for="fname">Title</label>                     
                      <input class="form-control" type="text" name="name" required autofocus>
                  </div> -->
                  <div class="form-group">
                      <label for="fname">Image</label>
                      <input class="form-control" type="file" name="image" required autofocus>  
                  </div>   

                  <button type="submit" class="btn btn-success pull-right">Add <i class="fa fa-save"></i></button>                              
              </form>
            </div>
            
            <div class="modal-footer">
             
            </div>
          </div><!-- /.modal-content -->                     
      </div>
    </div>
@endsection
