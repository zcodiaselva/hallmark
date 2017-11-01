@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')

	<div class="row-fluid">

		<div class="span2">

			@include('admin_aero._partials.subnav')

		</div><!-- /span2-->

		<div class="span8 clearfix">

			<h3>Slider (aero) - Edit Image - <span>{{ $slider->title }}</span></h3>


			{{ Form::model($slider, array('method' => 'put', 'files' => true, 'route' => array('aero-admin.sliders.update', $slider->id))) }}

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

					@if ($slider->image)
						<img src="{{ URL::asset('uploads/aero/slider/'.$slider->image) }}">
					@endif
					
					<p class="info">Image size must be: 1170*290px</p>

					<div class="controls">
						{{ Form::file('image') }}
						{{ Form::hidden('id') }}
					</div>
				</div>

				<div class="form-actions">
					{{ Form::submit('SAVE', array('class' => 'btn btn-primary')) }}
					<a href="{{ URL::route('aero-admin.sliders.index') }}" class="btn btn-info">BACK</a>
				</div>

			{{ Form::close() }}

		</div><!-- /span10-->

		<div class="span2">

			<div class="info">
				<h4>Image Info:</h4>
				<p>Created at:<br>{{ $slider->created_at }}</p>
				<p>Created by:<br>{{ $slider->creator->first_name }}</p>
				<p>Last modified:<br>{{ $slider->updated_at }}</p>
				<p>Modified by:<br>{{ $slider->editor->first_name }}</p>
			</div>

		</div><!-- /span2-->

	</div>

@stop
