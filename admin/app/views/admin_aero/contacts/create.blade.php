@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')

	<div class="row-fluid">

		<div class="span2">

			@include('admin_aero._partials.subnav')


		</div><!-- /span2-->

		<div class="span8 clearfix">

			<h3>Staff Contact Listings (aero) - <span>Add New contact</span></h3>


			{{ Form::open(array('route' => 'aero-admin.contacts.store', 'files' => true)) }}

				<div class="control-group">
					{{ Form::label('name', 'name') }}
					<div class="controls">
						{{ Form::text('name') }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('department', 'Department') }}
					<div class="controls">
						{{ Form::text('department') }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('phone', 'Phone') }}
					<div class="controls">
						{{ Form::text('phone') }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('email', 'Email') }}
					<div class="controls">
						{{ Form::text('email') }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('order', 'Order') }}
					<div class="controls">
						{{ Form::text('order') }}
					</div>
				</div>

				<div class="form-actions">
					{{ Form::submit('SAVE', array('class' => 'btn btn-primary')) }}
					<a href="{{ URL::route('aero-admin.contacts.index') }}" class="btn btn-info">BACK</a>
				</div>

			{{ Form::close() }}

		</div><!-- /span10-->

	</div>

@stop
