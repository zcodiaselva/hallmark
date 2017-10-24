@extends('site._layouts.default')

@section('main')

        <div class="row-fluid">
            <div class="span3">
                
                @include('site._partials.left_menu')

            </div>
            
            <div class="span9">
                

                <h1>{{ $page->page_heading }}: <span class="text-gold">Hallmark E&S </span></h1>

                {{ $page->body }}

                <br>
                
                
                
                <ul class="nav nav-pills" id="myTab">
                  <li class="disabled"><a href="#generalInfo">General Info</a></li>
                  <li class="disabled"><a href="#insurance">Insurance</a></li>
                  <li class="disabled"><a href="#background">Background</a></li>
                  <li class="disabled"><a href="#licensing">Licensing</a></li>
                  <li class="active"><a href="#paymentAgreement">Payment Agreement</a></li>
                  <li class="disabled"><a href="#personnelSubmit">Personnel/Submit</a></li>
                </ul>
                 
                <div class="tab-content">
                  <div class="tab-pane active">
                  
                  <p><a href="{{ URL::to('download-form/' . $pdf->pdf) }}">Producer Payment Agreement <i class="ic-pdf"></i></a></p>

                    <div class="form">

                        {{ Form::model($producer, array('class'=>'form-horizontal label-changed')) }}

                          <p>THIS AGREEMENT, executed by and between Hallmark E&S, 15280 Addison Road, Suite 260 Addison, TX 75001 ("hereinafter
referred to as "the company") and</p>
                            <div class="row-fluid">
                              {{ Form::text('agreed_company', null, array('class'=>'input-block-level')) }}
                            </div><br>
                        
                          <p>having its principal office at</p>
                            <div class="row-fluid">
                              {{ Form::text('office_at', null, array('class'=>'input-block-level')) }}
                            </div><br>
                            <p><em>(Hereinafter referred to as "the Producer").</em></p>
                          
                            
                            {{ $page->body2 }}

                            <br>
                            
                          
                          <div class="control-group">
                            <div class="controls">
                              <a href="{{ URL::to('broker-resources/application4') }}" class="btn btn-large"><i class="icon-chevron-left"></i> Back</a>
                              <button type="submit" class="btn btn-large btn-info">Next Page <i class="icon-chevron-right icon-white"></i></button>
                            </div>
                          </div>
                        

                        {{ Form::close() }}

                    </div>                  
                  
                  
                  
                  </div>
                  <div class="tab-pane" id="insurance"></div>
                  <div class="tab-pane" id="background">...</div>
                  <div class="tab-pane" id="licensing">...</div>
                  <div class="tab-pane" id="paymentAgreement">...</div>
                  <div class="tab-pane" id="personnelSubmit">...</div>
                </div>





                
            </div>

        </div>


@stop