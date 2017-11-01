<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Administration Login</title>

<link rel="shortcut icon" href="{{ URL::asset('assets/img/favicon.gif') }}" type="image/x-icon">

<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
<link href="{{ URL::asset('assets/admin/css/main.css') }}" rel="stylesheet">

<script src="//code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
<script src="{{ URL::asset('assets/admin/js/dropzone.js') }}"></script>
<script src="{{ URL::asset('assets/admin/js/script.js') }}"></script>
</head>
<body>

	<div class="container2">

	{{ Form::open(array('class'=>'form-signin')) }}

		<h3 class="form-signin-heading"><i class="icon-lock"></i> Administration Login</h3>

		@include('admin._partials.notifications')	

		<div class="input-prepend">

			<span class="add-on">Username</span>
			
			{{ Form::text('email', Input::old('email')) }}

		</div>

		<div class="input-prepend">

			<span class="add-on">Password&nbsp;</span>
			
			{{ Form::password('password') }}

		</div>


		{{ Form::button('Login', array('type'=>'submit', 'class' => 'btn btn-primary btn-login')) }}



    {{ Form::close() }}
              
  <div style="color:#A78D00; padding:10px 50px; max-width:350px; margin:auto; text-align:center; font-size:10px;">
  	<span style="color: #ff0000;">WARNING: </span> Any unauthorized access to this system is prohibited and is subject to criminal and civil penalties 
  	under applicable State and Federal Laws.  Individuals using this system are subject to having all activities 
  	on this system monitored by system or security personnel.  Anyone using this system expressly consents to such 
  	monitoring.
  </div>

	</div>
	<!-- /container -->

</body>
</html>

