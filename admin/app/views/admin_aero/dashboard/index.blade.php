@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')


	<div class="row-fluid">

		<div class="span2 sidebar-left">

			@include('admin_aero._partials.subnav')

		</div><!-- /span2-->


		<div class="span10 clearfix">


			<div class="row-fluid">

				<div class="span6 clearfix">

					<table class="table view">
						<thead>
							<tr>
								<th class="red">PENDING APPROVAL</th>
							</tr>
						</thead>
						<tbody>

							@if (count($not_approved_pages))

								@foreach ($not_approved_pages as $page)

									<tr>
										<td>{{ App\Services\Helpers\MyHelper::format_date2($page->updated_at) }}
											:: {{ $page->category->name }} &gt;&gt; <a class="red" href="{{ URL::route('aero-admin.pages.edit', $page->id) }}">{{ $page->name }} </a> </td>
									</tr>

								@endforeach

							@else

								<tr><td>NO RECORDS FOUND.</td></tr>

							@endif

						</tbody>
					</table>

				</div><!-- /span6-->

				<div class="span6 clearfix">

					<table class="table view">
						<thead>
							<tr>
								<th class="green">RECENTLY APPROVED</th>
							</tr>
						</thead>
						<tbody>
							
							@if (count($approved_pages))

								@foreach ($approved_pages as $page)

									<tr>
										<td>{{ App\Services\Helpers\MyHelper::format_date2($page->updated_at) }}
											:: {{ $page->category->name }} &gt;&gt; <a class="green" href="{{ URL::route('aero-admin.pages.edit', $page->id) }}">{{ $page->name }} </a> </td>
									</tr>

								@endforeach

							@else

								<tr><td>NO RECORDS FOUND.</td></tr>

							@endif
							
						</tbody>
					</table>

				</div><!-- /span6-->

			</div>

		</div><!-- /span10-->

	</div>

@stop
