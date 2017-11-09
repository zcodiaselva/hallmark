@extends('site._layouts.default')

@section('main')
<section id="navigation" class="col-sm-2">
    <nav class="navbar navbar-default" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        
           @include('site._partials.left_menu')
         
          @include('site._partials.right_menu')
       
      </div>
    </nav>
  </section>
  
  <section id="content" class="col-sm-7 content">
  	<div class="info">
    <h1>{!! $page->page_heading_en !!}</h1>
     {!! $page->html_content_en !!}
     
    <div class="form-wrapper">
          {!! Form::open(array('route'=>'agencyform.submit.post', 'files'=>'true', 'class'=>'form-horizontal custom-login','id'=>'agency_form')) !!}

  <div class="col-md-12">
  
	@if ($errors->any())
      <div class="alert alert-danger">
        {{ implode('<br>', $errors->all()) }}
      </div>
    @endif

    @if (Session::has('app_message'))
      <div class="alert alert-success">
        {{ Session::get('app_message') }}
      </div>
    @endif
    
       
          <div class="form-group">
            <label for="agency-name" class="col-sm-2 control-label">Agency Name:</label>
            <div class="col-sm-10">
                {{ Form::text('agency_name', null, array('class'=>'form-control agencyname','id'=>'agency-name','maxlength'=>'128','required','minlength'=>'3')) }}
            </div>
          </div>
          <div class="form-group">
            <label for="agency-address" class="col-sm-2 control-label">Agency Address:</label>
            <div class="col-sm-10">
               {{ Form::text('agency_address', null, array('class'=>'form-control','id'=>'agency-address','maxlength'=>'64','required','minlength'=>'2')) }}
            </div>
          </div>
          <div class="form-group">
            <label for="city" class="col-sm-2 control-label">City:</label>
            <div class="col-sm-10">
             {{ Form::text('city', null, array('class'=>'form-control','maxlength'=>'25','id'=>'city','required','minlength'=>'2')) }}
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Organization:</label>
            <div class="col-sm-10">
              <div class="col-md-3">
                <div class="checkbox">
                  {{ Form::checkbox('corporation','',null,['class'=>'styled','id'=>'corporation']) }}
                  <label for="corporation"> Corporation </label>
                </div>
              </div>
              <div class="col-md-3">
                <div class="checkbox">
                 {{ Form::checkbox('partnership','',null,['class'=>'styled','id'=>'partnership']) }}
                  <label for="partnership"> Partnership </label>
                </div>
              </div>
              <div class="col-md-3">
                <div class="checkbox">
                   {{ Form::checkbox('llc','',null,['class'=>'styled','id'=>'llc']) }}
                   <label for="llc"> LLC </label>
                </div>
              </div>
              <div class="col-md-3">
                <div class="checkbox">
                   {{ Form::checkbox('other','',null,['class'=>'styled','id'=>'other']) }}
                  <label for="other"> Other </label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Affiliated With:</label>
            <div class="col-sm-10">
              <div class="col-md-2">
                <div class="checkbox">
                 {{ Form::checkbox('bank','',null,['class'=>'styled','id'=>'bank']) }}
                  <label for="bank"> Bank </label>
                </div>
              </div>
              <div class="col-md-3">
                <div class="checkbox">
                  {{ Form::checkbox('estate','',null,['class'=>'styled','id'=>'estate']) }}
                  <label for="estate"> Real Estate </label>
                </div>
              </div>
              <div class="col-md-3">
                <div class="checkbox">
                  {{ Form::checkbox('mortgage','',null,['class'=>'styled','id'=>'mortgage']) }}
                  <label for="mortgage"> Mortgage Co. </label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="checkbox">
                   {{ Form::checkbox('premium','',null,['class'=>'styled','id'=>'premium']) }}
                  <label for="premium"> Premium Finance Co. </label>
                </div>
              </div>
            </div>
          </div>
          <div class="row state">
            <div class="col-md-5 col-md-offset-2">
              <div class="form-group">
                <label for="state" class="col-sm-2 control-label">State:</label>
                <div class="col-sm-10">
                   {{ Form::text('state', null, array('class'=>'form-control','id'=>'state','maxlength'=>'15','required')) }}
                </div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="form-group">
                <label for="zip" class="col-sm-3 control-label">Zip Code:</label>
                <div class="col-sm-9">
                  {{ Form::text('zip', null, array('class'=>'form-control','id'=>'zip','maxlength'=>'10','required')) }}
                </div>
              </div>
            </div>
          </div>
          <div class="form-group lg">
            <label for="appointment" class="col-sm-12">Why are you requesting an agency appointment?:</label>
            <div class="col-sm-12">
             {{ Form::textarea('why_appointment', null, array('class'=>'form-control','id'=>'why_appointment','maxlength'=>'128','required','rows'=>'3')) }}
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
            <!--{{ Form::Recaptcha()}}-->
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              {{ Form::submit('Submit', array('class' => 'btn btn-default')) }}
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
 <section id="sidebar" class="col-sm-3 sidebar">
    <div class="info"></div>
  </section>
  @stop

