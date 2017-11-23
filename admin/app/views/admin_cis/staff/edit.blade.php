@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')

	<div class="row-fluid">

		<div class="span2">

			@include('admin_cis._partials.subnav')

		</div><!-- /span2-->

		<div class="span8 clearfix">

			<h3>Staff (cis) - Edit Staff - <span>{{ $staff->name }}</span></h3>


			{{ Form::model($staff, array('method' => 'put', 'route' => array('cis-admin.staff.update', $staff->id))) }}

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
					<a href="{{ URL::route('cis-admin.staffcategory.index') }}" class="btn btn-info">BACK</a>
				</div>

			{{ Form::close() }}

		</div><!-- /span10-->

		<div class="span2">

			<div class="info">
				<h4>Category Info:</h4>
				<p>Created at:<br>{{ $staff->created_at }}</p>
				<p>Created by:<br>{{ $staff->creator->first_name }}</p>
				<p>Last modified:<br>{{ $staff->updated_at }}</p>
				<p>Modified by:<br>{{ $staff->editor->first_name }}</p>
			</div>

		</div><!-- /span2-->

	</div>

@stop
