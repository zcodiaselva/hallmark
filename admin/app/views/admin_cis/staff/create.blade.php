@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')

	<div class="row-fluid">

		<div class="span2">

			@include('admin_cis._partials.subnav')


		</div><!-- /span2-->

		<div class="span8 clearfix">

			<h3>Staff (cis) - <span>Add New Staff </span></h3>


			{{ Form::open(array('route' => 'cis-admin.staff.store')) }}

				<div class="control-group">
					{{ Form::label('name', 'Name') }}
					<div class="controls">
						{{ Form::text('name') }}
					</div>
				</div>
                        <div class="control-group">
					{{ Form::label('designation', 'Designation') }}
					<div class="controls">
						{{ Form::text('designation') }}
					</div>
				</div>
                        <div class="control-group">
					{{ Form::label('description', 'Description') }}
					<div class="controls">
						{{ Form::textarea('description') }}
					</div>
				</div>
                        <div class="control-group">
					{{ Form::label('category', 'Category') }}
					<div class="controls">
						{{ Form::select('category', $category_options ) }}
					</div>
				</div>

				<div class="form-actions">
					{{ Form::submit('SAVE', array('class' => 'btn btn-primary')) }}
					<a href="{{ URL::route('cis-admin.staff.index') }}" class="btn btn-info">BACK</a>
				</div>

			{{ Form::close() }}

		</div><!-- /span10-->

	</div>

@stop
