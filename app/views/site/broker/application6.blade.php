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
                  <li class="disabled"><a href="#paymentAgreement">Payment Agreement</a></li>
                  <li class="active"><a href="#personnelSubmit">Personnel/Submit</a></li>
                </ul>
                 
                <div class="tab-content">
                  <div class="tab-pane active">
                  

                    <div class="form">

                        {{ Form::model($producer, array('class'=>'form-horizontal label-changed')) }}

                          <p>Please provide the following information for all employees working at each branch. Select whether each employee is authorized
to receive managerial or accounting correspondence and if he/she wishes to receive information pertinent to our firm.</p>

                          @include('site._partials.notifications')
                        
                            <div class="row-fluid">
                                <div class="span5">
                                    Branch Name/Indicator (ex: "main" or street name):
                                </div>
                                <div class="span7">
                                    {{ Form::text('branch_name', null, array('class'=>'input-block-level')) }}
                                </div>
                            </div><br>
                        
                            <div class="row-fluid">
                                <div class="span3"> Name: </div>
                                <div class="span3"> Phone: </div>
                                <div class="span3"> Email Address: </div>
                                <div class="span1"> Mgr: </div>
                                <div class="span1"> Acct: </div>
                                <div class="span1">Mkt/Brk</div>
                            </div>
                        
                            <div class="row-fluid">
                                <div class="span3">{{ Form::text('employee1_name', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span3">{{ Form::text('employee1_phone', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span3">{{ Form::text('employee1_email', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span1">{{ Form::text('employee1_mgr', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span1">{{ Form::text('employee1_acct', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span1">{{ Form::text('employee1_mkt_brk', null, array('class'=>'input-block-level')) }}</div>
                            </div><br>
                            <div class="row-fluid">
                                <div class="span3">{{ Form::text('employee2_name', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span3">{{ Form::text('employee2_phone', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span3">{{ Form::text('employee2_email', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span1">{{ Form::text('employee2_mgr', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span1">{{ Form::text('employee2_acct', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span1">{{ Form::text('employee2_mkt_brk', null, array('class'=>'input-block-level')) }}</div>
                            </div><br>
                            <div class="row-fluid">
                                <div class="span3">{{ Form::text('employee3_name', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span3">{{ Form::text('employee3_phone', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span3">{{ Form::text('employee3_email', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span1">{{ Form::text('employee3_mgr', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span1">{{ Form::text('employee3_acct', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span1">{{ Form::text('employee3_mkt_brk', null, array('class'=>'input-block-level')) }}</div>
                            </div><br>
                            <div class="row-fluid">
                                <div class="span3">{{ Form::text('employee4_name', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span3">{{ Form::text('employee4_phone', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span3">{{ Form::text('employee4_email', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span1">{{ Form::text('employee4_mgr', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span1">{{ Form::text('employee4_acct', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span1">{{ Form::text('employee4_mkt_brk', null, array('class'=>'input-block-level')) }}</div>
                            </div><br>
                            <div class="row-fluid">
                                <div class="span3">{{ Form::text('employee5_name', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span3">{{ Form::text('employee5_phone', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span3">{{ Form::text('employee5_email', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span1">{{ Form::text('employee5_mgr', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span1">{{ Form::text('employee5_acct', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span1">{{ Form::text('employee5_mkt_brk', null, array('class'=>'input-block-level')) }}</div>
                            </div><br>
                            <div class="row-fluid">
                                <div class="span3">{{ Form::text('employee6_name', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span3">{{ Form::text('employee6_phone', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span3">{{ Form::text('employee6_email', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span1">{{ Form::text('employee6_mgr', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span1">{{ Form::text('employee6_acct', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span1">{{ Form::text('employee6_mkt_brk', null, array('class'=>'input-block-level')) }}</div>
                            </div><br>
                            <div class="row-fluid">
                                <div class="span3">{{ Form::text('employee7_name', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span3">{{ Form::text('employee7_phone', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span3">{{ Form::text('employee7_email', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span1">{{ Form::text('employee7_mgr', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span1">{{ Form::text('employee7_acct', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span1">{{ Form::text('employee7_mkt_brk', null, array('class'=>'input-block-level')) }}</div>
                            </div><br>
                            <div class="row-fluid">
                                <div class="span3">{{ Form::text('employee8_name', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span3">{{ Form::text('employee8_phone', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span3">{{ Form::text('employee8_email', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span1">{{ Form::text('employee8_mgr', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span1">{{ Form::text('employee8_acct', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span1">{{ Form::text('employee8_mkt_brk', null, array('class'=>'input-block-level')) }}</div>
                            </div><br>
                            <div class="row-fluid">
                                <div class="span3">{{ Form::text('employee9_name', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span3">{{ Form::text('employee9_phone', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span3">{{ Form::text('employee9_email', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span1">{{ Form::text('employee9_mgr', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span1">{{ Form::text('employee9_acct', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span1">{{ Form::text('employee9_mkt_brk', null, array('class'=>'input-block-level')) }}</div>
                            </div><br>
                            <div class="row-fluid">
                                <div class="span3">{{ Form::text('employee10_name', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span3">{{ Form::text('employee10_phone', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span3">{{ Form::text('employee10_email', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span1">{{ Form::text('employee10_mgr', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span1">{{ Form::text('employee10_acct', null, array('class'=>'input-block-level')) }}</div>
                                <div class="span1">{{ Form::text('employee10_mkt_brk', null, array('class'=>'input-block-level')) }}</div>
                            </div><br>
                            
                            <p>If there are additional personnel, please contact ekelly@hallselect.com.</p>
                            
                            <p><strong class="text-info">Accounts Payable Information</strong></p>
                            
                            <p>
                              <label class="radio">
                                {{ Form::radio('payment', 'Payments will be made from this office (by person indicated on above table)', true) }} Payments will be made from this office (by person indicated on above table).</label>
                              <label class="radio">
                                {{ Form::radio('payment', 'Payments will be made from another office') }} Payments will be made from another office.</label>
                            </p>
                            <br>
                            
                            
                            
                            

                          <p><em>AP Contact:</em></p>

                          <div class="control-group">
                            <label class="control-label">Name:</label>
                            <div class="controls">
                              {{ Form::text('ap_contact_name', null, array('class'=>'input-block-level')) }}
                            </div>
                          </div>

                          <div class="control-group">
                            <div class="controls">
                                <div class="row-fluid">
                                  <div class="span2">
                                    <label class="control-label">Phone:</label>
                                  </div>
                                  <div class="span4">
                                    {{ Form::text('ap_contact_phone', null, array('class'=>'input-block-level')) }}
                                  </div>
                                  <div class="span2">
                                    <label class="control-label">Fax:</label>
                                  </div>
                                  <div class="span4">
                                    {{ Form::text('ap_contact_fax', null, array('class'=>'input-block-level')) }}
                                  </div>
                                </div>
                            </div>
                          </div>
                          
                          <div class="control-group">
                            <label class="control-label">Email:</label>
                            <div class="controls">
                              {{ Form::text('ap_contact_email', null, array('class'=>'input-block-level')) }}
                            </div>
                          </div>

                          <br>
                          <hr>

                          <p><strong><em>Form Completed By:</em></strong></p>

                          <div class="control-group">
                            <label class="control-label">Name:</label>
                            <div class="controls">
                              {{ Form::text('completed_by_name', null, array('class'=>'input-block-level')) }}
                            </div>
                          </div>

                          <div class="control-group">
                            <div class="controls">
                                <div class="row-fluid">
                                  <div class="span2">
                                    <label class="control-label">Phone:</label>
                                  </div>
                                  <div class="span4">
                                    {{ Form::text('completed_by_phone', null, array('class'=>'input-block-level')) }}
                                  </div>
                                  <div class="span2">
                                    <label class="control-label">Fax:</label>
                                  </div>
                                  <div class="span4">
                                    {{ Form::text('completed_by_fax', null, array('class'=>'input-block-level')) }}
                                  </div>
                                </div>
                            </div>
                          </div>
                          
                          <div class="control-group">
                            <label class="control-label">Email:</label>
                            <div class="controls">
                              {{ Form::text('completed_by_email', null, array('class'=>'input-block-level')) }}
                            </div>
                          </div>

                          <br>
                          
                          <div class="control-group error">
                            <label style="color:#333" class="control-label">Electronic Signature:</label>
                            <div class="controls">
                              {{ Form::text('electronic_signature', null, array('class'=>'input-block-level')) }}
                              <em>(Please enter your full name)</em>
                            </div>
                          </div>

                           <div class="control-group error">
                           <label style="color:#333" class="control-label">Date:</label>
                            <div class="controls">
                                  {{ Form::text('date', null, array('class'=>'input-small')) }}
                            </div>
                          </div>
                          
                         
                          <div class="control-group">
                            <div class="controls">
                              <a href="{{ URL::to('broker-resources/application5') }}" class="btn btn-large"><i class="icon-chevron-left"></i> Back</a>
                              <input type="submit" name="btn_submit" value="Submit" class="btn btn-large btn-primary" />
                              <button type="submit" name="btn_save" class="btn btn-large btn-danger"> <i class="ic-pdf"></i> Save as PDF</button>
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