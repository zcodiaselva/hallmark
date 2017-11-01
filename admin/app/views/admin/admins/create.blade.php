@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')

	<div class="row-fluid">

		<div class="span2 sidebar-left">

			@include('admin._partials.subnav')


		</div><!-- /span2-->

		<div class="span10 clearfix">

			<h3>Add New Admin User</h3>


			{{ Form::open(array('route' => 'admin.admins.store')) }}

				<div class="control-group">
					{{ Form::label('first_name', 'First Name') }}
					<div class="controls">
						{{ Form::text('first_name') }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('last_name', 'Last Name') }}
					<div class="controls">
						{{ Form::text('last_name') }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('role', 'Role') }}
					<div class="controls">
						{{ Form::select('role', array('admin' => 'Admin', 'editor' => 'Editor')) }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('email', 'Email Address') }}
					<div class="controls">
						{{ Form::text('email') }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('password', 'Password') }}
					<div class="controls">
						{{ Form::password('password') }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('repeat_password', 'Repeat Password') }}
					<div class="controls">
						{{ Form::password('repeat_password') }}
					</div>
				</div>

				<div class="form-actions">
					{{ Form::submit('Save', array('class' => 'btn btn-primary')) }}
					<a href="{{ URL::route('admin.admins.index') }}" class="btn btn-info">Back</a>
				</div>

			{{ Form::close() }}

		</div><!-- /span10-->

	</div>

@stop
