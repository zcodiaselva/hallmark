@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')

	<div class="row-fluid">

		<div class="span2">

			@include('admin_cis._partials.subnav')

		</div><!-- /span2-->

		<div class="span8 clearfix">

			<h3>Email Addresses (CIS) - Edit - <span>{{ $email->title }}</span></h3>


			{{ Form::model($email, array('method' => 'put', 'route' => array('cis-admin.emails.update', $email->id))) }}

				<div class="control-group">
					{{ Form::label('title', 'Title') }}
					<div class="controls">
						{{ Form::text('title') }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('email', 'Email') }}
					<div class="controls">
						{{ Form::text('email') }}
					</div>
				</div>

				<div class="form-actions">
					{{ Form::submit('SAVE', array('class' => 'btn btn-primary')) }}
					<a href="{{ URL::route('cis-admin.emails.index') }}" class="btn btn-info">BACK</a>
				</div>

			{{ Form::close() }}

		</div><!-- /span10-->

		<div class="span2">

			<div class="info">
				<h4>Email Address Info:</h4>
				<p>Created at:<br>{{ $email->created_at }}</p>
				<p>Created by:<br>{{ $email->creator->first_name }}</p>
				<p>Last modified:<br>{{ $email->updated_at }}</p>
				<p>Modified by:<br>{{ $email->editor->first_name }}</p>
			</div>

		</div><!-- /span2-->

	</div>

@stop
