@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')

	<div class="row-fluid">

		<div class="span2 sidebar-left">

			@include('admin_pro._partials.subnav')

		</div><!-- /span2-->


		<div class="span10 clearfix">

				<h3>
					Staff Contact Listings (Pro) &nbsp; <a href="{{ URL::route('pro-admin.contacts.create') }}" class="btn btn-mini btn-success"><i class="icon-plus-sign"></i> Add new contact</a>
				</h3>

			<table class="table view">
				<thead>
					<tr>
						<th>Name</th>
						<th>Title</th>
						<th>Order</th>
						<th>Last modified</th>
						<th>Modified by</th>
						<th style="width:50px">Edit</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($contacts as $contact)
						<tr>
							<td><i class="icon-user"></i> &nbsp; <a href="{{ URL::route('pro-admin.contacts.edit', $contact->id) }}">{{ $contact->name }}</a></td>

							<td>{{ $contact->title }}</td>

							<td>{{ $contact->order }}</td>

							<td>{{ App\Services\Helpers\MyHelper::format_date($contact->updated_at) }}</td>

							<td>{{ $contact->editor->first_name }}</td>

							<td>

								{{ App\Services\Helpers\MyHelper::btnEdit('pro-admin.contacts.edit', $contact->id) }}

								@if (Auth::user()->role == 'admin')
								{{ App\Services\Helpers\MyHelper::btnDelete('pro-admin.contacts.destroy', $contact->id) }}
								@endif

							</td>

						</tr>
					@endforeach

				</tbody>
			</table>


			{{ $contacts->links() }}

		</div><!-- /span10-->

	</div>

@stop
