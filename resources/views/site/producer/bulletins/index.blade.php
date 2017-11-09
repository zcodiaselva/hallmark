@extends('site._layouts.default')

@section('main')

        <div class="row-fluid">
            <div class="span3">
                
                @include('site.producer._partials.left_menu')

            </div>
            
            <div class="span7">
                

                <h1>{{ $page->page_heading }}</h1>
                
                {{ $page->body }}  
                
                <div class="slide-content">
                    <div style="display:block" class="well">
                        <table class="table">

                            @foreach ($bulletins as $form)

                            <tr>
                                <td>{{ $form->name }}</td>
                                <!--<td width="10"><a href="{{ $form->link }}"><i class="ic-ie"></i></a></td>-->
                                <td width="10"><a href="{{ URL::to('download-form/' . $form->pdf) }}"><i class="ic-pdf"></i></a></td>
                            </tr>

                            @endforeach
                            
                        </table>
                        
                    </div>

                </div>        

                
            </div>

        </div>


@stop