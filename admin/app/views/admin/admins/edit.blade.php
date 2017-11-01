@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')

	<div class="row-fluid">

		<div class="span2">

			@include('admin._partials.subnav')

		</div><!-- /span2-->

		<div class="span8 clearfix">

			<h3>Edit Admin User - <span>{{ $admin->first_name }}</span></h3>


			{{ Form::model($admin, array('method' => 'put', 'files' => true, 'route' => array('admin.admins.update', $admin->id), 'autocomplete'=>'off')) }}

				<div class="control-group">
					{{ Form::label('first_name', 'First Name') }}
					<div class="controls">
						{{ Form::text('first_name') }}
						{{ Form::hidden('id') }}
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
					{{ Form::label('password', 'New Password') }}
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


		<div class="span2">

			<div class="info">
				<h4>User Info:</h4>
				<p>Created:<br>{{ $admin->created_at }}</p>
				<p>Created by:<br>{{ $admin->creator->first_name }}</p>
				<p>Last modified:<br>{{ $admin->updated_at }}</p>
				<p>Modified by:<br>{{ $admin->editor->first_name }}</p>
			</div>

		</div><!-- /span2-->


	</div>

@stop
