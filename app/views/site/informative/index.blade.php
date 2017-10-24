@extends('site._layouts.default')

@section('main')

        <div class="row-fluid">
            <div class="span3">
                
                @include('site._partials.left_menu')

            </div>
            
            <div class="span6">
                

                <h1>{{ $page->page_heading }}</h1>
                <br>

                <h3>Aviation Links:</h3>
                    
                
                <table class="table">

                    @foreach ($links as $link)

                    <tr>
                        <td>{{ $link->title }}</td>
                        <td  width="10"><a href="{{ $link->link }}" target="_blank"><i class="ic-ie"></i></a></td>
                    </tr>

                    @endforeach

                </table>

                
            </div>
            
            <div class="span3">
                <div class="row-fluid">
                    <div class="right-menu span7 offset5">
                        
                        @include('site._partials.right_menu')
                        
                    </div>
                </div>
            </div>
        </div>


@stop