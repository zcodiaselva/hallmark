@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications') 
        
        
       <script>
       
       
       </script>

	<script>
	        $("document").ready(function(){
          		 var base_url= '<?php echo URL::to('/'); ?>';
			$('#template_id').change(function(){

				var data = CKEDITOR.ajax.load(base_url+'/admin/getLayout/'+$(this).val());		
				obj = JSON.parse(data)
                              	CKEDITOR.instances.html_content_en.setData(obj.en_layout);
				CKEDITOR.instances.html_content_sp.setData(obj.sp_layout);
			});


        });//end of document ready function
	</script>
	<div class="row-fluid">

		<div class="span2 sidebar-left">

			@include('admin_cis._partials.subnav')


		</div><!-- /span2-->

		<div class="span8 clearfix">

			<h3>Pages (CIS) - <span>Add new page</span></h3>


			{{ Form::open(array('route' => 'cis-admin.pages.store', 'files' => true)) }}

				<div class="control-group">
					{{ Form::label('name', 'Name') }}
					<div class="controls">
						{{ Form::text('name') }}
					</div>
				</div>
				

				<div class="control-group">
					{{ Form::label('html_title_en', 'HTML title EN') }}
					<div class="controls">
						{{ Form::text('html_title_en') }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('html_title_sp', 'HTML title SP') }}
					<div class="controls">
						{{ Form::text('html_title_sp') }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('page_heading_en', 'Page Heading EN') }}
					<div class="controls">
						{{ Form::text('page_heading_en') }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('page_heading_sp', 'Page Heading SP') }}
					<div class="controls">
						{{ Form::text('page_heading_sp') }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('category_id', 'Category') }}
					<div class="controls">
						{{ Form::select('category_id', $category_options ) }}
					</div>
				</div>
                        
                        
      	
                        	{{ Form::hidden('template_id', 1) }}
                <div class="control-group">
					{{ Form::label('html_content_en', 'Content (EN)') }}
					<div class="controls">
						{{ Form::textarea('html_content_en', @$html_content_en->en_layout, array('class' => 'ckeditor')) }}
					</div>
				</div>
                        
                <div class="control-group">
					{{ Form::label('html_content_sp', 'Content (SP)') }}
					<div class="controls">
						{{ Form::textarea('html_content_sp',@$html_content_en->sp_layout, array('class' => 'ckeditor')) }}
					</div>
				</div>
                                <div class="control-group">
					{{ Form::label('image', 'Side Image1') }}

					<div class="controls">
						{{ Form::file('image1') }}
					</div>
				
				</div>
                                <div class="control-group">
					{{ Form::label('image', 'Side Image2') }}

					<div class="controls">
						{{ Form::file('image2') }}
					</div>
				
				</div>
                               
				<div class="form-actions">
					{{ Form::submit('SAVE', array('class' => 'btn btn-primary')) }}
					<a href="{{ URL::route('cis-admin.pages.index') }}" class="btn btn-info">BACK</a>
				</div>

			{{ Form::close() }}

		</div><!-- /span10-->

	</div>

@stop
