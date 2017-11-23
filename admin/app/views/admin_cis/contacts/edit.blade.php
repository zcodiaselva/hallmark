@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')

	<div class="row-fluid">

		<div class="span2">

			@include('admin_aero._partials.subnav')

		</div><!-- /span2-->

		<div class="span8 clearfix">

			<h3>Staff Contact Listings (E&amp;S) - Edit contact - <span>{{ $contact->name }}</span></h3>


			{{ Form::model($contact, array('method' => 'put', 'files' => true, 'route' => array('aero-admin.contacts.update', $contact->id))) }}

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

		<div class="span2">

			<div class="info">
				<h4>Contact Info:</h4>
				<p>Created at:<br>{{ $contact->created_at }}</p>
				<p>Created by:<br>{{ $contact->creator->first_name }}</p>
				<p>Last modified:<br>{{ $contact->updated_at }}</p>
				<p>Modified by:<br>{{ $contact->editor->first_name }}</p>
			</div>

		</div><!-- /span2-->

	</div>

@stop
