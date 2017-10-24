@extends('site._layouts.default')

@section('main')

        <div class="row-fluid">
            <div class="span3">
                
                @include('site._partials.left_menu')

            </div>
            
            <div class="span9">
                

                <h1>{{ $page->page_heading }}</h1>
                
                {{ $page->body }}

                    
                <div class="form">

                  @include('site._partials.notifications')

                      {{ Form::open(array('class'=>'form-horizontal label-changed')) }}

                      <div class="control-group">
                        <label class="control-label">Date of Application:</label>
                        <div class="controls">
                          {{ Form::text('date', date('m/d/Y'), array('class'=>'input-small', 'required')) }}
                        </div>
                      </div>
                      
                      <div class="control-group">
                        <label class="control-label">Full Legal Name of Agency:</label>
                        <div class="controls">
                          {{ Form::text('name_of_agency', null, array('class'=>'input-block-level', 'required')) }}
                        </div>
                      </div>
                      
                      <div class="control-group">
                        <label class="control-label">Mailing Address:</label>
                        <div class="controls">
                          {{ Form::text('mailing_address', null, array('class'=>'input-block-level', 'required')) }}
                        </div>
                      </div>
                      
                      <div class="control-group">
                        <div class="controls">
                            <div class="row-fluid">
                              <div class="span2">
                                <label class="control-label">State:</label>
                              </div>
                              <div class="span4">
                                {{ Form::text('mailing_address_state', null, array('class'=>'input-block-level', 'required')) }}
                              </div>
                              <div class="span2">
                                <label class="control-label">Zip Code:</label>
                              </div>
                              <div class="span4">
                                {{ Form::text('mailing_address_zip_code', null, array('class'=>'input-block-level', 'required')) }}
                              </div>
                            </div>
                        </div>
                      </div>
                      
                      <div class="control-group">
                        <label class="control-label">Physical Address:</label>
                        <div class="controls">
                          {{ Form::text('physical_address', null, array('class'=>'input-block-level', 'required')) }}
                        </div>
                      </div>
                      
                      <div class="control-group">
                        <div class="controls">
                            <div class="row-fluid">
                              <div class="span2">
                                <label class="control-label">State:</label>
                              </div>
                              <div class="span4">
                                {{ Form::text('physical_address_state', null, array('class'=>'input-block-level', 'required')) }}
                              </div>
                              <div class="span2">
                                <label class="control-label">Zip Code:</label>
                              </div>
                              <div class="span4">
                                {{ Form::text('physical_address_zip_code', null, array('class'=>'input-block-level', 'required')) }}
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
                                {{ Form::text('physical_address_phone', null, array('class'=>'input-block-level', 'required')) }}
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
                        <label class="control-label">Organization Type:</label>
                        <div class="controls">
                            <div class="row-fluid">
                              <div class="span2">
                                <label class="checkbox">
                                    {{ Form::checkbox('organization_type[]', 'Corporation') }} Corporation
                                </label>
                              </div>
                              <div class="span2">
                                <label class="checkbox">
                                    {{ Form::checkbox('organization_type[]', 'Partnership') }} Partnership
                                </label>
                              </div>
                              <div class="span2">
                                <label class="checkbox">
                                    {{ Form::checkbox('organization_type[]', 'LLC') }} LLC
                                </label>
                              </div>
                              <div class="span2">
                                <label class="checkbox">
                                    {{ Form::checkbox('organization_type[]', 'Individual') }} Individual
                                </label>
                              </div>
                              <div class="span3">
                                <label class="checkbox">
                                    {{ Form::checkbox('organization_type[]', 'Sole Proprietorship') }} Sole Proprietorship
                                </label>
                              </div>
                            </div>
                        </div>
                      </div>
                      
                      <div class="control-group">
                        <label class="control-label">Primary Contact:</label>
                        <div class="controls">
                            {{ Form::text('primary_contact', null, array('class'=>'input-block-level', 'required')) }}
                        </div>
                      </div>
                      
                      <div class="control-group">
                        <label class="control-label">Email Address:</label>
                        <div class="controls">
                            <div class="row-fluid">
                              <div class="span4">
                                {{ Form::text('year_in_business', null, array('class'=>'input-block-level', 'required')) }}
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
                        <div class="controls">
                          <button type="submit" class="btn btn-primary">SUBMIT</button>
                        </div>
                      </div>
                    
                    {{ Form::close() }}

                </div>

                
            </div>

        </div>


@stop