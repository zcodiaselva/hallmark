@extends('site._layouts.default')

@section('main')

        <div class="row-fluid">
            <div class="span3">
                
                @include('site.producer._partials.left_menu')

            </div>
            
            <div class="span8">
                

                <h1>{{ $page->page_heading }}</h1>
                
                {{ $page->body }}   


                <iframe height="15000" src="http://www.AerospaceIM.com/policy_lookup_query_stripped.aspx?userid={{ Sentry::getUser()->username }}&producer_logged_in=true" style="border:none" width="850"></iframe>    

                
            </div>

        </div>


@stop