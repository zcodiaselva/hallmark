<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>HALLMARK SELECT - ADMIN PANEL</title>

	@include('admin._partials.assets')
</head>
<body>

@include('admin._partials.header')

<div class="container-fluid">

	<div class="container-fluid ct">

			@yield('main')
		
	</div>

	<footer>
        <p>&copy; {{ date('Y') }} Hallmark Select. All rights reserved.</p>
    </footer>	
</div>

{{ HTML::script('assets/lib/ckeditor/ckeditor.js') }}

</body>
</html>
