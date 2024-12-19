@extends('layouts.app')

@section('content')

<!-- Start wrapper-->
<div id="wrapper">

<div class="card card-authentication1 mx-auto my-5 p-1">
    <div class="card-body">
        <div class="text-center">
			<img src="{{ url('public/assets/images/logo.jpg') }}" alt="logo icon">
		</div>
     <div class="card-content p-3">
      <div class="card-title text-uppercase pb-2">Reset Your Password</div>
        <p class="pb-2">Please enter your registered email address, you will receive a link to create a new password.</p>
        <form>
          <div class="form-group">
          <label for="EmailAddress" class="">Your Email Address</label>
           <div class="position-relative has-icon-right">
              <input type="email" id="EmailAddress" class="form-control input-shadow" placeholder="Enter Your Email Address">
              <div class="form-control-position">
                  <i class="icon-envelope-open"></i>
              </div>
           </div>
          </div>
         
          <button type="button" class="btn btn-warning btn-block mt-3">Reset Password</button>
         </form>
       </div>
      </div>
        <div class="card-footer text-center py-3">
            <p class="text-dark mb-0">Return to the <a href="{{ url('/') }}"> Sign In</a> instead</p>
        </div>

     </div>

     <div class="credits text-center py-3">
            Designed by<a href="#"> </a>
        </div>


     <!--Start Back To Top Button-->
     <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	
	
	</div><!--wrapper-->
	
  @endsection