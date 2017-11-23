@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')

	<div class="row-fluid">

		<div class="span2">

			@include('admin_cis._partials.subnav')

		</div><!-- /span2-->

		<div class="span8 clearfix">

			<h3>Staff Categories (cis) - Edit Staff Category - <span>{{ $staffcategory->title }}</span></h3>


			{{ Form::model($staffcategory, array('method' => 'put', 'route' => array('cis-admin.staffcategory.update', $staffcategory->id))) }}

				<div class="control-group">
					{{ Form::label('title', 'Title') }}
					<div class="controls">
						{{ Form::text('title') }}
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
				<p>Created at:<br>{{ $staffcategory->created_at }}</p>
				<p>Created by:<br>{{ $staffcategory->creator->first_name }}</p>
				<p>Last modified:<br>{{ $staffcategory->updated_at }}</p>
				<p>Modified by:<br>{{ $staffcategory->editor->first_name }}</p>
			</div>

		</div><!-- /span2-->

	</div>

@stop
