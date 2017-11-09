@extends('site._layouts.default')

@section('main')

        <div class="row-fluid">
            <div class="span3">
                
                @include('site._partials.left_menu')

            </div>
            
            <div class="span7">
                

                <h1>{{ $page->page_heading }}</h1>
                <br>
                
                {{ $page->body }}

                @include('site._partials.notifications')

                <h2 style="margin-bottom: -3px;"><a style="text-decoration: none;padding-left: 5px;" href="{{ URL::to('broker-resources/application') }}">Apply to become a Hallmark E&S Producer:</a></h2>
                
                <div class="slide-content">
                    <a class="sc-heading clearfix">Policy-Related Documents: <i class="icon-chevron-down pull-right"></i></a>
                    <div class="well">
                        
                        <div class="row-fluid">
                            <div class="span5">
                                <h2 class="text-gold">Producer Log-in</h2>
                                
                                {{ Form::open(array('route'=>'producer.login.post', 'class'=>'form-horizontal custom-login')) }}

                                  <div class="control-group">
                                    <label class="control-label" for="inputEmail">User ID</label>
                                    <div class="controls">
                                      {{ Form::text('username', null, array('id'=>'inputEmail', 'class'=>'input-block-level', 'required')) }}
                                    </div>
                                  </div>

                                  <div class="control-group">
                                    <label class="control-label" for="inputPassword">Password</label>
                                    <div class="controls">
                                      {{ Form::password('password', array('id'=>'inputPassword', 'class'=>'input-block-level', 'required')) }}
                                    </div>
                                  </div>

                                  <div class="control-group">
                                    <div class="controls">
                                      <button type="submit" class="btn btn-primary">Sign in</button>
                                    </div>
                                  </div>
                                
                                {{ Form::close() }}

                                <div class="clearfix">
                                    <!--<a href="" class="pull-left">Forget password</a>                    
                                    <a href="" class="pull-right">Register account</a>-->                  
                                </div>
                            </div>
                            <div class="span7"><br>
                                <p>The password-protected section of the website is only for use exclusively by appointed Hallmark E&S producers</p>
                                
                                
                                
                            </div>
                        </div>

                        
                    </div>
                    <a class="sc-heading clearfix">Applications & Supplements: <i class="icon-chevron-down pull-right"></i></a>
                    <div class="well">
                        <table class="table">

                            @foreach ($applications as $application)

                                <tr>
                                    <td><p>{{ $application->name }}</p></td>
                                    <td width="10"><a href="{{ $application->link }}"><i class="ic-ie"></i></a></td>
                                    <td width="10"><a href="{{ URL::to('download-form/' . $application->pdf) }}"><i class="ic-pdf"></i></a></td>
                                </tr>

                            @endforeach

                        </table>
                        
                    </div>
                    <a class="sc-heading clearfix">Additional Forms & Letters: <i class="icon-chevron-down pull-right"></i></a>
                    <div class="well">
                        <table class="table">
                            
                            @foreach ($letters as $letter)

                                <tr>
                                    <td><p>{{ $letter->name }}</p></td>
                                    <td width="10"><a href="{{ $letter->link }}"><i class="ic-ie"></i></a></td>
                                    <td width="10"><a href="{{ URL::to('download-form/' . $letter->pdf) }}"><i class="ic-pdf"></i></a></td>
                                </tr>

                            @endforeach

                        </table>
                        
                    </div>
                    <a class="sc-heading clearfix">Claims Procedures: <i class="icon-chevron-down pull-right"></i></a>
                    <div class="well">
                        <table class="table">
                            
                            @foreach ($cliams as $cliam)

                                <tr>
                                    <td><p>{{ $cliam->name }}</p></td>
                                    <td width="10"><a href="{{ $cliam->link }}"><i class="ic-ie"></i></a></td>
                                    <td width="10"><a href="{{ URL::to('download-form/' . $cliam->pdf) }}"><i class="ic-pdf"></i></a></td>
                                </tr>

                            @endforeach

                        </table>
                        
                    </div>
                    <a class="sc-heading clearfix">Request Loss Run: <i class="icon-chevron-down pull-right"></i></a>
                    <div class="well">
                        <div class="form">
                            <h2 class="text-gold">Loss Run Request</h2>

                            {{ Form::open(array('class'=>'form-horizontal label-changed')) }}

                              <div class="control-group">
                                <label class="control-label">Broker's Name:</label>
                                <div class="controls">
                                    {{ Form::text('broker_name', null, array('class'=>'input-large', 'required')) }}
                                </div>
                              </div>
        
                              <div class="control-group">
                                <label class="control-label">Broker's Agency:</label>
                                <div class="controls">
                                    {{ Form::text('agency', null, array('class'=>'input-large', 'required')) }}
                                </div>
                              </div>
        
                              <div class="control-group">
                                <label class="control-label">Insured's Name:</label>
                                <div class="controls">
                                    {{ Form::text('insured_name', null, array('class'=>'input-large', 'required')) }}
                                </div>
                              </div>
        
                              <div class="control-group">
                                <label class="control-label">Policy Number:</label>
                                <div class="controls">
                                    {{ Form::text('policy_number', null, array('class'=>'input-large', 'required')) }}
                                </div>
                              </div>
        
                              <div class="control-group">
                                <label class="control-label">Reply Email:</label>
                                <div class="controls">
                                    {{ Form::email('email', null, array('class'=>'input-large', 'required')) }}
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

                <script>
                    $(document).ready(function(){
                    
                        $(".slide-content .sc-heading").click(function(){
                            
                            $(".slide-content .well").slideUp(300)
                            $(".slide-content .sc-heading .icon-chevron-up").removeClass("icon-chevron-up").addClass("icon-chevron-down")
                            $(this).children("i").removeClass("icon-chevron-down").addClass("icon-chevron-up")
                            $(this).next(".well").slideDown(300)    
                            
                        })  
                        
                    })
                </script> 

                
            </div>
            
            <div class="span2">
                <div class="row-fluid">

                    @include('site._partials.right_menu')

                </div>
            </div>
        </div>


@stop