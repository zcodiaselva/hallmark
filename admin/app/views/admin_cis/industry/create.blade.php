@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')

	<div class="row-fluid">

		<div class="span2">

			@include('admin_cis._partials.subnav')


		</div><!-- /span2-->

		<div class="span8 clearfix">

			<h3>Industries (CIS) - <span>Add New Class</span></h3>


			{{ Form::open(array('route' => 'cis-admin.industry.store')) }}

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

	</div>

@stop
