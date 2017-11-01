@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')

	<div class="row-fluid">

		<div class="span2 sidebar-left">

			@include('admin_es._partials.subnav')

		</div><!-- /span2-->


		<div class="span10 clearfix">

				<h3>
					Producers (E&amp;S) &nbsp; <a href="{{ URL::route('es-admin.producers.create') }}" class="btn btn-mini btn-success"><i class="icon-plus-sign"></i> Add new Producer</a>
				</h3>

			<table class="table view">
				<thead>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Status</th>
						<th>Last modified</th>
						<th>Modified by</th>
						<th>Edit</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($producers as $producer)
						<tr>
							<td><i class="icon-user"></i> &nbsp; <a href="{{ URL::route('es-admin.producers.edit', $producer->id) }}">{{ $producer->first_name }} {{ $producer->last_name }}</a></td>

							<td>{{ $producer->email }}</td>

							<td>{{ ($producer->activated == 1)? 'active' : 'Inactive' }}</td>

							<td>{{ App\Services\Helpers\MyHelper::format_date($producer->updated_at) }}</td>

							<td>{{ $producer->editor->first_name }}</td>

							<td>

								{{ App\Services\Helpers\MyHelper::btnEdit('es-admin.producers.edit', $producer->id) }}

								@if (Auth::user()->role == 'admin')
								{{ App\Services\Helpers\MyHelper::btnDelete('es-admin.producers.destroy', $producer->id) }}
								@endif

							</td>

						</tr>
					@endforeach

				</tbody>
			</table>


			{{ $producers->links() }}

		</div><!-- /span10-->

	</div>

@stop
