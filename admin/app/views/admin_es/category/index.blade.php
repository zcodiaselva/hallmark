@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')

	<div class="row-fluid">

		<div class="span2 sidebar-left">

			@include('admin_es._partials.subnav')

		</div><!-- /span2-->


		<div class="span10 clearfix">

				<h3>
					Categories (E&S) &nbsp; <a href="{{ URL::route('es-admin.category.create') }}" class="btn btn-mini btn-success"><i class="icon-plus-sign"></i> Add new Category</a>
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
					@foreach ($categories as $category)
						<tr>
							<td><i class="icon-list"></i> &nbsp; <a href="{{ URL::route('es-admin.category.edit', $category->id) }}">{{ $category->name }}</a></td>

							<td>{{ $category->order }}</td>

							<td>{{ App\Services\Helpers\MyHelper::format_date($category->updated_at) }}</td>

							<td>{{ $category->editor->first_name }}</td>

							<td>

								{{ App\Services\Helpers\MyHelper::btnEdit('es-admin.category.edit', $category->id) }}

							</td>

						</tr>
					@endforeach

				</tbody>
			</table>


			{{ $categories->links() }}

		</div><!-- /span10-->

	</div>

@stop
