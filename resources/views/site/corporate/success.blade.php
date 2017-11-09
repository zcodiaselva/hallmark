@extends('site._layouts.default')

@section('main')

  
{{ $page->$html_content_locale }}
<style>
.label-left label {
  text-align: left;
  padding: 0 15px 15px 15px;
}
</style>



  <div class="col-md-12">
  
	@if ($errors->any())
      <div class="alert alert-error">
        {{ implode('<br>', $errors->all()) }}
      </div>
    @endif

    @if (Session::has('app_message'))

    <h4> 
        {{ Session::get('app_message') }}   
    </h4>
      
    @endif
    

  <div class="col-md-12">


  </div>

  

</div>
<!-- end form -->


<!--End Page Content-->

@stop