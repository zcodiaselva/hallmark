@extends('site._layouts.default')

@section('main')

        <div class="row-fluid">
            <div class="span3">
                
                @include('site.producer._partials.left_menu')

            </div>
            
            <div class="span8">
                

                <h1>{{ $page->page_heading }}</h1>
                
                <div style="text-align:justify">{{ $page->body }} </div>
                

            </div>

        </div>


@stop