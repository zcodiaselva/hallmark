@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')

	<div class="row-fluid">

		<div class="span2 sidebar-left">

			@include('admin_aero._partials.subnav')

		</div><!-- /span2-->


		<div class="span10 clearfix">

			<h3>
				Pages (aero)
			</h3>

			<table class="table view">
				
				<thead>
					<tr>
						<th>Name</th>
						<th>Last modified</th>
						<th>Modified by</th>
						<th>Edit</th>
						<th>Approval</th>
					</tr>
				</thead>

				<tbody>

					@foreach ($pages as $page)

						<tr>
							<td><i class="icon-file"></i> &nbsp; {{ $page->category->name }} &gt; <a href="{{ URL::route('aero-admin.pages.edit', $page->id) }}"> {{ $page->name }}</a></td>

							<td>{{ App\Services\Helpers\MyHelper::format_date($page->updated_at) }}</td>

							<td>{{ $page->editor->first_name }}</td>

							<td>

								{{ App\Services\Helpers\MyHelper::btnEdit('aero-admin.pages.edit', $page->id) }}

							</td>

							<td>

								@if ($page->status == 'approved')

										<span class='gray'>Published</span>
									
								@else
										@if (Auth::user()->role == 'admin')

											{{ App\Services\Helpers\MyHelper::btnApprove('aero-admin.pages.destroy', $page->id) }}

										@else

											<span class='red'>Not approved</span>

										@endif
								@endif

							</td>

						</tr>

					@endforeach

				</tbody>

			</table>

			{{ $pages->links() }}

		</div><!-- /span10-->

	</div>

@stop
