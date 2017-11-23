@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')

	<div class="row-fluid">

		<div class="span2 sidebar-left">

			@include('admin._partials.subnav')

		</div><!-- /span2-->


		<div class="span10 clearfix">

				<h3>
					Admin Users <a href="{{ URL::route('admin.admins.create') }}" class="btn btn-mini btn-success"><i class="icon-plus-sign"></i> Add new User</a>
				</h3>

			<table class="table view">
				<thead>
					<tr>
						<th>Name</th>
						<th>Role</th>
						<th>Last modified</th>
						<th>Modified by</th>
						<th>Edit</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($admins as $admin)
						<tr>
							<td><i class="icon-user"></i> &nbsp; <a href="{{ URL::route('admin.admins.edit', $admin->id) }}">{{ $admin->first_name }}</a></td>

							<td>{{ ucfirst($admin->role) }}</td>

							<td>{{ App\Services\Helpers\MyHelper::format_date($admin->updated_at) }}</td>

							<td>{{ $admin->editor->first_name }}</td>

							<td>

								{{ App\Services\Helpers\MyHelper::btnEdit('admin.admins.edit', $admin->id) }}

								@if ($admin->id != 1)
								{{ App\Services\Helpers\MyHelper::btnDelete('admin.admins.destroy', $admin->id) }}
								@endif

							</td>

						</tr>
					@endforeach

				</tbody>
			</table>


			{{ $admins->links() }}

		</div><!-- /span10-->

	</div>

@stop
