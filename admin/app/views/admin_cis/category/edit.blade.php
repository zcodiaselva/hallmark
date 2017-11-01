@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')

	<div class="row-fluid">

		<div class="span2">

			@include('admin_cis._partials.subnav')

		</div><!-- /span2-->

		<div class="span8 clearfix">

			<h3>Categories (cis) - Edit Category - <span>{{ $category->name }}</span></h3>


			{{ Form::model($category, array('method' => 'put', 'route' => array('cis-admin.category.update', $category->id))) }}

				<div class="control-group">
					{{ Form::label('name', 'Name') }}
					<div class="controls">
						{{ Form::text('name') }}
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
					<a href="{{ URL::route('cis-admin.category.index') }}" class="btn btn-info">BACK</a>
				</div>

			{{ Form::close() }}

		</div><!-- /span10-->

		<div class="span2">

			<div class="info">
				<h4>Category Info:</h4>
				<p>Created at:<br>{{ $category->created_at }}</p>
				<p>Created by:<br>{{ $category->creator->first_name }}</p>
				<p>Last modified:<br>{{ $category->updated_at }}</p>
				<p>Modified by:<br>{{ $category->editor->first_name }}</p>
			</div>

		</div><!-- /span2-->

	</div>

@stop
