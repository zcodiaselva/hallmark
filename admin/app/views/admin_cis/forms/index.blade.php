@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')

	<div class="row-fluid">

		<div class="span2 sidebar-left">

			@include('admin_aero._partials.subnav')

		</div><!-- /span2-->


		<div class="span10 clearfix">

				<h3>
					Forms (aero) - <span>{{ $category->name }}</span>  &nbsp; 
					<a href="{{ URL::route('aero-admin.forms-category.forms.create', $category->id) }}" class="btn btn-mini btn-success"><i class="icon-plus-sign"></i> Add new Form</a>

					<a href="{{ URL::route('aero-admin.forms-category.index') }}" class="btn btn-mini btn-info"><i class="icon-circle-arrow-left"></i> Back</a>
				</h3>

			<table class="table view">
				<thead>
					<tr>
						<th>Name</th>
						<th>Order</th>
						<th>Last modified</th>
						<th>Modified by</th>
						<th style="width:50px;">Edit</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($forms as $form)
						<tr>
							<td><i class="icon-list-alt"></i> &nbsp; <a href="{{ URL::route('aero-admin.forms-category.forms.edit', array($category->id, $form->id)) }}">{{ $form->name }}</a></td>

							<td>{{ $form->order }}</td>

							<td>{{ App\Services\Helpers\MyHelper::format_date($form->updated_at) }}</td>

							<td>{{ $form->editor->first_name }}</td>

							<td>

								{{ App\Services\Helpers\MyHelper::btnEdit('aero-admin.forms-category.forms.edit',array($category->id, $form->id)) }}

								@if (Auth::user()->role == 'admin')
								{{ App\Services\Helpers\MyHelper::btnDelete2('aero-admin.forms-category.forms.destroy', $category->id, $form->id) }}
								@endif

							</td>

						</tr>
					@endforeach

				</tbody>
			</table>


			{{ $forms->links() }}

		</div><!-- /span10-->

	</div>

@stop
