@if ($errors->any())
	<div class="alert alert-error">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		{{ implode('<br>', $errors->all()) }}
	</div>
@endif

@if (Session::has('message'))
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		{{ Session::get('message') }}
	</div>
@endif
