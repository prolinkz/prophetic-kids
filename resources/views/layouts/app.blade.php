<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/bulona/demo/authentication-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Feb 2020 05:35:19 GMT -->
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content="Prophetic Kids Sunday School Web Application"/>
  <meta name="author" content="Zakiullah Khan"/>
  <title>Prophetic Kids</title>
  <!--favicon-->
  <link rel="icon" href="{{ url('public/assets/images/favicon.ico') }}" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="{{ url('public/assets/css/bootstrap.min.css') }}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{ url('public/assets/css/animate.css') }}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{ url('public/assets/css/icons.css') }}" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="{{ url('public/assets/css/app-style.css') }}" rel="stylesheet"/>
  
</head>

<body>

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->



   <!-- END HEADER -->

@yield('content')
    
<!--Start Back To Top Button-->
     <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	
	
	</div><!--wrapper-->
   <!-- START FOOTER -->

 <!-- Bootstrap core JavaScript-->
 <script src="{{ url('public/assets/js/jquery.min.js') }}"></script>
  <script src="{{ url('public/assets/js/popper.min.js') }}"></script>
  <script src="{{ url('public/assets/js/bootstrap.min.js') }}"></script>
	
  <!-- sidebar-menu js -->
  <script src="{{ url('public/assets/js/sidebar-menu.js') }}"></script>
  
  <!-- Custom scripts -->
  <script src="{{ url('public/assets/js/app-script.js') }}"></script>
  
</body>

</html>
