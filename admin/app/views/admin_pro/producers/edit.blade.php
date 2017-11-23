@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')

	<div class="row-fluid">

		<div class="span2">

			@include('admin_pro._partials.subnav')

		</div><!-- /span2-->

		<div class="span8 clearfix">

			<h3>Producers (Pro) - Edit Producer - <span>{{ $producer->first_name .' '. $producer->last_name }}</span></h3>


			{{ Form::model($producer, array('method' => 'put', 'files' => true, 'route' => array('pro-admin.producers.update', $producer->id))) }}

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
						{{ Form::password('password', array('placeholder'=>'Change password')) }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('password_confirmation', 'Confirm Password') }}
					<div class="controls">
						{{ Form::password('password_confirmation', array('placeholder'=>'Confirm new password')) }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('activated', 'Is active') }}
					<div class="controls">
						{{ Form::checkbox('activated', 1) }}
					</div>
				</div>

				<div class="form-actions">
					{{ Form::hidden('id') }}
					{{ Form::submit('SAVE', array('class' => 'btn btn-primary')) }}
					<a href="{{ URL::route('pro-admin.producers.index') }}" class="btn btn-info">BACK</a>
				</div>

			{{ Form::close() }}

		</div><!-- /span10-->

		<div class="span2">

			<div class="info">
				<h4>Producer Info:</h4>
				<p>Created at:<br>{{ $producer->created_at }}</p>
				<p>Created by:<br>{{ $producer->creator->first_name }}</p>
				<p>Last modified:<br>{{ $producer->updated_at }}</p>
				<p>Modified by:<br>{{ $producer->editor->first_name }}</p>
			</div>

		</div><!-- /span2-->

	</div>

@stop
