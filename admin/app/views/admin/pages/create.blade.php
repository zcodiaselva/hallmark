@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')

	<div class="row-fluid">

		<div class="span2 sidebar-left">

			@include('admin._partials.subnav')


		</div><!-- /span2-->

		<div class="span8 clearfix">

			<h3>Add new page</h3>


			{{ Form::open(array('route' => 'admin.pages.store', 'files' => true)) }}

				<div class="control-group">
					{{ Form::label('name', 'Name') }}
					<div class="controls">
						{{ Form::text('name') }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('has_image1', 'Has Image1') }}
					<div class="controls">
						{{ Form::select('has_image1', array(1 => 'Yes', 0 => 'No')) }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('has_image2', 'Has Image2') }}
					<div class="controls">
						{{ Form::select('has_image2', array(1 => 'Yes', 0 => 'No')) }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('has_image3', 'Has Image3') }}
					<div class="controls">
						{{ Form::select('has_image3', array(1 => 'Yes', 0 => 'No')) }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('has_body', 'Has Body') }}
					<div class="controls">
						{{ Form::select('has_body', array(1 => 'Yes', 0 => 'No')) }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('has_body2', 'Has Body2') }}
					<div class="controls">
						{{ Form::select('has_body2', array(1 => 'Yes', 0 => 'No')) }}
					</div>
				</div>

				<div class="form-actions">
					{{ Form::submit('SAVE', array('class' => 'btn btn-primary')) }}
					<a href="{{ URL::route('admin.pages.index') }}" class="btn btn-info">BACK</a>
				</div>

			{{ Form::close() }}

		</div><!-- /span10-->

	</div>

@stop
