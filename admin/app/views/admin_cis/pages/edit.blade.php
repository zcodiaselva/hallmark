@extends('admin._layouts.default')

@section('main')

	@include('admin._partials.notifications')

		<style type="text/css" media="screen">
			#marketing_admin input[type="text"] {
			  width: 150px !important;
			  margin-right: 10px !important;
			}
		</style>

		<script>
	        $("document").ready(function(){
          
			$('#template_id').change(function(){

				var base_url= '<?php echo URL::to('/'); ?>'; 
				if(($(this).val())==($('#hidden_template_id').val())){
					var page = <?php echo $page->id; ?>;
					var data = CKEDITOR.ajax.load( base_url+'/admin/getLayout/'+page+'/true');
					obj = JSON.parse(data);
					var en_content = obj.html_content_en;
					var sp_content = obj.html_content_sp;

				}else{
					var data = CKEDITOR.ajax.load( base_url+'/admin/getLayout/'+$(this).val());
					obj = JSON.parse(data);
					var en_content = obj.en_layout;
					var sp_content = obj.sp_layout;
				}
				CKEDITOR.instances.html_content_en.setData(en_content);
				CKEDITOR.instances.html_content_sp.setData(sp_content);
			});


        });//end of document ready function
	</script>
	<div class="row-fluid">

		<div class="span2">

			@include('admin_cis._partials.subnav')

		</div><!-- /span2-->

		<div class="span8 clearfix">

			<h3>Pages (cis) - Edit Page - <span>{{ $page->category->name }} - {{ $page->name }}</span></h3>


			{{ Form::model($page, array('method' => 'put', 'files' => true, 'route' => array('cis-admin.pages.update', $page->id))) }}

				<div class="control-group">
					{{ Form::label('name', 'Name') }}
					<div class="controls">
						{{ Form::text('name') }}
					</div>
				</div>
			
				<div class="control-group">
					{{ Form::label('slug', 'Slug') }}
					<div class="controls">
						{{ $page->slug_en }}
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
						{{ Form::select('category_id', $category_options , $page->category_id ) }}
					</div>
				</div>
                               
                   {{ Form::hidden('hidden_template', $page->template_id, array('id' => 'hidden_template_id')) }}   
                   {{ Form::hidden('template_id', $page->template_id) }}
					
                        
                               <div class="control-group">
					{{ Form::label('html_content_en', 'Content (EN)') }}
					<div class="controls">
						{{ Form::textarea('html_content_en', $page->html_content_en, array('class' => 'ckeditor')) }}
					</div>
				</div>
                        
                         <div class="control-group">
					{{ Form::label('html_content_sp', 'Content (SP)') }}
					<div class="controls">
						{{ Form::textarea('html_content_sp',$page->html_content_sp, array('class' => 'ckeditor')) }}
					</div>
				</div>
                        
                        <div class="control-group">
					{{ Form::label('image', 'Side Image1') }}

					@if ($page->image1)
						<img src="{{ URL::asset('uploads/cis/pages/'.$page->image1) }}">
						<!--<img hidden="hidden" src="{{ URL::asset('uploads/cis/pages/'.$page->image1) }}">-->
					@endif
					
					

					<div class="controls">
						{{ Form::file('image1') }}
					
					</div>
				</div>
                        <div class="control-group">
					{{ Form::label('image', 'Side Image2') }}

					@if ($page->image2)
						<img src="{{ URL::asset('uploads/cis/pages/'.$page->image2) }}">
						<!--<img hidden="hidden" src="{{ URL::asset('uploads/cis/pages/'.$page->image2) }}">->
					@endif
					
					

					<div class="controls">
						{{ Form::file('image2') }}
					
					</div>
				</div>
                               
				<hr>


				<div class="form-actions">
					{{ Form::submit('SAVE', array('class' => 'btn btn-primary')) }}
					<a href="{{ URL::route('cis-admin.pages.index') }}" class="btn btn-info">BACK</a>
					<!--<a href="{{ URL::to('index/'.$page->slug_en) }}" target="_blank" class="btn btn-info">VIEW PAGE</a>-->
				</div>

			{{ Form::close() }}

		</div><!-- /span10-->





		<div class="span2">

			<div class="info">
				<h4>Page Info:</h4>
				<p>Created at:<br>{{ $page->created_at }}</p>
				<p>Created by:<br>{{ $page->creator->first_name }}</p>
				<p>Last modified:<br>{{ $page->updated_at }}</p>
				<p>Modified by:<br>{{ $page->editor->first_name }}</p>
			</div>

		</div><!-- /span2-->

		
		
		</div>
		



	</div>

@stop
