@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')

	<div class="row-fluid">

		<div class="span2 sidebar-left">

			@include('admin_aero._partials.subnav')

		</div><!-- /span2-->


		<div class="span10 clearfix">

				<h3>
					Forms (aero)
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
							<td><i class="icon-list-alt"></i> &nbsp; <a href="{{ URL::route('aero-admin.forms-category.forms.index', $category->id) }}">{{ $category->name }}</a></td>

							<td>{{ $category->order }}</td>

							<td>{{ App\Services\Helpers\MyHelper::format_date($category->updated_at) }}</td>

							<td>{{ $category->editor->first_name }}</td>

							<td>
								{{ App\Services\Helpers\MyHelper::btnView('aero-admin.forms-category.forms.index', $category->id, 'Forms') }}

								{{ App\Services\Helpers\MyHelper::btnEdit('aero-admin.forms-category.edit', $category->id) }}

							</td>

						</tr>
					@endforeach

				</tbody>
			</table>


			{{ $categories->links() }}

		</div><!-- /span10-->

	</div>

@stop
