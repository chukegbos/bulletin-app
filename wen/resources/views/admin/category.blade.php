@extends('layouts.userpage')
@section('pageTitle', 'Category')
@section('content')
  <div class="content-wrapper">
   <section class="content">
      <div class="row">
        <div class="col-md-4">
          <div class="box box-solid">
            <div class="box-header">
              <h3 class="box-title">Add Category</h3>
            </div><!-- /.box-header -->

            <div class="box-body">
              @if(isset($status))
                <div class="alert alert-success alert-dismissable" style="margin:20px">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4>  <i class="icon fa fa-check"></i> Success!</h4>
                    {{ $status}}
                </div>
              @endif
              <form role="form" action="{{ url('/admin/category') }}" method="POST" >
                  {{ csrf_field() }}
                  <!-- text input -->
                  <div class="form-group">
                      <label>Category</label>
                      <input type="text" class="form-control" name="title" Required/>
                       @if ($errors->has('title'))
                            <span class="help-block">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Parent Category</label>
                        <select name="parent" class="form-control">
                          <option>None</option>
                          @forelse($categories as $category)
                          <option value="{{ $category->title }}">{{ $category->title }}</option>
                          @empty
                            No Category Found.
                          @endforelse
                        </select>
                    </div>
                    <!-- textarea -->
                    <div class="form-group">
                      <label>Brief Description</label>
                      <textarea class="form-control" rows="3" name="description"></textarea>
                       @if ($errors->has('description'))
                            <span class="help-block">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
                    </div>

                  <div class="form-group">
                      <input type="submit" value="Add" class="btn btn-success">
                  </div>
              </form>
            </div><!-- /.box-body -->
          </div><!-- /.box -->
        </div>
        <div class="col-md-8">
          <div class="box">
            <div class="box-body">
              <div class="table-responsive">
                <table id="" class="table table-bordered table-hover">
                  <thead>
                      <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Slug</th>
                        <th>Delete</th>

                      </tr>
                    </thead>
                  <tbody>

                  @forelse($categories as $category)
                    <tr>

                      <td>{{ $category->title }}</td>
                      <td>{{ $category->description }}</td>
                      <td>{{ $category->slug }}</td>
                      <td>
                        <form action="{{ url('/admin/deletecategory') }}/{{$category->id}}" method="POST">
                          {{ csrf_field() }}
                          {{ Method_field('DELETE') }}
                          <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        </form>
                      </td>
                    </tr>

                    @forelse($subs as $sub)
                      @if($category->title == $sub->parent)
                       <div style="margin-left:60px">
                         <tr>
                          <td> <span style=" color:blue">- </span>{{ $sub->title }}</td>
                          <td>{{ $sub->description }}</td>
                          <td>{{ $sub->slug }}</td>
                          <td>{{ $sub->count }}</td>
                          <td> <a target="_blank" class="btn btn-primary btn-sm" href="">View</a> <!--<a href="{{ url('editcategory') }}/{{ $sub->id }}"><i class="fa fa-edit btn btn-info btn-sm"> Edit</i></a>--></td>
                          <td>
                            <form action="{{ url('/admin/deletesubcategory') }}/{{$sub->id}}" method="POST">
                              {{ csrf_field() }}
                              {{ Method_field('DELETE') }}
                               <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                            </form>
                          </td>
                        </tr>
                      </div>
                      @endif

                  @empty
                  @endforelse
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
