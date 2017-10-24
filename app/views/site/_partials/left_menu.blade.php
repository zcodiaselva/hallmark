<ul id="top-menu" class="nav navbar-nav main-nav">
    
        <li><a href="" {{ Request::is('products*') ? 'class="active dropdown-toggle"' : 'class="dropdown-toggle"' }}  data-toggle="dropdown">Products <span class="fa fa-angle-right pull-right"></span></a>
                <ul class="dropdown-menu" role="menu">

                    @foreach($products as $product)

                        <li><a href="{{ URL::to('products/' . $product->slug_en ) }}" {{ Request::is('products/'. $product->slug_en) ? 'class="active"' : '' }}>{{ $product->name }}</a></li>

                    @endforeach
                </ul>
          </li>
          
          <li><a href="{{ URL::to('industries') }}"  {{ Request::is('industries') ? 'class="active"' : '' }}>Industries</a></li>
		  <li><a href="{{ URL::to('') }}"  {{ Request::is('industries') ? 'class="active"' : '' }}>Express Quote Unit</a></li>
		  <li><a href="{{ URL::to('') }}"  {{ Request::is('industries') ? 'class="active"' : '' }}>Agent Library</a></li>
          <li><a href="{{ URL::to('our-team') }}" {{ Request::is('our-team') ? 'class="active"' : '' }}>Our team</a></li>
          <li><a href="{{ URL::to('new-agency') }}" {{ Request::is('new-agency') ? 'class="active"' : '' }}>New agency</a></li>
          <li><a href="{{ URL::to('policy-payments') }}" {{ Request::is('policy-payments') ? 'class="active"' : '' }}>Policy payments</a></li>
          <li><a href="{{ URL::to('press-room') }}" {{ Request::is('press-room') ? 'class="active"' : '' }}>Press room</a></li>
</ul>