@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')

	<div class="row-fluid">

		<div class="span2 sidebar-left">

			@include('admin_cis._partials.subnav')

		</div><!-- /span2-->


		<div class="span10 clearfix">

				<h3>
					Staff Categories (cis) &nbsp; <a href="{{ URL::route('cis-admin.staffcategory.create') }}" class="btn btn-mini btn-success"><i class="icon-plus-sign"></i> Add new Category</a>
				</h3>

			<table class="table view">
				<thead>
					<tr>
						<th>Title</th>
						
						<th>Last modified</th>
						<th>Modified by</th>
						<th>Edit</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($staffcategories as $staffcategory)
						<tr>
							<td><i class="icon-list"></i> &nbsp; <a href="{{ URL::route('cis-admin.staffcategory.edit', $staffcategory->id) }}">{{ $staffcategory->title }}</a></td>

							

							<td>{{ App\Services\Helpers\MyHelper::format_date($staffcategory->updated_at) }}</td>

							<td>{{ $staffcategory->editor->first_name }}</td>

							<td>

								{{ App\Services\Helpers\MyHelper::btnEdit('cis-admin.staffcategory.edit', $staffcategory->id) }}

							</td>

						</tr>
					@endforeach

				</tbody>
			</table>


			

		</div><!-- /span10-->

	</div>

@stop
