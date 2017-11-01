@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')

	<div class="row-fluid">

		<div class="span2">

			@include('admin_es._partials.subnav')

		</div><!-- /span2-->

		<div class="span8 clearfix">

			<h3>Forms (E&amp;S) - {{ $category->name }} - <span>{{ $form->name }}</span></h3>


			{{ Form::model($form, array('method' => 'put', 'files' => true, 'route' => array('es-admin.forms-category.forms.update', $category->id, $form->id))) }}

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

					@if ($form->pdf)
						<a href="{{ URL::to('es-admin/download-form/' . $form->pdf) }}">Download PDF</a>
					@endif
					
					<p class="info">Allowed File Types: .pdf, Maximum file upload size: 2MB</p>

					<div class="controls">
						{{ Form::file('pdf') }}
						{{ Form::hidden('id') }}
					</div>
				</div>

				<div class="form-actions">
					{{ Form::submit('SAVE', array('class' => 'btn btn-primary')) }}
					<a href="{{ URL::route('es-admin.forms-category.forms.index', $category->id) }}" class="btn btn-info">BACK</a>
				</div>

			{{ Form::close() }}

		</div><!-- /span10-->

		<div class="span2">

			<div class="info">
				<h4>Image Info:</h4>
				<p>Created at:<br>{{ $form->created_at }}</p>
				<p>Created by:<br>{{ $form->creator->first_name }}</p>
				<p>Last modified:<br>{{ $form->updated_at }}</p>
				<p>Modified by:<br>{{ $form->editor->first_name }}</p>
			</div>

		</div><!-- /span2-->

	</div>

@stop
