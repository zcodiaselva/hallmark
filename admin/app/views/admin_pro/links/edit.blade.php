@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')

	<div class="row-fluid">

		<div class="span2">

			@include('admin_pro._partials.subnav')

		</div><!-- /span2-->

		<div class="span8 clearfix">

			<h3>Informative Links (Pro) - Edit Link - <span>{{ $link->title }}</span></h3>


			{{ Form::model($link, array('method' => 'put', 'files' => true, 'route' => array('pro-admin.links.update', $link->id))) }}

				<div class="control-group">
					{{ Form::label('title', 'Title') }}
					<div class="controls">
						{{ Form::text('title') }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('link', 'Link') }}
					<div class="controls">
						{{ Form::text('link') }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('order', 'Order') }}
					<div class="controls">
						{{ Form::text('order') }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('description', 'Description') }}
					<div class="controls">
						{{ Form::textarea('description') }}
					</div>
				</div>


				<div class="form-actions">
					{{ Form::submit('SAVE', array('class' => 'btn btn-primary')) }}
					<a href="{{ URL::route('pro-admin.links.index') }}" class="btn btn-info">BACK</a>
				</div>

			{{ Form::close() }}

		</div><!-- /span10-->

		<div class="span2">

			<div class="info">
				<h4>Link Info:</h4>
				<p>Created at:<br>{{ $link->created_at }}</p>
				<p>Created by:<br>{{ $link->creator->first_name }}</p>
				<p>Last modified:<br>{{ $link->updated_at }}</p>
				<p>Modified by:<br>{{ $link->editor->first_name }}</p>
			</div>

		</div><!-- /span2-->

	</div>

@stop
