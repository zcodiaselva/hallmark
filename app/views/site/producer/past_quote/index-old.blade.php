@extends('site._layouts.default')

@section('main')

        <div class="row-fluid">
            <div class="span3">
                
                @include('site.producer._partials.left_menu')

            </div>
            
            <div class="span7">
                

                <h1>{{ $page->page_heading }}</h1>
                
                {{ $page->body }}  
                
                <div class="form">
                    <form class="form-horizontal label-changed">
                      <div class="control-group">
                        <label class="control-label text-info2">Policy Number</label>
                        <div class="controls">
                          <input type="text" class="input-large">
                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label text-info2">"N" Number</label>
                        <div class="controls">
                          <input type="text" class="input-large">
                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label text-info2">Name</label>
                        <div class="controls">
                          <input type="text" class="input-large">
                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label text-info2">Policy Year</label>
                        <div class="controls">
                          <input type="text" class="input-large">
                        </div>
                      </div>

                      <div class="control-group">
                        <div class="controls">
                          <button type="submit" class="btn btn-primary">SEARCH</button>
                        </div>
                      </div>
                    </form>
                </div>  

                
            </div>

        </div>


@stop