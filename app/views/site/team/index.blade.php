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
     <div class="row">
        <div class="col-sm-12">
          <div class="panel-group why-choose-group" id="accordion">
              <?php $i = 0; ?>
               @foreach ($staffmembers as $staff) 
               <?php $i = $i+1; ?>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$i?>"> {{ $staff->name}} <span class="fa <?php if($i==1){?>fa-chevron-up<?php }else{ ?>fa-chevron-up<?php }?>"></span> </a> 
					<small>{{ $staff->designation}}</small>
				</h4>
              </div>
              <?php if ( $i==1){ ?>
              <div id="collapse<?=$i?>" class="panel-collapse collapse">
              <?php } else { ?> 
             <div id="collapse<?=$i?>" class="panel-collapse collapse">
              <?php } ?>
                <div class="panel-body">
                  <p>{{ $staff->description}}</p>
                </div>
              </div>
            </div>
              @endforeach                
          </div>
        </div>
      </div>
    </div>
  </section>
  

  @stop

