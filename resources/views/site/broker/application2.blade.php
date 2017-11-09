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
                  <li class="active"><a href="#insurance">Insurance</a></li>
                  <li class="disabled"><a href="#background">Background</a></li>
                  <li class="disabled"><a href="#licensing">Licensing</a></li>
                  <li class="disabled"><a href="#paymentAgreement">Payment Agreement</a></li>
                  <li class="disabled"><a href="#personnelSubmit">Personnel/Submit</a></li>
                </ul>
                 
                <div class="tab-content">
                  <div class="tab-pane active">
                  
                  
                    <div class="form">

                        {{ Form::model($producer, array('class'=>'form-horizontal label-changed')) }}

                           <div class="row-fluid">
                                <div class="span7">
                                    <p>Does your agency maintain Fidelity Coverage over all offices and employees?<br>If yes, please indicate the following:</p>
                                </div>
                                <div class="span4 clearfix">
                                    <label class="radio pull-left" style="margin-right:15px;">
                                      {{ Form::radio('fidelity_coverage', 'Yes') }} Yes</label>
                                    <label class="radio pull-left">
                                      {{ Form::radio('fidelity_coverage', 'No', true) }} No</label>
                                </div>
                            </div>
                        
                          <div class="control-group">
                            <label class="control-label">Insurance Company:</label>
                            <div class="controls">
                              {{ Form::text('insurance_company', null, array('class'=>'input-block-level')) }}
                            </div>
                          </div>
                          
                          <div class="control-group">
                            <label class="control-label">Policy No:</label>
                            <div class="controls">
                              {{ Form::text('insurance_company_policy_no', null, array('class'=>'input-block-level')) }}
                            </div>
                          </div>
                          
                          <div class="control-group">
                          <label class="control-label">Limits:</label>
                            <div class="controls">
                                <div class="row-fluid">
                                  <div class="span3">
                                    {{ Form::text('insurance_company_limits', null, array('class'=>'input-block-level')) }}
                                  </div>
                                  <div class="span2">
                                    <label class="control-label">Deductible:</label>
                                  </div>
                                  <div class="span2">
                                    {{ Form::text('insurance_company_deductible', null, array('class'=>'input-block-level')) }}
                                  </div>
                                  <div class="span3">
                                    <label class="control-label">Expiration Date:</label>
                                  </div>
                                  <div class="span2">
                                    {{ Form::text('insurance_company_expiration_date', null, array('class'=>'input-block-level')) }}
                                  </div>
                                </div>
                            </div>
                          </div>
                          
                          <p><em>(Please forward a copy of the Dec. Page to ekelly@hallselect.com)</em></p>
                          <br>

                          <div class="row-fluid">
                                <div class="span7">
                                    <p>Does your agency maintain E & O Coverage?<br>If yes, please indicate the following:</p>
                                </div>
                                <div class="span4 clearfix">
                                    <label class="radio pull-left" style="margin-right:15px;">
                                      {{ Form::radio('eo_coverage', 'Yes') }} Yes</label>
                                    <label class="radio pull-left">
                                      {{ Form::radio('eo_coverage', 'No', true) }} No</label>
                                </div>
                            </div>

                        
                          <div class="control-group">
                            <label class="control-label">Insurance Company:</label>
                            <div class="controls">
                              {{ Form::text('insurance_company2', null, array('class'=>'input-block-level')) }}
                            </div>
                          </div>
                          
                          <div class="control-group">
                            <label class="control-label">Policy No:</label>
                            <div class="controls">
                              {{ Form::text('insurance_company2_policy_no', null, array('class'=>'input-block-level')) }}
                            </div>
                          </div>
                          
                          <div class="control-group">
                          <label class="control-label">Limits:</label>
                            <div class="controls">
                                <div class="row-fluid">
                                  <div class="span3">
                                    {{ Form::text('insurance_company2_limits', null, array('class'=>'input-block-level')) }}
                                  </div>
                                  <div class="span2">
                                    <label class="control-label">Deductible:</label>
                                  </div>
                                  <div class="span2">
                                    {{ Form::text('insurance_company2_deductible', null, array('class'=>'input-block-level')) }}
                                  </div>
                                  <div class="span3">
                                    <label class="control-label">Expiration Date:</label>
                                  </div>
                                  <div class="span2">
                                    {{ Form::text('insurance_company2_expiration_date', null, array('class'=>'input-block-level')) }}
                                  </div>
                                </div>
                            </div>
                          </div>

                          <p><em>(Please forward a copy of the Dec. Page to ekelly@hallselect.com)</em></p>
                          
                          
                          
                          <div class="control-group">
                            <div class="controls">
                              <a href="{{ URL::to('broker-resources/application') }}" class="btn btn-large"><i class="icon-chevron-left"></i> Back</a>
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