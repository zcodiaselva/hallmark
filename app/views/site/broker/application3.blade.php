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
                  <li class="active"><a href="#background">Background</a></li>
                  <li class="disabled"><a href="#licensing">Licensing</a></li>
                  <li class="disabled"><a href="#paymentAgreement">Payment Agreement</a></li>
                  <li class="disabled"><a href="#personnelSubmit">Personnel/Submit</a></li>
                </ul>
                 
                <div class="tab-content">
                  <div class="tab-pane active">
                  
                  
                    <div class="form">

                        {{ Form::model($producer, array('class'=>'form-horizontal label-changed')) }}

                            <div class="row-fluid">
                                <div class="span10">
                                    <p>Is Agency engaged in, owned by, associated with, or controlled by any other business interest?<br>If yes, please explain:</p>
                                </div>
                                <div class="span2 clearfix">
                                    <label class="radio pull-left" style="margin-right:15px;">
                                      {{ Form::radio('interest', 'Yes') }} Yes</label>
                                    <label class="radio pull-left">
                                      {{ Form::radio('interest', 'No', true) }} No</label>
                                </div>
                            </div>
                            
                            <div>
                              {{ Form::textarea('interest_explain', null, array('class'=>'input-block-level', 'rows'=>5)) }}<br><br>
                            </div>
                            
                             <div class="row-fluid">
                                <div class="span4">
                                    <p>Is Agency a member of NAPSLO?</p>
                                </div>
                                <div class="span2 clearfix">
                                    <label class="radio pull-left" style="margin-right:15px;">
                                      {{ Form::radio('napslo', 'Yes') }} Yes</label>
                                    <label class="radio pull-left">
                                      {{ Form::radio('napslo', 'No', true) }} No</label>
                                </div>
                                <div class="span4">
                                    <p>Is Agency a member of AAMGA?</p>
                                </div>
                                <div class="span2 clearfix">
                                    <label class="radio pull-left" style="margin-right:15px;">
                                      {{ Form::radio('aamga', 'Yes') }} Yes</label>
                                    <label class="radio pull-left">
                                      {{ Form::radio('aamga', 'No', true) }} No</label>
                                </div>
                            </div><br>
                       
                          <div class="control-group">
                            <label class="control-label">Other? (Please list):</label>
                            <div class="controls">
                              {{ Form::text('other', null, array('class'=>'input-block-level')) }}
                            </div>
                          </div>
                          
                          <div class="control-group">
                            <label class="control-label">Current Umbrella/Excess Volume:</label>
                            <div class="controls">
                              {{ Form::text('excess_volume', null, array('class'=>'input-block-level')) }}
                            </div>
                          </div>
                          
                          <div class="control-group">
                            <label class="control-label">Current Umbrella/Excess Markets:</label>
                            <div class="controls">
                              {{ Form::text('excess_markets', null, array('class'=>'input-block-level')) }}
                            </div>
                          </div>


                            <div class="row-fluid">
                                <div class="span10">
                                    <p>Do the Retail Agents/Brokers for whom you place business sign an agreement for you regarding payment of premium?</p>
                                    <p><em>(Please forward a blank copy of your agreement to ekelly@hallselect.com)</em></p>
                                </div>
                                <div class="span2 clearfix">
                                    <label class="radio pull-left" style="margin-right:15px;">
                                      {{ Form::radio('premium', 'Yes') }} Yes</label>
                                    <label class="radio pull-left">
                                      {{ Form::radio('premium', 'No', true) }} No</label>
                                </div>
                            </div>
                            <br>
                            
                            <div class="row-fluid">
                                <div class="span10">
                                    <p>Has any member of your firm received any disciplinary action by a state insurance department or other regulatory authority?</p>
                                    <p><em>If yes, please explain:</em></p>
                                </div>
                                <div class="span2 clearfix">
                                    <label class="radio pull-left" style="margin-right:15px;">
                                      {{ Form::radio('authority', 'Yes') }} Yes</label>
                                    <label class="radio pull-left">
                                      {{ Form::radio('authority', 'No', true) }} No</label>
                                </div>
                            </div>
                            
                            <div>
                              {{ Form::textarea('authority_explain', null, array('class'=>'input-block-level', 'rows'=>5)) }}<br><br>
                            </div>
                            
                            <div class="row-fluid">
                                <div class="span10">
                                    <p>Were there any pending or threatening litigations or judgments within the past 5 years exceeding $10,000 against the broker or any of the principals?</p>
                                    <p><em>If yes, please explain:</em></p>
                                </div>
                                <div class="span2 clearfix">
                                    <label class="radio pull-left" style="margin-right:15px;">
                                      {{ Form::radio('principal', 'Yes') }} Yes</label>
                                    <label class="radio pull-left">
                                      {{ Form::radio('principal', 'No', true) }} No</label>
                                </div>
                            </div>
                            
                            <div>
                              {{ Form::textarea('principal_explain', null, array('class'=>'input-block-level', 'rows'=>5)) }}<br><br>
                            </div>
                            
                          
                          
                          <div class="control-group">
                            <div class="controls">
                              <a href="{{ URL::to('broker-resources/application2') }}" class="btn btn-large"><i class="icon-chevron-left"></i> Back</a>
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