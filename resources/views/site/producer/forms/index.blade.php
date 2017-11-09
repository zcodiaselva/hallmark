@extends('site._layouts.default')

@section('main')

        <div class="row-fluid">
            <div class="span3">
                
                @include('site.producer._partials.left_menu')

            </div>
            
            <div class="span8">
                

                <h1>{{ $page->page_heading }}</h1>
                
                <p>{{ $page->body }}</p>  
                
                <div class="slide-content">
                    <a class="sc-heading clearfix">Applications & Supplements: <i class="icon-chevron-down pull-right"></i></a>
                    <div class="well">
                        <table class="table">

                            <tr>
                                <td colspan="3">{{ $applications->description }}</td>
                            </tr>

                            @foreach ($applications->forms as $form)

                            <tr>
                                <td><strong>{{ $form->name }}</strong> <br>{{ $form->description }}</td>
                                <!--<td width="10"><a href="{{ $form->link }}"><i class="ic-ie"></i></a></td>-->
                                <td width="10"><a href="{{ URL::to('download-form/' . $form->pdf) }}"><i class="ic-pdf"></i></a></td>
                            </tr>

                            @endforeach
                            
                        </table>
                        
                    </div>
                    
                    <a class="sc-heading clearfix">Aircraft Forms & Endorsements: <i class="icon-chevron-down pull-right"></i></a>
                    <div class="well">
                        <table class="table">

                            <tr>
                                <td colspan="3">{{ $aircraft->description }}</td>
                            </tr>
                            
                            @foreach ($aircraft->forms as $form)

                            <tr>
                                <td>
                                    <strong>{{ $form->name }}</strong>
                                    {{ ($form->number) ? '<br>'.$form->number .'<br>' : '' }}
                                    <strong>{{ $form->description }}</strong>
                                </td>
                                <td width="10"><a href="{{ URL::to('download-form/' . $form->pdf) }}"><i class="ic-pdf"></i></a></td>
                            </tr>

                            @endforeach

                        </table>
                        
                    </div>

                    <a class="sc-heading clearfix">Airport Forms & Endorsements: <i class="icon-chevron-down pull-right"></i></a>
                    <div class="well">
                        <table class="table">

                            <tr>
                                <td colspan="3">{{ $airport->description }}</td>
                            </tr>
                            
                            @foreach ($airport->forms as $form)

                            <tr>
                                <td>
                                    <strong>{{ $form->name }}</strong>
                                    {{ ($form->number) ? '<br>'.$form->number .'<br>' : '' }}
                                    <strong>{{ $form->description }}</strong>
                                </td>
                                <td width="10"><a href="{{ URL::to('download-form/' . $form->pdf) }}"><i class="ic-pdf"></i></a></td>
                            </tr>

                            @endforeach

                        </table>
                        
                    </div>

                    <a class="sc-heading clearfix">TRIA Policyholder Disclosure Notices: <i class="icon-chevron-down pull-right"></i></a>
                    <div class="well">
                        <table class="table">

                            <tr>
                                <td colspan="3">{{ $notices->description }}</td>
                            </tr>
                            
                            @foreach ($notices->forms as $form)

                            <tr>
                                <td>
                                    <strong>{{ $form->name }}</strong>
                                    {{ ($form->number) ? '<br>'.$form->number .'<br>' : '' }}
                                    <strong>{{ $form->description }}</strong>
                                </td>
                                <td width="10"><a href="{{ URL::to('download-form/' . $form->pdf) }}"><i class="ic-pdf"></i></a></td>
                            </tr>

                            @endforeach

                        </table>
                        
                    </div>

                    <a class="sc-heading clearfix">Claims Loss Notice: <i class="icon-chevron-down pull-right"></i></a>
                    <div class="well">
                        <table class="table">

                            
                            @foreach ($claims->forms as $form)

                            <tr>
                                <td>{{ $form->description }}</td>
                                <td width="10"><a href="{{ URL::to('download-form/' . $form->pdf) }}"><i class="ic-pdf"></i></a></td>
                            </tr>

                            @endforeach

                        </table>
                        
                    </div>

                </div>        

                
            </div>

        </div>


@stop