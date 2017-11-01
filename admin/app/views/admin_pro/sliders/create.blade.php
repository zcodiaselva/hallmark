@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')

	<div class="row-fluid">

		<div class="span2">

			@include('admin_pro._partials.subnav')


		</div><!-- /span2-->

		<div class="span8 clearfix">

			<h3>Slider (Pro) - <span>Add New Image</span></h3>


			{{ Form::open(array('route' => 'pro-admin.sliders.store', 'files' => true)) }}

				<div class="control-group">
					{{ Form::label('title', 'Title') }}
					<div class="controls">
						{{ Form::text('title') }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('alt', 'Alternative Text') }}
					<div class="controls">
						{{ Form::text('alt') }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('order', 'Order') }}
					<div class="controls">
						{{ Form::text('order') }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('image', 'Image') }}

					<div class="controls">
						{{ Form::file('image') }}
					</div>
					<p class="info">Image size must be: 1170*290px</p>
				</div>

				<div class="form-actions">
					{{ Form::submit('SAVE', array('class' => 'btn btn-primary')) }}
					<a href="{{ URL::route('pro-admin.sliders.index') }}" class="btn btn-info">BACK</a>
				</div>

			{{ Form::close() }}

		</div><!-- /span10-->

	</div>

@stop
