@extends('layouts.userpage')
@section('pageTitle', 'New Publication')
@section('content')
  <div class="content-wrapper">
   <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-solid">
            <div class="box-header">
              <h3 class="box-title">New Publication</h3>
            </div><!-- /.box-header -->

            <div class="box-body">
              @if(isset($status))
                <div class="alert alert-success alert-dismissable" style="margin:20px">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4>  <i class="icon fa fa-check"></i> Success!</h4>
                    {{ $status}}
                </div>
              @endif
              
              <form role="form" enctype="multipart/form-data" action="{{ url('admin/newpost') }}" method="post" >
                  {{ csrf_field() }}
                  <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-12">
                    
                        <div class="form-group">
                            <label for="disabledSelect">Enter Title</label>
                            <input class="form-control" type="text"  name="title" id="myInput" oninput="myFunction()"  Required=""/>
                          
                        </div>

                        <!-- <div class="form-group">
                            <label for="disabledSelect">Slug <span style="color:blue">*</span> (This is optional, they system automatically generates slug if it is empty)</label>
                            <input class="form-control" type="text"  name="slug" id="myInput" placeholder="format is : current-univerisity-menu"/>
                           <input class="form-control" type="text" id="demo"  name="slug"/>                           
                        </div>-->

                        <div class="form-group">
                            <label for="your-label" class="form-label">Enter Content</label>
                            <textarea  class="form-control" id="editor1" rows="50" cols="110" name="description">
                            </textarea>
                            <script>
                                // Replace the <textarea id="editor1"> with a CKEditor
                                // instance, using default configuration.
                                CKEDITOR.replace( 'editor1' );
                            </script>
                        </div>  
                    </div>

                    <div class="col-md-3 col-sm-3 col-xs-12" style="border: 1px solid grey;margin-right:2px"> 
                      <div style="margin-top:10px; margin-right:10px">                                                                
                          <input type="hidden" name="author" value="{{ Auth::user()->name }}">
                          <button type="submit" class="btn btn-info">Save as draft</button>
                          <button type="submit" name="publish" value="Published" class="btn btn-primary">Publish</button>
                          <div class="form-group" style="margin-bottom:10px; margin-top:10px">
                              <fieldset>
                                  <label>Category</label>
                                  <div style="border: 1px solid grey; height: 20em; overflow-y: auto; white-space: nowrap; padding:5px">
                                      @forelse($categories as $category)

                                      <div class="c-inputs-stacked">
                                          <input type="checkbox" id="checkbox_{{ $category->title }}" name="category[]" @if($category->title=="Journal") checked @endif value="{{ $category->title }}"/>
                                          <label for="checkbox_{{ $category->title}}" class="block"> {{ $category->title }}</label> 
                                        
                                        <div style="margin-left:30px"> 
                                          @forelse($subs as $sub)
                                            @if($category->title == $sub->parent)
                                              <input type="checkbox" id="checkbox_{{ $sub->title }}" name="category[]" value="{{ $sub->title }}"/>
                                              <label for="checkbox_{{ $sub->title }}" class="block"> {{ $sub->title }}</label> 
                                            @endif
                                          @empty
                                          @endforelse
                                        </div>  
                                      </div>
                                      @empty
                                        No Category Found.
                                      @endforelse
                                  </div>                                     
                              </fieldset> 
                          </div> 

                          <!--<div class="form-group">
                            
                              <label>Add Tag</label>
                              <select name="tags[]"  class="form-control select2 w-p100" multiple="multiple" data-placeholder="Select tags">
                              
                                @forelse($tags as $tag)
                                <option value="{{ $tag->title }}">{{ $tag->title}}</option>
                                @empty
                                @endforelse
                              </select>
                          </div>
                          <div class="form-group">
                            <label>Add Tag (Separate Tags With Comma)</label>
                            <input class="form-control" type="text"  name="tag"/>
                          </div>

                          <div class="form-group">
                            <div class="c-inputs-stacked">                           
                              <input type="checkbox" id="checkbox_comment_status" checked name="comment_status" value="open"/>
                              <label for="checkbox_comment_status" class="block"> Enable Comment</label> 
                            </div>
                          </div>-->
                          <div class="form-group">
                            <label>Upload PDF Article <span style="color: blue">Optional</span></label>
                            <input class="form-control" type="file"  name="pdf"/>
                          </div>

                          <div class="form-group">
                            <label>Upload Video Link (Youtube, Vimeo etc) <span style="color: blue">Optional</span></label>
                            <input class="form-control" type="text" placeholder="https://"  name="video"/>
                          </div>

                          <div class="form-group">
                              <label for="name" class="form-label">Add Featured Images</label>
                              <div class="input-group image-preview">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                        <span class="glyphicon glyphicon-remove"></span> Clear
                                    </button>
                                    <div class="btn btn-default image-preview-input">
                                        <span class="glyphicon glyphicon-folder-open"></span>
                                        <span class="image-preview-input-title">Browse</span>
                                        <input type="file" accept="image/png, image/jpeg, image/gif" name="featured_image"/>
                                        
                                    </div>
                                   
                                </span>
                              </div>
                          </div>  
                       </div>                                    
                    </div> 
                  </div>
              </form>
             
            </div>
          </div><!-- /.box -->
        </div>       
      </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<script>

function myFunction() {
    var x = document.getElementById("mySelect");
    var option = document.createElement("option");
    x.add(option);
}


$(key).on("keyup", '.tagsinput', function (e) {
    if (e.keyCode == 188) { // KeyCode For comma is 188
        myFunction();
    }
});


$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>
@endsection
