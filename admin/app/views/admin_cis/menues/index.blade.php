@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')

	<div class="row-fluid">

		<div class="span2 sidebar-left">

			@include('admin_cis._partials.subnav')

		</div><!-- /span2-->


		<div class="span10 clearfix">

				<h3>
					Menues (CIS) &nbsp; <a href="{{ URL::route('cis-admin.menu.create') }}" class="btn btn-mini btn-success"><i class="icon-plus-sign"></i> Add new Menu</a>
				</h3>

			<table class="table view">
				<thead>
					<tr>
						<th>Name (EN)</th>
						<th>Menu Type</th>
						<th>Order</th>
						<th>Last modified</th>
						<th>Modified by</th>
						<th>Edit</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($menues as $menu)
						<tr>
							<td><i class="icon-list"></i> &nbsp; <a href="{{ URL::route('cis-admin.menu.edit', $menu->id) }}">{{ $menu->name_en }}</a></td>

							<td>{{ $menu->menu_type }}</td>

							<td>{{ $menu->order }}</td>

							<td>{{ App\Services\Helpers\MyHelper::format_date($menu->updated_at) }}</td>

							<td>{{ $menu->editor->first_name }}</td>

							<td>

								{{ App\Services\Helpers\MyHelper::btnEdit('cis-admin.menu.edit', $menu->id) }}

								@if (Auth::user()->role == 'admin')
								{{ App\Services\Helpers\MyHelper::btnDelete('cis-admin.menu.destroy', $menu->id) }}
								@endif
							</td>

						</tr>
					@endforeach

				</tbody>
			</table>


			{{ $menues->links() }}

		</div><!-- /span10-->

	</div>

@stop
