@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')

	<div class="row-fluid">

		<div class="span2">

			@include('admin_cis._partials.subnav')

		</div><!-- /span2-->

		<div class="span8 clearfix">

			<h3>Industry (cis) - Edit Industry class - <span>{{ $industry->name }}</span></h3>


			{{ Form::model($industry, array('method' => 'put', 'route' => array('cis-admin.industry.update', $industry->id))) }}

				<div class="control-group">
					{{ Form::label('name', 'Name') }}
					<div class="controls">
						{{ Form::text('name') }}
					</div>
				</div>
                                <div class="control-group">
					{{ Form::label('sub_classes', 'Sub Classes') }}
					<div class="controls">
						{{ Form::textarea('sub_classes') }}
					</div>
				</div>
				

				<div class="control-group">
					{{ Form::label('order', 'Order') }}
					<div class="controls">
						{{ Form::text('order') }}
					</div>
				</div>

				<div class="form-actions">
					{{ Form::submit('SAVE', array('class' => 'btn btn-primary')) }}
					<a href="{{ URL::route('cis-admin.industry.index') }}" class="btn btn-info">BACK</a>
				</div>

			{{ Form::close() }}

		</div><!-- /span10-->

		<div class="span2">

			<div class="info">
				<h4>Industry Spotlight Class Info:</h4>
				<p>Created at:<br>{{ $industry->created_at }}</p>
				<p>Created by:<br>{{ $industry->creator->first_name }}</p>
				<p>Last modified:<br>{{ $industry->updated_at }}</p>
				<p>Modified by:<br>{{ $industry->editor->first_name }}</p>
			</div>

		</div><!-- /span2-->

	</div>

@stop
