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
    <h1>{{ $page->page_heading_en }}</h1>
     {{ $page->html_content_en }}
     
     <div class="form-wrapper">
        {{ Form::open(array('route'=>'contactform.submit.post', 'files'=>'true', 'class'=>'form-default','id'=>'contact_form')) }}
        @if ($errors->any())
        <div class="alert alert-danger">
          {{ implode('<br>', $errors->all()) }}
        </div>
      @endif

      @if (Session::has('email_message'))
        <div class="alert alert-success">
          {{ Session::get('email_message') }}
        </div>
      @endif
        <form class="form-default">
          <div class="form-group">
            <label for="name" class="col-sm-1 control-label">Name:</label>
            <div class="col-sm-11">
               {{ Form::text('contact_name','',array('class' => 'form-control','id'=>'contact_name','maxlength'=>'64')) }}
            </div>
          </div>
          <div class="form-group">
            <label for="agency-address" class="col-sm-1 control-label">Agency:</label>
            <div class="col-sm-11">
              {{ Form::text('agency','',array('class' => 'form-control','id'=>'contat_ageny','maxlength'=>'128')) }}
            </div>
          </div>
          <div class="form-group">
            <label for="phone" class="col-sm-1 control-label">Phone:</label>
            <div class="col-sm-11">
             {{ Form::text('phone','',array('class' => 'form-control phone-mask','id'=>'contact_phone')) }}
            </div>
          </div>
          <div class="form-group">
            <label for="email" class="col-sm-1 control-label">Email:</label>
            <div class="col-sm-11">
              {{ Form::email('email','',array('class' => 'form-control','id'=>'contact_email','maxlength'=>'254')) }}
            </div>
          </div>
          <div class="form-group">
            <label for="licensed" class="col-sm-4 control-label">State Agency Licensed in:</label>
            <div class="col-sm-8">
             {{ Form::text('licensed','',array('class' => 'form-control','id'=>'licensed','maxlength'=>'128')) }}
            </div>
          </div>
          <div class="form-group">
            <label for="business" class="col-sm-4 control-label">State(s) Agency does business in:</label>
            <div class="col-sm-8">
             {{ Form::text('business','',array('class' => 'form-control','id'=>'business','maxlength'=>'128')) }}
            </div>
          </div>
          <div class="form-group">
            <label for="message" class="col-sm-1 control-label">Message:</label>
            <div class="col-sm-11">
                {{ Form::textarea('meg',null,array('class' => 'form-control','id'=>'meg','rows'=>3)) }}
           </div>
          </div>
          <div class="form-group">
            <label class="col-sm-1 control-label"></label>
            <div class="col-sm-11">
              {{Form::recaptcha()}}
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-1 col-sm-10">
              <button type="submit" class="btn btn-default">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
 <section id="sidebar" class="col-sm-3 sidebar">
    <div class="info"></div>
  </section>
  </section>

  @stop

