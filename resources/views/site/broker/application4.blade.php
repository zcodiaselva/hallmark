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
                  <li class="active"><a href="#licensing">Licensing</a></li>
                  <li class="disabled"><a href="#paymentAgreement">Payment Agreement</a></li>
                  <li class="disabled"><a href="#personnelSubmit">Personnel/Submit</a></li>
                </ul>
                 
                <div class="tab-content">
                  <div class="tab-pane active">
                  
                  
                    <div class="form">

                        {{ Form::model($producer, array('class'=>'form-horizontal label-changed')) }}

                          <p>With regards to item No: 1 of the Producer Payment Agreement (refer to pages 8-10) using the list below please indicate in which
state's your agency writes business:</p>
                        
                            <div class="row-fluid">
                                <div class="span4">
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'Alabama') }} Alabama</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'Alaska') }} Alaska</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'Arizona') }} Arizona</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'Arkansas') }} Arkansas</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'California') }} California</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'Colorado') }} Colorado</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'Connecticut') }} Connecticut</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'Delaware') }} Delaware</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'District of Columbia') }} District of Columbia</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'Florida') }} Florida</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'Georgia') }} Georgia</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'Hawaii') }} Hawaii</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'Idaho') }} Idaho</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'Illinois') }} Illinois</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'Indiana') }} Indiana</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'Iowa') }} Iowa</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'Kansas') }} Kansas</label>
                                </div>
                                <div class="span4">
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'Kentucky') }} Kentucky</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'Louisiana') }} Louisiana</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'Maine') }} Maine</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'Maryland') }} Maryland</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'Massachusetts') }} Massachusetts</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'Michigan') }} Michigan</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'Minnesota') }} Minnesota</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'Mississippi') }} Mississippi</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'Missouri') }} Missouri</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'Montana') }} Montana</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'Nebraska') }} Nebraska</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'Nevada') }} Nevada</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'New Hampshire') }} New Hampshire</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'New Jersey') }} New Jersey</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'New Mexico') }} New Mexico</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'New York') }} New York</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'North Carolina') }} North Carolina</label>

                                </div>
                                <div class="span4">
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'North Dakota') }} North Dakota</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'Ohio') }} Ohio</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'Oklahoma') }} Oklahoma</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'Oregon') }} Oregon</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'Pennsylvania') }} Pennsylvania</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'Rhode Island') }} Rhode Island</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'South Carolina') }} South Carolina</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'South Dakota') }} South Dakota</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'Tennessee') }} Tennessee</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'Texas') }} Texas</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'Utah') }} Utah</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'Vermont') }} Vermont</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'Virginia') }} Virginia</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'Washington') }} Washington</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'West Virginia') }} West Virginia</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'Wisconsin') }} Wisconsin</label>
                                    <label class="checkbox">{{ Form::checkbox('states[]', 'Wyoming') }} Wyoming</label>

                                </div>
                            </div><br>
                            
                            <p><strong>Please forward along with your application to ekelly@hallselect.com:</strong><br>
<em>A current listing or copies of all Agency and Agent Property / Casualty / Surplus Lines licenses pertaining to the states in
which your company currently holds licensing authority as indicated above. This information is required for appointment
& compliance purposes.</em></p>

            <p><b>Who should our office contact for further licensing information?</b></p>

                          <div class="control-group">
                            <label class="control-label">Name:</label>
                            <div class="controls">
                              {{ Form::text('contact_name', null, array('class'=>'input-block-level')) }}
                            </div>
                          </div>
                          
                          <div class="control-group">
                            <label class="control-label">Phone:</label>
                            <div class="controls">
                              {{ Form::text('contact_phone', null, array('class'=>'input-block-level')) }}
                            </div>
                          </div>
                          
                          <div class="control-group">
                            <label class="control-label">Email:</label>
                            <div class="controls">
                              {{ Form::text('contact_email', null, array('class'=>'input-block-level')) }}
                            </div>
                          </div>
                          
                          <div class="control-group">
                            <label class="control-label">Mailing Address:</label>
                            <div class="controls">
                              {{ Form::text('contact_mailing_address', null, array('class'=>'input-block-level')) }}
                            </div>
                          </div>
                          
                          <div class="control-group">
                            <div class="controls">
                                <div class="row-fluid">
                                  <div class="span2">
                                    <label class="control-label">State:</label>
                                  </div>
                                  <div class="span4">
                                    {{ Form::text('contact_mailing_address_state', null, array('class'=>'input-block-level')) }}
                                  </div>
                                  <div class="span2">
                                    <label class="control-label">Zip Code:</label>
                                  </div>
                                  <div class="span4">
                                    {{ Form::text('contact_mailing_address_zip_code', null, array('class'=>'input-block-level')) }}
                                  </div>
                                </div>
                            </div>
                          </div>

                          
                          <div class="control-group">
                            <div class="controls">
                              <a href="{{ URL::to('broker-resources/application3') }}" class="btn btn-large"><i class="icon-chevron-left"></i> Back</a>
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