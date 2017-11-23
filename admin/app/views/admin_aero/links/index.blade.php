@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')

	<div class="row-fluid">

		<div class="span2 sidebar-left">

			@include('admin_aero._partials.subnav')

		</div><!-- /span2-->


		<div class="span10 clearfix">

				<h3>
					Informative Links (aero) &nbsp; <a href="{{ URL::route('aero-admin.links.create') }}" class="btn btn-mini btn-success"><i class="icon-plus-sign"></i> Add new Link</a>
				</h3>

			<table class="table view">
				<thead>
					<tr>
						<th>Title</th>
						<th>Order</th>
						<th>Last modified</th>
						<th>Modified by</th>
						<th style="width:50px">Edit</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($links as $link)
						<tr>
							<td><i class="icon-globe"></i> &nbsp; <a href="{{ URL::route('aero-admin.links.edit', $link->id) }}">{{ $link->title }}</a></td>

							<td>{{ $link->order }}</td>

							<td>{{ App\Services\Helpers\MyHelper::format_date($link->updated_at) }}</td>

							<td>{{ $link->editor->first_name }}</td>

							<td>

								{{ App\Services\Helpers\MyHelper::btnEdit('aero-admin.links.edit', $link->id) }}

								@if (Auth::user()->role == 'admin')
								{{ App\Services\Helpers\MyHelper::btnDelete('aero-admin.links.destroy', $link->id) }}
								@endif

							</td>

						</tr>
					@endforeach

				</tbody>
			</table>


			{{ $links->links() }}

		</div><!-- /span10-->

	</div>

@stop
