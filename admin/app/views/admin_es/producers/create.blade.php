@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')

	<div class="row-fluid">

		<div class="span2">

			@include('admin_es._partials.subnav')


		</div><!-- /span2-->

		<div class="span8 clearfix">

			<h3>Producers (E&amp;S) - <span>Add New Producer</span></h3>


			{{ Form::open(array('route' => 'es-admin.producers.store', 'files' => true, 'autocomplete'=>'off')) }}

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
					{{ Form::label('email', 'Email') }}
					<div class="controls">
						{{ Form::text('email') }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('phone', 'Phone') }}
					<div class="controls">
						{{ Form::text('phone') }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('username', 'Username') }}
					<div class="controls">
						{{ Form::text('username') }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('password', 'Password') }}
					<div class="controls">
						{{ Form::password('password') }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('password_confirmation', 'Confirm Password') }}
					<div class="controls">
						{{ Form::password('password_confirmation') }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('activated', 'Is active') }}
					<div class="controls">
						{{ Form::checkbox('activated', 1) }}
					</div>
				</div>

				<div class="form-actions">
					{{ Form::submit('SAVE', array('class' => 'btn btn-primary')) }}
					<a href="{{ URL::route('es-admin.producers.index') }}" class="btn btn-info">BACK</a>
				</div>

			{{ Form::close() }}

		</div><!-- /span10-->

	</div>

@stop
