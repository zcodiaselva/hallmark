@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')

	<div class="row-fluid">

		<div class="span2">

			@include('admin._partials.subnav')

		</div><!-- /span2-->

		<div class="span8 clearfix">

			<h3>Edit Page - <span>{{ $page->name }}</span></h3>


			{{ Form::model($page, array('method' => 'put', 'files' => true, 'route' => array('admin.pages.update', $page->id))) }}

				<div class="control-group">
					{{ Form::label('name', 'Name') }}
					<div class="controls">
						{{ Form::text('name') }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('page_heading', 'Page Heading') }}
					<div class="controls">
						{{ Form::text('page_heading') }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('html_title', 'HTML Title') }}
					<div class="controls">
						{{ Form::text('html_title') }}
					</div>
				</div>

				@if ($page->has_body)
					<div class="control-group">
						{{ Form::label('body', 'Content') }}
						<div class="controls">
							{{ Form::textarea('temp_body', null, array('class' => 'ckeditor')) }}
						</div>
					</div>
				@endif

				@if ($page->has_body2)
					<div class="control-group">
						<div class="controls">
							{{ Form::textarea('temp_body2', null, array('class' => 'ckeditor')) }}
						</div>
					</div>
				@endif


				@if ($page->has_image1)
					<div class="control-group">
						{{ Form::label('image1', 'Image 1') }}
						
						@if ($page->image1)
						<img src="{{ URL::asset('uploads/main/page/'.$page->image1) }}">
						@endif

						<div class="controls">
							{{ Form::file('image1') }}
						</div>
					</div>
				@endif

				@if ($page->has_image2)
					<div class="control-group">
						{{ Form::label('image2', 'Image 2') }}
						
						@if ($page->image2)
						<img src="{{ URL::asset('uploads/main/page/'.$page->image2) }}">
						@endif

						<div class="controls">
							{{ Form::file('image2') }}
						</div>
					</div>
				@endif

				@if ($page->has_image3)
					<div class="control-group">
						{{ Form::label('image3', 'Image 3') }}
						
						@if ($page->image3)
						<img src="{{ URL::asset('uploads/main/page/'.$page->image3) }}">
						@endif

						<div class="controls">
							{{ Form::file('image3') }}
						</div>
					</div>
				@endif


				<div class="control-group">
					{{ Form::label('meta_keywords', 'Meta Keywords') }}
					<div class="controls">
						{{ Form::textarea('meta_keywords') }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('meta_description', 'Meta Description') }}
					<div class="controls">
						{{ Form::textarea('meta_description') }}
					</div>
				</div>

				<div class="form-actions">
					{{ Form::submit('SAVE', array('class' => 'btn btn-primary')) }}
					<a href="{{ URL::route('admin.pages.index') }}" class="btn btn-info">BACK</a>
				</div>

			{{ Form::close() }}

		</div><!-- /span10-->


		<div class="span2">

			<div class="info">
				<h4>Page Info:</h4>
				<p>Created at:<br>{{ $page->created_at }}</p>
				<p>Created by:<br>{{ $page->creator->first_name }}</p>
				<p>Last modified:<br>{{ $page->updated_at }}</p>
				<p>Modified by:<br>{{ $page->editor->first_name }}</p>
			</div>

		</div><!-- /span2-->

	</div>

@stop
