@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')

	<div class="row-fluid">

		<div class="span2">

			@include('admin_cis._partials.subnav')


		</div><!-- /span2-->

		<div class="span8 clearfix">

			<h3>Menues (CIS) - <span>Add New Menu</span></h3>


			{{ Form::open(array('route' => 'cis-admin.menu.store')) }}

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
						{{ Form::select('category_id', $category_options ) }}
					</div>
				</div>
				
				<div class="control-group">
					{{ Form::label('parent_id', 'Parent menu') }}
					<div class="controls">
					   {{ Form::select('parent_id', array('0' => 'Please Select') + $menues , 'default') }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('menu_type', 'Menu Type') }}
					<div class="controls">
						{{ Form::select('menu_type', array('ex_link' => 'External link', 'page' => 'Page'), 'page') }}
					</div>
				</div>

				<div class="control-group" id="hpl_menu_edit_link_div" style="display:none;">
					{{ Form::label('link', 'Link') }}
					<div class="controls">
						{{ Form::text('link') }}
					</div>
				</div>

				<div class="control-group" id="hpl_menu_edit_page_div">
					{{ Form::label('page_id', 'Page') }}
					<div class="controls">
					   {{ Form::select('page_id', array('0' => 'Please Select') + $pages , 'default') }}
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

	</div>

@stop
