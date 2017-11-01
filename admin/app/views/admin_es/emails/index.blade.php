@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')

	<div class="row-fluid">

		<div class="span2 sidebar-left">

			@include('admin_es._partials.subnav')

		</div><!-- /span2-->


		<div class="span10 clearfix">

				<h3>
					Email Addresses (E&S)
				</h3>

			<table class="table view">
				<thead>
					<tr>
						<th>Title</th>
						<th>Email</th>
						<th>Last modified</th>
						<th>Modified by</th>
						<th width="50">Edit</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($emails as $email)
						<tr>
							<td><i class="icon-envelope"></i> &nbsp; <a href="{{ URL::route('es-admin.emails.edit', $email->id) }}">{{ $email->title }}</a></td>

							<td>{{ $email->email }}</td>

							<td>{{ App\Services\Helpers\MyHelper::format_date($email->updated_at) }}</td>

							<td>{{ $email->editor->first_name }}</td>

							<td>

								{{ App\Services\Helpers\MyHelper::btnEdit('es-admin.emails.edit', $email->id) }}

							</td>

						</tr>
					@endforeach

				</tbody>
			</table>


			{{ $emails->links() }}

		</div><!-- /span10-->

	</div>

@stop