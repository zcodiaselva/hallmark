@extends('site._layouts.default')

@section('main')

        <div class="row-fluid">
            <div class="span3">
                
                @include('site._partials.left_menu')

            </div>
            
            <div class="span7">
                <h1>{{ $page->page_heading }}</h1>
                <br>

                {{ $page->body }}

                <br>
                    <div align="center">
                        <img class="" src="{{ URL::asset('uploads/main/page/'.$page->image1) }}" style="max-width:100%" alt="{{ $page->page_heading }}">
                    </div>
                <br>

                {{ $page->body2 }}

                
            </div>
            
            <div class="span2">
                <div class="row-fluid">

                    @include('site._partials.right_menu')

                </div>
            </div>
        </div>


@stop