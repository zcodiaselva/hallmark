@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')

	<div class="row-fluid">

		<div class="span2">

			@include('admin_cis._partials.subnav')

		</div><!-- /span2-->

		<div class="span8 clearfix">

			<h3>Menues (hpl) - Edit Menu - <span>{{ $menu->name_en }}</span></h3>


			{{ Form::model($menu, array('method' => 'put', 'route' => array('cis-admin.menu.update', $menu->id))) }}

				<div class="control-group">
					{{ Form::label('name_en', 'Name (English)') }}
					<div class="controls">
						{{ Form::text('name_en') }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('name_sp', 'Name (Spanish)') }}
					<div class="controls">
						{{ Form::text('name_sp') }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('description', 'Description') }}
					<div class="controls">
						{{ Form::textarea('description') }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('category_id', 'Category') }}
					<div class="controls">
						{{ Form::select('category_id', $category_options, $menu->category_id ) }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('parent_id', 'Parent menu') }}
					<div class="controls">
					   {{ Form::select('parent_id', array('0' => 'Please Select') + $menues , $menu->parent_id) }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('menu_type', 'Menu Type') }}
					<div class="controls">
						{{ Form::select('menu_type', array('ex_link' => 'External link', 'page' => 'Page'),  $menu->menu_type) }}
					</div>
				</div>
 
				<div class="control-group" id="hpl_menu_edit_link_div" style="@if ($menu->menu_type == "page") display:none @endif	">
					{{ Form::label('link', 'Link') }}
					<div class="controls">
						{{ Form::text('link') }}
					</div>
				</div>

				<div class="control-group" id="hpl_menu_edit_page_div" style="@if ($menu->menu_type == "ex_link") display:none @endif	">
					{{ Form::label('page_id', 'Page') }}
					<div class="controls">
					   {{ Form::select('page_id', array('0' => 'Please Select') + $pages , $menu->page_id) }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('order', 'Order') }}
					<div class="controls">
						{{ Form::text('order') }}
					</div>
				</div>

				<div class="form-actions">
					{{ Form::submit('SAVE', array('class' => 'btn btn-primary')) }}
					<a href="{{ URL::route('cis-admin.menu.index') }}" class="btn btn-info">BACK</a>
				</div>

			{{ Form::close() }}

		</div><!-- /span10-->

		<div class="span2">

			<div class="info">
				<h4>Menu Info:</h4>
				<p>Created at:<br>{{ $menu->created_at }}</p>
				<p>Created by:<br>{{ $menu->creator->first_name }}</p>
				<p>Last modified:<br>{{ $menu->updated_at }}</p>
				<p>Modified by:<br>{{ $menu->editor->first_name }}</p>
			</div>

		</div><!-- /span2-->

	</div>

@stop
