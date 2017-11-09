@extends('site._layouts.default')

@section('main')
<section id="navigation" class="col-sm-2">
    <nav class="navbar navbar-default" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        
           @include('site._partials.left_menu')
         
          @include('site._partials.right_menu')
       
      </div>
    </nav>
  </section>
<section id="content" class="col-sm-10">
    <div class="info press">
      <h1>{!! $page->page_heading_en !!}</h1>
   
      {!! $page->html_content_en !!}
    </div>
</section>

@stop