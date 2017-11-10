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
<section id="banner" class="col-sm-10">
    <div id="slider">
      <div class="main-slider">
         @foreach ($sliders as $slider)
        <div class="single-slide"> <img src="{{ URL::asset('uploads/cis/slider/'.$slider->image) }}" alt="{{$slider->alt}}">
          <div class="slide-content">
            <div class="slide-article">
              <h2 class="wow fadeInUp slide-1" data-wow-duration="0.5s" data-wow-delay="0.5s">{{$slider->alt}}</h2>
            </div>
          </div>
        </div>
        @endforeach
        
      </div>
    </div>
  </section>
  <section id="home">
    <div class="row">
      {{ $page->html_content_en }}
    </div>
  </section>

@stop