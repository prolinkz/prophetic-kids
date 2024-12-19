<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/bulona/demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Feb 2020 05:19:33 GMT -->
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content="Prophetic Kids Sunday School Web Application"/>
  <meta name="author" content="Zakiullah"/>
  <title>Prophetic Kids Sunday School</title>
  <!--favicon-->
  <link rel="icon" href="{{ url('public/assets/images/favicon.ico') }}" type="image/x-icon"/>
  <!-- Vector CSS -->
  <link href="{{ url('public/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="{{ url('public/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="{{ url('public/assets/css/bootstrap.min.css') }}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{ url('public/assets/css/animate.css') }}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{ url('public/assets/css/icons.css') }}" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="{{ url('public/assets/css/sidebar-menu.css') }}" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="{{ url('public/assets/css/app-style.css') }}" rel="stylesheet"/>
  <!-- skins CSS-->
  <link href="{{ url('public/assets/css/skins.css') }}" rel="stylesheet"/>
  <!-- skins CSS-->
  <link href="{{ url('public/assets/css/skins.css') }}" rel="stylesheet"/>
  
</head>

<body>

   <!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner"><div class="loader"></div></div></div></div>
   <!-- end loader -->

   @yield('content')


   <!--start overlay-->
   <div class="overlay toggle-menu"></div>
	<!--end overlay-->
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2024 Prophetic Kids Sunday School
        </div>
      </div>
    </footer>
	<!--End footer-->
	
	<!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">
	
	
	 <p class="mb-0">Header Colors</p>
      <hr>
	  
	  <div class="mb-3">
	    <button type="button" id="default-header" class="btn btn-outline-primary">Default Header</button>
	  </div>
      
      <ul class="switcher">
        <li id="header1"></li>
        <li id="header2"></li>
        <li id="header3"></li>
        <li id="header4"></li>
        <li id="header5"></li>
        <li id="header6"></li>
      </ul>

      <p class="mb-0">Sidebar Colors</p>
      <hr>
	  
      <div class="mb-3">
	    <button type="button" id="default-sidebar" class="btn btn-outline-primary">Default Header</button>
	  </div>
	  
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
  
  </div><!--End wrapper-->

  <!-- Bootstrap core JavaScript-->
  <script src="{{ url('public/assets/js/jquery.min.js') }}"></script>
  <script src="{{ url('public/assets/js/popper.min.js') }}"></script>
  <script src="{{ url('public/assets/js/bootstrap.min.js') }}"></script>
	
 <!-- simplebar js -->
  <script src="{{ url('public/assets/plugins/simplebar/js/simplebar.js') }}"></script>
  <!-- sidebar-menu js -->
  <script src="{{ url('public/assets/js/sidebar-menu.js') }}"></script>
  <!-- loader scripts -->
  <script src="{{ url('public/assets/js/jquery.loading-indicator.html') }}"></script>
  <!-- Custom scripts -->
  <script src="{{ url('public/assets/js/app-script.js') }}"></script>
  <!-- Chart js -->
  
  <script src="{{ url('public/assets/plugins/Chart.js/Chart.min.js') }}"></script>
  <!-- Vector map JavaScript -->
  <script src="{{ url('public/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
  <script src="{{ url('public/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
  <!-- Easy Pie Chart JS -->
  <script src="{{ url('public/assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
  <!-- Sparkline JS -->
  <script src="{{ url('public/assets/plugins/sparkline-charts/jquery.sparkline.min.js') }}"></script>
  <script src="{{ url('public/assets/plugins/jquery-knob/excanvas.js') }}"></script>
  <script src="{{ url('public/assets/plugins/jquery-knob/jquery.knob.js') }}"></script>
    
    <script>
        $(function() {
            $(".knob").knob();
        });
    </script>
  <!-- Index js -->
  <script src="{{ url('public/assets/js/index.js') }}"></script>

  
</body>

<!-- Mirrored from codervent.com/bulona/demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Feb 2020 05:20:50 GMT -->
</html>
