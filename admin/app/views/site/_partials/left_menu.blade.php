			<div class="left-menu">

                <ul class="nav nav-tabs nav-stacked nav-custom">

                  <li {{ Request::is('select-profile') ? 'class="active"' : '' }} ><a href="{{ URL::to('select-profile') }}">SELECT PROFILE</a></li>

                  @if (App::environment() == 'local')
                    <li><a href="http://hm-es.dev/">PRIMARY/EXCESS E&S CASUALTY</a></li>
                  @else
                    <li><a href="http://es.hallselect.com">PRIMARY/EXCESS E&S CASUALTY</a></li>
                  @endif


                  @if (App::environment() == 'local')
                    <li><a href="http://hm-aero.dev/">AVIATION</a></li>
                  @else
                    <li><a href="http://aero.hallselect.com/">AVIATION</a></li>
                  @endif
                  

                  @if (App::environment() == 'local')
                    <li><a href="http://hm-pro.dev/">PROFESSIONAL LIABILITY</a></li>
                  @else
                    <li><a href="http://pro.hallselect.com">PROFESSIONAL LIABILITY</a></li>
                  @endif


                  <li {{ Request::is('press-room') ? 'class="active"' : '' }} ><a href="{{ URL::to('press-room') }}">PRESS ROOM</a></li>
                  
                  <li><a href="http://www.hallmarkgrp.com" target="_blank">INVESTOR INFORMATION</a></li>

                </ul>

            </div>