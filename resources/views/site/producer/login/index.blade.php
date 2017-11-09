@extends('site._layouts.default')

@section('main')

        <div class="row-fluid">
            <div class="span2">
                
                @include('site._partials.left_menu')

            </div>

            
            <div class="span7">
                <h1>{{ $page->page_heading }}</h1>
                <br>

                @include('site._partials.notifications')

                <div class="row-fluid">
                    <div class="span5">


                        
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
                              <button type="submit" class="btn">Sign in</button>
                            </div>
                          </div>
                        
                        {{ Form::close() }}

                        <div class="clearfix">
                            <!--<a href="" class="pull-left">Forget password</a>                    
                            <a href="" class="pull-right">Register account</a> -->                 
                        </div>
                    </div>
                    <div class="span7">
                    
                        {{ $page->body }}
                        
                    </div>
                </div>

            </div>

            
            <div class="span3">
                <div class="row-fluid">
                    <div class="right-menu span7 offset5">
                        @include('site._partials.right_menu')
                    </div>
                </div>
                <div class="paddingtop-20">
                    <img src="{{ URL::asset('uploads/aero/page/' . $page->image1) }}">
                </div>
            </div>
        </div>


@stop