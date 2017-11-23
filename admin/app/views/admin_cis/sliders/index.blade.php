@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')

	<div class="row-fluid">

		<div class="span2 sidebar-left">

			@include('admin_cis._partials.subnav')

		</div><!-- /span2-->


		<div class="span10 clearfix">

				<h3>
					Slider (aero) &nbsp; <a href="{{ URL::route('cis-admin.sliders.create') }}" class="btn btn-mini btn-success"><i class="icon-plus-sign"></i> Add new Image</a>
				</h3>

			<table class="table view">
				<thead>
					<tr>
						<th>Title</th>
						<th>Order</th>
						<th>Last modified</th>
						<th>Modified by</th>
						<th>Edit</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($sliders as $slider)
						<tr>
							<td><i class="icon-picture"></i> &nbsp; <a href="{{ URL::route('cis-admin.sliders.edit', $slider->id) }}">{{ $slider->title }}</a></td>

							<td>{{ $slider->order }}</td>

							<td>{{ App\Services\Helpers\MyHelper::format_date($slider->updated_at) }}</td>

							<td>{{ $slider->editor->first_name }}</td>

							<td>

								{{ App\Services\Helpers\MyHelper::btnEdit('cis-admin.sliders.edit', $slider->id) }}

								@if (Auth::user()->role == 'admin')
								{{ App\Services\Helpers\MyHelper::btnDelete('cis-admin.sliders.destroy', $slider->id) }}
								@endif

							</td>

						</tr>
					@endforeach

				</tbody>
			</table>


			{{ $sliders->links() }}

		</div><!-- /span10-->

	</div>

@stop
