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
                  <li class="active"><a href="#generalInfo">General Info</a></li>
                  <li class="disabled"><a href="#insurance">Insurance</a></li>
                  <li class="disabled"><a href="#background">Background</a></li>
                  <li class="disabled"><a href="#licensing">Licensing</a></li>
                  <li class="disabled"><a href="#paymentAgreement">Payment Agreement</a></li>
                  <li class="disabled"><a href="#personnelSubmit">Personnel/Submit</a></li>
                </ul>
                 
                <div class="tab-content">
                  <div class="tab-pane active">
                  
                  
                    <div class="form">

                        {{ Form::model($producer, array('class'=>'form-horizontal label-changed')) }}

                          <div class="control-group">
                            <label class="control-label">Date of Application:</label>
                            <div class="controls">
                              {{ Form::text('date_of_application', date('d/m/Y'), array('class'=>'input-small')) }}
                            </div>
                          </div>
                          
                          <div class="control-group">
                            <label class="control-label">Full Legal Name of Agency:</label>
                            <div class="controls">
                              {{ Form::text('name_of_agency', null, array('class'=>'input-block-level')) }}
                            </div>
                          </div>
                          
                          <div class="control-group">
                            <label class="control-label">Mailing Address:</label>
                            <div class="controls">
                              {{ Form::text('mailing_address', null, array('class'=>'input-block-level')) }}
                            </div>
                          </div>
                          
                          <div class="control-group">
                            <div class="controls">
                                <div class="row-fluid">
                                  <div class="span2">
                                    <label class="control-label">State:</label>
                                  </div>
                                  <div class="span4">
                                    {{ Form::text('mailing_address_state', null, array('class'=>'input-block-level')) }}
                                  </div>
                                  <div class="span2">
                                    <label class="control-label">Zip Code:</label>
                                  </div>
                                  <div class="span4">
                                    {{ Form::text('mailing_address_zip_code', null, array('class'=>'input-block-level')) }}
                                  </div>
                                </div>
                            </div>
                          </div>
                          
                          <div class="control-group">
                            <label class="control-label">Physical Address:</label>
                            <div class="controls">
                              {{ Form::text('physical_address', null, array('class'=>'input-block-level')) }}
                            </div>
                          </div>
                          
                          <div class="control-group">
                            <div class="controls">
                                <div class="row-fluid">
                                  <div class="span2">
                                    <label class="control-label">State:</label>
                                  </div>
                                  <div class="span4">
                                    {{ Form::text('physical_address_state', null, array('class'=>'input-block-level')) }}
                                  </div>
                                  <div class="span2">
                                    <label class="control-label">Zip Code:</label>
                                  </div>
                                  <div class="span4">
                                    {{ Form::text('physical_address_zip_code', null, array('class'=>'input-block-level')) }}
                                  </div>
                                </div>
                            </div>
                          </div>
                          
                          <div class="control-group">
                            <div class="controls">
                                <div class="row-fluid">
                                  <div class="span2">
                                    <label class="control-label">Phone:</label>
                                  </div>
                                  <div class="span4">
                                    {{ Form::text('physical_address_phone', null, array('class'=>'input-block-level')) }}
                                  </div>
                                  <div class="span2">
                                    <label class="control-label">Fax:</label>
                                  </div>
                                  <div class="span4">
                                    {{ Form::text('physical_address_fax', null, array('class'=>'input-block-level')) }}
                                  </div>
                                </div>
                            </div>
                          </div>
                          
                          <div class="control-group">
                            <label class="control-label">Corporate Address</label>
                            <div class="controls">
                              {{ Form::text('corporate_address', null, array('class'=>'input-block-level')) }}
                            </div>
                          </div>
                          
                          <div class="control-group">
                            <div class="controls">
                                <div class="row-fluid">
                                  <div class="span2">
                                    <label class="control-label">State:</label>
                                  </div>
                                  <div class="span4">
                                    {{ Form::text('corporate_address_state', null, array('class'=>'input-block-level')) }}
                                  </div>
                                  <div class="span2">
                                    <label class="control-label">Zip Code:</label>
                                  </div>
                                  <div class="span4">
                                    {{ Form::text('corporate_address_zip_code', null, array('class'=>'input-block-level')) }}
                                  </div>
                                </div>
                            </div>
                          </div>
                          
                          <div class="control-group">
                            <div class="controls">
                                <div class="row-fluid">
                                  <div class="span2">
                                    <label class="control-label">Phone:</label>
                                  </div>
                                  <div class="span4">
                                    {{ Form::text('corporate_address_phone', null, array('class'=>'input-block-level')) }}
                                  </div>
                                  <div class="span2">
                                    <label class="control-label">Fax:</label>
                                  </div>
                                  <div class="span4">
                                    {{ Form::text('corporate_address_fax', null, array('class'=>'input-block-level')) }}
                                  </div>
                                </div>
                            </div>
                          </div>
                          
                          <div class="control-group">
                            <label class="control-label">Organization Type:</label>
                            <div class="controls">
                                <div class="row-fluid">
                                  <div class="span2">
                                    <label class="radio">
                                        {{ Form::radio('organization_type', 'Corporation', true) }} Corporation
                                    </label>
                                  </div>
                                  <div class="span2">
                                    <label class="radio">
                                        {{ Form::radio('organization_type', 'Partnership') }} Partnership
                                    </label>
                                  </div>
                                  <div class="span2">
                                    <label class="radio">
                                        {{ Form::radio('organization_type', 'LLC') }}  LLC
                                    </label>
                                  </div>
                                  <div class="span2">
                                    <label class="radio">
                                        {{ Form::radio('organization_type', 'Individual') }}  Individual
                                    </label>
                                  </div>
                                  <div class="span3">
                                    <label class="radio">
                                        {{ Form::radio('organization_type', 'Sole Proprietorship') }} Sole Proprietorship
                                    </label>
                                  </div>
                                </div>
                            </div>
                          </div>
                          
                          
                          
                          <div class="control-group">
                            <label class="control-label">Year in Business:</label>
                            <div class="controls">
                                <div class="row-fluid">
                                  <div class="span4">
                                    {{ Form::text('year_in_business', null, array('class'=>'input-block-level')) }}
                                  </div>
                                  <div class="span2">
                                    <label class="control-label">Website:</label>
                                  </div>
                                  <div class="span6">
                                    {{ Form::text('website', null, array('class'=>'input-block-level')) }}
                                  </div>
                                </div>
                            </div>
                          </div>
                          
                          <div class="control-group">
                            <label class="control-label">Tax ID Number:</label>
                            <div class="controls">
                                {{ Form::text('tax_id_number', null, array('class'=>'input-block-level')) }}
                            </div>
                          </div>
                          
                          <p><strong>Additional Branch Offices:</strong> (If your agency is appointed, we will contact you for further information on the locations below.)</p>
                          
                          
                          <div class="control-group">
                            <label class="control-label">Branch #1 Mailing Address:</label>
                            <div class="controls">
                              {{ Form::text('branch1_mailing_address', null, array('class'=>'input-block-level')) }}
                            </div>
                          </div>
                          
                          <div class="control-group">
                            <div class="controls">
                                <div class="row-fluid">
                                  <div class="span2">
                                    <label class="control-label">State:</label>
                                  </div>
                                  <div class="span4">
                                    {{ Form::text('branch1_mailing_address_state', null, array('class'=>'input-block-level')) }}
                                  </div>
                                  <div class="span2">
                                    <label class="control-label">Zip Code:</label>
                                  </div>
                                  <div class="span4">
                                    {{ Form::text('branch1_mailing_address_zip_code', null, array('class'=>'input-block-level')) }}
                                  </div>
                                </div>
                            </div>
                          </div>
                          
                          <div class="control-group">
                            <div class="controls">
                                <div class="row-fluid">
                                  <div class="span2">
                                    <label class="control-label">Phone:</label>
                                  </div>
                                  <div class="span4">
                                    {{ Form::text('branch1_mailing_address_phone', null, array('class'=>'input-block-level')) }}
                                  </div>
                                  <div class="span2">
                                    <label class="control-label">Fax:</label>
                                  </div>
                                  <div class="span4">
                                    {{ Form::text('branch1_mailing_address_fax', null, array('class'=>'input-block-level')) }}
                                  </div>
                                </div>
                            </div>
                          </div>

                          
                          <div class="control-group">
                            <label class="control-label">Branch #2 Mailing Address:</label>
                            <div class="controls">
                              {{ Form::text('branch2_mailing_address', null, array('class'=>'input-block-level')) }}
                            </div>
                          </div>
                          
                          <div class="control-group">
                            <div class="controls">
                                <div class="row-fluid">
                                  <div class="span2">
                                    <label class="control-label">State:</label>
                                  </div>
                                  <div class="span4">
                                    {{ Form::text('branch2_mailing_address_state', null, array('class'=>'input-block-level')) }}
                                  </div>
                                  <div class="span2">
                                    <label class="control-label">Zip Code:</label>
                                  </div>
                                  <div class="span4">
                                    {{ Form::text('branch2_mailing_address_zip_code', null, array('class'=>'input-block-level')) }}
                                  </div>
                                </div>
                            </div>
                          </div>
                          
                          <div class="control-group">
                            <div class="controls">
                                <div class="row-fluid">
                                  <div class="span2">
                                    <label class="control-label">Phone:</label>
                                  </div>
                                  <div class="span4">
                                    {{ Form::text('branch2_mailing_address_phone', null, array('class'=>'input-block-level')) }}
                                  </div>
                                  <div class="span2">
                                    <label class="control-label">Fax:</label>
                                  </div>
                                  <div class="span4">
                                    {{ Form::text('branch2_mailing_address_fax', null, array('class'=>'input-block-level')) }}
                                  </div>
                                </div>
                            </div>
                          </div>

                          
                          <div class="control-group">
                            <label class="control-label">Branch #3 Mailing Address:</label>
                            <div class="controls">
                              {{ Form::text('branch3_mailing_address', null, array('class'=>'input-block-level')) }}
                            </div>
                          </div>
                          
                          <div class="control-group">
                            <div class="controls">
                                <div class="row-fluid">
                                  <div class="span2">
                                    <label class="control-label">State:</label>
                                  </div>
                                  <div class="span4">
                                    {{ Form::text('branch3_mailing_address_state', null, array('class'=>'input-block-level')) }}
                                  </div>
                                  <div class="span2">
                                    <label class="control-label">Zip Code:</label>
                                  </div>
                                  <div class="span4">
                                    {{ Form::text('branch3_mailing_address_zip_code', null, array('class'=>'input-block-level')) }}
                                  </div>
                                </div>
                            </div>
                          </div>
                          
                          <div class="control-group">
                            <div class="controls">
                                <div class="row-fluid">
                                  <div class="span2">
                                    <label class="control-label">Phone:</label>
                                  </div>
                                  <div class="span4">
                                    {{ Form::text('branch3_mailing_address_phone', null, array('class'=>'input-block-level')) }}
                                  </div>
                                  <div class="span2">
                                    <label class="control-label">Fax:</label>
                                  </div>
                                  <div class="span4">
                                    {{ Form::text('branch3_mailing_address_fax', null, array('class'=>'input-block-level')) }}
                                  </div>
                                </div>
                            </div>
                          </div>
                          
                          <div class="control-group">
                            <div class="controls">
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