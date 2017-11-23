@extends('site._layouts.default')

@section('main')

        <div class="row-fluid">
            <div class="span3">
                
                @include('site._partials.left_menu')

            </div>

            
            <div class="span7">
                <h1>{{ $page->page_heading }}</h1>
                
                <div class="row-fluid">
                    {{ $page->body }}
                </div>

                {{ $page->body2 }}

            </div>

            
            <div class="span2">
                <div class="row-fluid">

                    @include('site._partials.right_menu')

                </div>
            </div>
        </div>


@stop