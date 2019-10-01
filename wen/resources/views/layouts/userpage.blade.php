<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}"> 
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('pageTitle') - {{ $setting->sitename }}</title>
    <meta name="description" content="">
    <meta name="author" content="">

    
    <link rel="icon" href="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>


  	<!-- Bootstrap 4.0-->
  	<link rel="stylesheet" href="{{ asset('userpage/css/bootstrap.css') }}">
      <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="{{ asset('userpage/vendor_components/bootstrap/dist/css/bootstrap.min.css') }}">
  
  	<!--amcharts -->
  	<link href="{{ asset('userpage/css/lib/3/plugins/export/export.css') }}" rel="stylesheet" type="text/css" />
  	
  	<!-- Chartist-->
  	<link rel="stylesheet" href="{{ asset('userpage/css/vendor_components/chartist-js-develop/chartist.css') }}">
  	
    <link href="{{ asset('userpage/css/vendor_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">

    <!-- Bootstrap switch-->
  	<link rel="stylesheet" href="{{ asset('userpage/css/vendor_components/bootstrap-switch/switch.css') }}">
  	
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{ asset('userpage/css/vendor_plugins/iCheck/all.css') }}">


  	<!-- Bootstrap-extend -->
  	<link rel="stylesheet" href="{{ asset('userpage/css/bootstrap-extend.css') }}">
  	
  	<!-- theme style -->
  	<link rel="stylesheet" href="{{ asset('userpage/css/master_style.css') }}">
  	
  	<!-- Crypto_Admin skins -->
  	<link rel="stylesheet" href="{{ asset('userpage/css/skins/_all-skins.css') }}">
    <script src="{{ asset('userpage/ckeditor/ckeditor.js') }}"></script>
    <!-- Timeline CSS -->
    <link href="{{ asset('userpage/css/vendor_components/horizontal-timeline/css/horizontal-timeline.css') }}" rel="stylesheet">
    <style type="text/css">
        .image-preview-input {
            position: relative;
            overflow: hidden;
            margin: 0px;    
            color: #333;
            background-color: #fff;
            border-color: #ccc;    
        }
        .image-preview-input input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            margin: 0;
            padding: 0;
            font-size: 20px;
            cursor: pointer;
            opacity: 0;
            filter: alpha(opacity=0);
        }
        .image-preview-input-title {
            margin-left:2px;
        } 
        .profile_single{
          margin-left: 15px;
          font-weight: 600px;
        }
    </style>
     
  </head>

  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
      	  <b class="logo-mini">
            <span class="logo-lg">
        		  <img src="{{ asset('userpage/images/logo.png') }}" alt="logo" class="light-logo" height="60px">
        	  </span>
          </b>
        </a>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <span class="hidden-sm-down"><h4 style="color: white;font-weight: 900px;">{{ $setting->sitename }}</h4></span>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">		
    		      <!-- User Account -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{{ asset('userpage/images/avatar.png') }}" class="user-image rounded-circle" alt="User Image">
                </a>
                <ul class="dropdown-menu scale-up">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="{{ asset('userpage/images/avatar.png') }}" class="float-left rounded-circle" alt="User Image">

                    <p>
                      <small class="mb-5">{{ Auth::user()->lastname }}</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="row no-gutters">
                      <div class="col-12 text-left">
                        <a href="{{ url('/admin/profile') }}/{{ Auth::user()->id }}"><i class="fa fa-user"></i> Change Password</a>
                      </div>
              				<div role="separator" class="divider col-12"></div>
              				<div class="col-12 text-left">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out"></i> Logout</span>
                        </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                      </div>				
                    </div>
                    <!-- /.row -->
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>
        </nav>
      </header>
      
      @include('components.adminaside') 
     
      <!-- Left side column. contains the logo and sidebar -->
     
      @yield('content')
      <!-- /.content-wrapper -->
    
      <footer class="main-footer">    
    	  &copy; {{ date("Y") }} <a href="{{ url('/') }}"></a>. All Rights Reserved.
      </footer> 
    </div>  
  	<!-- jQuery 3 -->
  	<script src="{{ asset('userpage/js/vendor_components/jquery/dist/jquery.js') }}"></script>
  	
  	<!-- popper -->
  	<script src="{{ asset('userpage/js/vendor_components/popper/dist/popper.min.js') }}"></script>
  	
  	<!-- Bootstrap 4.0-->
  	<script src="{{ asset('userpage/js/vendor_components/bootstrap/dist/js/bootstrap.js') }}"></script>

    <!-- InputMask -->
    <script src="{{ asset('userpage/js/vendor_plugins/input-mask/jquery.inputmask.js') }}"></script>
    <script src="{{ asset('userpage/js/vendor_plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
    <script src="{{ asset('userpage/js/assets/vendor_plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
  
     <!-- date-paginator -->
    <script src="{{ asset('userpage/js/vendor_components/date-paginator/moment.min.js') }}"></script>
    <script src="{{ asset('userpage/js/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('userpage/js/vendor_components/date-paginator/bootstrap-datepaginator.min.js') }}"></script>
    
  	<script src="{{ asset('userpage/js/vendor_plugins/iCheck/icheck.min.js') }}"></script>

  	<!-- Slimscroll -->
  	<script src="{{ asset('userpage/js/vendor_components/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
  	
  	<!-- FastClick -->
  	<script src="{{ asset('userpage/js/vendor_components/fastclick/lib/fastclick.js') }}"></script>
  	<!-- JqueryPrintArea -->
    <script src="{{ asset('userpage/js/vendor_plugins/JqueryPrintArea/demo/jquery.PrintArea.js') }}"></script> 
    <!-- Crypto_Admin for demo purposes -->
    <script src="{{ asset('userpage/js/pages/invoice.js') }}"></script>
  	
      <!--amcharts charts -->
  	<script src="{{ asset('userpage/js/lib/3/amcharts.js') }}" type="text/javascript"></script>
  	<script src="{{ asset('userpage/js/lib/3/gauge.js') }}" type="text/javascript"></script>
  	<script src="{{ asset('userpage/js/lib/3/serial.js') }}" type="text/javascript"></script>
  	<script src="{{ asset('userpage/js/lib/3/amstock.js') }}" type="text/javascript"></script>
  	<script src="{{ asset('userpage/js/lib/3/pie.js') }}" type="text/javascript"></script>
  	<script src="{{ asset('userpage/js/lib/3/plugins/animate/animate.min.js') }}" type="text/javascript"></script>
  	<script src="{{ asset('userpage/js/lib/3/plugins/export/export.min.js') }}" type="text/javascript"></script>
  	<script src="{{ asset('userpage/js/lib/3/themes/patterns.js') }}" type="text/javascript"></script>
  	<script src="{{ asset('userpage/js/lib/3/themes/light.js') }}" type="text/javascript"></script>		
  	
  	<!-- This is data table -->
    <script src="{{ asset('userpage/js/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js') }}"></script>


  	<!-- DataTables -->
  	<script src="{{ asset('userpage/js/vendor_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
  	<script src="{{ asset('userpage/js/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
  	
  	<!-- Crypto_Admin App -->
  	<script src="{{ asset('userpage/js/template.js') }}"></script>
  	
  	<!-- Crypto_Admin dashboard demo (This is only for demo purposes) -->
  	<script src="{{ asset('userpage/js/pages/dashboard.js') }}"></script>
  	<script src="{{ asset('userpage/js/pages/dashboard-chart.js') }}"></script>
  	
  	<!-- Crypto_Admin for Data Table -->
  	<script src="{{ asset('userpage/js/pages/project-table-dashboard.js') }}"></script>

        <!-- Horizontal-timeline JavaScript -->
    <script src="{{ asset('userpage/js/vendor_components/horizontal-timeline/js/horizontal-timeline.js') }}"></script>
      <!-- SlimScroll -->
    <script src="{{ asset('userpage/js/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
  	
  	<!-- Crypto_Admin for demo purposes -->
  	<script src="{{ asset('userpage/js/demo.js') }}"></script>
    <!-- Crypto_Admin for Data Table -->
    <script src="{{ asset('userpage/js/pages/data-table.js') }}"></script>
  
    <!-- Editable -->
    <script src="{{ asset('vendor_components/tiny-editable/mindmup-editabletable.js') }}"></script>
    <script src="{{ asset('vendor_components/tiny-editable/numeric-input-example.js') }}"></script>


    <script>
        $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
        $('#example1').editableTableWidget().numericInputExample().find('td:first').focus();
    </script>
  
  
 


   <!--image js-->
  <script type="text/javascript">

      $(document).on('click', '#close-preview', function(){ 
          $('.image-preview').popover('hide');
          // Hover befor close the preview
          $('.image-preview').hover(
              function () {
                 $('.image-preview').popover('show');
              }, 
               function () {
                 $('.image-preview').popover('hide');
              }
          );    
      });

      $(function() {
          // Create the close button
          var closebtn = $('<button/>', {
              type:"button",
              text: 'x',
              id: 'close-preview',
              style: 'font-size: initial;',
          });
          closebtn.attr("class","close");
          // Set the popover default content
          $('.image-preview').popover({
              trigger:'manual',
              html:true,
              title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
              content: "There's no image",
              placement:'bottom'
          });
          // Clear event
          $('.image-preview-clear').click(function(){
              $('.image-preview').attr("data-content","").popover('hide');
              $('.image-preview-filename').val("");
              $('.image-preview-clear').hide();
              $('.image-preview-input input:file').val("");
              $(".image-preview-input-title").text("Browse"); 
          }); 
          // Create the preview image
          $(".image-preview-input input:file").change(function (){     
              var img = $('<img/>', {
                  id: 'dynamic',
                  
              });      
              var file = this.files[0];
              var reader = new FileReader();
              // Set preview image into the popover data-content
              reader.onload = function (e) {
                  $(".image-preview-input-title").text("Change");
                  $(".image-preview-clear").show();
                  $(".image-preview-filename").val(file.name);            
                  img.attr('src', e.target.result);
                  $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
              }        
              reader.readAsDataURL(file);
          });  
      });
  </script>

  </body>

</html>
