@extends('site._layouts.default')

@section('main')


        <div class="banner">
            <div class="banner-images clearfix">

                @foreach ($sliders as $slider)

                    <div><img src="{{ URL::asset('uploads/main/slider/'.$slider->image) }}"></div>

                @endforeach

            </div>
            
            @include('site._partials.left_menu')

            @include('site._partials.right_menu')

        </div>
        
        <div class="content">
            <h1>{{ $page->page_heading }}</h1>
            {{ $page->body }}
        </div>


@stop