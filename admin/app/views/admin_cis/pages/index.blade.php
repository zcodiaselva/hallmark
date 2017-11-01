@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')


	<script>
	        $("document").ready(function(){
	        	$('some-id').change(function(e) {
			    
			   });
			});//end of document ready function
	</script>

	<div class="row-fluid">

		<div class="span2 sidebar-left">

			@include('admin_cis._partials.subnav')

		</div><!-- /span2-->


		<div class="span10 clearfix">

            <h3>
					Pages (CIS) &nbsp; <a href="{{ URL::route('cis-admin.pages.create') }}" class="btn btn-mini btn-success">
					<i class="icon-plus-sign"></i> Add new Page</a>
			</h3>
			
		{{ Form::open(array('route' => 'cis-admin.pages.search', 'method' => 'get')) }}	
			<div class="control-group">
					{{ Form::label('category_id', 'Category') }}
					<div class="controls">
						{{ Form::select('category_id', $category_options, $category_id, array('onchange' => 'this.form.submit();') ) }} 
						  
					</div>
			</div>
		{{ Form::close() }}

			<table class="table view">
				
				<thead>
					<tr>
						<th>Name</th>
						<th>Last modified</th>
						<th>Modified by</th>
						<th width="50px">Edit</th>
						<!--<th>Approval</th>-->
					</tr>
				</thead>

				<tbody>

					@foreach ($pages as $page)

						<tr>
							<td><i class="icon-file"></i> &nbsp; {{ $page->category->name }} &gt; <a href="{{ URL::route('cis-admin.pages.edit', $page->id) }}"> {{ $page->name }}</a></td>

							<td>{{ App\Services\Helpers\MyHelper::format_date($page->updated_at) }}</td>

							<td>{{ $page->editor->first_name }}</td>

							<td>

								{{ App\Services\Helpers\MyHelper::btnEdit('cis-admin.pages.edit', $page->id) }}

								@if ((Auth::user()->role == 'admin')&&($page->static_page != 1))
								{{ App\Services\Helpers\MyHelper::btnDelete('cis-admin.pages.destroy', $page->id) }}
								@endif

							</td>

							<!--<td>

								@if ($page->status == 'approved')

										<span class='gray'>Published</span>
									
								@else
										@if (Auth::user()->role == 'admin')

											{{ App\Services\Helpers\MyHelper::btnApprove('admin.pages.destroy', $page->id) }}

										@else

											<span class='red'>Not approved</span>

										@endif
								@endif

							</td>-->

						</tr>

					@endforeach

				</tbody>

			</table>

			{{ $pages->appends(array('category_id' => $category_id))->links() }}

		</div><!-- /span10-->

	</div>

@stop
