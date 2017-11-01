@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')

	<div class="row-fluid">

		<div class="span2 sidebar-left">

			@include('admin_aero._partials.subnav')


		</div><!-- /span2-->

		<div class="span8 clearfix">

			<h3>Pages (aero) - <span>Add new page</span></h3>


			{{ Form::open(array('route' => 'aero-admin.pages.store', 'files' => true)) }}

				<div class="control-group">
					{{ Form::label('name', 'Name') }}
					<div class="controls">
						{{ Form::text('name') }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('category_id', 'Category') }}
					<div class="controls">
						{{ Form::select('category_id', $category_options ) }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('has_image1', 'Has Image 1') }}
					<div class="controls">
						{{ Form::select('has_image1', array(1 => 'Yes', 0 => 'No')) }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('has_image2', 'Has Image 2') }}
					<div class="controls">
						{{ Form::select('has_image2', array(1 => 'Yes', 0 => 'No')) }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('has_image3', 'Has Image 3') }}
					<div class="controls">
						{{ Form::select('has_image3', array(1 => 'Yes', 0 => 'No')) }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('has_image4', 'Has Image 4') }}
					<div class="controls">
						{{ Form::select('has_image4', array(1 => 'Yes', 0 => 'No')) }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('has_image5', 'Has Image 5') }}
					<div class="controls">
						{{ Form::select('has_image5', array(1 => 'Yes', 0 => 'No')) }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('has_body', 'Has Body 1') }}
					<div class="controls">
						{{ Form::select('has_body', array(1 => 'Yes', 0 => 'No')) }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('has_body2', 'Has Body 2') }}
					<div class="controls">
						{{ Form::select('has_body2', array(1 => 'Yes', 0 => 'No')) }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('has_body3', 'Has Body 3') }}
					<div class="controls">
						{{ Form::select('has_body3', array(1 => 'Yes', 0 => 'No')) }}
					</div>
				</div>

				<div class="form-actions">
					{{ Form::submit('SAVE', array('class' => 'btn btn-primary')) }}
					<a href="{{ URL::route('aero-admin.pages.index') }}" class="btn btn-info">BACK</a>
				</div>

			{{ Form::close() }}

		</div><!-- /span10-->

	</div>

@stop
