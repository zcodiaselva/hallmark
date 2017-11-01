@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')

	<div class="row-fluid">

		<div class="span2">

			@include('admin_aero._partials.subnav')


		</div><!-- /span2-->

		<div class="span8 clearfix">

			<h3>Forms (aero) - {{ $category->name }} - <span>Add New Form</span></h3>


			{{ Form::open(array('route' => array('aero-admin.forms-category.forms.store', $category->id), 'files' => true)) }}

				<div class="control-group">
					{{ Form::label('name', 'Name') }}
					<div class="controls">
						{{ Form::text('name') }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('number', 'Number') }}
					<div class="controls">
						{{ Form::text('number') }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('order', 'Order') }}
					<div class="controls">
						{{ Form::text('order') }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('link', 'Link') }}
					<div class="controls">
						{{ Form::text('link') }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('description', 'Description') }}
					<div class="controls">
						{{ Form::textarea('description') }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('pdf', 'PDF') }}

					<div class="controls">
						{{ Form::file('pdf') }}
					</div>
					<p class="info">Allowed File Types: .pdf</p>
				</div>

				<div class="form-actions">
					{{ Form::submit('SAVE', array('class' => 'btn btn-primary')) }}
					<a href="{{ URL::route('aero-admin.forms-category.forms.index', $category->id) }}" class="btn btn-info">BACK</a>
				</div>

			{{ Form::close() }}

		</div><!-- /span10-->

	</div>

@stop
