@extends('site._layouts.default')

@section('main')

        <div class="row-fluid">
            <div class="span3">
                
                @include('site._partials.left_menu')

            </div>

            
            <div class="span9">
                <h1>{{ $page->page_heading }}</h1>
                
                
                <div class="row-fluid">

                    {{ $page->body }}

                </div>
                
                <hr>

                {{ $page->body2 }}

                    
                <div class="form">

                  @include('site._partials.notifications')

                    {{ Form::open(array('class'=>'form-horizontal label-changed')) }}

                      <div class="control-group">
                        <label class="control-label">Name:</label>
                        <div class="controls">
                          {{ Form::text('name', null, array('class'=>'input-block-level'))}}
                        </div>
                      </div>
                      
                      <div class="control-group">
                        <label class="control-label">Title:</label>
                        <div class="controls">
                          {{ Form::text('title', null, array('class'=>'input-block-level', 'required'))}}
                        </div>
                      </div>
                      
                      <div class="control-group">
                        <label class="control-label">Company:</label>
                        <div class="controls">
                          {{ Form::text('company', null, array('class'=>'input-block-level', 'required'))}}
                        </div>
                      </div>
                      
                      <div class="control-group">
                        <label class="control-label">Email Address:</label>
                        <div class="controls">
                          {{ Form::text('email', null, array('class'=>'input-block-level', 'required'))}}
                        </div>
                      </div>
                      
                      <div class="control-group">
                        <label class="control-label">Phone Number:</label>
                        <div class="controls">
                          {{ Form::text('phone', null, array('class'=>'input-block-level', 'required'))}}
                        </div>
                      </div>
                      
                      <div class="control-group">
                        <label class="control-label">Address:</label>
                        <div class="controls">
                          {{ Form::text('address', null, array('class'=>'input-block-level', 'required'))}}
                        </div>
                      </div>
                      
                      <div class="control-group">
                        <div class="controls">
                            <div class="row-fluid">
                              <div class="span1">
                                <label class="control-label">City:</label>
                              </div>
                              <div class="span3">
                                {{ Form::text('city', null, array('class'=>'input-block-level', 'required'))}}
                              </div>
                              <div class="span1">
                                <label class="control-label">State:</label>
                              </div>
                              <div class="span3">
                                {{ Form::text('state', null, array('class'=>'input-block-level', 'required'))}}
                              </div>
                              <div class="span2">
                                <label class="control-label">Zip Code:</label>
                              </div>
                              <div class="span2">
                                {{ Form::text('zip', null, array('class'=>'input-block-level', 'required'))}}
                              </div>
                            </div>
                        </div>
                      </div>
                      
                      
                      
                      
                      
                      
                      
                      <div class="control-group">
                        <label class="control-label">Hallmark Unit of Interest:</label>
                        <div class="controls">
                            <div class="row-fluid">
                              <div class="span6">
                                <label class="checkbox">
                                    {{ Form::checkbox('hallmark1', 'Hallmark Select Insurance')}} Hallmark Select Insurance
                                </label>
                              </div>
                              <div class="span6">
                                <label class="checkbox">
                                    {{ Form::checkbox('hallmark2', 'Hallmark Pro Professional Liability')}} Hallmark Pro Professional Liability
                                </label>
                              </div>
                            </div>
                            <div class="row-fluid">
                              <div class="span6">
                                <label class="checkbox">
                                    {{ Form::checkbox('hallmark3', 'Hallmark E&S Insurance')}} Hallmark E&S Insurance
                                </label>
                              </div>
                              <div class="span6">
                                <label class="checkbox">
                                    {{ Form::checkbox('hallmark4', 'Hallmark Financial Services, Inc.')}} Hallmark Financial Services, Inc.
                                </label>
                              </div>
                            </div>
                            <div class="row-fluid">
                              <div class="span6">
                                <label class="checkbox">
                                    {{ Form::checkbox('hallmark5', 'Aerospace Insurance Managers')}} Aerospace Insurance Managers
                                </label>
                              </div>
                            </div>
                        </div>
                      </div>
                      
                      <div class="control-group">
                        <label class="control-label">Special Requests:</label>
                        <div class="controls">
                            {{ Form::textarea('special_requests', null, array('class'=>'input-block-level', 'rows'=> 6 ))}}
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