@extends('site._layouts.default')

@section('main')

        <div class="row-fluid">
            <div class="span3">
                
                @include('site.producer._partials.left_menu')

            </div>
            
            <div class="span8">
                

                <h1>{{ $page->page_heading }}</h1>
                
                   
                <p>To determine which carrier we use for policy issuance in each state, please review the chart below or click on the PDF link below.</p>

                <p><strong>Hallmark Aerospace Insurance Carriers:</strong> <a href="{{ URL::to('download-form/' . $form->pdf) }}"><i class="ic-pdf"></i></a></p>  

                {{ $page->body }}

                <img src="{{ URL::asset('uploads/aero/page/' . $page->image1) }}" width="100%"><br><br>

                
            </div>

        </div>


@stop