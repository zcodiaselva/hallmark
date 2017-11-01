@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')

	<div class="row-fluid">

		<div class="span2 sidebar-left">

			@include('admin_cis._partials.subnav')

		</div><!-- /span2-->


		<div class="span10 clearfix">

				<h3>
					Industry (CIS) &nbsp; <a href="{{ URL::route('cis-admin.industry.create') }}" class="btn btn-mini btn-success"><i class="icon-plus-sign"></i> Add new Class</a>
				</h3>

			<table class="table view">
				<thead>
					<tr>
						<th>Name</th>
                                             
						<th>Order</th>
						<th>Last modified</th>
						<th>Modified by</th>
						<th>Edit</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($industry as $in)
						<tr>
							<td><i class="icon-list"></i> &nbsp; <a href="{{ URL::route('cis-admin.industry.edit', $in->id) }}">{{ $in->name }}</a></td>
                                                       
							<td>{{ $in->order }}</td>

							<td>{{ App\Services\Helpers\MyHelper::format_date($in->updated_at) }}</td>

							<td>{{ $in->editor->first_name }}</td>

							<td>

								{{ App\Services\Helpers\MyHelper::btnEdit('cis-admin.industry.edit', $in->id) }}

								@if (Auth::user()->role == 'admin')
								{{ App\Services\Helpers\MyHelper::btnDelete('cis-admin.industry.destroy', $in->id) }}
								@endif
							</td>

						</tr>
					@endforeach

				</tbody>
			</table>


			
		</div><!-- /span10-->

	</div>

@stop
