@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')

	<div class="row-fluid">

		<div class="span2">

			@include('admin_cis._partials.subnav')


		</div><!-- /span2-->

		<div class="span8 clearfix">

			<h3>Categories (cis) - <span>Add New Staff Category</span></h3>


			{{ Form::open(array('route' => 'cis-admin.staffcategory.store')) }}

				<div class="control-group">
					{{ Form::label('name', 'Tite') }}
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

	</div>

@stop
